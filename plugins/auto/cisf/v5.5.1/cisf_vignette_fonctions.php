<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

include_spip('inc/cisf_inc_joindre');

function balise_CISF_VIGNETTE($p) {
	$p->code = "cisf_vignette(\$Pile)";
//	$p->statut = 'html';
	return $p;
}


// Ajouter une vignette 
// Adapt� de vignette_formulaire_legender
function cisf_vignette($Pile){
	include_spip('inc/presentation');
	include_spip('inc/actions');
	include_spip('inc/autoriser');
	include_spip('inc/cisf_commun');

	$id_article = intval($Pile[0]['id_article']);
	$id_rubrique = intval($Pile[0]['id_rubrique']);
	$flag_editable = autoriser('modifier', 'article', $id_article);
	$type = "article";	
//	$script = generer_url_public('cisf_doc_modifier', "id_article=".$id_article."&id_rubrique=".$id_rubrique);
	// compatibilite avec SPIP 2.1.8
	$script = "spip.php?page=cisf_doc_modifier&amp;id_article=".$id_article."&amp;id_rubrique=".$id_rubrique;
	
	$id_document = intval($Pile[0]['id_document']);
	$document = sql_fetsel("*", "spip_documents", "id_document=$id_document");
	
	// cas particulier de l'insertion d'un document dans le texte
	$ci_ins_document = cisf_cireqsecure('ins_document');
	if ($ci_ins_document) {
		if ($ci_ins_document=="descriptif" OR $ci_ins_document=="text_area") {
				$script = parametre_url($script,'ins_document',$ci_ins_document);
		}
	}	
	$ci_ins_image = cisf_cireqsecure('ins_image');
	if ($ci_ins_image) {
		if ($ci_ins_image=="descriptif" OR $ci_ins_image=="text_area") {
				$script = parametre_url($script,'ins_image',$ci_ins_image);
		}
	}	

	$ci_align_image = cisf_cireqsecure('align_image');
	if ($ci_align_image) {
		$script = parametre_url($script,'align_image',$ci_align_image);
	}	
	
	$id_vignette = $document['id_vignette'];
	$texte = _T('info_supprimer_vignette');


	$joindre = charger_fonction('joindre', 'inc');
	
	$supprimer = "";

	$res = "<hr style='margin-top: 20px; margin-left: -5px; margin-right: -5px; height: 1px; border: 0px; color: #eeeeee; background-color: white;' />"
	. (!$id_vignette
		? $joindre(array(
			'script' => $script,
			'args' => "id_$type=$id_article",
			'id' => $id_article,
			'intitule' => _T('info_vignette_personnalisee'),
			'mode' => 'vignette',
			'type' => $type,
			'ancre' => '',
			'id_document' => $id_document,
			'titre' => '',
			'iframe_script' => ''
			))
		: $supprimer
	);
	
	$res = str_replace("size='15'","size='55'",$res);
	
	return $res;	
}


?>