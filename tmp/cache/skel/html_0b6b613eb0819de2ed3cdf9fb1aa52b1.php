<?php

/*
 * Squelette : plugins-dist/medias/formulaires/methodes_upload/mediatheque.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 00:52:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/medias/formulaires/methodes_upload/mediatheque.html
// Temps de compilation total: 0.237 ms
//

function html_0b6b613eb0819de2ed3cdf9fb1aa52b1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="editer-groupe">
    <div class=\'editer editer_refdoc_joindre' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/refdoc_joindre', null)) ?' ' :'')))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'\'>
        <label for=\'refdoc_joindre' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'\'>' .
_T('medias:label_refdoc_joindre') .
'</label>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/refdoc_joindre', null)))))!=='' ?
		('
        <span class=\'erreur_message\'>' . $t1 . '</span>
        ') :
		'') .
'<input class=\'text\' type="text" name="refdoc_joindre" value=\'' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'refdoc_joindre', null),true))) .
'\' id="refdoc_joindre' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'"/>
        <input class=\'btn submit\' type="button" name="parcourir" value="' .
_T('medias:bouton_parcourir') .
'"
            onclick="jQuery.modalboxload(\'' .
retablir_echappements_modeles(generer_url_ecrire('popin-choisir_document',(	'var_zajax=contenu&selectfunc=mediaselect' .
	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true)))))) .
'\',{autoResize: true});"
        />
        <!--editer_refdoc_joindre-->
    </div>
</div>
<script>
function mediaselect' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'(id){jQuery.modalboxclose();jQuery("#refdoc_joindre' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'").attr(\'value\',\'doc\'+id).focus();jQuery(\'#joindre_mediatheque' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'>.boutons input\').get(0).click();}
</script>');

	return analyse_resultat_skel('html_0b6b613eb0819de2ed3cdf9fb1aa52b1', $Cache, $page, 'plugins-dist/medias/formulaires/methodes_upload/mediatheque.html');
}
