<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html
// Temps de compilation total: 1.081 ms
//

function html_47bfd874647514d43cab6080f7cece03($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'ajouter', null),true) == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'
<div class=\'nettoyeur\'></div>
<a href=\'' .
	retablir_echappements_modeles(parametre_url(self(),'ajouter','non')) .
	'\' class=\'ajax bouton_fermer\'>' .
	retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'fermer-16.png'))) .
	'</a>
<div class="ajax">
	' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_JOINDRE_DOCUMENT',
	array('new',(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_objet', null), '0'),true))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'objet', null), ''),true)))),
	array('../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html','html_47bfd874647514d43cab6080f7cece03','',5,$GLOBALS['spip_lang']))) .
	'</div>
<div class=\'nettoyeur\'></div>
')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'ajouter', null),true) == 'oui')) ?'' :' ')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(filtre_icone_verticale_dist(parametre_url(self(),'ajouter','oui'),(((joindre_determiner_mode('auto','0',(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'objet', null), ''),true)))) == 'image') ? _T('medias:bouton_ajouter_image'):_T('medias:icone_creer_document'))),'document','new','right ajax')) .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_47bfd874647514d43cab6080f7cece03', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/ajouter-documents.html');
}
