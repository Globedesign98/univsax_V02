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

function formulaires_cisf_motcle_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
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
	$valeurs['_action'] = array("cisf_motcle",$id_article);

	$valeurs['tableau_mots'] = array();
	$valeurs['liste_mots'] = "";
	
	// auteurs de cet article m�moris�s dans la base
	if ($id_article>0) {
		$oldmots = array();	
                $result = sql_select("id_mot", "spip_mots_liens", "objet='article' AND id_objet=$id_article","","id_mot");

		while ($row = sql_fetch($result)) {
			$oldmots[] = $row['id_mot'];
		}
		if ($oldmots) {
			$valeurs['tableau_mots'] = $oldmots;
			$valeurs['liste_mots'] = implode(",", $oldmots);
		}
	}

	return $valeurs;
}

function formulaires_cisf_motcle_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_motcle_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();
        
	// Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
	
	// Traitement et aiguillage
	if (!isset($_POST['annuler'])) {
		return cisf_maj_article_motcle($id_article,$retour);
	} else {
		$res['message_ok'] = "";
		$res['redirect'] = $retour;
		return $res;
	}
}


/**
 * Mise a jour de la liste des mots cles affectes a l'article
 *
 * @param 
 * @return tableau des erreurs
 */
function cisf_maj_article_motcle($id_article='new', $retour='') {
        $res = array();
	
	// si id_article est un nombre
	if ($ci_id_article = intval($id_article)) {
                $insertmotscle = array();
                $deletemotscle = array();
                $oldmotscle = array();
	
		$motscle = cisf_cireqsecure('motscle');
		
		$ci_motscle_img_avant = cisf_cireqsecure('cimodif_img_avant');
		
		// mots cle de cet article memorises dans la base
		$result = sql_select("id_mot", "spip_mots_liens", "objet='article' AND id_objet=$ci_id_article","","id_mot");
		while ($row = sql_fetch($result)) {
				$oldmotscle[] = $row['id_mot'];
		}
			
		// Prevention des acces concurents
		$ci_motscle_img_base = "";
		if ($oldmotscle) $ci_motscle_img_base = implode(",", $oldmotscle);
		$cimotscle_concurrent=false;
		if ($ci_motscle_img_avant) {
			if ($ci_motscle_img_base) {
				if (!($ci_motscle_img_avant==$ci_motscle_img_base)) $cimotscle_concurrent=true;
			} else {
				$cimotscle_concurrent=true;
			}		
		} elseif ($ci_motscle_img_base) $cimotscle_concurrent=true;
	
		if (!$cimotscle_concurrent) {
	
			if (isset($motscle) AND is_array($motscle)) {
				if (isset($oldmotscle) AND is_array($oldmotscle)) {
					foreach ($motscle as $motcle) {
						$motcle = intval($motcle);
						if (in_array($motcle,$oldmotscle)){
							// si le nouveau motcle est le m�me que celui en base, ne rien faire
						} elseif ($motcle>0) {
							$insertmotscle[] = $motcle;
						}		
					}
				} else {
					foreach ($motscle as $motcle) {
						$motcle = intval($motcle);
						if ($motcle>0) {
							$insertmotscle[] = $motcle;
						}		
					}
				}
			}
			
			if (isset($oldmotscle) AND is_array($oldmotscle)) {
				reset($oldmotscle);
				if (isset($motscle) AND is_array($motscle)) {
					reset($motscle);
					foreach ($oldmotscle as $oldmotcle) {
						$oldmotcle = intval($oldmotcle);
						if (in_array($oldmotcle,$motscle)){
							// si l'ancien mot est toujours l�, ne rien faire
						} else {
							$deletemotscle[] = $oldmotcle;
						}		
					}
				} else {
					foreach ($oldmotscle as $oldmotcle) {
						$oldmotcle = intval($oldmotcle);
						if ($oldmotcle>0) {
							$deletemotscle[] = $oldmotcle;
						}		
					}
				}
			}
			
			if ($insertmotscle) {
				foreach ($insertmotscle as $insertmotcle) {
                                        sql_insertq('spip_mots_liens', array('id_mot' => $insertmotcle, 'objet' => 'article', 'id_objet' => $ci_id_article));
				}	
			}
			
			if ($deletemotscle) {
				foreach ($deletemotscle as $deletemotcle) {
					sql_delete("spip_mots_liens", "id_mot=$deletemotcle AND objet='article' AND id_objet=$ci_id_article");
				}	
			}

		}
		
	}

        $res['message_ok'] = "";
        $res['redirect'] = $retour;
        
	return $res;
}


?>