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

function formulaires_cisf_petition_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
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
	$valeurs['_action'] = array("cisf_petition",$id_article);
	

	return $valeurs;
}

function formulaires_cisf_petition_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_petition_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();
        
        // Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
	
	if ($id_article>0 AND !isset($_POST['annuler'])) {
	
		$supprimer = cisf_cireqsecure('supprimer');
		
		if (!$supprimer OR $supprimer!='supprimer') {
			$email_unique = cisf_cireqsecure('email_unique');
			$site_obli = cisf_cireqsecure('site_obli');
			$site_unique = cisf_cireqsecure('site_unique');
			$message = cisf_cireqsecure('message');
			$texte_petition = corriger_caracteres(cisf_cireqsecure('texte_petition'));
			
			if (!$email_unique) $email_unique = "non";
			if (!$site_obli) $site_obli = "non";
			if (!$site_unique) $site_unique = "non";
			if (!$message) $message = "non";
		
			if ($row = sql_fetsel("id_article", "spip_petitions", "id_article=$id_article")) {
				sql_updateq("spip_petitions", array("email_unique" => $email_unique, "site_obli" => $site_obli, "site_unique" => $site_unique, "message" => $message, "texte" => $texte_petition), "id_article=$id_article");
			} else {
				sql_insertq("spip_petitions", array("id_article" => $id_article, "email_unique" => $email_unique, "site_obli" => $site_obli, "site_unique" => $site_unique, "message" => $message, "texte" => $texte_petition));
			}

		} else {
			sql_delete("spip_petitions", "id_article=$id_article");
		}
		
	}
	
	$res['message_ok'] = "";
	$res['redirect'] = $retour;

	return $res;
}

?>