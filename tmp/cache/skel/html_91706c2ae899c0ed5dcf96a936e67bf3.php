<?php

/*
 * Squelette : ../prive/formulaires/dateur/jquery.dateur.js.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/dateur/jquery.dateur.js.html
// Temps de compilation total: 0.158 ms
//

function html_91706c2ae899c0ed5dcf96a936e67bf3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/js;') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<script>') :
		'') .
'
if (!jQuery.fn.datepicker){
' .
retablir_echappements_modeles(charge_scripts('prive/formulaires/dateur/bootstrap-datepicker.js',false)) .
'}
if (!jQuery.fn.timePicker){
' .
retablir_echappements_modeles(charge_scripts('prive/formulaires/dateur/jquery.time_picker.js',false)) .
'}
');

	return analyse_resultat_skel('html_91706c2ae899c0ed5dcf96a936e67bf3', $Cache, $page, '../prive/formulaires/dateur/jquery.dateur.js.html');
}
