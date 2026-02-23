<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/inc-plugins_cocher.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/inc-plugins_cocher.html
// Temps de compilation total: 0.169 ms
//

function html_8182147be195c92ae6fa2e4d6f51042e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'	' .
(($t1 = strval(retablir_echappements_modeles(((in_array('_DIR_PLUGINS_DIST',(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'constante', null), (array())),true))))) ?'' :' '))))!=='' ?
		($t1 . (	'
		<p class="cocher groupe-btns groupe-btns_bloc">
			<a class="btn btn_link select_all" role="button" href="#">' .
	_T('svp:tout_cocher') .
	'</a>
			<a class="btn btn_link select_none" role="button" href="#">' .
	_T('svp:tout_decocher') .
	'</a>
		</p>
	')) :
		'') .
'
');

	return analyse_resultat_skel('html_8182147be195c92ae6fa2e4d6f51042e', $Cache, $page, '../plugins-dist/svp/formulaires/inc-plugins_cocher.html');
}
