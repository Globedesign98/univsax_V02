<?php

/*
 * Squelette : ../plugins-dist/forum/prive/objets/configurer/moderation.html
 * Date :      Thu, 04 Dec 2025 23:14:30 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/forum/prive/objets/configurer/moderation.html
// Temps de compilation total: 1.706 ms
//

function html_b9ab3bb9d7e425b4daab5b17974017ac($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'ajax\'>
' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_ACTIVER_FORUMS_OBJET',
	array((($Pile[0]['id_objet'] ?? null)),(interdire_scripts(($Pile[0]['objet'] ?? null)))),
	array('../plugins-dist/forum/prive/objets/configurer/moderation.html','html_b9ab3bb9d7e425b4daab5b17974017ac','',2,$GLOBALS['spip_lang']))) .
'</div>');

	return analyse_resultat_skel('html_b9ab3bb9d7e425b4daab5b17974017ac', $Cache, $page, '../plugins-dist/forum/prive/objets/configurer/moderation.html');
}
