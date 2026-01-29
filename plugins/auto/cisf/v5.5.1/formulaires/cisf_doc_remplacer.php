<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/actions');
include_spip('inc/editer');
include_spip('inc/cisf_commun');
include_spip('inc/documents');


function formulaires_cisf_doc_remplacer_charger_dist($id_document,$id_article,$id_rubrique){
	
	if (!autoriser('modifier', 'article', $id_article))
		return false;

	if (cisf_indesirable())
		return false;
	
	$valeurs = formulaires_editer_objet_charger('document',$id_document,$id_article,0,'','');
	
	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;

	// Imperatif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_doc_remplacer",$id_document);
	
	
	return $valeurs;
}

function formulaires_cisf_doc_remplacer_verifier_dist($id_document,$id_article,$id_rubrique){
	$erreurs = array();
	
	return $erreurs;
}

function formulaires_cisf_doc_remplacer_traiter_dist($id_document,$id_article,$id_rubrique){

        $res = array();
	$res['redirect'] = "spip.php?page=cisf_article&amp;id_article=".$id_article;
	$id_document = intval($id_document);
	$x = 0;
	
	if ($id_document>0) {

		if (_request('joindre_upload') OR _request('joindre_distant')) {
			
			if (_request('joindre_upload')) {
				
				$mode = 'choix';
				$path = ($_FILES ? $_FILES : $GLOBALS['HTTP_POST_FILES']);
				$files = array();
				if (is_array($path))
				  foreach ($path as $file) {
				  //UPLOAD_ERR_NO_FILE
					if (!($file['error'] == 4) )
						$files[]=$file;
				}

				// permettre aux plugins d'agir sur l'ancien fichier
				pipeline('pre_edition',
					array(
						'args' => array(
							'action' => 'cisf_remplacer_document',
							'operation' => 'cisf_remplacer_document', // compat <= v2.0
							'table' => 'spip_documents', // compatibilite
							'table_objet' => 'documents',
							'spip_table_objet' => 'spip_documents',
							'type' =>'document',
							'id_objet' => $id_document,
							'files' => $files
						),
						'data' => null
					)
				);
				

				// supprimer l'ancien fichier
				if (count($files)>=1) {
					if ($ancien_fichier = sql_getfetsel('fichier','spip_documents','id_document='.$id_document)) {
						$f = get_spip_doc($ancien_fichier);
					  	if (@file_exists($f)) {
							spip_unlink($f);
					  	}
					}
				}
				
				
			} elseif (_request('joindre_distant')) {
				$mode = 'distant';
				$path = _request('url');				
				$files = array('file1' => array('name' => basename($path), 'tmp_name' => $path));
			}

			$ajouter_documents = charger_fonction('ajouter_documents', 'inc');
	
			$actifs = array();
			foreach ($files as $arg) {
				if ($mode != 'distant') {
					// verifier l'extension du fichier en fonction de son type mime
					list($extension,$arg['name']) = fixer_extension_document($arg);
					check_upload_error($arg['error']);
				}
				$x = $ajouter_documents($arg['tmp_name'], $arg['name'], 
						    'article', $id_article, $mode, $id_document, $actifs);

				// changer la date du document
				sql_updateq('spip_documents', array('date'=>date('Y-m-d H:i:s')), "id_document=$id_document");

			}
	
			// invalideur
			include_spip('inc/invalideur');
			suivre_invalideur("id='id_article/$id_article'");

			$res['redirect'] = "spip.php?page=cisf_doc_modifier&amp;show_docs=".$id_document."&amp;id_document=".$id_document."&amp;id_article=".$id_article;

		}


		$res['message_ok'] = "";		
		
	}

	return $res;
}

?>