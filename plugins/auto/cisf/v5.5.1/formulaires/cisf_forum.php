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


function formulaires_cisf_forum_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{	
	if (!autoriser('modererforum', 'article', $id_article))
		return false;

	if (cisf_indesirable())
		return false;

	$valeurs = array();	
	$valeurs["id_article"] = intval($id_article);
	$valeurs['_choix_moderation_article'] = cisf_choix_moderation($id_article);
	
	$valeurs['_hidden'] = "<input type='hidden' name='id_article' value='$id_article' />";
	
	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;

	// Imp�ratif : preciser que le formulaire doit etre securise auteur/action sinon rejet
	$valeurs['_action'] = array("cisf_forum",$id_article);

	return $valeurs;
}

function formulaires_cisf_forum_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_forum_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();
        
        // Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");

	// Traitement et aiguillage
		include_spip('inc/autoriser');
		if (autoriser('modererforum', 'article', $id_article)){
			$statut = _request('change_accepter_forum');
			include_spip('base/abstract_sql');
			sql_updateq("spip_articles", array("accepter_forum" => $statut), "id_article=". intval($id_article));
			
/*
			if ($statut == 'abo') {
				ecrire_meta('accepter_visiteurs', 'oui');
			}
*/
			include_spip('inc/invalideur');
			suivre_invalideur("id='article/$id_article'");
		}

	$res['message_ok'] = "";
	if ($retour) $res['redirect'] = $retour;

	return $res;
	
}


// Cree le formulaire de modification du reglage des forums de l'article
function cisf_choix_moderation($id_article) {

        $GLOBALS['liste_des_forums']['forum:bouton_radio_modere_posteriori'] = 'pos';
        $GLOBALS['liste_des_forums']['forum:bouton_radio_modere_priori'] = 'pri';
        $GLOBALS['liste_des_forums']['forum:bouton_radio_modere_abonnement'] = 'abo';
        $GLOBALS['liste_des_forums']['forum:info_pas_de_forum'] = 'non';
	
	$statut_forum = cisf_get_forums_publics($id_article);
	$choix_forum = $GLOBALS['liste_des_forums'];
	$res = '';
	foreach ($choix_forum as $desc => $val) {
		$checked = '';
		$class = '';
		if ($statut_forum == $val){
			$checked = ' checked="checked"';
		}
		$res .= '<div class="radiov"><input type="radio" id="'.$val.'" name="change_accepter_forum" value="'.$val.'" ';
		$res .= $checked.'/><label for="'.$val.'">'._T($desc).'</label></div>';
	}

	return $res;
}

// Recuperer le reglage des forums publics de l'article
function cisf_get_forums_publics($id_article=0) {

	if ($id_article) {
		$obj = sql_fetsel("accepter_forum", "spip_articles", "id_article=$id_article");

		if ($obj) return $obj['accepter_forum'];
	} else { // dans ce contexte, inutile
		return substr($GLOBALS['meta']["forums_publics"],0,3);
	}
	return $GLOBALS['meta']["forums_publics"];
}

?>