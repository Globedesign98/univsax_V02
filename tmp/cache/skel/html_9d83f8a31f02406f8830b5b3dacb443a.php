<?php

/*
 * Squelette : plugins-dist/medias/formulaires/methodes_upload/upload.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 00:52:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/medias/formulaires/methodes_upload/upload.html
// Temps de compilation total: 0.189 ms
//

function html_9d83f8a31f02406f8830b5b3dacb443a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="editer-groupe">
    <div class=\'editer editer_fichier_upload' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/fichier_upload', null)) ?' ' :'')))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'\'>
        <label for=\'fichier_upload' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'\'>' .
_T('public|spip|ecrire:bouton_upload') .
'</label>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/fichier_upload', null)))))!=='' ?
		('
        <span class=\'erreur_message\'>' . $t1 . '</span>
        ') :
		'') .
'<input class=\'file' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'multi', null),true) == 'non')) ?'' :' ')))))!=='' ?
		($t1 . ' multi') :
		'') .
'\' type="file" name="fichier_upload[]" value=\'' .
retablir_echappements_modeles(interdire_scripts((is_array(entites_html(table_valeur($Pile[0]??[], (string)'fichier_upload', null),true)) ? '':(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'fichier_upload', null),true)))))) .
'\' id="fichier_upload' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'" size=\'11\' />
        <!--editer_fichier_upload-->
    </div>
</div>');

	return analyse_resultat_skel('html_9d83f8a31f02406f8830b5b3dacb443a', $Cache, $page, 'plugins-dist/medias/formulaires/methodes_upload/upload.html');
}
