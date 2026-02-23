<?php

/*
 * Squelette : prive/formulaires/inc-logo_auteur.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Sun, 22 Feb 2026 23:40:43 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/inc-logo_auteur.html
// Temps de compilation total: 1.989 ms
//

function html_f96c0978a91c9c6ef916c7c91b26fef0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q((	'Content-type:text/html;charset=' .
	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'charset', null),true))))) . '); ?'.'>') .
retablir_echappements_modeles(filtrer('image_graver',filtrer('image_recadre_avec_fallback',quete_html_logo(quete_logo('id_auteur', 'ON', ($Pile[0]['id_auteur'] ?? null), ''), '', ''),'200','200'))) .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' ce fichier est utilise par inc/identifier_login, pour l\'identification ajax des auteurs dans le formulaire de login') :
		''));

	return analyse_resultat_skel('html_f96c0978a91c9c6ef916c7c91b26fef0', $Cache, $page, 'prive/formulaires/inc-logo_auteur.html');
}
