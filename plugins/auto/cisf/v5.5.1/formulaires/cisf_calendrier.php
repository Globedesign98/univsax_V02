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

function formulaires_cisf_calendrier_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{	
	if (!autoriser('modifier', 'article', $id_article))
		return false;

	if (cisf_indesirable())
		return false;

	$valeurs = formulaires_editer_objet_charger('article',$id_article,$id_rubrique,$lier_trad,$retour,$config_fonc,$row,$hidden);

	$valeurs['_hidden'] = "<input type='hidden' name='id_article' value='$id_article' />";

	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;
	
	// Imp�ratif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_calendrier",$id_article);
	

	return $valeurs;
}

function formulaires_cisf_calendrier_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_calendrier_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();
        
	// Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
	
	
	if ($id_article>0 AND !isset($_POST['annuler'])) {

		$supprimer = cisf_cireqsecure('supprimer');
		
		if ($supprimer AND $supprimer=='supprimer') {
			$date = sprintf("%04s",0) . '-' 
				. sprintf("%02s",0) . '-'
				. sprintf("%02s",0) . ' ' 
				. sprintf("%02s",0) . ':'
				. sprintf("%02s",0) . ':' 
				. sprintf("%02s",0);
			
			sql_updateq("spip_articles", array("date_redac" => $date), "id_article=$id_article");

		} else {
		
			// date dans le calendrier
			$dateredaction = cisf_cireqsecure('dateredaction');
			$heureredaction = cisf_cireqsecure('heureredaction');
			
		
			if ($dateredaction) {
				$jour = substr($dateredaction,0,2);
				$mois = substr($dateredaction,3,2);
				$annee = substr($dateredaction,6,4);
	
	 			if ($heureredaction){
		 			$heure = substr($heureredaction,0,2);
					$minute = substr($heureredaction,3,2);
	 			} else {
		 			$heure = '00';
					$minute = '00';
				}
	
				$date = sprintf("%04s",$annee) . '-' 
					. sprintf("%02s",$mois) . '-'
					. sprintf("%02s",$jour) . ' ' 
					. sprintf("%02s",$heure) . ':'
					. sprintf("%02s",$minute) . ':' 
					. sprintf("%02s",0);
				
				sql_updateq("spip_articles", array("date_redac" => $date), "id_article=$id_article");
			}
		}		
	}
	
	$res['message_ok'] = "";
	$res['redirect'] = $retour;

	return $res;

}

?>