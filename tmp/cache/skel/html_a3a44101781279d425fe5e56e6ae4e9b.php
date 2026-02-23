<?php

/*
 * Squelette : ../prive/objets/contenu/article.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _afficher_contenu
 */ 

function BOUCLE_afficher_contenuhtml_a3a44101781279d425fe5e56e6ae4e9b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_afficher_contenu';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.virtuel",
		"articles.lang",
		"articles.surtitre",
		"articles.titre",
		"articles.soustitre",
		"articles.descriptif",
		"articles.chapo",
		"articles.nom_site",
		"articles.url_site",
		"articles.texte",
		"articles.ps");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))), '', 'bigint(20) NOT NULL AUTO_INCREMENT')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('articles.statut', $in) : 
			array('=', 'articles.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/objets/contenu/article.html','html_a3a44101781279d425fe5e56e6ae4e9b','_afficher_contenu',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'virtuel', null), ''),true)) ?'' :' ')) OR ((interdire_scripts(((lien_article_virtuel($Pile[$SP]['virtuel'])) ?'' :' '))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(changer_typo(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']))) .
	'
<div class="champ contenu_surtitre' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['surtitre']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:texte_sur_titre') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'surtitre\'>' .
	retablir_echappements_modeles(interdire_scripts(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0]))) .
	'</div>
</div>
<div class="champ contenu_titre' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['titre']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	label_nettoyer(_T('public|spip|ecrire:info_titre')) .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'titre\'>' .
	retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
	'</div>
</div>
<div class="champ contenu_soustitre' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['soustitre']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:texte_sous_titre') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'soustitre\'>' .
	retablir_echappements_modeles(interdire_scripts(typo($Pile[$SP]['soustitre'], "TYPO", $connect, $Pile[0]))) .
	'</div>
</div>
<div class="champ contenu_descriptif' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['descriptif']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:info_descriptif') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'descriptif\'>' .
	retablir_echappements_modeles(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['descriptif'], $connect, $Pile[0]),((defined('_IMG_ADMIN_MAX_WIDTH')?constant('_IMG_ADMIN_MAX_WIDTH'):'')),'0')))) .
	'</div>
</div>
<div class="champ contenu_chapo' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['chapo']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:info_chapeau') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'chapo\'>' .
	retablir_echappements_modeles(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['chapo'], $connect, $Pile[0]),((defined('_IMG_ADMIN_MAX_WIDTH')?constant('_IMG_ADMIN_MAX_WIDTH'):'')),'0')))) .
	'</div>
</div>
<div class="champ contenu_nom_site' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen(((($a = $Pile[$SP]['nom_site']) OR (is_string($a) AND strlen($a))) ? $a : ($Pile[$SP]['url_site']))) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:lien_voir_en_ligne') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'nom_site\'>' .
	(($t2 = strval(retablir_echappements_modeles(calculer_url($Pile[$SP]['url_site'],'','url', $connect))))!=='' ?
			('<a href=\'' . $t2 . '\'>') :
			'') .
	retablir_echappements_modeles(interdire_scripts(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0]))) .
	(($t2 = strval(retablir_echappements_modeles(((calculer_url($Pile[$SP]['url_site'],'','url', $connect)) ?' ' :''))))!=='' ?
			($t2 . '</a>') :
			'') .
	'</div>
</div>
<div class="champ contenu_texte' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['texte']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:info_texte') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'texte\'>' .
	retablir_echappements_modeles(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['texte'], $connect, $Pile[0]),((defined('_IMG_ADMIN_MAX_WIDTH')?constant('_IMG_ADMIN_MAX_WIDTH'):'')),'0')))) .
	'</div>
</div>
<div class="champ contenu_ps' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((strlen($Pile[$SP]['ps']) ? '':'vide')))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
<div class=\'label\'>' .
	_T('public|spip|ecrire:info_ps') .
	'</div>
<div dir=\'' .
	retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
	'\' class=\'' .
	retablir_echappements_modeles('') .
	'ps\'>' .
	retablir_echappements_modeles(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['ps'], $connect, $Pile[0]),((defined('_IMG_ADMIN_MAX_WIDTH')?constant('_IMG_ADMIN_MAX_WIDTH'):'')),'0')))) .
	'</div>
</div>
' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(calculer_notes()))))!=='' ?
			((	'<div class="champ contenu_notes">
<div class=\'label\'>' .
		_T('public|spip|ecrire:info_notes') .
		'</div>
<div dir=\'' .
		retablir_echappements_modeles(lang_dir($Pile[$SP]['lang'], 'ltr','rtl')) .
		'\' class=\'' .
		retablir_echappements_modeles('') .
		'notes\'>') . $t2 . '</div>
</div>') :
			'') .
	'
' .
	retablir_echappements_modeles(changer_typo('')) .
	'
')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'virtuel', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (($t2 = strval(retablir_echappements_modeles(interdire_scripts(lien_article_virtuel($Pile[$SP]['virtuel'])))))!=='' ?
			((	'
' .
		retablir_echappements_modeles(boite_ouvrir('', 'info center')) .
		'<p>' .
		_T('public|spip|ecrire:info_renvoi_article') .
		'</p>
	') . $t2 . (	'
' .
		retablir_echappements_modeles(boite_fermer()) .
		'
')) :
			'')) :
		''));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_afficher_contenu @ ../prive/objets/contenu/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/contenu/article.html
// Temps de compilation total: 1.819 ms
//

function html_a3a44101781279d425fe5e56e6ae4e9b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', 'article', (interdire_scripts(invalideur_session($Cache, entites_html(table_valeur($Pile[0]??[], (string)'id', null),true)))))?" ":"")))) .
'
' .
BOUCLE_afficher_contenuhtml_a3a44101781279d425fe5e56e6ae4e9b($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_a3a44101781279d425fe5e56e6ae4e9b', $Cache, $page, '../prive/objets/contenu/article.html');
}
