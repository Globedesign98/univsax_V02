<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('formulaires/joindre_document');
include_spip('inc/cisf_inc_joindre');


function formulaires_cisf_multipj_charger_dist($id_document='new',$id_objet=0,$objet='',$mode = 'auto',$galerie = false, $proposer_media=true, $proposer_ftp=true){

	
	$valeurs = array();
	
	$valeurs['id'] = $id_document;
	$valeurs['mode'] = 'document';
	
	$valeurs['url'] = 'http://';
	$valeurs['fichier_upload'] = '';
		
	$valeurs['joindre_upload']=''; 

	$valeurs['editable'] = ' ';
	
        if (cisf_utiliser_bigup()) {
            $valeurs['_bigup_rechercher_fichiers'] = true;
        }
        
	return $valeurs;
}


function formulaires_cisf_multipj_verifier_dist($id_document='new',$id_objet=0,$objet='',$mode = 'auto',$galerie = false, $proposer_media=true, $proposer_ftp=true){

	include_spip('inc/joindre_document');
	
	$erreurs = array();
	// c'est un upload
		$files = joindre_trouver_fichier_envoye();
		if (is_string($files)){
			$erreurs['message_erreur'] = $files;
		}
		elseif(is_array($files)){
			// erreur si on a pas trouve de fichier
			if (!count($files))
				$erreurs['message_erreur'] = _T('medias:erreur_aucun_fichier');

			else{
				// regarder si on a eu une erreur sur l'upload d'un fichier
				foreach($files as $file){
					if (isset($file['error'])
						AND $test = joindre_upload_error($file['error'])){
							if (is_string($test))
								$erreurs['message_erreur'] = $test;
							else
								$erreurs['message_erreur'] = _T('medias:erreur_aucun_fichier');
					}
				}
			}
		}

		if (count($erreurs) AND defined('_tmp_dir'))
			effacer_repertoire_temporaire(_tmp_dir);
	
	return $erreurs;
}


function formulaires_cisf_multipj_traiter_dist($id_document='new',$id_objet=0,$objet='',$mode = 'auto',$galerie = false, $proposer_media=true, $proposer_ftp=true){
    
                $res = array();
                
		$ajouter_documents = charger_fonction('ajouter_documents', 'action');

		$mode = joindre_determiner_mode($mode,$id_document,$objet);
		include_spip('inc/joindre_document');
		$files = joindre_trouver_fichier_envoye();

		$nouveaux_doc = $ajouter_documents($id_document,$files,$objet,$id_objet,$mode);

		if (defined('_tmp_dir'))
			effacer_repertoire_temporaire(_tmp_dir);

		// checker les erreurs eventuelles
		$messages_erreur = array();
		$nb_docs = 0;
		$sel = array();
		foreach ($nouveaux_doc as $doc) {
			if (!is_numeric($doc))
				$messages_erreur[] = $doc;
			// cas qui devrait etre traite en amont
			elseif(!$doc){
				$messages_erreur[] = _T('medias:erreur_insertion_document_base',array('fichier'=>'<em>???</em>'));
			}
			else{
				$ancre = $doc;
				$sel[] = $doc;
				$nb_docs++;
			}
		}
		if (count($messages_erreur))
			$res['message_erreur'] = implode('<br />',$messages_erreur);
		if ($nb_docs){
			$res['message_ok'] = singulier_ou_pluriel($nb_docs,'medias:document_installe_succes','medias:nb_documents_installe_succes');
		}
		if ($ancre)
			$res['redirect'] = "#doc$ancre";

//--------- Debut ajout CI ---------
/*
	if ($nb_docs OR isset($res['message_ok'])){
		$callback = "";
		if ($ancre)
			$callback .= "jQuery('#doc$ancre a.editbox').eq(0).focus();";
		if (count($sel)){
			$sel = "#doc".implode(",#doc",$sel);
		  $callback .= "jQuery('$sel').animateAppend();";
		}
		$js = "if (window.jQuery) jQuery(function(){ajaxReload('documents',{callback:function(){ $callback }});});";
		$js = "<script>$js</script>";
		if (isset($res['message_erreur']))
			$res['message_erreur'].= $js;
		else
	    $res['message_ok'] .= $js;
	}
*/

	$id_article = intval(_request('id_article'));
	if ($nb_docs>1)
		$res['redirect'] = generer_url_public("cisf_article", "id_article=$id_article");	
	else
		$res['redirect'] = generer_url_public("cisf_doc_modifier", "id_article=$id_article&show_docs=$ancre");
//--------- Fin ajout CI ---------

	return $res;
}


?>