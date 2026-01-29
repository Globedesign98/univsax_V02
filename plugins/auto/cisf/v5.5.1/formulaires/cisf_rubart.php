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

function formulaires_cisf_rubart_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
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
	$valeurs['_action'] = array("cisf_rubart",$id_article);

	return $valeurs;
}

function formulaires_cisf_rubart_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	$erreurs = array();

//	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_rubart_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();

	$id_rubrique = cisf_cireqsecure('id_rubrique');
	
	// Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");

	// Traitement et aiguillage
	if (!isset($_POST['annuler'])) {
		return cisf_formulaires_editer_objet_traiter('article',$id_article,$id_rubrique,$lier_trad,$retour,$config_fonc,$row,$hidden);
	} else {
		$res['message_ok'] = "";
		$res['redirect'] = $retour;
		return $res;
	}
}


function cisf_chercher_rubrique($msg,$id, $id_parent, $type, $id_secteur, $restreint,$actionable = false, $retour_sans_cadre=false){
	global $spip_lang_right;
	include_spip('inc/autoriser');
	if (intval($id) && !autoriser('modifier', $type, $id))
		return "";
	if (!sql_countsel('spip_rubriques'))
		return "";
		
	if (sql_countsel('spip_rubriques')<1)
		$form = '';
	else
		$form = cisf_selecteur_rubrique_html($id_parent, $type, $restreint, ($type=='rubrique')?$id:0);
	

	$confirm = "";
	if ($type=='rubrique') {
		// si c'est une rubrique-secteur contenant des breves, demander la
		// confirmation du deplacement
		$contient_breves = sql_countsel('spip_breves', "id_rubrique=$id");
	
		if ($contient_breves > 0) {
			$scb = ($contient_breves>1? 's':'');
			$scb = _T('avis_deplacement_rubrique',
				array('contient_breves' => $contient_breves,
				      'scb' => $scb));
			$confirm .= "\n<div class='confirmer_deplacement verdana2'><div class='choix'><input type='checkbox' name='confirme_deplace' value='oui' id='confirme-deplace' /><label for='confirme-deplace'>" . $scb . "</label></div></div>\n";
		} else
			$confirm .= "<input type='hidden' name='confirme_deplace' value='oui' />\n";
	}
	$form .= $confirm;
/*
	if ($actionable){
		$form = "<input type='hidden' name='editer_$type' value='oui' />\n" . $form;
		$form = generer_action_auteur("editer_$type", $id, self(), $form, " method='post' class='submit_plongeur'");	
	}
*/	
	return $form;
}


function cisf_sous_menu_rubriques($id_rubrique, $root, $niv, &$data, &$enfants, $exclus, $restreint, $type) {
	global $browser_name, $browser_version;
	static $decalage_secteur;

	// Si on a demande l'exclusion ne pas descendre dans la rubrique courante
	if ($exclus > 0
	AND $root == $exclus) return '';

	// en fonction du niveau faire un affichage plus ou moins kikoo

	// selected ?
	$selected = ($root == $id_rubrique) ? ' selected' : '';
	$checked = ($root == $id_rubrique) ? 'checked="checked"' : '';
	$gras = ($root == $id_rubrique) ? ' gras' : '';

	switch ($niv) {
	case 0:
		$ulclass = "class='plansite'";
		$divclass = "";
		break;
	case 1:
		$ulclass = "";
		$divclass = "plansecteur";
		break;
	case 2:
		$ulclass = "";
		$divclass = "planrubniv1";
		break;
	default:
		$ulclass = "";
		$divclass = "planrub";
		break;
	}
	

	if (isset($data[$root])) # pas de racine sauf pour les rubriques
	{
		$r = '<li><div class="'.$divclass.$selected.'"><input type="radio" id="rub'.$root.'" name="id_parent" value="'.$root.'" '.$checked.' ><label for="rub'.$root.'" class="texte'.$gras.'"> '.$data[$root].'</label></div>';
	} else 	$r = '';
	
	
	
	// et le sous-menu pour ses enfants
	$sous = '';
	if (isset($enfants[$root]))
		foreach ($enfants[$root] as $sousrub)
			$sous .= cisf_sous_menu_rubriques($id_rubrique, $sousrub,
				$niv+1, $data, $enfants, $exclus, $restreint, $type);

	if ($sous) {
		$sous = "<ul ".$ulclass.">".$sous."</ul>";
		if ($niv>0)
			$sous .= "</li>";
	} else {
		$sous = "</li>";
	}
				
	// si l'objet a deplacer est publie, verifier qu'on a acces aux rubriques
	if ($restreint AND !autoriser('publierdans','rubrique',$root))
		return $sous;
	

	return $r.$sous;
}


function cisf_selecteur_rubrique_html($id_rubrique, $type, $restreint, $idem=0) {
	$data = array();
	if ($type == 'rubrique')
		$data[0] = _T('info_racine_site');
	if ($type == 'auteur')
		$data[0] = '&nbsp;'; # premier choix = neant (rubriques restreintes)

		
//--------- Debut ajout CI (ciar) ------
	$rubrestreints = array();
//	if (defined('_DIR_PLUGIN_CIAR')){
		// les "premieres" rubriques parentes dans l'arborescence autorisee pour l'auteur
		$id_auteur = $GLOBALS['visiteur_session']['id_auteur'];
		// doivent jouer le role de secteur
		if ($id_auteur) {
                        $result = sql_select("id_objet", "spip_auteurs_liens", "objet='rubrique' AND id_auteur=".$id_auteur,"","");
                        while ($row = sql_fetch($result))
                                $rubrestreints[] = $row['id_objet'];
		}
//	}
//--------- Fin ajout CI ------
		
	// creer une structure contenant toute l'arborescence
        $enfants = array();        
	include_spip('base/abstract_sql');
	$q = sql_select("id_rubrique, id_parent, titre, statut, lang, langue_choisie", "spip_rubriques", ($type == 'breve' ?  ' id_parent=0 ' : ''), '', "0+titre,titre");
	while ($r = sql_fetch($q)) {
		if (autoriser('voir','rubrique',$r['id_rubrique'])){
			// titre largeur maxi a 50
			$titre = supprimer_tags(typo(extraire_multi($r['titre'])));
			if ($GLOBALS['meta']['multi_rubriques'] == 'oui'
			AND ($r['langue_choisie'] == "oui" OR $r['id_parent'] == 0))
				$titre .= ' ['.traduire_nom_langue($r['lang']).']';
			$data[$r['id_rubrique']] = $titre;
//--------- Debut ajout CI (ciar) ------
			if (in_array($r['id_rubrique'],$rubrestreints))
				$r['id_parent'] = 0;
//--------- Fin ajout CI ------
			$enfants[$r['id_parent']][] = $r['id_rubrique'];
			if ($id_rubrique == $r['id_rubrique']) $id_parent = $r['id_parent'];
		}
	}

	$opt = cisf_sous_menu_rubriques($id_rubrique,0, 0,$data,$enfants,$idem, $restreint, $type);
	$att = " id='id_parent' name='id_parent'\nclass='selecteur_parent verdana1'";

	$r = $opt;

	return $r;
}


?>