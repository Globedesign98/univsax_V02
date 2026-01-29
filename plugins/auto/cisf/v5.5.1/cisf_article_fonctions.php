<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

 
/*-----------------------------------------------------------------
// Balise propre au plugin
------------------------------------------------------------------*/

function balise_CISF_OPTIONS_AVANCEES($p) {
	$p->code = "cisf_options_avancees(\$Pile)";
	// $p->statut = 'html';
	return $p;
}

function balise_CISF_OPTIONS_AFFECTEES($p) {
	$p->code = "cisf_options_affectees(\$Pile)";
	// $p->statut = 'html';
	return $p;
}

function balise_CISF_OUTILS_ADDITIONNELS($p) {
	$p->code = "cisf_outils_additionnels(\$Pile)";
	// $p->statut = 'html';
	return $p;
}


/*-----------------------------------------------------------------
// Fonction relative a la balise propre au plugin
------------------------------------------------------------------*/

// Outils additionnels dans la colonne de droite
function cisf_outils_additionnels($Pile) {
	$return = "";
	$id = intval($Pile[0]['id_article']);

//	if ($id) {
		// Envoyer aux plugins
		$tableau = pipeline('cisf_article_options',
			array(
				'args' => array(
					'type' => 'outils_additionnels',
					'id_article' => $id
				),
				'data' => array()
			)
		);
		
		if (isset($tableau)) {
			if (is_array($tableau)){
				foreach($tableau as $valeur){
					if ($valeur)
						$return .= '<div class="blocoutilform">'.$valeur.'</div>';
				}
			}
		}	
//	}
	return $return;
}

// Options supplementaires affectees a l'article
function cisf_options_affectees($Pile) {
	$return = "";
	$id = intval($Pile[0]['id_article']);
	
//	if ($id) {
		// Envoyer aux plugins
		$tableau = pipeline('cisf_article_options',
			array(
				'args' => array(
					'type' => 'options_affectees',
					'id_article' => $id
				),
				'data' => array()
			)
		);
		
		if (isset($tableau)) {
			if (is_array($tableau)){
				foreach($tableau as $libelle=>$valeur){
					if ($valeur)
						$return .= '<div class="texte">'._T($libelle).' : '.$valeur.'</div>';
				}
			}
		}	
//	}
	return $return;
}

// Options additionnelles dans le menu des options avancees
function cisf_options_avancees($Pile) {

	$id = intval($Pile[0]['id_article']);
		
	// Options avancees par defaut
	$tableau = array(
		"bt_motcle"=>"cisf:eq_menu_mot_cle",
		"bt_logo"=>"cisf:eq_menu_logo",
		"bt_multipj"=>"cisf:eq_menu_plusieurs_doc",
		"bt_rubart"=>"cisf:eq_menu_rubrique",
		"bt_redirection"=>"info_redirection",
		"bt_auteur"=>"cisf:eq_menu_auteurs",
		"bt_forum"=>"cisf:eq_menu_forum",
		"bt_petition"=>"cisf:eq_menu_petition",
		"bt_datepublication"=>"cisf:eq_menu_date_pub",
		"bt_calendrier"=>"cisf:eq_menu_date_ant"
	);
        if (!defined('_DIR_PLUGIN_FORUM')){
                unset($tableau["bt_forum"]);
        }
        if (!defined('_DIR_PLUGIN_PETITIONS')){
                unset($tableau["bt_petition"]);
        }
        
	// Envoyer aux plugins
	$tableau = pipeline('cisf_article_options',
		array(
			'args' => array(
				'type' => 'options_avancees',
				'id_article' => $id
			),
			'data' => $tableau
		)
	);

	$return = '<ul class="optionsavancees">';
	
	if (isset($tableau)) {
		if (is_array($tableau)){
			foreach($tableau as $nom=>$libelle){
				$lien = generer_url_public("cisf_".substr($nom,3), "id_article=".$id);
				$return .= '<li><a href="'.$lien.'" onclick="cilien('."'".$nom."'".'); return false;" class="texteoption '.$nom.'">'._T($libelle).'</a></li>';
			}
		}
	}	

	$return .= '</ul>';

	return $return;
}


/*-----------------------------------------------------------------
// Filtres propres au plugin
------------------------------------------------------------------*/
 
// Enlever le signe egal devant l'url de la redirection pour un article 
function cisf_redirection($texte) {
	if ($texte AND substr($texte, 0, 1) == '=')
		$texte = substr($texte, 1);
	else
		$texte = "";
	
	return $texte;
}

// Libelle de la moderation par defaut des forums
function cisf_moderation_forum($forums_publics) {
	$texte = '';

	$pos = 'modération a posteriori';
	$pri = 'modération a priori';
	$abo = 'sur abonnement';
	$non = 'pas de forum';
	
	$forumdefaut = substr($GLOBALS['meta']['forums_publics'],0,3);
		
	if ($forums_publics) {
		if ($forums_publics!=$forumdefaut)
			$texte = $$forums_publics;
	}
		
	return $texte;
}

// Compatibilite avec formulaire pour poser une question
function cisf_redacteur_initial($texte) {
	if ($texte) {
		if (!strpos($texte,'@'))
			$texte = "";
	}
	
	return $texte;
}

// Compatibilite avec formulaire pour poser une question
function cisf_email_nom($email) {
	$return = "";
	if ($email){
		if ($cip=strpos($email, '@')){
			$return = substr($email, 0, $cip);
                }
        }		
	return $return;
}

// Compatibilite avec formulaire pour poser une question
function cisf_email_domain($email) {
	$return = "";
	if ($email){
		if ($cip=strpos($email, '@')){
			$return = substr($email, $cip+1);
                }
        }		
	return $return;
}


// Tableau des documents de l'article
// Adapté de http://doc.spip.org/@afficher_case_document
function cisf_raccourcis_document($texte, $id_document, $id, $type) {
	global $spip_lang_right;
	
	include_spip('inc/documents');
	
	$document = sql_fetsel("docs.id_document, docs.id_vignette,docs.extension,docs.titre,docs.descriptif,docs.fichier,docs.largeur,docs.hauteur,docs.taille,docs.mode,docs.distant, docs.date, L.vu", "spip_documents AS docs INNER JOIN spip_documents_liens AS L ON L.id_document=docs.id_document", "L.id_objet=".intval($id)." AND objet=".sql_quote($type)." AND L.id_document=".sql_quote($id_document));

	if (!$document) return "";

	$id_vignette = $document['id_vignette'];
	$extension = $document['extension'];
	$titre = $document['titre'];
	$descriptif = $document['descriptif'];
	$url = generer_url_entite($id_document, 'document');
	$fichier = $document['fichier'];
	$largeur = $document['largeur'];
	$hauteur = $document['hauteur'];
	$taille = $document['taille'];
	$mode = $document['mode'];
	$distant = $document['distant'];

	$doublon = false;

	$letype = sql_fetsel("titre,inclus", "spip_types_documents", "extension=".sql_quote($extension));
	if ($letype) {
		$type_inclus = $letype['inclus'];
		$type_titre = $letype['titre'];
	}
	//
	// Afficher un document
	//
	$ret = "";
        $raccourci = "";
        
        if ($GLOBALS['spip_version_branche']>=4 AND (!defined('_COMPORTEMENT_HISTORIQUE_PORTFOLIO') OR _COMPORTEMENT_HISTORIQUE_PORTFOLIO !== true)){        
            if ($mode == 'document' 
                    AND !(($type_inclus == "embed" OR $type_inclus == "image") AND $largeur > 0 AND $hauteur > 0) ) {
		$raccourci .= cisf_raccourci_doc('doc', $id_document, '');
            } else {
                $raccourci .=
                        cisf_raccourci_doc('doc', $id_document, 'left')
                        . cisf_raccourci_doc('doc', $id_document, 'center')
                        . cisf_raccourci_doc('doc', $id_document, 'right');
            }
            
            $ret .= "\n<div class='raccourci'>".$raccourci."</div>\n";
            
        } else {
            if ($mode == 'document') {

		// Affichage du raccourci <doc...> correspondant
		$raccourci = '';
		if ($doublon)
			$raccourci .= cisf_raccourci_doc('doc', $id_document, '');
		else {
			if (($type_inclus == "embed" OR $type_inclus == "image") AND $largeur > 0 AND $hauteur > 0) {
				$raccourci .= "<div class='raccourci_vignette'>";
				include_spip('inc/filtres');
                                $raccourci.= _T('medias:info_inclusion_vignette')."<br />";
					
				$raccourci.= cisf_raccourci_doc('doc', $id_document, '')
				. "</div>\n";

				$raccourci .= "<div class='raccourci_direct'>";
				include_spip('inc/filtres');
                                $raccourci .= _T('medias:info_inclusion_directe')."<br />";
				$raccourci .= "<div style='color: 333333'>"
				. cisf_raccourci_doc('emb', $id_document, 'left')
				. cisf_raccourci_doc('emb', $id_document, 'center')
				. cisf_raccourci_doc('emb', $id_document, 'right')
				. "</div>\n";
				$raccourci .= "</div>";
			} else {
				$raccourci .= "<div class='raccourci_vignette'>"
				. cisf_raccourci_doc('doc', $id_document, '')
				. "</div>\n";
			}
		}

		$ret .= "\n<div class='raccourci'>"
			. $raccourci."</div>\n";


            } elseif ($mode == 'image') {

            //
            // Afficher une image inserable dans l'article
            //
	
		//
		// Preparer le raccourci a afficher sous la vignette ou sous l'apercu
		//
		$raccourci = "";
		if (strlen($descriptif) > 0 OR strlen($titre) > 0){
			$doc = 'doc';
		} else {
			$doc = 'img';
		}

		if ($doublon)
			$raccourci .= cisf_raccourci_doc($doc, $id_document, '');
		else {
			$raccourci .=
				cisf_raccourci_doc($doc, $id_document, 'left')
				. cisf_raccourci_doc($doc, $id_document, 'center')
				. cisf_raccourci_doc($doc, $id_document, 'right');
		}

                // si descriptif et si cisquel et modele infographie
                if (strlen($descriptif) > 0 AND defined('_DIR_PLUGIN_CISQUEL')) {
        		if (@file_exists(_DIR_RACINE . _DIR_PLUGIN_CISQUEL . 'modeles/infographie.html')) {
                                $infog = 'infographie';
        			$raccourci .=
				cisf_raccourci_doc($infog, $id_document, 'left')
				. cisf_raccourci_doc($infog, $id_document, 'center')
				. cisf_raccourci_doc($infog, $id_document, 'right');
                            
                        }
                }
                
		$ret .= "\n<div class='raccourci'>"
			. $raccourci."</div>\n";

            }
        }
	return "<div>$ret</div>";
}


// Contruction des raccourcis d'un document de l'article
function cisf_raccourci_doc($doc, $id, $align='') {
	$pipe = "";

	if ($align) {
		$pipe = "|$align";
	} else {
		$align='center';
	}

	$onclick = " ondblclick='barre_inserer(\"&lt;$doc$id$pipe&gt;\", document.formulaire.texte);' title=\"". str_replace('&amp;', '&', entites_html(_T('double_clic_inserer_doc')))."\"";
	
	$return = "\n<div class='raccourci_item' style='text-align: $align'$onclick>&lt;$doc$id$pipe&gt;</div>\n";
        
        $return = pipeline(
                'cisf_raccourci_doc',
                array(
                        'args' => array(
                            'doc' => $doc,
                            'id' => $id,
                            'align' => $align
                        ),
                        'data' => $return
                )
        );

        return $return;        
}


// Ne pas mettre des accents dans un mailto, etc.
function cisf_filtre_mailto($texte, $charset='utf-8'){
    $texte = htmlentities($texte, ENT_NOQUOTES, $charset);
    $texte = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $texte);
    $texte = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $texte);
    $texte = preg_replace('#\&[^;]+\;#', ' ', $texte);
    $texte = str_replace('nbsp;', ' ', $texte);
    
    return $texte;
}

// passer un parametre
function cisf_param_porte_plume($texte){
    $texte = str_replace('page=porte_plume.js', 'page=porte_plume.js&amp;cisf_pp=oui', $texte);
    $texte = str_replace('page=porte_plume_start.js', 'page=porte_plume_start.js&amp;cisf_pp=oui', $texte);
	
	return $texte;
}

/*-----------------------------------------------------------------
// Compatibilité avec leplugin PRISM
------------------------------------------------------------------*/

function cisf_prism($arg = '') {
        if (defined('_DIR_PLUGIN_PRISM')){
                include_spip('prism_pipelines');
                return prism_header_prive('');
        } else {
            return '';
        }
}

?>