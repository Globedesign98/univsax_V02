<?php

/*
 * Squelette : plugins/auto/contact-2.0.0/formulaires/contact_champ_mail.html
 * Date :      Thu, 29 Jan 2026 02:52:21 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/contact-2.0.0/formulaires/contact_champ_mail.html
// Temps de compilation total: 0.077 ms
//

function html_cfe100dc4e4e3cbdc67de16de171c00e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'editer editer_mail saisie_mail obligatoire' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'mail')) ?' ' :'')))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'\'>
<label for="mail">' .
_T('public|spip|ecrire:entree_adresse_email') .
' <strong>' .
_T('public|spip|ecrire:info_obligatoire_02') .
'</strong></label>
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'mail')))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
<input type="text" class="text" name="mail" id="mail" value="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'mail', null),true))) .
'" size="30" />
</div>');

	return analyse_resultat_skel('html_cfe100dc4e4e3cbdc67de16de171c00e', $Cache, $page, 'plugins/auto/contact-2.0.0/formulaires/contact_champ_mail.html');
}
