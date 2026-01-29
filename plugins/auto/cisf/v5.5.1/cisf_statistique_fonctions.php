<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

include_spip('inc/filtres');
include_spip('inc/filtres_ecrire');
include_spip('inc/filtres_boites');

if (isset($GLOBALS['visiteur_session']['id_auteur']) AND $GLOBALS['visiteur_session']['id_auteur'])
        $GLOBALS['connect_id_auteur'] = $GLOBALS['visiteur_session']['id_auteur'];	
 
 

?>