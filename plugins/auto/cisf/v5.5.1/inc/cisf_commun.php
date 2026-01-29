<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 
if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/filtres');


// Adapte de doc.spip.org/@formulaires_editer_objet_traiter 
function cisf_formulaires_editer_objet_traiter($type, $id='new', $id_parent=0, $lier_trad=0, $retour='', $config_fonc='articles_edit_config', $row=array(), $hidden=''){
	$res = array();
        $err = '';
        
	if ($action_editer = charger_fonction("editer_$type", 'action', true)) {
                list($id,$err) = $action_editer($id);
	} else {
		$action_editer = charger_fonction('editer_objet', 'action');
                list($id,$err) = $action_editer($id, $type);
        }
        
        if ($err){
                $res['message_erreur'] =$err;
        }
        else{
                $res['message_ok'] = "";
                if ($retour)
                        $res['redirect'] = $retour;
        }
        
	return $res;
}


// Nettoyage des variables en entree (securite)

// Renvoie le _GET ou le _POST emis par l'utilisateur
// et le nettoie au passage
function cisf_cireqsecure($var) {

	$return = NULL;	
	$a = _request($var);
	if (empty($a)){
            return '';
        }
        
	if ($a) {
		
		// cas des id_...
		if (strlen($var)>3 AND substr($var,0,3)=="id_") {
			return intval($a);
		}
				
		// cas d'autres valeurs enti�res
		$array_var_entieres = array("ciposition","doc_supp","largeur_document","hauteur_document");
		if (in_array($var, $array_var_entieres)) {
			return intval($a); 			
		}

		// cas des oui / non
		$array_var_ouinon = array("email_unique","site_obli","site_unique","message","ajout_logo","forcer_document","ajout_doc","remplacer_doc");
		if (in_array($var, $array_var_ouinon)) {
			if ($a=="oui" OR $a=="non") {
				return $a;	
			} else {
				$return = "";
			}
		}
		
		// cas des md5
		$array_md5 = array("md5_article","hash","hash_id_auteur");
		if (in_array($var, $array_md5)) {
			if(preg_match(",^[a-f0-9]{32}$,",$a)) $return = $a;
		}

		// cas des ctr_
		$array_ctr = array("ctr_titre","ctr_descriptif","ctr_texte","ctr_statut","ctr_chapo","ctr_ps","ctr_surtitre","ctr_soustitre","ctr_nom_site","ctr_url_site");
		if (in_array($var, $array_ctr)) {
			return $a; 			
		}
		
		switch ($var) {
		case "ciaction":
			$array_action = array("editer_article","editer_document","ajouter_article","ajouter_document","supprimer_document","editer_article_motcle","editer_article_forme","editer_article_raccourci","editer_article_redirection","editer_article_auteur","editer_article_petition","editer_article_forum","editer_article_calendrier","editer_article_datepublication","editer_article_rubart");
			if (in_array($a,$array_action)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "ins_document":
			$array_insdoc = array("descriptif","text_area");
			if (in_array($a,$array_insdoc)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "ins_image":
			$array_insimg = array("descriptif","text_area");
			if (in_array($a,$array_insimg)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "align_image":
			$array_alignimg = array("left","center","right","vignette");
			if (in_array($a,$array_alignimg)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "motscle":
			if (is_array($a)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "auteurs":
			if (is_array($a)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "cimodif_img_avant":
			if($a) {
				$return = $a;	// sert uniquement en comparaison
			} else {
				$return = "";
			}
			break;
		case "virtuel":			
			if($a) {
				$return = $a;	// SPIP ne prot�ge pas le virtuel
			} else {
				$return = "";
			}
			break;
		case "mode":
			/* $mode :
			'image' => image en mode image
			'vignette' => personnalisee liee a un document
			'document' => doc ou image en mode document
			'distant' => lien internet
			'changer_virtuel' => article redirection
			'changer_forum'
			'changer_petition'
			*/		
			$array_mode = array("document","image","vignette","distant","changer_virtuel","changer_forum","changer_petition");
			if (in_array($a, $array_mode)) {
				return $a; 			
			} else {
				$return = "";
			}
			break;
		case "image_supp":
			if($a) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "type":
			$array_type = array("article");
			if (in_array($a, $array_type)) {
				return $a; 			
			} else {
				$return = "";
			}
			break;
		case "logo":
                        if ($GLOBALS['spip_version_branche']>=4){
                            $return = $a;
                            break;
                        } else {
                            if (strlen($a)>5) {
                                    if((substr($a,0,5)=="arton" AND intval(substr($a,5))>0) OR (substr($a,0,6)=="artoff" AND intval(substr($a,6))>0)) {
                                            $return = $a;
                                    }
                            }
                            break;
                        }
		case "change_accepter_forum":
			$array_modforum = array('pos', 'pri', 'abo', 'non');
			if(in_array($a,$array_modforum)) {
				$return = $a;
			} else {
				$return = "";
			}
			break;
		case "datepublication":
		case "dateredaction":
		case "date_doc":
		   	if (isset($a) AND $a!="") {
			    list($dd,$mm,$yy)=explode("/",$a);
			    if ($dd!="" && $mm!="" && $yy!="") {
				    if (is_numeric($yy) && is_numeric($mm) && is_numeric($dd)) {
				            if (checkdate($mm,$dd,$yy))
								$return = $a;
				    }
			    } 
		   	} 
			break;
		case "heurepublication":
		case "heureredaction":
		case "heure_doc":
		   	if (isset($a) AND $a!="") {
			    list($hh,$mm)=explode(":",$a);
			    if ($hh!="" && $mm!="") {
				    if (intval($hh)<24 && intval($mm)<61) {
						$return = $a;
				    }
			    } 
		   	} 
			break;
		case "calendrier":
		   	if (isset($a) AND $a!="") {
			    if (is_numeric($a)) {
			    	$dd = substr($a,6,2);
			    	$mm = substr($a,4,2);
			    	$yy = substr($a,0,4);
		            if (checkdate($mm,$dd,$yy))
						$return = $a;
			    }
		   	} 
			break;
		case "supprimer":
			if ($a=="supprimer")
				$return = $a;
			break;
		case "heure":
			if (intval($a)>0 AND intval($a)<25)
				$return = intval($a);
			break;
		case "minute":
			if (intval($a)>0 AND intval($a)<61)
				$return = intval($a);
			break;
		case "change_petition":
			if ($a=="on" OR $a=="off")
				return $a;
			break;
		case "texte_petition":
			$return = $a;
			break;
		case "titre":
			$return = $a;
			break;
		case "credits":
			$return = $a;
			break;
		case "alt":
			$return = $a;
			break;
		case "ciforme":
			return $a;
			break;
		case "descriptif":
			return $a;	// SPIP ne prot�ge pas le descriptif lorsque l'auteur est authentifi�
			break;
		case "chapo":
			return $a;
			break;
		case "surtitre":
		case "soustitre":
		case "nom_site":
		case "url_site":    
			return $a;
			break;
		case "ps":
			return $a;
			break;
		case "texte":
			// si on utilise safehtml sur le texte, cela provoque des effets de bord.
			// aussi, alignement sur le niveau de securite de SPIP
			return $a;	// SPIP ne protege pas le texte si l'auteur est authentifie
			break;
		default:
			break;
		}
		
		
	}
	
	return $return;
}


// Choix par defaut des options de presentation
function articles_edit_config($row)
{
	global $spip_ecran, $spip_lang, $spip_display;

	$config = $GLOBALS['meta'];
	$config['lignes'] = ($spip_ecran == "large")? 8 : 5;
	$config['afficher_barre'] = $spip_display != 4;
	$config['langue'] = $spip_lang;

	$config['restreint'] = ($row['statut'] == 'publie');
	return $config;
}

// Rejeter un utilisateur non authentifie ainsi qu'un statut visiteur
function cisf_indesirable() {
	$return = true;

	if (isset($GLOBALS['visiteur_session']['statut'])) {
		if ($GLOBALS['visiteur_session']['statut']!="6forum") {
			$return = false;
		}
	}
	
	return $return;
}

// Insertion d'un ou plusieurs documents (ou images) dans le texte ou le descriptif
function cisf_inserer_raccourci_doc($tableau_id_document,$id_article,$ins_document='',$ins_image='',$align_image='') {
	$id_article = intval($id_article);
	if (!is_array($tableau_id_document))
		$tableau_id_document = array($tableau_id_document);

	$array_align = array("left","center","right");
	$replace = array();
		
	if ($id_article AND ($ins_document OR $ins_image)) {
		if ($ins_document=="descriptif" OR $ins_document=="text_area" OR $ins_image=="descriptif" OR $ins_image=="text_area") {
			
			foreach ($tableau_id_document AS $id_document){
				if ($id_document = intval($id_document)){
					$doc_titre = '';
					$doc_descriptif = '';
					$doc_mode = '';
					$doc_extension = '';
					$citype_inclus = '';
					$ciraccourci = '';
					$texte_align = '';
                                        $largeur_document = 0;
                                        $hauteur_document = 0;
		
					$ledoc = sql_fetsel("titre,descriptif,mode,extension,distant", "spip_documents", "id_document=$id_document");
					if ($ledoc) {
						$doc_mode = $ledoc['mode'];
						$doc_extension = $ledoc['extension'];
						$doc_titre = $ledoc['titre'];
						$doc_descriptif = $ledoc['descriptif'];
						$doc_distant = $ledoc['distant'];
						$largeur_document = $ledoc['largeur'];
						$hauteur_document = $ledoc['hauteur'];
					}
		
					if ($doc_extension) {
						$letype = sql_fetsel("inclus", "spip_types_documents", "extension=".sql_quote($doc_extension));
						if ($letype) {
							$citype_inclus = $letype['inclus'];
						}
					}
	
					// Affichage du raccourci <doc...> correspondant
					// valeur par defaut
					$ciraccourci = 'doc';
					
					if ($GLOBALS['spip_version_branche']>=4){
						
						// Pattern pour SPIP 4
						if ($ins_image OR $doc_mode == 'image'){
							if (in_array($align_image,$array_align)) {
								$texte_align = "|".$align_image;
							}
						}
                                                
                                        } else {
						
						// Pattern pour SPIP 3
						if ($ins_image OR $doc_mode == 'image'){
							if ($doc_distant!='oui' AND (strlen($doc_descriptif) > 0 OR strlen($doc_titre) > 0))
								$ciraccourci = 'doc';
							else
								$ciraccourci = 'emb';
								
							if (in_array($align_image,$array_align)) {
								$texte_align = "|".$align_image;
							}
						} else {
					
							// inclusion directe en plus
							if (($citype_inclus == "embed" OR $citype_inclus == "image") AND $largeur_document > 0 AND $hauteur_document > 0) {
								if (in_array($align_image,$array_align)) {
									$ciraccourci = 'emb';
									$texte_align = "|".$align_image;
								}
								
							}
						}
						
					}
					
					$replace[] = "<".$ciraccourci.$id_document.$texte_align.">";
                                        
                                        // Compatibilité avec SPIP 4
					if ($GLOBALS['spip_version_branche']>=4){
                                                $where = "objet='article' AND id_objet=" . $id_article . " AND id_document=" . $id_document;
                                                $champs['vu'] = 'oui';
                                        	if (sql_countsel('spip_documents_liens', $where)) {
                                                        sql_updateq('spip_documents_liens', $champs, $where);
                                                }
                                        }
				}
			}
			// fin du foreach

// retour a la ligne entre chaque doc
$replace = implode('
',$replace);

			if ($replace){
				if ($row = sql_fetsel("id_article, descriptif, texte", "spip_articles", "id_article=$id_article")) {
					$olddescriptif = $row['descriptif'];
					$oldtexte = $row['texte'];
					if ($ins_document=="descriptif" OR $ins_image=="descriptif") {
						$olddescriptif = str_replace("~~",$replace,$olddescriptif);
						sql_updateq("spip_articles", array("descriptif" => $olddescriptif), "id_article=$id_article");
					} elseif ($ins_document=="text_area" OR $ins_image=="text_area") {
						$oldtexte = str_replace("~~",$replace,$oldtexte);
						sql_updateq("spip_articles", array("texte" => $oldtexte), "id_article=$id_article");
					}
				}
			}

		}
	}
	
	return true;	
}

?>