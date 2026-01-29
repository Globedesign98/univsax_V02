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
 
include_spip('inc/cisf_inc_joindre');

include_spip('inc/presentation');
include_spip('inc/filtres');
include_spip('inc/filtres_ecrire');


function balise_CISF_REMPLACER($p) {
	$p->code = "cisf_joindre(\$Pile)";
//	$p->statut = 'html';
	return $p;
}

?>