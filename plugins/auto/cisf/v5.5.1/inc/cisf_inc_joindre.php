<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 

/*-----------------------------------------------------------------
// Fonction relative a la balise propre au plugin
------------------------------------------------------------------*/

// Joindre un document 
// Adapte de inc_documenter_objet_dist
function cisf_joindre($Pile) {
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
	$mode = 'choix';
	$titre = _T('bouton_ajouter_image_document');
	$icone = 'doc-24.gif';

	if (isset($Pile[0]['show_docs']))
		// remplacer une piece jointe
		$id_document = intval($Pile[0]['show_docs']);
	else
		$id_document = 0;

	// Bouton ajout document ou bouton ajout image	
	if (_request('cisf_ajout')) {
		if (_request('cisf_ajout')=='document') {
			$mode = 'document';
			$titre = _T('bouton_ajouter_document');
		} elseif (_request('cisf_ajout')=='image') {
			$titre = _T('bouton_ajouter_image');
			$icone = 'image-24.gif';
		}
	}

	// cas particulier de l'insertion d'un document ou d'une image dans le texte
	$ci_ins_document = cisf_cireqsecure('ins_document');
	if ($ci_ins_document) {
		if ($ci_ins_document=="descriptif" OR $ci_ins_document=="text_area") {
				$script = parametre_url($script,'ins_document',$ci_ins_document);
				$mode = 'document';
				$titre = _T('bouton_ajouter_document');
		}
	}	
	$ci_ins_image = cisf_cireqsecure('ins_image');
	if ($ci_ins_image) {
		if ($ci_ins_image=="descriptif" OR $ci_ins_image=="text_area") {
				$script = parametre_url($script,'ins_image',$ci_ins_image);
				$titre = _T('bouton_ajouter_image');
				$icone = 'image-24.gif';
		}
	}	

	// Configuration de SPIP
	$ciajoutarticle = true;
	if ($GLOBALS['meta']["documents_$type"]=='non'){
		if ($mode=='document')
			$ciajoutarticle = false;
		else
			$mode = 'image';			
	}
	
	// Joindre ?
	if  (!$ciajoutarticle)
		$res = _T('cisf:eq_ajout_doc_art_interdit');		
	elseif (!autoriser('joindredocument', $type, $id_article)
	OR !$flag_editable)
		$res = _T('avis_acces_interdit');		
	else {
		
		$joindre = charger_fonction('joindre', 'inc');
		$res = $joindre(array(
			'cadre' => 'relief',
			'icone' => $icone,
			'fonction' => 'creer.gif',
			'titre' => $titre,
			'script' => $script,
			'args' => "id_$type=$id_article",
			'id' => $id_article,
			'intitule' => _T('info_telecharger_ordinateur'),
			'mode' => $mode,
			'type' => $type,
			'ancre' => '',
			'id_document' => $id_document,
			'iframe_script' => ''
//			'iframe_script' => generer_url_ecrire("documenter","id_$type=$id_article&type=$type",true)
		));
	}
	
	$res = str_replace("size='15'","size='55'",$res);
	$res = str_replace("name='url'","name='url' size='55'",$res);
		
	
	return $res;
}


/*-----------------------------------------------------------------
// Filtres propres au plugin
------------------------------------------------------------------*/

// Poids maximum pour l'upload
function cisf_upload_max_filesize($id_article) {
	$return = "";
	
        if (defined('_DIR_PLUGIN_BIGUP') AND cisf_utiliser_bigup()){
                include_spip('inc/config');
                $maxFileSize = intval(lire_config('bigup/max_file_size', 0));
                if ($maxFileSize > 0){
                        $return = $maxFileSize." Mo";
                }
        
        } elseif (function_exists('ini_get')) {
		if (($post_max = ini_get('post_max_size')) AND ($upload_max = ini_get('upload_max_filesize'))) {
			$max_upload_size = min(cisf_ini_to_num($post_max), cisf_ini_to_num($upload_max));
			if ($max_upload_size > 0){
				$return = ($max_upload_size/(1048576))." Mo";
                        }
		}
	}

        $return = pipeline('cisf_max_filesize', array('args'=>array(), 'data'=>$return));
        
	return $return;
}

// Transforme la notation de php.ini (comme '2M') en un entier (2*1048576)
function cisf_ini_to_num($valeur){ 
    $valeur = trim($valeur);
    $unite = substr($valeur, -1);
    $return = substr($valeur, 0, -1);
    $return = floatval($return);
    
    switch(strtoupper($unite)){
    case 'G':
        $return *= 1073741824;
        break;
    case 'M':
        $return *= 1048576;
        break;
    case 'K':
        $return *= 1024;
        break;
    }

    return $return;
}

function cisf_mode_document($var=''){
	$mode_document = false;
	
	$ci_ins_document = _request('ins_document');	
	if ($ci_ins_document) {
		if ($ci_ins_document=="descriptif" OR $ci_ins_document=="text_area") {
			$mode_document = true;
		}
	}
	
	$cisf_ajout = _request('cisf_ajout');	
	if ($cisf_ajout) {
		if ($cisf_ajout=="document") {
			$mode_document = true;
		}
	}
	
	return $mode_document;
}

function cisf_mode_image($var=''){
	$mode_image = false;
	
	$ci_ins_image = _request('ins_image');	
	if ($ci_ins_image) {
		if ($ci_ins_image=="descriptif" OR $ci_ins_image=="text_area") {
			$mode_image = true;
		}
	}
	
	$cisf_ajout = _request('cisf_ajout');	
	if ($cisf_ajout) {
		if ($cisf_ajout=="image") {
			$mode_image = true;
		}
	}
	
	return $mode_image;
}

function cisf_utiliser_bigup($arg='') {
    $cibigup = '';

    if (defined('_DIR_PLUGIN_BIGUP')){
        $cibigup = 'oui';
        
        if (!defined('_CI_FORCER_UTILISER_BIGUP') OR strtolower(_CI_FORCER_UTILISER_BIGUP)!='oui'){
            cisf_ecrire_preferences_bigup();

            if (isset($GLOBALS['visiteur_session']['prefs']['ci_bigup']) AND $GLOBALS['visiteur_session']['prefs']['ci_bigup']=='non'){
                $cibigup = '';
            }
        }
    }
    
    return $cibigup;
}

function cisf_ecrire_preferences_bigup() {
    static $done = false;
    $ci_bigup_actuel = '';
    $ci_bigup_nouveau = '';

    if (!$done) {
        $done = true;
    
        if (isset($GLOBALS['visiteur_session']['id_auteur']) AND intval($GLOBALS['visiteur_session']['id_auteur'])) {

            // preference actuelle
            if (isset($GLOBALS['visiteur_session']['prefs']['ci_bigup'])){
                $ci_bigup_actuel = $GLOBALS['visiteur_session']['prefs']['ci_bigup'];
            }

            // nouvelle preference
            if ($ci_req_bigup = _request('ci_bigup')) {
                if (in_array($ci_req_bigup,array('oui','non'))) {
                    if ($ci_req_bigup=='oui' AND $ci_bigup_actuel=='non'){
                        $ci_bigup_nouveau = 'oui';
                    }
                    if ($ci_req_bigup=='non' AND $ci_bigup_actuel!='non'){
                        $ci_bigup_nouveau = 'non';
                    }
                }
            }

            if ($ci_bigup_nouveau){
                include_spip('action/editer_auteur');
                $GLOBALS['visiteur_session']['prefs']['ci_bigup'] = $ci_bigup_nouveau;
                $c = array('prefs' => serialize($GLOBALS['visiteur_session']['prefs']));

                auteur_modifier($GLOBALS['visiteur_session']['id_auteur'], $c);
            }
        }
    }

    return true;
}

function cisf_choix_utiliser_bigup($arg='') {
    $cibigup = '';

    if (defined('_DIR_PLUGIN_BIGUP')){
        $cibigup = 'oui';
    }
    
    return $cibigup;
}

function cisf_lien_ancien_upload($arg='') {
    $return = '';

    if (defined('_DIR_PLUGIN_BIGUP')){
        if (!defined('_CI_FORCER_UTILISER_BIGUP') OR strtolower(_CI_FORCER_UTILISER_BIGUP)!='oui'){
            if (cisf_utiliser_bigup()){
               $return = '<div class="choix_utiliser_bigup"><a href="'.parametre_url(self(), 'ci_bigup', 'non', '&').'">'._T('cisf:ne_pas_utiliser_bigup').'</a></div>';
            } else {
               $return = '<div class="choix_utiliser_bigup"><a href="'.parametre_url(self(), 'ci_bigup', 'oui', '&').'">'._T('cisf:utiliser_bigup').'</a></div>';
            }
        }
    }
    
    return $return;
}

?>