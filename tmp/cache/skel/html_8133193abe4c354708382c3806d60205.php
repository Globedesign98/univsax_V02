<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 02:23:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.064 ms
//

function html_8133193abe4c354708382c3806d60205($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

  Squelette
  (c) 2009 xxx
  Distribue sous licence GPL

') :
		'') .
'
<!-- extra -->');

	return analyse_resultat_skel('html_8133193abe4c354708382c3806d60205', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
