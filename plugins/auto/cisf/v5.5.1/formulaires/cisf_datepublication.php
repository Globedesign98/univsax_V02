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

function formulaires_cisf_datepublication_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
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
	$valeurs['_action'] = array("cisf_datepublication",$id_article);
	

	return $valeurs;
}

function formulaires_cisf_datepublication_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_datepublication_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();
        
	// Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
	
	
	if ($id_article>0 AND !isset($_POST['annuler'])) {
	
		// date de publication
		$datepublication = cisf_cireqsecure('datepublication');
		$heurepublication = cisf_cireqsecure('heurepublication');
		
	
		if ($datepublication AND $heurepublication) {
			$jour = substr($datepublication,0,2);
			$mois = substr($datepublication,3,2);
			$annee = substr($datepublication,6,4);
			$heure = substr($heurepublication,0,2);
			$minute = substr($heurepublication,3,2);
		
			$date = sprintf("%04s",$annee) . '-' 
				. sprintf("%02s",$mois) . '-'
				. sprintf("%02s",$jour) . ' ' 
				. sprintf("%02s",$heure) . ':'
				. sprintf("%02s",$minute) . ':' 
				. sprintf("%02s",0);
			
			
			// utiliser instituer_article si dispo
			if ($GLOBALS['spip_version_branche']>=4 AND include_spip('action/editer_article') AND function_exists($f='article_instituer')){
				$f($id_article,array("date" => $date));
                        } elseif ($GLOBALS['spip_version_branche']<4 AND include_spip('action/editer_article') AND function_exists($f='instituer_article')){
				$f($id_article,array("date" => $date));
                        } else {
				sql_updateq("spip_articles", array("date" => $date), "id_article=$id_article");
                        }
		}
		
	}
	
	$res['message_ok'] = "";
	$res['redirect'] = $retour;

	return $res;

}


?>