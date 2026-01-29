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

function formulaires_cisf_redirection_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
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
	$valeurs['_action'] = array("cisf_redirection",$id_article);
	

	return $valeurs;
}

function formulaires_cisf_redirection_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_redirection_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();

        // Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article");
	
	// Traitement et aiguillage
//	return cisf_formulaires_editer_objet_traiter('article',$id_article,$id_rubrique,$lier_trad,$retour,$config_fonc,$row,$hidden);

	if ($id_article>0 AND !isset($_POST['annuler'])) {
		$supprimer = _request('supprimer');
		
		// pour supprimer une redirection avec le bouton "supprimer"	
		if ($supprimer AND $supprimer=='supprimer') {		
			$url = "";
		} else {
                        if (_request('virtuel')){
                            $url = _request('virtuel');
                            $url = preg_replace(",^ *https?://$,i", "", rtrim($url));
                        } else {
                            $url = '';
                        }
		}

                if ($url) $url = corriger_caracteres($url);
                sql_updateq('spip_articles', array('virtuel'=> $url, 'date_modif' => date('Y-m-d H:i:s')), "id_article=" . $id_article);
	}
	
	$res['message_ok'] = "";
	if ($retour) $res['redirect'] = $retour;

	return $res;

}

?>