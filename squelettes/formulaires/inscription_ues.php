<?php
if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/session');
include_spip('action/editer_objet');
include_spip('action/editer_liens');

/**
 * Formulaire CVT : inscription_ues
 */

function formulaires_inscription_ues_charger_dist($id_rubrique) {
    if (!isset($GLOBALS['visiteur_session']['id_auteur'])) {
        return false;
    }
    return [
        'titre' => '',
        'id_rubrique' => $id_rubrique,
    ];
}

function formulaires_inscription_ues_verifier_dist($id_rubrique) {
    $erreurs = [];
    if (!_request('titre')) {
        $erreurs['titre'] = 'Le titre est obligatoire';
    }
    return $erreurs;
}

function formulaires_inscription_ues_traiter_dist($id_rubrique) {
    $id_auteur = intval(session_get('id_auteur'));
    if (!$id_auteur) {
        return ['message_erreur' => "Vous devez vous identifier pour effectuer cette action."];
    }

    $id_article = intval(session_get('ues_id_article'));
    
    // Création de l'article si inexistant
    if (!$id_article) {
        $id_article = objet_inserer('article', $id_rubrique);
        if (!$id_article) {
            return ['message_erreur' => "Impossible de créer le dossier."];
        }
        objet_associer(['auteur' => $id_auteur], ['article' => $id_article]);
        session_set('ues_id_article', $id_article);
    }

    // Mise à jour du titre
    $titre = _request('titre');
    $set = [
        'titre' => $titre,
        'statut' => 'prepa'
    ];

    objet_modifier('article', $id_article, $set);

    // Invalidation du cache
    include_spip('inc/invalideur');
    suivre_invalideur("id='id_article/$id_article'");

    // --- CONSTRUCTION DE LA REDIRECTION ---
    
    // 1. On récupère l'URL de la page rubrique
    $url_redirect = generer_url_entite($id_rubrique, 'rubrique');
    
    // 2. On ajoute les paramètres pour retomber sur le bon slide et en mode "édition"
    $url_redirect = parametre_url($url_redirect, 'slide', '3');      // Revenir sur le slide Formulaire
    $url_redirect = parametre_url($url_redirect, 'id_article', $id_article); // Cibler l'article créé
    $url_redirect = parametre_url($url_redirect, 'edit', '1');       // FORCER le mode édition
    
    // 3. On ajoute l'ancre pour scroller au bon endroit
    $url_redirect = ancre_url($url_redirect, 'ues-slides');

    return [
        'message_ok' => 'Dossier créé. Chargement du formulaire...',
        'redirect' => $url_redirect // C'est cette ligne qui fait le rechargement auto
    ];
}