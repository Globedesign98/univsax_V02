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

include_spip('inc/cisf_inc_joindre');
include_spip('formulaires/joindre_document');


function formulaires_cisf_joindre_document_charger_dist($id_document='new',$id_objet=0,$objet='',$mode = 'auto',$galerie = false, $proposer_media=true, $proposer_ftp=true){

        $valeurs = formulaires_joindre_document_charger_dist($id_document,$id_objet,$objet,$mode,$galerie,$proposer_media,$proposer_ftp);

        if (cisf_utiliser_bigup()) {
            $valeurs['_bigup_rechercher_fichiers'] = true;
        }
        
        return $valeurs;
}


function formulaires_cisf_joindre_document_verifier_dist($id_document='new',$id_objet=0,$objet='',$mode = 'auto',$galerie = false, $proposer_media=true, $proposer_ftp=true){
	include_spip('inc/joindre_document');
	
	$erreurs = array();
	// on joint un document deja dans le site
	if (_request('joindre_mediatheque')){
                if (_request('refdoc_joindre')){
                	$refdoc_joindre = intval(preg_replace(',^(doc|document|img),','',_request('refdoc_joindre')));
                        if (!sql_getfetsel('id_document','spip_documents','id_document='.intval($refdoc_joindre))){
                                $erreurs['message_erreur'] = _T('medias:erreur_aucun_document');
                        // Debut ajout CI
                        } elseif (defined('_DIR_PLUGIN_CIAR')) {
                                // Interdire de joindre depuis la mediatheque un document qui a un autre parent protege
                                // Ceci evite, par exemple, d'associer un document protege a un auteur, etc.
                                include_spip('inc/ciar_fonctions');
                                if (ciar_document_autre_parent_protege(intval($refdoc_joindre),$objet,$id_objet))
                                        $erreurs['message_erreur'] = _T('ciar:doc_dans_arbo_protegee');
                        }	
                } else {
                        $erreurs['message_erreur'] = _T('medias:erreur_aucun_document');
                }
		// Fin ajout CI	
	}
	// sinon c'est un upload
	else {
		$files = joindre_trouver_fichier_envoye();
		if (is_string($files))
			$erreurs['message_erreur'] = $files;
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

				// si ce n'est pas deja un post de zip confirme
				// regarder si il faut lister le contenu du zip et le presenter
                                if ($GLOBALS['spip_version_branche']<4) {
                                        if (!count($erreurs)
                                                AND !_request('joindre_zip')
                                                AND $contenu_zip = joindre_verifier_zip($files)){
                                                list($fichiers,$erreurs,$tmp_zip) = $contenu_zip;
                                                if ($fichiers) {
                                                        $erreurs['message_erreur'] = '';
                                                        // nouveaute de SPIP 3.0.24
                                                        if ($GLOBALS['spip_version_affichee']>="3.0.24"){
                                                        // on passe le md5 du fichier uniquement, on le retrouvera dans zip_to_clean de la session
                                                                $token_zip = md5($tmp_zip);
                                                                $erreurs['lister_contenu_archive'] = recuperer_fond("formulaires/inc-lister_archive_jointe",array('chemin_zip'=>$token_zip,'liste_fichiers_zip'=>$fichiers,'erreurs_fichier_zip'=>$erreurs));
                                                        } else {
                                                                $erreurs['lister_contenu_archive'] = recuperer_fond("formulaires/inc-lister_archive_jointe",array('chemin_zip'=>$tmp_zip,'liste_fichiers_zip'=>$fichiers,'erreurs_fichier_zip'=>$erreurs));
                                                        }
                                                } else {
                                                        $erreurs['message_erreur'] = _T('medias:erreur_aucun_fichier');
                                                }
                                        }
                                }
			}
		}

		if (count($erreurs) AND defined('_tmp_dir'))
			effacer_repertoire_temporaire(_tmp_dir);
	}
	
	return $erreurs;
}


function formulaires_cisf_joindre_document_traiter_dist($id_document='new',$id_objet=0,$objet='',$mode = 'auto',$galerie = false, $proposer_media=true, $proposer_ftp=true){
	$res = array('editable'=>true);
	$ancre = '';
	
//--------- Debut ajout CI ---------
        $sel = array();
	$ci_docs = array();
	$script = '';

	// cas particulier de l'insertion d'un document ou d'une image dans le texte
	$ci_ins_document = _request('ins_document');
	if ($ci_ins_document) {
		if ($ci_ins_document=="descriptif" OR $ci_ins_document=="text_area") {
				$script = "ins_document=".$ci_ins_document;
		}
	}

	$ci_ins_image = _request('ins_image');	
	if ($ci_ins_image) {
		if ($ci_ins_image=="descriptif" OR $ci_ins_image=="text_area") {
				$script = "ins_image=".$ci_ins_image;
		}
	}	
//--------- Fin ajout CI ---------

	// on joint un document deja dans le site
	if (_request('joindre_mediatheque')){
            if (_request('refdoc_joindre')){
		$refdoc_joindre = _request('refdoc_joindre');
		$refdoc_joindre = strtr($refdoc_joindre,";,-","   ");
		$refdoc_joindre = explode(" ",$refdoc_joindre);
		include_spip('action/editer_document');
		foreach($refdoc_joindre as $j){
			if ($j = intval(preg_replace(',^(doc|document|img),','',$j))){
				// lier le parent en plus
				$champs = array('ajout_parents' => array("$objet|$id_objet"));
				document_modifier($j,$champs);
				if (!$ancre)
					$ancre = $j;
				$sel[] = $j;
				$res['message_ok'] = _T('medias:document_attache_succes');
			}
		}
		if ($sel)
			$res['message_ok'] = singulier_ou_pluriel(count($sel),'medias:document_attache_succes','medias:nb_documents_attache_succes');
		set_request('refdoc_joindre',''); // vider la saisie
            }
	}
	// sinon c'est un upload
	else {
//--------- Debut ajout CI ---------
		// basculer en mode document le cas echeant mais pas pour le deballage d'un ZIP
		if ((!_request('options_upload_zip') OR _request('options_upload_zip')!='deballe')){
			if (cisf_mode_document())
				$mode = 'document';
			elseif (cisf_mode_image())
				$mode = 'image';
		}
//--------- Fin ajout CI ---------

		$ajouter_documents = charger_fonction('ajouter_documents', 'action');
		$mode = joindre_determiner_mode($mode,$id_document,$objet);
		include_spip('inc/joindre_document');
		$files = joindre_trouver_fichier_envoye();

		$nouveaux_doc = $ajouter_documents($id_document,$files,$objet,$id_objet,$mode);
		
		if (defined('_tmp_zip'))
			unlink(_tmp_zip);
		if (defined('_tmp_dir'))
			effacer_repertoire_temporaire(_tmp_dir);

		// checker les erreurs eventuelles
		$messages_erreur = array();
		$nb_docs = 0;
		foreach ($nouveaux_doc as $doc) {
			if (!is_numeric($doc))
				$messages_erreur[] = $doc;
			// cas qui devrait etre traite en amont
			elseif(!$doc){
				$messages_erreur[] = _T('medias:erreur_insertion_document_base',array('fichier'=>'<em>???</em>'));
			}
			else{
				if (!$ancre)
					$ancre = $doc;
				$sel[] = $doc;
			}
		}
		$ci_docs = $sel;
		if (count($messages_erreur))
			$res['message_erreur'] = implode('<br />',$messages_erreur);
		if ($sel){
			$res['message_ok'] = singulier_ou_pluriel(count($sel),'medias:document_installe_succes','medias:nb_documents_installe_succes');
		}
		if ($ancre)
			$res['redirect'] = "#doc$ancre";
	}
	if (count($sel) OR isset($res['message_ok'])){
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

//--------- Debut ajout CI ---------
	$id_article = intval(_request('id_article'));
	if ($script)
		$script = "&".$script;

	if (count($ci_docs)>1){
		include_spip('inc/cisf_commun');
		cisf_inserer_raccourci_doc($ci_docs,$id_article,$ci_ins_document,$ci_ins_image,'left');
		$res['redirect'] = generer_url_public("cisf_article", "id_article=".$id_article);	
	} else {
		$res['redirect'] = generer_url_public("cisf_doc_modifier", "id_article=$id_article&show_docs=".$ancre.$script);
	}
//--------- Fin ajout CI ---------
	
	return $res;
}

?>