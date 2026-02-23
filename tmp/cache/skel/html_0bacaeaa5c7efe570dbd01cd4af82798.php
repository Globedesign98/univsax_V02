<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/inclure/voir_saisies.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _saisies
 */ 

function BOUCLE_saisieshtml_0bacaeaa5c7efe570dbd01cd4af82798(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'saisies', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_saisies';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		array('../plugins/auto/saisies/v6.2.0/inclure/voir_saisies.html','html_0bacaeaa5c7efe570dbd01cd4af82798','_saisies',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(retablir_echappements_modeles(((array_key_exists('saisie',(interdire_scripts(safehtml($Pile[$SP]['valeur']))))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(interdire_scripts(saisies_generer_vue(safehtml($Pile[$SP]['valeur']),(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'_env', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (unserialize(serialize($Pile[0]??[]))))))))) .
	'
')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_saisies @ ../plugins/auto/saisies/v6.2.0/inclure/voir_saisies.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/inclure/voir_saisies.html
// Temps de compilation total: 0.523 ms
//

function html_0bacaeaa5c7efe570dbd01cd4af82798($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' S\'il y a des options afficher_si, il faut vérifier que les conditions sont remplies ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'saisies'] = (interdire_scripts(saisies_verifier_afficher_si(entites_html(table_valeur($Pile[0]??[], (string)'saisies', null),true),(unserialize(serialize($Pile[0]??[])))))))) .
'
' .
BOUCLE_saisieshtml_0bacaeaa5c7efe570dbd01cd4af82798($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_0bacaeaa5c7efe570dbd01cd4af82798', $Cache, $page, '../plugins/auto/saisies/v6.2.0/inclure/voir_saisies.html');
}
