<?php
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Action SPIP: export_articles_xlsx_download
 * Télécharge un XLSX des articles publiés des rubriques 5 et 7,
 * en ajoutant nom/email du premier auteur et les champs extras de spip_articles.
 */
function action_export_articles_xlsx_download_dist() {

	// Sécurité : admins uniquement (à adapter si tu veux un token public)
	include_spip('inc/autoriser');
	if (!autoriser('configurer')) {
		header('HTTP/1.1 403 Forbidden');
		echo "Acces interdit";
		exit;
	}

	// Base SQL
	include_spip('base/abstract_sql');

	// Chemin plugin (fallback si la constante n'existe pas)
	$plugin_dir = defined('_DIR_PLUGIN_EXPORT_ARTICLES_XLSX')
		? _DIR_PLUGIN_EXPORT_ARTICLES_XLSX
		: (_DIR_RACINE . 'plugins/export_articles_xlsx/');

	// Charge Spout (plusieurs layouts possibles selon la version téléchargée)
	$autoloads = [
		$plugin_dir . 'lib/spout/src/Spout/Autoloader/autoload.php',
		$plugin_dir . 'lib/spout/src/Box/Spout/Autoloader/autoload.php',
		$plugin_dir . 'lib/spout/Autoloader/autoload.php',
	];

	$autoload_ok = false;
	foreach ($autoloads as $autoload) {
		if (file_exists($autoload)) {
			require_once $autoload;
			$autoload_ok = true;
			break;
		}
	}

	if (!$autoload_ok) {
		spip_log('Lib Spout introuvable. Autoloads testés: ' . implode(' | ', $autoloads), 'export_articles_xlsx' . _LOG_ERREUR);
		header('HTTP/1.1 500 Internal Server Error');
		echo "La librairie Spout est introuvable. Place-la dans plugins/export_articles_xlsx/lib/spout/";
		exit;
	}

	// Compat namespaces Spout : ancien (Spout\...) / nouveau (Box\Spout\...)
	$factory = null;
	if (class_exists('\Box\Spout\Writer\Common\Creator\WriterEntityFactory')) {
		$factory = '\Box\Spout\Writer\Common\Creator\WriterEntityFactory';
	} elseif (class_exists('\Spout\Writer\Common\Creator\WriterEntityFactory')) {
		$factory = '\Spout\Writer\Common\Creator\WriterEntityFactory';
	}

	if (!$factory) {
		header('HTTP/1.1 500 Internal Server Error');
		echo "Spout WriterEntityFactory introuvable (version de Spout incompatible).";
		exit;
	}

	// Création du XLSX
	$writer = $factory::createXLSXWriter();

	$filename = 'export-articles-rub-5-7-' . date('Y-m-d_H-i') . '.xlsx';
	$writer->openToBrowser($filename);

	// Colonnes standard SPIP (pour identifier les extras)
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

	// En-têtes
	$headers = array_merge(['auteur_nom', 'auteur_email', 'titre'], $extras);
	$writer->addRow($factory::createRowFromArray($headers));

	// Filtre rubriques + publiés
	$rubs = [5, 7];
	$where = [
		'statut=' . sql_quote('publie'),
		sql_in('id_rubrique', $rubs),
	];

	$res = sql_select('*', 'spip_articles', $where, '', 'date DESC');

	while ($art = sql_fetch($res)) {
		$id_article = intval($art['id_article']);

		// Premier auteur lié à l'article (si plusieurs)
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
}