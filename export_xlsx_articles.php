<?php
// Fichier à la racine du site SPIP (même niveau que ecrire/, IMG/, config/...)

require_once __DIR__ . '/ecrire/inc_version.php';

include_spip('inc/autoriser');
include_spip('base/abstract_sql');

// Sécurité : réservé aux admins connectés (à adapter si tu veux un token public)
if (!autoriser('configurer')) {
	header('HTTP/1.1 403 Forbidden');
	echo "Acces interdit";
	exit;
}

// Charge Spout depuis le plugin
$spout_autoload1 = _DIR_RACINE . 'plugins/export_articles_xlsx/lib/spout/src/Spout/Autoloader/autoload.php';
$spout_autoload2 = _DIR_RACINE . 'plugins/export_articles_xlsx/lib/spout/src/Box/Spout/Autoloader/autoload.php';

if (file_exists($spout_autoload1)) {
	require_once $spout_autoload1;
} elseif (file_exists($spout_autoload2)) {
	require_once $spout_autoload2;
} else {
	header('HTTP/1.1 500 Internal Server Error');
	echo "Lib Spout introuvable";
	exit;
}

// WriterEntityFactory selon version Spout
if (class_exists('\Box\Spout\Writer\Common\Creator\WriterEntityFactory')) {
	$factory = '\Box\Spout\Writer\Common\Creator\WriterEntityFactory';
} elseif (class_exists('\Spout\Writer\Common\Creator\WriterEntityFactory')) {
	$factory = '\Spout\Writer\Common\Creator\WriterEntityFactory';
} else {
	header('HTTP/1.1 500 Internal Server Error');
	echo "Spout WriterEntityFactory introuvable";
	exit;
}

$writer = $factory::createXLSXWriter();
$filename = 'export-articles-rub-5-7-' . date('Y-m-d_H-i') . '.xlsx';
$writer->openToBrowser($filename);

// Colonnes standard SPIP
$colonnes_standard = [
	'id_article','id_rubrique','id_secteur','id_trad','lang','titre','soustitre','surtitre',
	'descriptif','chapo','texte','ps','microblog','nom_site','url_site',
	'date','date_redac','date_modif','maj',
	'statut','id_version',
	'visites','popularite','referers','extra',
];

// Colonnes réelles + extras
$desc = sql_showtable('spip_articles', true);
$champs = array_keys($desc['field']);
$extras = array_values(array_diff($champs, $colonnes_standard));

$headers = array_merge(['auteur_nom', 'auteur_email', 'titre'], $extras);
$writer->addRow($factory::createRowFromArray($headers));

// Articles publiés rub 5 et 7
$rubs = [5, 7];
$where = [
	'statut=' . sql_quote('publie'),
	sql_in('id_rubrique', $rubs),
];

$res = sql_select('*', 'spip_articles', $where, '', 'date DESC');

while ($art = sql_fetch($res)) {
	$id_article = intval($art['id_article']);

	$auteur = sql_fetsel(
		'a.id_auteur, a.nom, a.email',
		'spip_auteurs AS a INNER JOIN spip_auteurs_liens AS l ON l.id_auteur=a.id_auteur',
		[
			'l.objet=' . sql_quote('article'),
			'l.id_objet=' . $id_article,
		],
		'',
		'a.id_auteur ASC',
		'0,1'
	);

	$auteur_nom = $auteur['nom'] ?? '';
	$auteur_email = $auteur['email'] ?? '';

	$row = [$auteur_nom, $auteur_email, (string)($art['titre'] ?? '')];

	foreach ($extras as $champ) {
		$row[] = (string)($art[$champ] ?? '');
	}

	$writer->addRow($factory::createRowFromArray($row));
}

$writer->close();
exit;