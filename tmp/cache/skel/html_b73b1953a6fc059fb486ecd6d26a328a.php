<?php

/*
 * Squelette : ../prive/objets/editer/traductions.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/editer/traductions.html
// Temps de compilation total: 1.966 ms
//

function html_b73b1953a6fc059fb486ecd6d26a328a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'
	Afficher le ' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_TRADUIRE',
	array(),
	array('../prive/objets/editer/traductions.html','html_b73b1953a6fc059fb486ecd6d26a328a','',2,$GLOBALS['spip_lang']))) .
	' si le menu de langue est actif pour l\'objet
	passer en 4e argument le flag qui indique qu\'on veut aussi gerer les trad
')) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'table'] = (interdire_scripts(table_objet_sql(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true)))))) .
(($t1 = strval(retablir_echappements_modeles((((in_any(table_valeur($Pile["vars"]??[], (string)'table', null),(interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('multi_objets',null,false):''),','))))) OR ((in_any(table_valeur($Pile["vars"]??[], (string)'table', null),(interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('gerer_trad_objets',null,false):''),','))))))) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class="ajax">
	' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_TRADUIRE',
	array((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'retour', null), ''),true))),(in_any(table_valeur($Pile["vars"]??[], (string)'table', null),(interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('gerer_trad_objets',null,false):''),',')))))),
	array('../prive/objets/editer/traductions.html','html_b73b1953a6fc059fb486ecd6d26a328a','',5,$GLOBALS['spip_lang']))) .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b73b1953a6fc059fb486ecd6d26a328a', $Cache, $page, '../prive/objets/editer/traductions.html');
}
