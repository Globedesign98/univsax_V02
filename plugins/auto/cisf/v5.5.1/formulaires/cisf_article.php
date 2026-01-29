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

function formulaires_cisf_article_charger_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	if (intval($id_article)>0) {
		if (!autoriser('modifier', 'article', $id_article))
			return false;
	} elseif (intval($id_rubrique)>0) {
		if (!autoriser('creerarticledans', 'rubrique', $id_rubrique))
			return false;
	} else {
		return false;
	}

	if (cisf_indesirable())
		return false;


	// ======= Debut du cas ou javascript est desactive =========
	$js = true;
	if (is_array($_GET) AND isset($_GET["cilienget"]))
		$js = false;
	if (is_array($_POST) AND isset($_POST["cilieninput"]))
		$js = true;

	if (!$js){
		$cilieninput = '';
		if (is_array($_POST)) {
			if (isset($_POST["cilieninput"])){
					$cilieninput = $_POST["cilieninput"];
			}
		}
		if (!$cilieninput){
			if (is_array($_GET)) {
				if (isset($_GET["cilienget"])){
						$cilieninput = $_GET["cilienget"];
				}
			}
		}
		
		// Cas annuler
		if ($retour_annuler=cisf_annuler($cilieninput,$id_article,$id_rubrique)){
			include_spip('inc/headers');
			$retour_annuler = str_replace("&amp;","&",$retour_annuler);
			redirige_par_entete($retour_annuler);
		}
		
		// Cas de l'aiguillage
		$tableau = cisf_aiguillage($cilieninput,$id_article,$id_rubrique);
		if ($tableau){
			if ($tableau['cistatut_nouv']){
				
				// enregistrer le changement de statut
				$cistatut_nouv = $tableau['cistatut_nouv'];
				$objet = 'article';
				$id_objet = intval($id_article);

					if ($id_objet AND autoriser('instituer',$objet,$id_objet,'',array('statut'=>$cistatut_nouv))){
						include_spip('action/editer_objet');
						objet_modifier($objet,$id_objet,array('statut' => $cistatut_nouv));
					}
			}

			if ($tableau['retour']){
				$aiguillage = $tableau['retour'];
				include_spip('inc/headers');
				$aiguillage = str_replace("&amp;","&",$aiguillage);
				redirige_par_entete($aiguillage);
			}
		}	
	}		
	// ======= Fin du cas ou javascript est desactive =========
	

	$valeurs = formulaires_editer_objet_charger('article',$id_article,$id_rubrique,$lier_trad,$retour,$config_fonc,$row,$hidden);

	// Pour SPIP 2.1
	$valeurs['id_rubrique'] = $id_rubrique;

	// compatibilite avec la forme de rubrique calendrier
	// date dans le calendrier au format YYYYMMDD
	if ($id_article=='new') {
		$dateredaction = cisf_cireqsecure('calendrier');
		if ($dateredaction)
			$valeurs['calendrier'] = $dateredaction;
	}
	
	// Imp�ratif : preciser que le formulaire doit etre securise auteur/action
	// sinon rejet
	$valeurs['_action'] = array("cisf_article",$id_article);
	
	// Pour la compatibilite avec le plugin ckeditor
	$_GET['exec']="articles_edit";
	
	return $valeurs;
}

function formulaires_cisf_article_verifier_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
	if ($id_article=='new') {
		if (_request('titre')=='')
			$_POST['titre'] = _T('info_nouvel_article');
	}

	$erreurs = formulaires_editer_objet_verifier('article',$id_article,array('titre'));
	return $erreurs;
}

function formulaires_cisf_article_traiter_dist($id_article='new', $id_rubrique=0, $retour='', $lier_trad=0, $config_fonc='articles_edit_config', $row=array(), $hidden='')
{
        $res = array();
        $retour = '';
        $cistatut_nouv = '';
	$cilieninput = '';
	if (is_array($_POST)) {
		if (isset($_POST["cilieninput"])){
				$cilieninput = $_POST["cilieninput"];
		}
	}
	
	// Cas annuler
	if ($retour_annuler=cisf_annuler($cilieninput,$id_article,$id_rubrique)){
		$res['message_ok'] = "";
		$res['redirect'] = $retour_annuler;
		return $res;
	}
	
	// Pr�paration de l'aiguillage
	$tableau = cisf_aiguillage($cilieninput,$id_article,$id_rubrique);
	if ($tableau){
		if (isset($tableau['retour']) AND $tableau['retour'])
			$retour = $tableau['retour'];
		if (isset($tableau['cistatut_nouv']) AND $tableau['cistatut_nouv'])
			$cistatut_nouv = $tableau['cistatut_nouv'];
	}
	
	
	// Traitement

	// Mettre un titre le cas echeant
	if ($id_article=='new') {
		if (_request('titre')=='')
			$_POST['titre'] = _T('info_nouvel_article');		
	}
	
	// compatibilite avec la forme de rubrique calendrier
	// date dans le calendrier au format YYYYMMDD
	if ($id_article=='new') {
		$dateredaction = cisf_cireqsecure('calendrier');
		if ($dateredaction) {
			$date = sprintf("%04s",substr($dateredaction,0,4)) . '-' 
				. sprintf("%02s",substr($dateredaction,4,2)) . '-'
				. sprintf("%02s",substr($dateredaction,6,2)) . ' ' 
				. sprintf("%02s",0) . ':'
				. sprintf("%02s",0) . ':' 
				. sprintf("%02s",0);
				
			include_spip('action/editer_article');
                        if ($GLOBALS['spip_version_branche']>=4) {
                                $id_article = article_inserer($id_rubrique);
                        } else {
        			$id_article = insert_article($id_rubrique);
                        }
			sql_updateq("spip_articles", array("date_redac" => $date), "id_article=$id_article");
		}	
	}	
	

	// enregistrer que si le titre, le descriptif ou le texte a evolue
	// voire, le cas echeant, le chapeau et le ps
	$ci_enregistrer = false;
	if (md5(cisf_cireqsecure('titre')) != cisf_cireqsecure('ctr_titre')
		OR md5(cisf_cireqsecure('descriptif')) != cisf_cireqsecure('ctr_descriptif')
		OR ($cistatut_nouv AND md5($cistatut_nouv)!= _request('ctr_statut'))
		OR md5(cisf_cireqsecure('texte')) != cisf_cireqsecure('ctr_texte')) {
			$ci_enregistrer = true;
	} else {
		if ($GLOBALS['meta']["articles_chapeau"]=='oui') {
			if (md5(cisf_cireqsecure('chapo')) != cisf_cireqsecure('ctr_chapo'))
				$ci_enregistrer = true;			
		}
		if ($GLOBALS['meta']["articles_ps"]=='oui') {
			if (md5(cisf_cireqsecure('ps')) != cisf_cireqsecure('ctr_ps'))
				$ci_enregistrer = true;			
		}
		if ($GLOBALS['meta']["articles_surtitre"]=='oui') {
			if (md5(cisf_cireqsecure('surtitre')) != cisf_cireqsecure('ctr_surtitre'))
				$ci_enregistrer = true;			
		}
		if ($GLOBALS['meta']["articles_soustitre"]=='oui') {
			if (md5(cisf_cireqsecure('soustitre')) != cisf_cireqsecure('ctr_soustitre'))
				$ci_enregistrer = true;			
		}
		if ($GLOBALS['meta']["articles_urlref"]=='oui') {
			if (md5(cisf_cireqsecure('nom_site')) != cisf_cireqsecure('ctr_nom_site'))
				$ci_enregistrer = true;			
			elseif (md5(cisf_cireqsecure('url_site')) != cisf_cireqsecure('ctr_url_site'))
				$ci_enregistrer = true;			
		}
	}
        
        

	// Compatibilite avec le plugin champs extra
	if (!$ci_enregistrer) {
		if (defined('_DIR_PLUGIN_CEXTRAS')) {
			// inclusion necessaire (subtilite du plugin champs extra)
			include_spip('inc/cextras');
			$champs = pipeline('declarer_champs_extras', array());
			if ($champs) {
					foreach ($champs as $table => $saisies) {
						if ($table=='spip_articles') {
							$ci_enregistrer = true;
							break;
						}
					}
			}
		}
	}
	
	if ($ci_enregistrer) {
		return formulaires_editer_objet_traiter('article',$id_article,$id_rubrique,$lier_trad,$retour,$config_fonc,$row,$hidden);
	} else {
		$res = array();
		$res['message_ok'] = "";
		$res['redirect'] = $retour;
		return $res;
	}
}


function cisf_annuler($cilieninput,$id_article,$id_rubrique) {
	$retour = '';
	
	// Cas annuler
	if ($cilieninput=='annuler'){
		if (intval($id_article)>0) {
			$ci_param_previsu = "";
			$row = sql_fetsel("statut", "spip_articles", "id_article=$id_article");
			if ($row['statut']!='publie') 
				$ci_param_previsu = "&var_mode=preview";
			$retour = generer_url_public("article", "id_article=$id_article&id_rubrique=$id_rubrique".$ci_param_previsu);
		} elseif (intval($id_rubrique)>0) {
			$ci_param_previsu = "";
			$row2 = sql_fetsel("statut", "spip_rubriques", "id_rubrique=$id_rubrique");
			if ($row2['statut']=='publie')
				$ci_param_previsu = "&var_mode=preview";
			$retour = generer_url_public("rubrique", "id_rubrique=$id_rubrique".$ci_param_previsu);
		} else {
			$retour = generer_url_public("sommaire", "");
		}
	}
	return $retour;
}

function cisf_aiguillage($cilieninput,$id_article,$id_rubrique) {
	$retour = '';
	$cistatut_nouv = "";
	
	// Preparation de l'aiguillage
	$fond = "cisf_article";
	$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
	
	if (intval($id_article)>0 OR $id_article=='new') {

		// securite pour ajout d'un document, d'une image, options avancees, action sur un document
		$array_option=array("document","image","type_widget","vignette","multipj","logo","raccourci","motcle","redirection","auteur","forme","forum","petition","suiviforum","datepublication","calendrier","datefin","rubart","revision","envoimembre","statistique");
		$array_doc_action=array("doc_remplacer","doc_modifier","doc_supprimer","widget_remplacer","widget_modifier","widget_supprimer");

		// forcer le mode previsualisation sauf si l'article est publie
		if (_request('statut')=='publie') $var_preview = '';
		else $var_preview = 'oui';
		
		// redirections			
		if ($cilieninput=='previsu') {
			$retour = generer_url_public("article", "id_article=$id_article&id_rubrique=$id_rubrique&var_mode=preview");
		} elseif ($cilieninput=='voirenligne') {
                                $retour = generer_url_entite($id_article, "article", '', '', true);
                                $retour = parametre_url($retour, 'var_mode', 'calcul', '&');
		} elseif ($cilieninput=='bt_gererpetition') {
				$retour = generer_url_public("cisf_suivipetition", "id_article=$id_article&id_rubrique=$id_rubrique");
		}

		// cas particulier (liens sans formulaire)
		if (isset($_GET['bt_revision']) AND $_GET['bt_revision']) $_POST['bt_revision']=$_GET['bt_revision'];

		
		// cas particulier de l'insertion d'un document ou d'une image dans le texte
		$ci_ins_document = cisf_cireqsecure('ins_document');
		if ($ci_ins_document=="descriptif" OR $ci_ins_document=="text_area"){
			$fond = "cisf_document";
			$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique&ins_document=$ci_ins_document");
		}
		$ci_ins_image = cisf_cireqsecure('ins_image');
		if ($ci_ins_image=="descriptif" OR $ci_ins_image=="text_area"){
			$fond = "cisf_document";
			$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique&ins_image=$ci_ins_image");
		}

		// ajout d'un document, d'une image, options avancees, action sur un document
		$key = $cilieninput;
		if (!empty($key) AND strlen($key)>3) {
			if (substr($key,0,3)=="bt_") {
				$ci_trouve = false;	
				$key = substr($key,3);
				if (in_array($key, $array_option)) {			
					$ci_trouve = true;	
					// ajout d'une option avancee, d'un document, d'une image, ...
					$doc_img = '';
					if ($key=='image' OR $key=='document')
						$doc_img = "&cisf_ajout=".$key;
					if ($key=='image') $key = 'document';
					$action = $key;
					$fond = "cisf_".$key;
					$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique".$doc_img);
				} else {
					foreach ($array_doc_action as $doc_action) {
						// action sur un document
						$len_doc_action= strlen($doc_action);
						if ($len_doc_action>0 AND substr($key,0,$len_doc_action)==$doc_action) {
							$ci_trouve = true;	
							$val = substr($key,$len_doc_action);
							$fond = "cisf_".substr($key,0,$len_doc_action);
							
							if ($doc_action=="doc_supprimer") {
								// compatibilite avec SPIP 2.1.8
								$retour_relatif = "spip.php?page=cisf_article&amp;id_article=".$id_article."&amp;id_rubrique=".$id_rubrique;
									// Sous SPIP 3, effacer d'abord le raccourci
									cisf_effacer_raccourci_doc($id_article,intval($val));
									$retour = generer_action_auteur('dissocier_document', $id_article."-article-".intval($val)."-suppr", $retour_relatif, false, '', true);
							} elseif ($doc_action=="widget_supprimer") {
								$retour_relatif = "spip.php?page=cisf_article&amp;id_article=".$id_article."&amp;id_rubrique=".$id_rubrique;
									// Sous SPIP 3, effacer d'abord le raccourci
									cisf_effacer_raccourci_widget($id_article,intval($val));
									$retour = generer_action_auteur('dissocier_ciwidget', $id_article."-article-".intval($val)."-suppr-safe", $retour_relatif, false, '', true);
                                                        } elseif ($doc_action=="widget_modifier") {
                                                                $arg_widget = "id_article=$id_article&id_rubrique=$id_rubrique";
                                                                $tableau = explode('-',substr($key,$len_doc_action+1));
                                                                if (isset($tableau[0]) AND ctype_alpha($tableau[0])){
                                                                    $arg_widget .= "&type_widget=".$tableau[0];
                                                                }
                                                                if (isset($tableau[1]) AND intval($tableau[1])>0){
                                                                    $arg_widget .= "&id_widget=".$tableau[1];
                                                                }
								$retour = generer_url_public("cisf_widget", $arg_widget);
							} else {
								$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique&show_docs=".intval($val)."&id_document=".intval($val)); // le nom 'show_docs' est obligatoire car utilis� par SPIP
							}
							break;
						}
					}
					
					
					// changement de statut
					if (substr($key,0,7)=="statut_") {	
						$ci_trouve = true;	
						$cistatut_nouv = substr($key,7);
						if (in_array($cistatut_nouv, array("prepa","prop","publie","poubelle","refuse","archive"))) {
					 		$_POST['statut'] = $cistatut_nouv;
							if ($cistatut_nouv=='publie') $var_preview = '';
							else $var_preview = 'oui';
						}
					}							
					if (substr($key,0,14)=="direct_statut_") {	
						$ci_trouve = true;	
						$cistatut_nouv = substr($key,14);
						if (in_array($cistatut_nouv, array("prepa","prop","publie","poubelle","refuse","archive"))) {
					 		$_POST['statut'] = $cistatut_nouv; 		
							if ($cistatut_nouv=='publie') {
								$retour = generer_url_public("article", "id_article=$id_article&id_rubrique=$id_rubrique&var_mode=calcul");
								$var_preview = '';
							} else {
								$var_preview = 'oui';
							}
						}
					}						
					
				}
				if (!$ci_trouve){
					// cas d'une option ajoute par un pipeline
					$find_option = find_in_path("cisf_".$key.".html");
					if ($find_option) {
						$action = $key;
						$fond = "cisf_".$key;
						$retour = generer_url_public("$fond", "id_article=$id_article&id_rubrique=$id_rubrique");
					}
					
				}

			}
		}
	}

	return array('retour'=>$retour,'cistatut_nouv'=>$cistatut_nouv);
}


function cisf_effacer_raccourci_doc($id_article,$id_document) {
	if ($id_article>0 AND $id_document>0) {		
		if ($row = sql_fetsel("id_article, descriptif, texte", "spip_articles", "id_article=$id_article")) {
                        $cipattern = "/<(img|doc|emb|infographie)".$id_document."(|\|center|\|left|\|right)>/i";
                        
				$_POST['descriptif'] = preg_replace($cipattern, "", cisf_cireqsecure('descriptif'));
				$_POST['texte'] = preg_replace($cipattern, "", cisf_cireqsecure('texte'));
                                // dans ciar_anti_scan_pj ou cirr_anti_scan_pj
                                // ne pas contourner le cas d'un double appel du pipeline
                                $_POST['cisf_nostatic'] = "oui";
		}	
			
	}
	return true;	
}

function cisf_voir_ou_previsu($id_article, $statut) {
	$return = '';
	
	if ($statut == "publie" AND $GLOBALS['meta']["post_dates"] == 'non') {
		$n = sql_fetsel("id_article", "spip_articles", "id_article=$id_article AND date<=".sql_quote(date('Y-m-d H:i:s')));
		if (!$n) $statut = 'prop';
	}
        
        if ($statut == 'publie'){
                $return = 'voir';
        } elseif (autoriser('previsualiser', 'article', $id_article, '', array('statut'=>$statut))){
                if ($statut == 'prop' OR ($statut == 'prepa' AND defined('_DIR_PLUGIN_CIPR')))
                        $return = 'preview';
        }
        
	return $return;
}

function cisf_effacer_raccourci_widget($id_article,$id_widget){
	if ($id_article>0 AND $id_widget>0) {		
		if ($row = sql_fetsel("id_article, descriptif, texte", "spip_articles", "id_article=$id_article")) {
                        $cipattern = "/<widget_([a-z]+)".$id_widget."(|\|center|\|left|\|right)>/i";
                        
                        $_POST['descriptif'] = preg_replace($cipattern, "", cisf_cireqsecure('descriptif'));
                        $_POST['texte'] = preg_replace($cipattern, "", cisf_cireqsecure('texte'));
                        // dans ciar_anti_scan_pj ou cirr_anti_scan_pj
                        // ne pas contourner le cas d'un double appel du pipeline
                        $_POST['cisf_nostatic'] = "oui";
		}	
			
	}
	return true;	
}

?>