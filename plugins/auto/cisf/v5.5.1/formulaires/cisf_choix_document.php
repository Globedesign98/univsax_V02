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
include_spip('inc/editer');
include_spip('inc/cisf_commun');


function formulaires_cisf_choix_document_charger_dist($id_article=0,$id_rubrique=0,$mode='auto', $debut_document=0, $recherche=''){

	if (!autoriser('modifier', 'article', $id_article))
		return false;

	if (cisf_indesirable())
		return false;

        $valeurs = array();
		
	// ======= Debut du cas ou javascript est desactive =========
	$js = true;
	if (is_array($_GET) AND isset($_GET["cilienget"]))
		$js = false;
	if (is_array($_POST) AND isset($_POST["cilieninput"]))
		$js = true;

	if (!$js){
		$cilieninput = '';
		if (is_array($_POST)) {
			if (isset($_POST["cilieninput"])){
					$cilieninput = $_POST["cilieninput"];
			}
		}
		if (!$cilieninput){
			if (is_array($_GET)) {
				if (isset($_GET["cilienget"])){
						$cilieninput = $_GET["cilienget"];
				}
			}
		}
		
		// Traitement et retour
		$res = cisf_choix_document_traitement($id_article,$mode,$cilieninput);

		$aiguillage = generer_url_public("cisf_article", "id_article=".$id_article);	
		$aiguillage = str_replace("&amp;","&",$aiguillage);
		include_spip('inc/headers');
		redirige_par_entete($aiguillage);
	}		
	// ======= Fin du cas ou javascript est desactive =========
		
		
	$valeurs['id_article'] = $id_article;
	$valeurs['id_rubrique'] = $id_rubrique;

	// Imperatif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_choix_document",$id_article);

	// request
//	$recherche = _request('recherche');
	$media = _request('media');
	$typedoc = _request('extension');
	$tri = _request('tri');
	$datedebut = _request('datedebut');
	$datefin = _request('datefin');

	// valeurs par defaut
	$valeurs['recherche'] = ''; // nommage strict
	$valeurs['extension'] = ''; // nommage strict
	$valeurs['cimedia'] = '';
	$valeurs['citri'] = 'id_document';
	$valeurs['citriinverse'] = '';
	$valeurs['cichoixtri'] = 'id_document';
        $valeurs['cichoixordre'] = '-1';
	$valeurs['cidebut'] = '0000-01-01 00:00:00';
	$valeurs['cifin'] = '9000-01-01 23:59:59';
	
	// ajout d'un document ou d'une image
	$cisf_ajout = _request('cisf_ajout');
	if ($cisf_ajout=='document' OR _request('ins_document'))
		$valeurs['cimedia'] = array('file','audio','video');	
	elseif ($cisf_ajout=='image' OR _request('ins_image'))
		$valeurs['cimedia'] = array('image');	
	else
		$valeurs['cimedia'] = array('file','image','audio','video');	
	
	// verifications prealables
	$tableau_tri = array('titre','date','taille','id_document');
	$tableau_tri_inverse = array('titredesc','datedesc','tailledesc','id_documentdesc');

	if ($recherche){
		if (cisf_recherche_autorise($recherche))
			$valeurs['recherche'] = cisf_filtrer_recherche($recherche);		
		else
			return false;
	}
	if ($media){
		if (in_array($media,array('file','image','audio','video')))
			$valeurs['cimedia'] = $media;
		elseif ($media=='tous')
			$valeurs['cimedia'] = array('file','image','audio','video');
		elseif ($media=='document')
			$valeurs['cimedia'] = array('file','audio','video');			
		else
			return false;
	}
	if ($typedoc){
		if (cisf_extension_est_utilisee($typedoc)){
			$valeurs['extension'] = $typedoc;
			// priorite a l'extension
			$media_defaut = sql_getfetsel('media_defaut','spip_types_documents','extension='.sql_quote($typedoc));
			if (in_array($media,array('file','image','audio','video')) AND $media!=$media_defaut)
				$valeurs['cimedia'] = $media_defaut;
			elseif ($media=='document' AND $media_defaut=='image')
				$valeurs['cimedia'] = $media_defaut;
		} else {
			return false;
		}
	}
	if ($tri AND !in_array($tri,$tableau_tri) AND !in_array($tri,$tableau_tri_inverse))
		return false;

	if ($tri AND in_array($tri,$tableau_tri)){
		$valeurs['citri'] = $tri;
		$valeurs['citriinverse'] = '';
		$valeurs['cichoixtri'] = $tri;
		$valeurs['cichoixordre'] = '1';
	}		
	if ($tri AND in_array($tri,$tableau_tri_inverse)){
		$valeurs['citri'] = '';
		$valeurs['citriinverse'] = substr($tri,0,-4);
		$valeurs['cichoixtri'] = substr($tri,0,-4);
		$valeurs['cichoixordre'] = '-1';
	}
	if ($datedebut){
		 if (cisf_verifier_et_convertir_date($datedebut))
			$valeurs['cidebut'] = cisf_verifier_et_convertir_date($datedebut).' 00:00:00';
		else
			return false;
	}
	if ($datefin){
		if (cisf_verifier_et_convertir_date($datefin))
			$valeurs['cifin'] = cisf_verifier_et_convertir_date($datefin).' 23:59:59';
		else
			return false;
	}

        $valeurs['debut_documents'] = $debut_document;
	
	return $valeurs;
}


function formulaires_cisf_choix_document_verifier_dist($id_article=0,$id_rubrique=0,$mode='auto', $debut_document=0, $recherche=''){
	$erreurs = array();
	return $erreurs;
}


function formulaires_cisf_choix_document_traiter_dist($id_article=0,$id_rubrique=0,$mode='auto', $debut_document=0, $recherche=''){
	$res = array('editable'=>true);
	$sel = array();	
	$script = '';

	$cilieninput = '';
	if (is_array($_POST)) {
		if (isset($_POST["cilieninput"])){
				$cilieninput = $_POST["cilieninput"];
		}
	}
	
	$res['message_ok'] = cisf_choix_document_traitement($id_article,$mode,$cilieninput);
	
	$res['redirect'] = generer_url_public("cisf_article", "id_article=".$id_article);	
	
	return $res;
}


function cisf_choix_document_traitement($id_article,$mode,$cilieninput){
	$return = '';
	
	// cas particulier de l'insertion d'un document ou d'une image dans le texte
	$ci_ins_document = _request('ins_document');
	$ci_ins_image = _request('ins_image');	

	// on joint un document deja dans le site
	if ($cilieninput) {
		if (strlen($cilieninput)>3) {
			if (substr($cilieninput,0,3)=="bt_") {
				if ($j = intval(substr($cilieninput,3))){
					// lier le parent en plus
					include_spip('action/editer_document');
					$champs = array('ajout_parents' => array("article|$id_article"));
					document_modifier($j,$champs);
					$return = _T('medias:document_attache_succes');
				
					if ($id_article AND ($ci_ins_document OR $ci_ins_image)) {
						include_spip('inc/cisf_commun');
						cisf_inserer_raccourci_doc($j,$id_article,$ci_ins_document,$ci_ins_image,'left');
					}
				}
			}
		}
	}	
	
	return $return;
}

function cisf_choix_document_info($arg=''){
    $return = '';
    
    if (defined('_DIR_PLUGIN_CIRR')){
        $ciantihack = cisf_choix_document_antihack();
        if (cirr_id_auteur_restreint($GLOBALS['visiteur_session']['id_auteur'])) {
            if ($ciantihack){
                $return = _T('cisf:choix_doc_restreint_antihack');
            } else {
                $return = _T('cisf:choix_doc_restreint');
            }
        } else {
            if ($ciantihack){
                $return = _T('cisf:choix_doc_antihack');
            }
        }
    }
    
    return $return;
}

function cisf_choix_document_antihack($arg=''){
    $return = '';
    
    if (defined('_DIR_PLUGIN_CIRR')){
        if ($GLOBALS['visiteur_session']['statut']!='0minirezo') {
            if (defined('_CIRR_ANTI_HACK') AND _CIRR_ANTI_HACK=='oui'){	
                $return = 'oui';
            }
        }
    }
    
    return $return;
}

?>