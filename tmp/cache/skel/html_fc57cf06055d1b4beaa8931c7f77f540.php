<?php

/*
 * Squelette : plugins-dist/medias/modeles/logo.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 01:08:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/medias/modeles/logo.html
// Temps de compilation total: 0.160 ms
//

function html_fc57cf06055d1b4beaa8931c7f77f540($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_url(entites_html(table_valeur($Pile[0]??[], (string)'lien', null),true))))))!=='' ?
		('<a href="' . $t1 . '">') :
		'') .
'<img
	src="' .
retablir_echappements_modeles(interdire_scripts(attribut_url(entites_html(table_valeur($Pile[0]??[], (string)'logo_on', null),true)))) .
'"
	class="spip_logo' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(entites_html(table_valeur($Pile[0]??[], (string)'align', null),true))))))!=='' ?
		(' spip_logo_' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true)) ?' ' :'')))))!=='' ?
		($t1 . 'spip_logo_survol') :
		'') .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(entites_html(table_valeur($Pile[0]??[], (string)'width', null),true))))))!=='' ?
		('
	width="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(entites_html(table_valeur($Pile[0]??[], (string)'height', null),true))))))!=='' ?
		('
	height="' . $t1 . '"') :
		'') .
'
	alt="' .
retablir_echappements_modeles(interdire_scripts(attribut_html(supprimer_tags(entites_html(table_valeur($Pile[0]??[], (string)'alt', null),true))))) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_url(entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true))))))!=='' ?
		('
	data-src-hover="' . $t1 . '"') :
		'') .
'/>' .
retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'lien', null),true) ? '</a>':''))) .
'
');

	return analyse_resultat_skel('html_fc57cf06055d1b4beaa8931c7f77f540', $Cache, $page, 'plugins-dist/medias/modeles/logo.html');
}
