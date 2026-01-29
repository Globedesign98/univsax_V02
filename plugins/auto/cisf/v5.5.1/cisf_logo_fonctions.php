<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 
include_spip('inc/cisf_inc_joindre');

/*-----------------------------------------------------------------
// Balise propre au plugin
------------------------------------------------------------------*/
 

function balise_CISF_LOGO($p) {
	$p->code = "cisf_logo(\$Pile)";
//	$p->statut = 'html';
	return $p;
}


/*-----------------------------------------------------------------
// Fonction relative a la balise propre au plugin
------------------------------------------------------------------*/

// Ajouter un logo 
function cisf_logo($Pile) {
	include_spip('inc/presentation');
	include_spip('inc/actions');
	include_spip('inc/autoriser');

	$id_article = intval($Pile[0]['id_article']);
	$flag_editable = autoriser('modifier', 'article', $id_article);

	// compatibilite avec SPIP 2.1.8
	$script = "spip.php?page=cisf_article&amp;id_article=".$id_article;

	include_spip('inc/filtres');
        $redirect = $script;
        // Compatibilite avec le plugin titre_logo
        if (defined('_DIR_PLUGIN_TITRE_LOGO')) {
                $chercher_logo = charger_fonction('chercher_logo', 'inc');
                $logo = $chercher_logo($id_article, 'id_article', 'on');
                if (!$logo)
                        $redirect = "spip.php?page=cisf_logo&amp;id_article=".$id_article;
        }
        $icone = recuperer_fond('prive/objets/editer/logo',array('objet'=>'article','id_objet'=>$id_article,'redirect'=>$redirect,'editable'=>true));
	

	if ($GLOBALS['filtrer_javascript'] < 0) {
		if (preg_match_all(',<script.*?($|</script.),isS', $icone, $r, PREG_SET_ORDER))
		foreach ($r as $regs)
			$icone = str_replace($regs[0], '', $icone);
	}
	
	return $icone;
}

?>