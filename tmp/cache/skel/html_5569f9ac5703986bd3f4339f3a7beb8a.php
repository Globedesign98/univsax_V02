<?php

/*
 * Squelette : ../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html
 * Date :      Sat, 24 Jan 2026 11:00:12 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   _verifier, _plugin_yaml
 */ 

function BOUCLE_verifierhtml_5569f9ac5703986bd3f4339f3a7beb8a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(appliquer_filtre('verifier','verifier_lister_disponibles')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_verifier';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"icone");
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
		array('../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html','html_5569f9ac5703986bd3f4339f3a7beb8a','_verifier',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	.navigation_avec_icones .bando2_verifier_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
' { ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',((($a = safehtml((isset($Pile[$SP]['icone'])?$Pile[$SP]['icone']:(($Pile[0]['icone'] ?? null))))) OR (is_string($a) AND strlen($a))) ? $a : (table_valeur($Pile["vars"]??[], (string)'icone_defaut', null))),'16')),'src')))))!=='' ?
		('background-image: url(' . $t1 . ');') :
		'') .
' }
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_verifier @ ../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_plugin_yamlhtml_5569f9ac5703986bd3f4339f3a7beb8a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(defined('_DIR_PLUGIN_YAML'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_plugin_yaml';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html','html_5569f9ac5703986bd3f4339f3a7beb8a','_plugin_yaml',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
BOUCLE_verifierhtml_5569f9ac5703986bd3f4339f3a7beb8a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_plugin_yaml @ ../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html
// Temps de compilation total: 0.264 ms
//

function html_5569f9ac5703986bd3f4339f3a7beb8a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>/*
	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).

	ATTENTION: il faut absolument le charset sinon Firefox croit que
	c\'est du text/html !
*/') :
		'') .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'body.verifier_doc {
	background-color: #efefef;
}
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'icone_defaut'] = (filtrer('image_graver',filtrer('image_sepia',filtre_balise_img_dist(chemin_image((string)'verifier-16.png'))))))) .
'
' .
(($t1 = BOUCLE_plugin_yamlhtml_5569f9ac5703986bd3f4339f3a7beb8a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	_T('verifier:plugin_yaml_inactif') .
	'
'))));

	return analyse_resultat_skel('html_5569f9ac5703986bd3f4339f3a7beb8a', $Cache, $page, '../plugins/auto/verifier/v3.9.0/prive/style_prive_plugin_verifier.html');
}
