<?php

/*
 * Squelette : plugins-dist/medias/formulaires/joindre_document.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 00:52:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/medias/formulaires/joindre_document.html
// Temps de compilation total: 0.396 ms
//

function html_91689e98bfd4ba2b2d90338e1ea8f2a0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
		($t1 . (	'
<div class=\'formulaire_spip formulaire_joindre formulaire_joindre_document\' id=\'formulaire_joindre_document-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'new'),true))) .
	'\'>
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'_mode', null),true) == 'image')) ?' ' :'')))))!=='' ?
			($t2 . (	'
	<h3 class=\'titrem\'>' .
		retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'image-24.png'),'','cadre-icone')) .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((intval(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'new'),true)) ? _T('medias:bouton_remplacer_image'):_T('medias:bouton_ajouter_image'))))))!=='' ?
				($t3 . (	' ' .
			retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('ins_img'):''))))) :
				'') .
		'</h3>
	')) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'_mode', null),true) == 'document')) ?' ' :'')))))!=='' ?
			($t2 . (	'
	<h3 class=\'titrem\'>' .
		retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'doc-24.png'),'','cadre-icone')) .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((intval(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'new'),true)) ? _T('medias:bouton_remplacer_document'):_T('medias:bouton_ajouter_document'))))))!=='' ?
				($t3 . (	' ' .
			retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('ins_doc'):''))))) :
				'') .
		'</h3>
	')) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'_mode', null),true) == 'choix')) ?' ' :'')))))!=='' ?
			($t2 . (	'
	<h3 class=\'titrem\'>' .
		retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'doc-24.png'),'','cadre-icone')) .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((intval(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'new'),true)) ? _T('medias:bouton_remplacer_image_document'):_T('medias:bouton_ajouter_image_document'))))))!=='' ?
				($t3 . (	' ' .
			retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('ins_doc'):''))))) :
				'') .
		'</h3>
	')) :
			'') .
	'
	<span class="image_loading"></span>
	' .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_ok', null))))!=='' ?
			('<div class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t2 . '</div>') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_erreur', null))))!=='' ?
			('<div class="reponse_formulaire reponse_formulaire_erreur" role="alert">' . $t2 . '</div>') :
			'') .
	'
	
	<form action="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'#formulaire_joindre_document-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'new'),true))) .
	'" method="post" enctype=\'multipart/form-data\'><div>
		' .
	retablir_echappements_modeles(	'<span class="form-hidden">' .
	form_hidden(($Pile[0]['action'] ?? '')) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . ($Pile[0]['form'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_args'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_sign\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_sign'] ?? '') . '\'>' .
	($Pile[0]['_hidden'] ?? '') .
	'</span>') .
	'
		
		' .
	retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-upload_document' , array_merge($Pile[0],array('mediatheque' => (interdire_scripts(((((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'objet', null), ''),true)) AND ((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_objet', null), ''),true))))) ?' ' :'')) AND ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'proposer_media', null),true))))) ?' ' :''))) )), array('compil'=>array('plugins-dist/medias/formulaires/joindre_document.html','html_91689e98bfd4ba2b2d90338e1ea8f2a0','',10,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
		
	</div></form>
</div>')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' @deprecated 4.0 - SPIP 4.1 ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((joindre_document_galerie_valide(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_galerie', null), ''),true))) ?' ' :'')))))!=='' ?
		($t1 . (	'
		' .
	retablir_echappements_modeles(recuperer_fond( (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_galerie', null),true))) , array_merge($Pile[0],array()), array('ajax' => ($v=( ($Pile[0]['ajax'] ?? null) ))?$v:true,'compil'=>array('plugins-dist/medias/formulaires/joindre_document.html','html_91689e98bfd4ba2b2d90338e1ea8f2a0','',11,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_91689e98bfd4ba2b2d90338e1ea8f2a0', $Cache, $page, 'plugins-dist/medias/formulaires/joindre_document.html');
}
