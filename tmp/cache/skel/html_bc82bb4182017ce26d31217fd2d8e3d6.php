<?php

/*
 * Squelette : prive/informer_auteur.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Sun, 22 Feb 2026 23:40:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/informer_auteur.html
// Temps de compilation total: 0.219 ms
//

function html_bc82bb4182017ce26d31217fd2d8e3d6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/plain') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
retablir_echappements_modeles(interdire_scripts(informer_auteur(normaliser_date(($Pile[0]['date'] ?? null))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Tordu, mais l\'optim du cache ne donne pas acces a var_login)') :
		''));

	return analyse_resultat_skel('html_bc82bb4182017ce26d31217fd2d8e3d6', $Cache, $page, 'prive/informer_auteur.html');
}
