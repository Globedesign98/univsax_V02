<?php

/*
 * Squelette : plugins-dist/medias/formulaires/methodes_upload/distant.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 00:52:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/medias/formulaires/methodes_upload/distant.html
// Temps de compilation total: 0.145 ms
//

function html_a197fcc214fadede71a0eb5f7935b0a1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="editer-groupe">
    <div class=\'editer editer_url' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/url', null)) ?' ' :'')))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'\'>
        <label for=\'url' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'\'>' .
_T('medias:info_referencer_doc_distant') .
'</label>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/url', null)))))!=='' ?
		('
        <span class=\'erreur_message\'>' . $t1 . '</span>
        ') :
		'') .
'<input class=\'text\' placeholder="https://" type="text" name="url" value=\'' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true))) .
'\' id="url' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'domid', null),true))) .
'"/>
        <!--editer_url-->
    </div>
</div>
');

	return analyse_resultat_skel('html_a197fcc214fadede71a0eb5f7935b0a1', $Cache, $page, 'plugins-dist/medias/formulaires/methodes_upload/distant.html');
}
