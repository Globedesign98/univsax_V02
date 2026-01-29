<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 
if (!defined("_ECRIRE_INC_VERSION")) return;

// Utilisation du pipeline du plugin porte plume
function cisf_porte_plume_barre_pre_charger($barres){
	$barre = &$barres['edition'];
	$cisf_pp = '';

	// compatibilite avec auto_compress_js
	if ($GLOBALS['meta']['auto_compress_js'] == 'oui'
             OR $GLOBALS['spip_version_branche']>=3.2) {
		if (isset($_GET['page']))
			if ($_GET['page']=='cisf_article')
				$cisf_pp = 'oui';
	}

	if (isset($_GET['cisf_pp']))
		$cisf_pp = $_GET['cisf_pp'];


	if ($cisf_pp=='oui'){
		$barre->ajouterApres('liste_ul', array(
			"id"        => 'cisf_tableau',
			"name"      => _T('cisf:barre_cisf_tableau'), 
			"key"       => "T", 
			"className" => "outil_cisf_tableau", 
			"replaceWith" => "function(h){return outil_cisf_tableau(h);}",  
		    "display"   => true,
		));

		$barre->ajouterApres('cisf_tableau', array(
		    "id" => "sepCodeCisf",
		    "separator" => "---------------",
		    "display"   => true,
		));
		
		$barre->ajouterApres('sepCodeCisf', array(
			"id"        => 'cisf_document',
			"name"      => _T('cisf:barre_cisf_document'), 
			"key"       => "D", 
			"className" => "outil_cisf_document", 
			"replaceWith" => "function(h){return outil_cisf_document(h);}",  
		    "display"   => true,
		));
			
		$barre->ajouterApres('cisf_document', array(
			"id"        => 'cisf_image',
			"name"      => _T('cisf:barre_cisf_image'), 
			"key"       => "M", 
			"className" => "outil_cisf_image", 
			"replaceWith" => "function(h){return outil_cisf_image(h);}",  
		    "display"   => true,
		));
		
		if (defined('_DIR_PLUGIN_TYPOENLUMINEE')){
			$barre->ajouterApres('notes', array(
				"id"          => 'cisf_elumtypo_tableau',
				"name"        => _T('enlumtypo:barre_tableau'),
				"className"   => "outil_barre_tableau",
                                'replaceWith' => "function(markitup) { zone_selection = markitup.textarea; jQuery.modalboxload('".url_absolue(generer_url_public(
                                        'typoenluminee_tableau_edit',
                                        "modalbox=oui"
                                ))."',{minWidth: '90%', minHeight: '90%', iframe: true, type: 'iframe'});}",
				"display"     => true,
				"selectionType" => "line",
			));
		}
	}

    return $barres;	
}

// Utilisation du pipeline du plugin porte plume
function cisf_porte_plume_barre_charger($barres){
	$barre = &$barres['edition'];
 	$barre->cacher('cadre');

	if (defined('_DIR_PLUGIN_TYPOENLUMINEE') AND $barre->get('cisf_elumtypo_tableau'))
	 	$barre->cacher('barre_tableau');

    return $barres;	
}


?>