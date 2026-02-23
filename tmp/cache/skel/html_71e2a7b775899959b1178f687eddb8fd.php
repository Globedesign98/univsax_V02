<?php

/*
 * Squelette : ../prive/echafaudage/contenu/objet_edit.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/echafaudage/contenu/objet_edit.html
// Temps de compilation total: 1.435 ms
//

function html_71e2a7b775899959b1178f687eddb8fd($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(((intval(($Pile[0]['id_objet'] ?? null))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', (interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))), (invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))))?" ":"")))) .
	'
')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(((intval(($Pile[0]['id_objet'] ?? null))) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id_rubrique'] = (interdire_scripts(trouver_rubrique_creer_objet(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_rubrique', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_parent', null),true)))),true),(interdire_scripts(($Pile[0]['objet'] ?? null)))))))) .
	retablir_echappements_modeles(sinon_interdire_acces((table_valeur($Pile["vars"]??[], (string)'id_rubrique', null) ? (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser((($t4 = strval((interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null))))))!=='' ?
					('creer' . $t4 . 'dans') :
					''), 'rubrique', (invalideur_session($Cache, table_valeur($Pile["vars"]??[], (string)'id_rubrique', null))))?" ":""))):(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', (interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))))?" ":"")))))) .
	'
')) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'redirect'] = (interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'redirect', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((entites_html(sinon(table_valeur($Pile[0]??[], (string)'lier_trad', null), (($Pile[0]['id_objet'] ?? null))),true) ? (interdire_scripts(generer_objet_url(entites_html(sinon(table_valeur($Pile[0]??[], (string)'lier_trad', null), (($Pile[0]['id_objet'] ?? null))),true),(interdire_scripts(($Pile[0]['objet'] ?? null)))))):((table_valeur($Pile["vars"]??[], (string)'id_rubrique', null) ? (generer_objet_url(table_valeur($Pile["vars"]??[], (string)'id_rubrique', null),'rubrique')):(generer_url_ecrire('rubriques')))))))))))) .
'<div class=\'cadre-formulaire-editer\'>
<div class="entete-formulaire">
	' .
(($t1 = strval(retablir_echappements_modeles(((($Pile[0]['id_objet'] ?? null)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(filtre_icone_verticale_dist(table_valeur($Pile["vars"]??[], (string)'redirect', null),(interdire_scripts(_T(objet_info(($Pile[0]['objet'] ?? null),'texte_retour')))),(interdire_scripts(objet_info(($Pile[0]['objet'] ?? null),'icone_objet'))),'',(	'left retour' .
		(($t3 = strval((interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'retourajax', null), ''),true)) ?' ' :'')))))!=='' ?
				($t3 . 'ajax preload') :
				'')))) .
	'
	')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'titre', null), (interdire_scripts(((($a = generer_objet_info((($Pile[0]['id_objet'] ?? null)), (interdire_scripts(($Pile[0]['objet'] ?? null))), 'titre', '', [])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))))))!=='' ?
		((	'
		' .
	retablir_echappements_modeles(interdire_scripts(_T(objet_info(($Pile[0]['objet'] ?? null),((($Pile[0]['id_objet'] ?? null) ? 'texte_modifier':'texte_creer')))))) .
	'
		<h1>') . $t1 . '</h1>
	') :
		'') .
'
</div>

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'redirect'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'redirect', null), (generer_objet_url(($Pile[0]['id_objet'] ?? null),(interdire_scripts(($Pile[0]['objet'] ?? null)))))),true))))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'retourajax', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'redirect'] = 'javascript:if (window.jQuery) jQuery(".entete-formulaire .retour a").followLink();')) .
	'<div class="ajax">
')) :
		'') .
'
		' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_',
	array((($t2 = strval((interdire_scripts(($Pile[0]['objet'] ?? null)))))!=='' ?
			('editer_' . $t2) :
			''),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_objet', null), 'oui'),true))),(table_valeur($Pile["vars"]??[], (string)'id_rubrique', null)),(table_valeur($Pile["vars"]??[], (string)'redirect', null)),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'lier_trad', null),true)))),
	array('../prive/echafaudage/contenu/objet_edit.html','html_71e2a7b775899959b1178f687eddb8fd','',0,$GLOBALS['spip_lang']))) .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'retourajax', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	</div>
	<script>
		reloadExecPage(\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true))) .
	'\');
	</script>
')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_71e2a7b775899959b1178f687eddb8fd', $Cache, $page, '../prive/echafaudage/contenu/objet_edit.html');
}
