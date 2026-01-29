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

function formulaires_cisf_doc_modifier_charger_dist($id_document, $id_article, $id_rubrique, $retour='', $ins_document='', $ins_image='', $align_image='', $lier_trad=0, $config_fonc='', $row=array(), $hidden='')
{
	
	if (!autoriser('modifier', 'article', $id_article))
		return false;

	if (cisf_indesirable())
		return false;

	if (!autoriser('modifier', 'document', intval($id_document)))
		return false;
		
		
	// ======= Debut du cas ou javascript est desactive =========
	$js = true;
	if (is_array($_GET) AND isset($_GET["cilienget"]))
		$js = false;
	if (is_array($_POST) AND isset($_POST["cilieninput"]))
		$js = true;

	if (!$js){
		$cilieninput = '';
		if (is_array($_GET)) {
			if (isset($_GET["cilienget"])){
					$cilieninput = $_GET["cilienget"];
			}
		}
		
		// Cas annuler
		if ($cilieninput=="annuler"){
			include_spip('inc/headers');
			$retour_annuler = generer_url_public("cisf_article", "id_article=$id_article");
			$retour_annuler = str_replace("&amp;","&",$retour_annuler);
			redirige_par_entete($retour_annuler);
		}

		// Cas tourner l'image
			if (in_array($cilieninput,array('bt_tourner_gauche','bt_tourner_droite','bt_tourner_180'))) {
				$angle = 180;
				if ($cilieninput=='bt_tourner_gauche')
					$angle = -90;
				elseif ($cilieninput=='bt_tourner_droite')
					$angle = 90;
				
				include_spip('action/tourner');
				if ($id_document AND autoriser('modifier','document',$id_document))
					action_tourner_post($id_document,$angle);
			}
		
		// Cas de l'aiguillage
		$aiguillage = cisf_doc_modifier_aiguillage($cilieninput,$id_document,$id_article,$id_rubrique);
		if ($aiguillage){
			include_spip('inc/headers');
			$aiguillage = str_replace("&amp;","&",$aiguillage);
			redirige_par_entete($aiguillage);
		}	
	}	
	// ======= Fin du cas ou javascript est desactive =========
		
		
	$valeurs = formulaires_editer_objet_charger('document',$id_document,$id_article,$lier_trad,$retour,$config_fonc,$row,$hidden);

	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;

	// Imperatif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_doc_modifier",$id_document);

	// prefixe ci_ sinon, en cas d'erreur, l'url d'action sera nettoy�e
	// des champs figurant dans le tableau valeur. 
	$valeurs['ci_id_article'] = $id_article;
	$valeurs['ci_ins_document'] = $ins_document;
	$valeurs['ci_ins_image'] = $ins_image;
	$valeurs['align_image'] = $align_image;
	
	$documents = _request("show_docs");
	if ($documents)	{		
		$pos = strpos($documents, ",");
		if ($pos === false) {
			// au plus un document
		} else {
			// un zip decompresse, rediriger vers cisf_article
			
			// syntaxe avec '&' sinon cela ne fonctionne pas ici
			$ciredirect = generer_url_public('cisf_article').'&id_article='.$id_article;
			include_spip('inc/headers');
		    redirige_par_entete($ciredirect);			
		}
	}
	
	return $valeurs;
}

function formulaires_cisf_doc_modifier_verifier_dist($id_document, $id_article, $id_rubrique, $retour='', $ins_document='', $ins_image='', $align_image='', $lier_trad=0, $config_fonc='', $row=array(), $hidden='')
{
	$erreurs = array();

	return $erreurs;
}

function formulaires_cisf_doc_modifier_traiter_dist($id_document, $id_article, $id_rubrique, $retour='', $ins_document='', $ins_image='', $align_image='', $lier_trad=0, $config_fonc='', $row=array(), $hidden='')
{
        $res = array();
	
	$cilieninput = '';
	if (is_array($_POST)) {
		if (isset($_POST["cilieninput"])){
				$cilieninput = $_POST["cilieninput"];
		}
	}	
	
	// Pr�paration de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article");
	
	// Traitement et aiguillage

	//-------------------------------------------------------
	// securite
	$ci_id_article = intval($id_article);
	$ci_id_document = $id_document;
	
	$cititre = cisf_cireqsecure('titre');
	$cidescriptif = cisf_cireqsecure('descriptif');
	$largeur_document = cisf_cireqsecure('largeur_document');
	$hauteur_document = cisf_cireqsecure('hauteur_document');	
        $cicredits = cisf_cireqsecure('credits');

	if ($GLOBALS['spip_version_branche']>=4){
		$cialt = cisf_cireqsecure('alt');
        }
	//-------------------------------------------------------
	// Enregistrer les modifications
	
	if ($ci_id_document>0 AND $cilieninput!='annuler') {
		$modifs = array();
		if ($cititre !== NULL)
			$modifs["titre"] = $cititre;
		else
			$modifs["titre"] = '';

		if ($cidescriptif !== NULL)
			$modifs["descriptif"] = $cidescriptif;
		else
			$modifs["descriptif"] = '';

                if ($cicredits !== NULL)
                        $modifs["credits"] = $cicredits;
                else
                        $modifs["credits"] = '';
			
		if ($GLOBALS['spip_version_branche']>=4){
			if ($cialt !== NULL)
				$modifs["alt"] = $cialt;
			else
				$modifs["alt"] = '';
		}
			
		if ($largeur_document>0 AND $hauteur_document>0) {
			$modifs["largeur"] = $largeur_document;
			$modifs["hauteur"] = $hauteur_document;
		}

		// Date du document
		$date_doc = cisf_cireqsecure('date_doc');
		$heure_doc = cisf_cireqsecure('heure_doc');
	
		if ($date_doc AND $heure_doc AND ($GLOBALS['meta']["documents_date"] == 'oui')) {
			$jour = substr($date_doc,0,2);
			$mois = substr($date_doc,3,2);
			$annee = substr($date_doc,6,4);
			$heure = substr($heure_doc,0,2);
			$minute = substr($heure_doc,3,2);
		
			$date = sprintf("%04s",$annee) . '-' 
				. sprintf("%02s",$mois) . '-'
				. sprintf("%02s",$jour) . ' ' 
				. sprintf("%02s",$heure) . ':'
				. sprintf("%02s",$minute) . ':' 
				. sprintf("%02s",0);
			
			$modifs["date"]	= $date;
		}

                // Cas tourner l'image
                if (in_array($cilieninput,array('bt_tourner_gauche','bt_tourner_droite','bt_tourner_180'))) {
                        $angle = 180;
                        if ($cilieninput=='bt_tourner_gauche')
                                $angle = -90;
                        elseif ($cilieninput=='bt_tourner_droite')
                                $angle = 90;

                        include_spip('action/tourner');
                        include_spip('inc/autoriser');
                        if ($id_document AND autoriser('modifier','document',$id_document))
                                action_tourner_post($id_document,$angle);
                }


                include_spip('inc/modifier');
                $invalideur = "";
                $indexation = false;

                // Si le document est publie, invalider les caches et demander sa reindexation
                $t = sql_getfetsel("statut", "spip_documents", 'id_document='.intval($ci_id_document));
                if ($t == 'publie') {
                        $invalideur = "id='id_document/$ci_id_document'";
                        $indexation = true;
                }

                if ($err = objet_modifier_champs('document', $ci_id_document,
                        array(
                                'invalideur' => $invalideur,
                                'indexation' => $indexation
                        ),
                        $modifs))
                        return $err;

                // Invalider les caches
                include_spip('inc/invalideur');
                suivre_invalideur("id='id_document/$ci_id_document'");	
		
	}	
	
	$aiguillage = cisf_doc_modifier_aiguillage($cilieninput,$id_document,$id_article,$id_rubrique);
	if ($aiguillage)
		$retour = $aiguillage;


	$res['message_ok'] = "";
	$res['redirect'] = $retour;

	return $res;
}


function cisf_doc_modifier_aiguillage($cilieninput,$id_document,$id_article,$id_rubrique) {
	$id_document = intval($id_document);
	$id_article = intval($id_article);
	$id_rubrique = intval($id_rubrique);
	$retour = '';

	if ($id_article>0 AND $id_document>0) {
		
		$ci_ins_document = cisf_cireqsecure('ins_document');
		$ci_ins_image = cisf_cireqsecure('ins_image');
		$ci_align_image = cisf_cireqsecure('align_image');
		$ci_arg = "";

		if ($ci_ins_document)
			$ci_arg .= "&ins_document=$ci_ins_document";
		if ($ci_ins_image)
			$ci_arg .= "&ins_image=$ci_ins_image";
		if ($ci_align_image)
			$ci_arg .= "&align_image=$ci_align_image";

	//-------------------------------------------------------
		if ($cilieninput=='annuler') {
			// ne rien faire
			
		} elseif ($cilieninput=='bt_vignette') {
			// ajouter une vignette
			$retour = generer_url_public("cisf_vignette", "id_article=$id_article&id_rubrique=$id_rubrique&id_document=$id_document".$ci_arg);
				
		} elseif ($cilieninput=='bt_vignette_supprimer') {
			// supprimer la vignette
			$id_vignette = sql_getfetsel('id_vignette','spip_documents','id_document='.intval($id_document));
			if ($id_vignette){
					$supprimer_document = charger_fonction('supprimer_document','action');
					$supprimer_document($id_vignette);
					$retour = generer_url_public("cisf_doc_modifier", "id_article=$id_article&id_rubrique=$id_rubrique&id_document=$id_document&show_docs=$id_document".$ci_arg);
			}
	//-------------------------------------------------------
	// Tourner l'image
		} elseif (in_array($cilieninput,array('bt_tourner_gauche','bt_tourner_droite','bt_tourner_180'))) {
			$retour = generer_url_public("cisf_doc_modifier", "id_article=$id_article&id_rubrique=$id_rubrique&id_document=$id_document&show_docs=$id_document".$ci_arg);

	//-------------------------------------------------------
	// Depot ou retrait du portfolio
		} elseif ($cilieninput=='bt_portfolio_img' OR $cilieninput=='bt_portfolio_doc') {
			// mettre dans le portfolio
			if ($cilieninput=='bt_portfolio_img')
				$ci_mode = "image";
			// retrait du portfolio
			if ($cilieninput=='bt_portfolio_doc')
				$ci_mode = "document";
				
			$retour_doc_modif = generer_url_public("cisf_doc_modifier", "id_article=$id_article&id_rubrique=$id_rubrique&id_document=$id_document&show_docs=$id_document".$ci_arg);
			$retour = generer_action_auteur('changer_mode_document', "$id_document/$ci_mode", $retour_doc_modif, false, '', true);

	//-------------------------------------------------------
	// Insertion d'un document ou d'une image dans le texte
		} else {
			cisf_inserer_raccourci_doc($id_document,$id_article,$ci_ins_document,$ci_ins_image,$ci_align_image);
		}
	}

	return $retour;
}

function cisf_doc_modifier_portfolio($arg='') {
    $return = '';
    
    if ($GLOBALS['spip_version_branche']<4){
        $return = 'oui';
    } else {
        if (defined('_COMPORTEMENT_HISTORIQUE_PORTFOLIO') AND _COMPORTEMENT_HISTORIQUE_PORTFOLIO === true){
            $return = 'oui';
        }
    }
    return $return;
}

?>