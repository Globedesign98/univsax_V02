<?php

/*
 * Squelette : plugins/auto/contact-2.0.0/formulaires/contact_champ_texte.html
 * Date :      Thu, 29 Jan 2026 02:52:21 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/contact-2.0.0/formulaires/contact_champ_texte.html
// Temps de compilation total: 0.089 ms
//

function html_cd0e6e93ebb8dd5a48bd30eb34b1b4dc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'editer editer_texte saisie_texte obligatoire' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'texte')) ?' ' :'')))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'\'>
<label for="contact_texte">' .
_T('public|spip|ecrire:info_texte_message') .
' <strong>' .
_T('public|spip|ecrire:info_obligatoire_02') .
'</strong></label>
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'texte')))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
<textarea name="texte" id="contact_texte" rows="8" cols="60"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('contact/barre','no_barre',false):'')))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
'>' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'texte', null),true))) .
'</textarea>
</div>');

	return analyse_resultat_skel('html_cd0e6e93ebb8dd5a48bd30eb34b1b4dc', $Cache, $page, 'plugins/auto/contact-2.0.0/formulaires/contact_champ_texte.html');
}
