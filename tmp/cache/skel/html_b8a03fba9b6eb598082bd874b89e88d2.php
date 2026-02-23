<?php

/*
 * Squelette : ../prive/squelettes/inclure/mise_a_jour.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/mise_a_jour.html
// Temps de compilation total: 0.150 ms
//

function html_b8a03fba9b6eb598082bd874b89e88d2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(boite_ouvrir('', 'notice')) .
'
	<p>' .
_T('public|spip|ecrire:nouvelle_version_spip', array('version' => retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('derniere_maj_notifiee',null,false):''))))) .
'</p>
	' .
(($t1 = strval(retablir_echappements_modeles(((find_in_path((string)'spip_loader.php')) ?' ' :''))))!=='' ?
		(retablir_echappements_modeles(boite_pied()) . $t1 . (	'
	<a class="btn" href="' .
	retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
	'/spip_loader.php">' .
	_T('public|spip|ecrire:bouton_mettre_a_jour') .
	'</a>')) :
		'') .
'
' .
retablir_echappements_modeles(boite_fermer()));

	return analyse_resultat_skel('html_b8a03fba9b6eb598082bd874b89e88d2', $Cache, $page, '../prive/squelettes/inclure/mise_a_jour.html');
}
