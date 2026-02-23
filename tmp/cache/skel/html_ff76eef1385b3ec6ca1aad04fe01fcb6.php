<?php

/*
 * Squelette : ../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   _libs
 */ 

function BOUCLE_libshtml_ff76eef1385b3ec6ca1aad04fe01fcb6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(svp_lister_librairies('')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_libs';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array('.cle');
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
		array('../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html','html_ff76eef1385b3ec6ca1aad04fe01fcb6','_libs',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<dt>' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
'</dt>
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(joli_repertoire(safehtml($Pile[$SP]['valeur']))))))!=='' ?
		('<dd>' . $t1 . '</dd>') :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_libs @ ../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html
// Temps de compilation total: 1.340 ms
//

function html_ff76eef1385b3ec6ca1aad04fe01fcb6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(recuperer_fond( 'prive/squelettes/navigation/configurer' , array('exec' => 'admin_plugin' ), array('compil'=>array('../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html','html_ff76eef1385b3ec6ca1aad04fe01fcb6','',1,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
'

' .
(($t1 = BOUCLE_libshtml_ff76eef1385b3ec6ca1aad04fe01fcb6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		retablir_echappements_modeles(boite_ouvrir(_T('public|spip|ecrire:plugin_librairies_installees'), 'basic highlight')) .
		'
<dl>
	') . $t1 . (	'
</dl>
' .
		retablir_echappements_modeles(boite_fermer()) .
		'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_ff76eef1385b3ec6ca1aad04fe01fcb6', $Cache, $page, '../plugins-dist/svp/prive/squelettes/navigation/svp_admin_plugin.html');
}
