<?php

/*
 * Squelette : ../prive/themes/spip/bando.css.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:00 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/bando.css.html
// Temps de compilation total: 0.129 ms
//

function html_6b869b64ddcab2d9912a9d8a4a9047df($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Ce squelette complète les styles des bandeaux de navigation l\'espace privé.
<style>') :
		'') .
'

/* Icônes en background-image */
' .
retablir_echappements_modeles(bando_images_background('')) .
'
');

	return analyse_resultat_skel('html_6b869b64ddcab2d9912a9d8a4a9047df', $Cache, $page, '../prive/themes/spip/bando.css.html');
}
