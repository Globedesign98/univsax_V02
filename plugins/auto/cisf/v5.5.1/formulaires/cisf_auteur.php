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

function formulaires_cisf_auteur_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{	
	if (!autoriser('modifier', 'article', $id_article))
		return false;
	
	if (cisf_indesirable())
		return false;

	$valeurs = formulaires_editer_objet_charger('article',$id_article,$id_rubrique,$lier_trad,$retour,$config_fonc,$row,$hidden);

	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;
	
	// Imp�ratif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_auteur",$id_article);
	
	$valeurs['tableau_auteurs'] = array();
	$valeurs['liste_auteurs'] = "";

	// auteurs de cet article m�moris�s dans la base
	if ($id_article>0) {
		$oldauteurs = array();
                $result = sql_select("id_auteur", "spip_auteurs_liens", "objet='article' AND id_objet=$id_article","","id_auteur");

		while ($row = sql_fetch($result)) { 
				$oldauteurs[] = $row['id_auteur'];
		}
		
		if ($oldauteurs) {
			$valeurs['tableau_auteurs'] = $oldauteurs;
			$valeurs['liste_auteurs'] = implode(",", $oldauteurs);
		}
	}

	return $valeurs;
}

function formulaires_cisf_auteur_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_auteur_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();

	// Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
	
	// Traitement et aiguillage
	if (!isset($_POST['annuler'])) {
		return cisf_maj_article_auteur($id_article, $retour);
	} else {
		$res['message_ok'] = "";
		$res['redirect'] = $retour;
		return $res;
	}
}

/**
 * Mise a jour de la liste des auteurs affectes a l'article
 *
 * @param 
 * @return tableau des erreurs
 */
function cisf_maj_article_auteur($id_article='new', $retour='') {
        $res = array();
	
	// si id_article est un nombre
	if ($ci_id_article = intval($id_article)) {
	
		$auteurs = cisf_cireqsecure('auteurs');
		$ci_auteurs_img_avant = cisf_cireqsecure('cimodif_img_avant');
		
		if ($ci_id_article>0) {
			if (!$auteurs) $auteurs = array();
			$insertauteurs = array();
			$deleteauteurs = array();
			$oldauteurs = array();
			
			// auteurs de cet article memorises dans la base
                        $result = sql_select("id_auteur", "spip_auteurs_liens", "objet='article' AND id_objet=$ci_id_article","","id_auteur");
			while ($row = sql_fetch($result)) {
					$oldauteurs[] = $row['id_auteur'];
			}
				
			// Prevention des acces concurents
			$ci_auteurs_img_base = "";
			if ($oldauteurs) $ci_auteurs_img_base = implode(",", $oldauteurs);
			$ciauteurs_concurrent=false;
			if ($ci_auteurs_img_avant) {
				if ($ci_auteurs_img_base) {
					if (!($ci_auteurs_img_avant==$ci_auteurs_img_base)) $ciauteurs_concurrent=true;
				} else {
					$ciauteurs_concurrent=true;
				}		
			} elseif ($ci_auteurs_img_base) $ciauteurs_concurrent=true;
		
			if (!$ciauteurs_concurrent) {
		
				if (isset($auteurs) AND is_array($auteurs)) {
					foreach ($auteurs as $auteur) {
						$auteur = intval($auteur);
						if (in_array($auteur,$oldauteurs)){
							// si le nouvel auteur est le m�me que celui en base, ne rien faire
						} elseif ($auteur>0) {
							$insertauteurs[] = $auteur;
						}		
					}
				}

				if (isset($oldauteurs) AND is_array($oldauteurs) AND isset($auteurs) AND is_array($auteurs)) {
					reset($oldauteurs);
					reset($auteurs);
					foreach ($oldauteurs as $oldauteur) {
						$oldauteur = intval($oldauteur);
						if (in_array($oldauteur,$auteurs)){
							// si l'ancien auteur est toujours la, ne rien faire
						} else {
							$deleteauteurs[] = $oldauteur;
						}		
					}
				}
							
				if ($insertauteurs) {
					foreach ($insertauteurs as $insertauteur) {
                                                sql_insertq("spip_auteurs_liens", array('id_auteur' => $insertauteur, 'objet' => 'article', 'id_objet' => $ci_id_article));
					}	
				}
				
				if ($deleteauteurs) {
					foreach ($deleteauteurs as $deleteauteur) {
                                                sql_delete("spip_auteurs_liens", "id_auteur=$deleteauteur AND objet='article' AND id_objet=$ci_id_article");
					}	
				}
				
			}			
			 
		}
	}

        $res['message_ok'] = "";
        $res['redirect'] = $retour;
        
	return $res;
}

?>