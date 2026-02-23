<?php

/*
 * Squelette : ../plugins/auto/iextras/v4.3.0/prive/style_prive_plugin_iextras.html
 * Date :      Tue, 29 Jul 2025 04:51:22 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/iextras/v4.3.0/prive/style_prive_plugin_iextras.html
// Temps de compilation total: 0.105 ms
//

function html_c05c5fe23a62191b5ade68d1c97f2e8d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'.champs_extras_objets .saisies_objet { font-size:90%; position:relative; top:-.2em; }
.champs_extras_objets .saisies_objet .item { padding:.3em 0; overflow: hidden; }
.champs_extras_objets .saisies_objet .item.solo { padding:0; }
.champs_extras_objets .saisies_objet .item + .item { border-top: 1px solid #ddd;  }
.champs_extras_objets .saisies_objet img { vertical-align:middle; margin-right:.2em; }
.champs_extras_objets .saisies_objet .bouton_action_post { float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
'; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':.5em; }
.champs_extras_objets .saisies_objet .bouton_action_post .submit { font-size: .9em; }
');

	return analyse_resultat_skel('html_c05c5fe23a62191b5ade68d1c97f2e8d', $Cache, $page, '../plugins/auto/iextras/v4.3.0/prive/style_prive_plugin_iextras.html');
}
