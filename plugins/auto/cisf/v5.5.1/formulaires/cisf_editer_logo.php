<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('formulaires/editer_logo');
include_spip('inc/cisf_inc_joindre');

function formulaires_cisf_editer_logo_charger_dist($objet, $id_objet, $retour='', $options=array()){
	$valeurs = formulaires_editer_logo_charger_dist($objet, $id_objet, $retour, $options);
        
        if (cisf_utiliser_bigup()) {
            $valeurs['_bigup_rechercher_fichiers'] = true;
        }
        
	return $valeurs;        
}

function formulaires_cisf_editer_logo_verifier_dist($objet, $id_objet, $retour='', $options=array()){
	return formulaires_editer_logo_verifier_dist($objet, $id_objet, $retour, $options);
}

function formulaires_cisf_editer_logo_traiter_dist($objet, $id_objet, $retour='', $options=array()){
	$retour = "spip.php?page=cisf_article&id_article=".intval($id_objet);
	return formulaires_editer_logo_traiter_dist($objet, $id_objet, $retour, $options);
}

?>