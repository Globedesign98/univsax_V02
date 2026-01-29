<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/filtres');

/**
 * Mise à jour de la liste des auteurs affectes a l'article
 *
 * @param 
 * @return tableau des erreurs
 */
function action_editer_cisf_article_auteur() {
	
	$err = array();
	$securiser_action = charger_fonction('securiser_action', 'inc');
	$arg = $securiser_action();
	
	// si id_article est un nombre
	if ($ci_id_article = intval($arg)) {
	
		$auteurs = cisf_cireqsecure('auteurs');
		$ci_auteurs_img_avant = cisf_cireqsecure('cimodif_img_avant');
		
		if ($ci_id_article>0) {
			if (!$auteurs) $auteurs = array();
			$insertauteurs = array();
			$deleteauteurs = array();
			$oldauteurs = array();
			
			// auteurs de cet article m�moris�s dans la base
                        $result = sql_select("id_auteur", "spip_auteurs_liens", "objet='article' AND id_objet=$ci_id_article","","id_auteur");
			while ($row = sql_fetch($result)) {
					$oldauteurs[] = $row['id_auteur'];
			}
				
			// Prevention des acces concurents
			$ci_auteurs_img_base = "";
			if ($oldauteurs) $ci_auteurs_img_base = implode(",", $oldauteurs);
			$ciauteurs_concurrent=false;
			if ($ci_auteurs_img_avant) {
				if ($ci_auteurs_img_base) {
					if (!($ci_auteurs_img_avant==$ci_auteurs_img_base)) $ciauteurs_concurrent=true;
				} else {
					$ciauteurs_concurrent=true;
				}		
			} elseif ($ci_auteurs_img_base) $ciauteurs_concurrent=true;
		
			if (!$ciauteurs_concurrent) {
		
				if (isset($auteurs) AND is_array($auteurs)) {
					foreach ($auteurs as $auteur) {
						$auteur = intval($auteur);
						if (in_array($auteur,$oldauteurs)){
							// si le nouvel auteur est le meme que celui en base, ne rien faire
						} elseif ($auteur>0) {
							$insertauteurs[] = $auteur;
						}		
					}
				}

				if (isset($oldauteurs) AND is_array($oldauteurs) AND isset($auteurs) AND is_array($auteurs)) {
					reset($oldauteurs);
					reset($auteurs);
					foreach ($oldauteurs as $oldauteur) {
						$oldauteur = intval($oldauteur);
						if (in_array($oldauteur,$auteurs)){
							// si l'ancien auteur est toujours la, ne rien faire
						} else {
							$deleteauteurs[] = $oldauteur;
						}		
					}
				}
							
				if ($insertauteurs) {
					foreach ($insertauteurs as $insertauteur) {
						sql_insertq("spip_auteurs_liens", array('id_auteur' => $insertauteur, 'objet' => 'article', 'id_objet' => $ci_id_article));
					}	
				}
				
				if ($deleteauteurs) {
					foreach ($deleteauteurs as $deleteauteur) {
                                                sql_delete("spip_auteurs_liens", "id_auteur=$deleteauteur AND objet='article' AND id_objet=$ci_id_article");
					}	
				}
				
			}			
			 
		}
	}

	return array($ci_id_article,$err);

}

?>