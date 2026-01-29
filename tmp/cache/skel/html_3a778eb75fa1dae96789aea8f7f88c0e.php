<?php

/*
 * Squelette : plugins/auto/diapo-636dc-diapo-2.2.0/diapo-2.2.0/diapo.css.html
 * Date :      Sat, 18 Jan 2025 14:09:29 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:34 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/diapo-636dc-diapo-2.2.0/diapo-2.2.0/diapo.css.html
// Temps de compilation total: 0.211 ms
//

function html_3a778eb75fa1dae96789aea8f7f88c0e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css;') . '); ?'.'>') .
'.diapo_vignette {
	width: ' .
retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('diapo/config/taille_vignettes','60',false):''))) .
'px;
	height: ' .
retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('diapo/config/taille_vignettes','60',false):''))) .
'px;
}');

	return analyse_resultat_skel('html_3a778eb75fa1dae96789aea8f7f88c0e', $Cache, $page, 'plugins/auto/diapo-636dc-diapo-2.2.0/diapo-2.2.0/diapo.css.html');
}
