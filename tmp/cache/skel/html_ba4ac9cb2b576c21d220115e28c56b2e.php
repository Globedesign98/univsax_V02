<?php

/*
 * Squelette : plugins-dist/porte_plume/css/barre_outils_icones.css.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/porte_plume/css/barre_outils_icones.css.html
// Temps de compilation total: 0.069 ms
//

function html_ba4ac9cb2b576c21d220115e28c56b2e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(barre_outils_css_icones('')) .
'

/* roue ajax */
.ajaxLoad{
		position:relative;
}
.ajaxLoad:after {
		content:"";
		display:block;
		width:5em;
		height:5em;
		border:1px solid #eee;
		background:#fff url(\'' .
retablir_echappements_modeles(protocole_implicite(url_absolue(find_in_path((string)'images/loader.svg')))) .
'\') center no-repeat;
		background-size:50%;
		opacity:0.5;
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-2.5em;
		margin-top:-2.5em;
}
.fullscreen .ajaxLoad:after {
		position:fixed;
		left:75%;
}
');

	return analyse_resultat_skel('html_ba4ac9cb2b576c21d220115e28c56b2e', $Cache, $page, 'plugins-dist/porte_plume/css/barre_outils_icones.css.html');
}
