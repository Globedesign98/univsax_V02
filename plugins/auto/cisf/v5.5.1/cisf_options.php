<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 
// pour les redacteurs et les administrateurs, poser automatiquement le cookie de correspondance
// afin d'afficher les boutons d'administration 
if (isset($GLOBALS['visiteur_session']['statut'])) {
	if ($GLOBALS['visiteur_session']['statut']=="1comite") {
		if (!isset($_COOKIE['spip_admin'])) {
			$_COOKIE['spip_admin'] = rawurlencode("@");
			@setcookie('spip_admin',rawurlencode("@"));
		}
	}

	if ($GLOBALS['visiteur_session']['statut']=="0minirezo") {
		if (!isset($_COOKIE['spip_admin'])) {
			$_COOKIE['spip_admin'] = rawurlencode("@");
			@setcookie('spip_admin',rawurlencode("@"),time() + 14 * 24 * 3600);
		}
	}
}


?>