<?php

/*
 * Squelette : ../prive/squelettes/navigation/configurer.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/configurer.html
// Temps de compilation total: 0.165 ms
//

function html_d5617f4e1611cadb11cc1a1bceee4f75($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nav'] = (recuperer_fond( 'prive/squelettes/inclure/menu-navigation' , array_merge($Pile[0],array('menu' => 'menu_configuration' ,
	'bloc' => 'navigation' )), array('compil'=>array('../prive/squelettes/navigation/configurer.html','html_d5617f4e1611cadb11cc1a1bceee4f75','',0,$GLOBALS['spip_lang'])), _request('connect') ?? '')))) .
(($t1 = strval(retablir_echappements_modeles(((filtre_match_dist(table_valeur($Pile["vars"]??[], (string)'nav', null),'execfound')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'nav', null)) .
	retablir_echappements_modeles(boite_ouvrir((wrap(_T('avis_attention'),'<h4>')), 'info')) .
	'
<p>' .
	_T('public|spip|ecrire:texte_inc_config') .
	'</p>
' .
	retablir_echappements_modeles(boite_fermer()) .
	'
')) :
		''));

	return analyse_resultat_skel('html_d5617f4e1611cadb11cc1a1bceee4f75', $Cache, $page, '../prive/squelettes/navigation/configurer.html');
}
