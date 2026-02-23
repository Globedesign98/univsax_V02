<?php

/*
 * Squelette : ../prive/objets/editer/liens.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/editer/liens.html
// Temps de compilation total: 0.301 ms
//

function html_3ba97cb1449f7417c411ff692ebc0a5c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'lien', null),true) == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))))) ?'' :' ')))))!=='' ?
		($t1 . (	'
<div class="ajax">
	' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_EDITER_LIENS',
	array((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'table_source', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))),(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true) == 'non') ? '':' ')))),
	array('../prive/objets/editer/liens.html','html_3ba97cb1449f7417c411ff692ebc0a5c','',3,$GLOBALS['spip_lang']))) .
	'</div>
')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'lien', null),true) == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
<div class="ajax">
	' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_EDITER_LIENS',
	array((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'table_source', null),true))),(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true) == 'non') ? '':' ')))),
	array('../prive/objets/editer/liens.html','html_3ba97cb1449f7417c411ff692ebc0a5c','',3,$GLOBALS['spip_lang']))) .
	'</div>
')) :
		''));

	return analyse_resultat_skel('html_3ba97cb1449f7417c411ff692ebc0a5c', $Cache, $page, '../prive/objets/editer/liens.html');
}
