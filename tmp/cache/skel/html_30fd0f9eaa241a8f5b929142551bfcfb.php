<?php

/*
 * Squelette : ../plugins-dist/svp/prive/squelettes/inclure/svp_onglets.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/prive/squelettes/inclure/svp_onglets.html
// Temps de compilation total: 2.020 ms
//

function html_30fd0f9eaa241a8f5b929142551bfcfb($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Navigation des pages admin_plugin, ajouter_plugin et depots.

') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'actif_defaut'] = (interdire_scripts((((((((((entites_html(table_valeur($Pile[0]??[], (string)'voir', null),true)) ?'' :' ')) AND ((interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true)) ?'' :' '))))) ?' ' :'')) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == 'admin_plugin'))))) ?' ' :'') ? 'actif':''))))) .
'
<div class="onglets_simple onglets_simple--svp">
	<ul>
		<li class="onglet_actif">
			' .
retablir_echappements_modeles(lien_ou_expose(parametre_url(parametre_url(generer_url_ecrire('admin_plugin'),'voir','actif'),'verrouille',''),_T('public|spip|ecrire:plugins_actifs_liste'),(interdire_scripts((entites_html(sinon(table_valeur($Pile[0]??[], (string)'voir', null), (table_valeur($Pile["vars"]??[], (string)'actif_defaut', null))),true) == 'actif'))))) .
'
		</li>
		<li class="onglet_inactif">
			' .
retablir_echappements_modeles(lien_ou_expose(parametre_url(parametre_url(generer_url_ecrire('admin_plugin'),'voir','inactif'),'verrouille',''),_T('svp:plugins_inactifs_liste'),(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'voir', null),true) == 'inactif'))))) .
'
		</li>
		<li class="onglet_verrouille">
			' .
retablir_echappements_modeles(lien_ou_expose(parametre_url(parametre_url(generer_url_ecrire('admin_plugin'),'verrouille','oui'),'voir',''),_T('svp:plugins_verrouilles_liste'),(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true) == 'oui'))))) .
'
		</li>
		<li class="onglet_tous">
			' .
retablir_echappements_modeles(lien_ou_expose(parametre_url(parametre_url(generer_url_ecrire('admin_plugin'),'voir','tous'),'verrouille',''),_T('public|spip|ecrire:plugins_tous_liste'),(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'voir', null),true) == 'tous'))))) .
'
		</li>
	</ul>
	' .
(($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, (((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ajouter', '_plugins')?" ":"")) OR ((invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ajouter', '_depots')?" ":""))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
	<ul>
		' .
	(($t2 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ajouter', '_plugins')?" ":"")) ?' ' :'')))))!=='' ?
			($t2 . (	'
		<li class="onglet_ajouter">
			' .
		retablir_echappements_modeles(lien_ou_expose(generer_url_ecrire('charger_plugin'),_T('public|spip|ecrire:plugin_titre_automatique_ajouter'),(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == 'charger_plugin'))))) .
		'
		</li>')) :
			'') .
	'
		' .
	(($t2 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ajouter', '_depots')?" ":"")) ?' ' :'')))))!=='' ?
			($t2 . (	'
		<li class="onglet_depots">
			' .
		retablir_echappements_modeles(lien_ou_expose(generer_url_ecrire('depots'),_T('svp:titre_depots'),(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == 'depots'))))) .
		'
		</li>')) :
			'') .
	'
	</ul>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_30fd0f9eaa241a8f5b929142551bfcfb', $Cache, $page, '../plugins-dist/svp/prive/squelettes/inclure/svp_onglets.html');
}
