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

function formulaires_cisf_logo_modifier_charger_dist($id_article, $id_rubrique, $retour='',  $lier_trad=0, $config_fonc='', $row=array(), $hidden='')
{
	
	if (!autoriser('modifier', 'article', $id_article))
		return false;

	if (cisf_indesirable())
		return false;

	$valeurs = array();
	$query = sql_query("SELECT titre_logo, descriptif_logo FROM spip_articles WHERE id_article=".intval($id_article));
	if ($row = sql_fetch($query)) {
		$valeurs['id_article'] = $row['id_article'];
		$valeurs['titre'] = $row['titre_logo'];
		$valeurs['descriptif'] = $row['descriptif_logo'];
	}

	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;

	// Imperatif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_logo_modifier",intval($id_article));

	// prefixe ci_ sinon, en cas d'erreur, l'url d'action sera nettoyee
	// des champs figurant dans le tableau valeur. 
	$valeurs['ci_id_article'] = $id_article;
	
	return $valeurs;
}

function formulaires_cisf_logo_modifier_verifier_dist($id_article, $id_rubrique, $retour='',  $lier_trad=0, $config_fonc='', $row=array(), $hidden='')
{
	$erreurs = array();

	return $erreurs;
}

function formulaires_cisf_logo_modifier_traiter_dist($id_article, $id_rubrique, $retour='',  $lier_trad=0, $config_fonc='', $row=array(), $hidden='')
{
        $res = array();
    
        // Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article");
	
	// Traitement et aiguillage

	//-------------------------------------------------------
	// securite
	$ci_id_article = intval($id_article);	
	$cititre = cisf_cireqsecure('titre');
	$cidescriptif = cisf_cireqsecure('descriptif');

	//-------------------------------------------------------
	// Enregistrer les modifications
	
	if ($ci_id_article>0 AND !isset($_POST['annuler'])) {

		$modifs = array();
		if ($cititre !== NULL)
			$modifs["titre_logo"] = $cititre;
		else
			$modifs["titre_logo"] = '';

		if ($cidescriptif !== NULL)
			$modifs["descriptif_logo"] = $cidescriptif;
		else
			$modifs["descriptif_logo"] = '';

		sql_updateq("spip_articles", $modifs, "id_article=$ci_id_article");
	}	

	$res['message_ok'] = "";
	$res['redirect'] = $retour;

	return $res;
}

?>