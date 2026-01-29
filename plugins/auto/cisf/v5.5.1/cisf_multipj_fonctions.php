<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 
/*-----------------------------------------------------------------
// Balise propre au plugin
------------------------------------------------------------------*/
 
include_spip('inc/cisf_inc_joindre');


function balise_CISF_MULTIPJ($p) {
	$p->code = "cisf_multipj(\$Pile)";
//	$p->statut = 'html';
	return $p;
}


/*-----------------------------------------------------------------
// Fonction relative a la balise propre au plugin
------------------------------------------------------------------*/

// Ajout de plusieurs documents 
function cisf_multipj($Pile) {
	include_spip('inc/actions');
	include_spip('inc/autoriser');

	$id = intval($Pile[0]['id_article']);
	$id_document = 0;
	$flag_editable = autoriser('modifier', 'article', $id);
	$mode = "document";
	$type = "article";


	// Joindre ?
	if  ($GLOBALS['meta']["documents_$type"]=='non')
		$return = _T('cisf:eq_ajout_doc_art_interdit');		
	elseif (!autoriser('joindredocument', $type, $id)
	OR !$flag_editable)
		$return = _T('avis_acces_interdit');
	else {
		for ($i = 1; $i < 11; $i++) {
			$res .= "\n<div class='multipj'>"
                                . "<label for='fichier_upload".$i."'>"._T('medias:info_telecharger')."</label>"
                                . "<input name='cifichier".$i."' id='fichier_upload".$i."' type='File' class='fondl' size='55'></div>";
		}
	
		$res .=	"\n<div style='text-align: right'><input name='sousaction1' type='submit' value='"._T('bouton_telecharger')."' class='bouton_multipj' /></div>";
		
		$att = " enctype='multipart/form-data' class='form_upload'";
		$args = ($id .'/'.$id_document.'/'.$mode.'/'.$type);
//		$script = generer_url_public("cisf_article", "id_article=$id");
		// compatibilite avec SPIP 2.1.8
		$script = "spip.php?page=cisf_article&amp;id_article=".$id;

		include_spip('inc/filtres');
		$return = generer_action_auteur('ajouter_documents', $args, $script, $res, "$att method='post'");
	}
	
	return $return;
}

?>