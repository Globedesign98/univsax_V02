<?php

/*
 * Squelette : ../prive/squelettes/inclure/menu-navigation.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   _menusous, _menu
 */ 

function BOUCLE_menusoushtml_2858380d197c8097a86db00466ccd685(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'sousmenu')))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menusous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/menu-navigation.html','html_2858380d197c8097a86db00466ccd685','_menusous',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((safehtml(table_valeur($Pile[$SP]['valeur'], 'favori'))) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'has_favoris'] = '1'))) :
		'') .
'
		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))))!=='' ?
		((	'<li class="item' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == (interdire_scripts(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(safehtml($Pile[$SP]['cle'])))))))) ?' ' :'')))))!=='' ?
			($t2 . 'on execfound') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((safehtml(table_valeur($Pile[$SP]['valeur'], 'favori')) ? 'favori':((table_valeur($Pile["vars"]??[], (string)'has_favoris', null) ? 'non_favori':'')))))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
			<a href="' .
	retablir_echappements_modeles(interdire_scripts(bandeau_creer_url(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(safehtml($Pile[$SP]['cle'])))),(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'urlArg')))),(serialize($Pile[0]??[]))))) .
	'" class="bando2_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'">
				') . $t1 . '
			</a>
		</li>') :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menusous @ ../prive/squelettes/inclure/menu-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_menuhtml_2858380d197c8097a86db00466ccd685(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'boutons', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menu';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'cle', sql_quote(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'menu', null),true))), '', 'STRING')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/menu-navigation.html','html_2858380d197c8097a86db00466ccd685','_menu',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'bloc', null),true) == 'contenu') ? (	'<h1 class="grostitre">' .
	(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle'))))) .
	'</h1>'):'<div class="navigation">'))) .
'

	<ul class=\'liste_items sous_navigation\'>
	' .
BOUCLE_menusoushtml_2858380d197c8097a86db00466ccd685($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</ul>

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'bloc', null),true) != 'contenu')) ?' ' :'')))))!=='' ?
		($t1 . '</div>') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menu @ ../prive/squelettes/inclure/menu-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/menu-navigation.html
// Temps de compilation total: 1.016 ms
//

function html_2858380d197c8097a86db00466ccd685($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'boutons'] = (trier_boutons_enfants_par_favoris_alpha(definir_barre_boutons(definir_barre_contexte(serialize($Pile[0]??[])),'0'))))) .
BOUCLE_menuhtml_2858380d197c8097a86db00466ccd685($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_2858380d197c8097a86db00466ccd685', $Cache, $page, '../prive/squelettes/inclure/menu-navigation.html');
}
