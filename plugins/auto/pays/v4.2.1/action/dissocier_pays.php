<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Dissocier un pays d'un objet editorial
 *
 * @example
 *     ```
 *     #URL_ACTION_AUTEUR{dissocier_pays, #ID_PAYS/#OBJET/#ID_OBJET, #SELF}
 *     ```
 *
 * @param string $arg
 *     arguments séparés par un charactère non alphanumérique
 *
 *     - id_pays : identifiant de l'pays
 *     - objet : type d'objet à dissocier
 *     - id_objet : identifiant de l'objet à dissocier
 */
function action_dissocier_pays_dist($arg = null) {

	// Si $arg n'est pas donné directement, le récupérer via _POST ou _GET
	if ($arg === null) {
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}

	if (
		([$id_pays, $objet, $id_objet] = preg_split('/\W/', $arg))
		&& intval($id_pays) > 0
		&& intval($id_objet) > 0
		&& autoriser('modifier', $objet, $id_objet)
	) {
		include_spip('action/editer_liens');
		objet_dissocier(['pays' => $id_pays], [$objet => $id_objet]);
	}
}
