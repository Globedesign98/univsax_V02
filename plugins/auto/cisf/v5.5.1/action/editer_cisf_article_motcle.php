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
 * Mise a jour de la liste des mots cles affectes a l'article
 *
 * @param 
 * @return tableau des erreurs
 */
function action_editer_cisf_article_motcle() {
	
	$err = array();
	$securiser_action = charger_fonction('securiser_action', 'inc');
	$arg = $securiser_action();
	
	// si id_article est un nombre
	if ($ci_id_article = intval($arg)) {
                $insertmotscle = array();
                $deletemotscle = array();
                $oldmotscle = array();
	
		$motscle = cisf_cireqsecure('motscle');
		
		$ci_motscle_img_avant = cisf_cireqsecure('cimodif_img_avant');
		
		// mots cle de cet article memorises dans la base
		$result = sql_select("id_mot", "spip_mots_liens", "objet='article' AND id_objet=$ci_id_article","","id_mot");
		while ($row = sql_fetch($result)) {
				$oldmotscle[] = $row['id_mot'];
		}
			
		// Prevention des acces concurents
		$ci_motscle_img_base = "";
		if ($oldmotscle) $ci_motscle_img_base = implode(",", $oldmotscle);
		$cimotscle_concurrent=false;
		if ($ci_motscle_img_avant) {
			if ($ci_motscle_img_base) {
				if (!($ci_motscle_img_avant==$ci_motscle_img_base)) $cimotscle_concurrent=true;
			} else {
				$cimotscle_concurrent=true;
			}		
		} elseif ($ci_motscle_img_base) $cimotscle_concurrent=true;
	
		if (!$cimotscle_concurrent) {
	
			if (isset($motscle) AND is_array($motscle)) {
				if (isset($oldmotscle) AND is_array($oldmotscle)) {
					foreach ($motscle as $motcle) {
						$motcle = intval($motcle);
						if (in_array($motcle,$oldmotscle)){
							// si le nouveau motcle est le meme que celui en base, ne rien faire
						} elseif ($motcle>0) {
							$insertmotscle[] = $motcle;
						}		
					}
				} else {
					foreach ($motscle as $motcle) {
						$motcle = intval($motcle);
						if ($motcle>0) {
							$insertmotscle[] = $motcle;
						}		
					}
				}
			}
			
			if (isset($oldmotscle) AND is_array($oldmotscle)) {
				reset($oldmotscle);
				if (isset($motscle) AND is_array($motscle)) {
					reset($motscle);
					foreach ($oldmotscle as $oldmotcle) {
						$oldmotcle = intval($oldmotcle);
						if (in_array($oldmotcle,$motscle)){
							// si l'ancien mot est toujours la, ne rien faire
						} else {
							$deletemotscle[] = $oldmotcle;
						}		
					}
				} else {
					foreach ($oldmotscle as $oldmotcle) {
						$oldmotcle = intval($oldmotcle);
						if ($oldmotcle>0) {
							$deletemotscle[] = $oldmotcle;
						}		
					}
				}
			}
			
			if ($insertmotscle) {
				foreach ($insertmotscle as $insertmotcle) {
                                        sql_insertq('spip_mots_liens', array('id_mot' => $insertmotcle, 'objet' => 'article', 'id_objet' => $ci_id_article));
				}	
			}
			
			if ($deletemotscle) {
				foreach ($deletemotscle as $deletemotcle) {
                                        sql_delete("spip_mots_liens", "id_mot=$deletemotcle AND objet='article' AND id_objet=$ci_id_article");
				}	
			}

		}
		
	}

	return array($ci_id_article,$err);
}

?>