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

include_spip('inc/actions');
include_spip('inc/editer');
include_spip('inc/documents');

include_spip('inc/autoriser');
include_spip('formulaires/editer_document');
include_spip('inc/cisf_inc_joindre');

function formulaires_cisf_editer_document_charger_dist($id_document='new', $id_parent='', $retour='', $lier_trad=0, $config_fonc='documents_edit_config', $row=array(), $hidden=''){
	$valeurs = formulaires_editer_document_charger_dist($id_document, $id_parent, $retour, $lier_trad, $config_fonc, $row, $hidden);

        if (cisf_utiliser_bigup()) {
            $valeurs['_bigup_rechercher_fichiers'] = true;
        }

        return $valeurs;
}

function formulaires_cisf_editer_document_verifier_dist($id_document='new', $id_parent='', $retour='', $lier_trad=0, $config_fonc='documents_edit_config', $row=array(), $hidden=''){
	$erreurs = formulaires_editer_objet_verifier('document',$id_document,is_numeric($id_document)?array():array('titre'));

	// verifier l'upload si on a demande a changer le document
	if (_request('joindre_upload') OR _request('joindre_ftp') OR _request('joindre_distant')){
		if (_request('copier_local')){
		}
		else {
			$verifier = charger_fonction('verifier','formulaires/joindre_document');
			$erreurs = array_merge($erreurs,$verifier($id_document));
		}
	}

	return $erreurs;
}

// http://doc.spip.org/@inc_editer_article_dist
function formulaires_cisf_editer_document_traiter_dist($id_document='new', $id_parent='', $retour='', $lier_trad=0, $config_fonc='documents_edit_config', $row=array(), $hidden=''){
        $id_document = intval($id_document);
    
	$res = formulaires_editer_objet_traiter('document',$id_document,$id_parent,$lier_trad,$retour,$config_fonc,$row,$hidden);
	$autoclose = "<script>if (window.jQuery) jQuery.modalboxclose();</script>";
	if (_request('copier_local')
	  OR _request('joindre_upload')
	  OR _request('joindre_ftp')
	  OR _request('joindre_distant')
	  OR _request('joindre_zip')){
		$autoclose = "";
		if (_request('copier_local')){
			$copier_local = charger_fonction('copier_local','action');
			$res = array('editable'=>true);
			if (($err=$copier_local($id_document))===true)
				$res['message_ok'] = (isset($res['message_ok'])?$res['message_ok'].'<br />':'')._T('medias:document_copie_locale_succes');
			else
				$res['message_erreur'] = (isset($res['message_erreur'])?$res['message_erreur'].'<br />':'').$err;
		}
		else {
			// liberer le nom de l'ancien fichier pour permettre le remplacement par un fichier du meme nom
			if ($ancien_fichier = sql_getfetsel('fichier','spip_documents','id_document='.intval($id_document))
				AND !tester_url_absolue($ancien_fichier)
				AND @file_exists($rename = get_spip_doc($ancien_fichier))){
				@rename($rename,"$rename--.old");

			}
			$traiter = charger_fonction('traiter','formulaires/joindre_document');
			$res2 = $traiter($id_document);
			if (isset($res2['message_erreur'])){
				$res['message_erreur'] = $res2['message_erreur'];
				// retablir le fichier !
				if ($rename)
					@rename("$rename--.old",$rename);
			} else {
				// supprimer vraiment le fichier initial
				spip_unlink("$rename--.old");
                        
                                // AJOUT CI : changer la date du document
                                sql_updateq('spip_documents', array('date'=>date('Y-m-d H:i:s')), "id_document=$id_document");
                        }
		}
	}

	$res['message_ok'] = "";
	
	$fond = "cisf_article";
	$id_article = intval(_request('id_article'));
//	$retour = generer_url_public("$fond", "id_article=$id_article");
        $retour = generer_url_public("cisf_doc_modifier", "show_docs=".$id_document."&id_article=$id_article");
	
    $res['redirect'] = $retour;

	return $res;
}

?>