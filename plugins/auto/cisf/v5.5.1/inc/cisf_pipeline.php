<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */
 
if (!defined("_ECRIRE_INC_VERSION")) return;


function cisf_formulaire_charger($flux){

	include_spip('inc/filtres');
		$objet = 'article';
		$id_table_objet = 'id_article';
		
		if ($flux['args']['form']=='cisf_article'
		  AND $id_version = _request('id_version')
		  AND isset($flux['data'][$id_table_objet])
			AND $id = intval($flux['data'][$id_table_objet])
		  AND !$flux['args']['je_suis_poste']){
			// ajouter un message convival pour indiquer qu'on a restaure la version
//			$flux['data']['message_ok'] = _T('revisions:icone_restaurer_version',array('version'=>$id_version));
			// recuperer la version
			include_spip('inc/revisions');
			$champs = recuperer_version($id,$objet, $id_version);
			foreach($champs as $champ=>$valeur){
				if (!strncmp($champ,'jointure_',9)==0){
					if ($champ=='id_rubrique'){
						$flux['data']['id_parent'] = $valeur;
					}
					else
						$flux['data'][$champ] = $valeur;
				}
			}
		}

	return $flux;
}

function cisf_affichage_final_prive($page) {
	
	// compatibilite avec l'extension medias
	if (substr($_SERVER['QUERY_STRING'],0,27)=='exec=popin-choisir_document' AND strpos($_SERVER['HTTP_REFERER'],'cisf_document')>1) {   	
		$page = str_replace('../', '', $page);
	}

	return $page;	
}

function cisf_affichage_final($texte) {
    
    // Si CISF est utilisé sans CIPARAM
    if (!defined('_DIR_PLUGIN_CIPARAM')){
        if (empty($texte)){
            return '';
        }        
        
        // Accessibilite : indiquer dans le title de la page si la reponse du formulaire est OK ou erreur 
        if (strpos($texte, 'formulaire_erreur')!==false){
            $texte = str_replace('<title>','<title>'._T('cisf:formulaire_erreur').' - ',$texte);
        } elseif (strpos($texte, 'formulaire_ok')!==false){
            $texte = str_replace('<title>','<title>'._T('cisf:formulaire_ok').' - ',$texte);
        }
    }
    
    return $texte;
}

// Comptabiliser les modifications d'articles
function cisf_post_edition($tableau){
    static $actions = array();
    
    // cas d'une modification d'un article
    if (isset($tableau['args']['table']) AND $tableau['args']['table']=='spip_articles' 
            AND isset($tableau['args']['action']) AND $tableau['args']['action']=='modifier' 
            AND isset($tableau['args']['id_objet']) AND intval($tableau['args']['id_objet'])>0){
        
        $cle = $tableau['args']['table'].'/'.$tableau['args']['action'].'/'.$tableau['args']['id_objet'];
        
        // contourner le cas d'un double appel du pipeline sur la meme table avec la meme action
        if ($actions AND in_array($cle,$actions)) 
            return $tableau;
        else
            $actions[] = $cle;

        // comptabiliser
        // et ne pas compter une modif si l'article vient juste d'etre cree
        if (!cisf_article_juste_cree()){
            if (test_espace_prive())
                cisf_ecrire_monitoring('spipM');
            else
                cisf_ecrire_monitoring('cisfM');
        }
    }

    return $tableau;
}

// Comptabiliser les creations d'articles
function cisf_post_insertion($tableau){
    static $actions = array();
    
    // cas de la creation d'un article
    if (isset($tableau['args']['table']) AND $tableau['args']['table']=='spip_articles' 
            AND isset($tableau['args']['id_objet']) AND intval($tableau['args']['id_objet'])>0){
        
        $cle = $tableau['args']['table'].'/'.$tableau['args']['id_objet'];
        
        // contourner le cas d'un double appel du pipeline sur la meme table avec la meme action
        if ($actions AND in_array($cle,$actions)) 
            return $tableau;
        else
            $actions[] = $cle;
    
        // comptabiliser
        if (test_espace_prive())
            cisf_ecrire_monitoring('spipC');
        else
            cisf_ecrire_monitoring('cisfC');
        
        cisf_article_juste_cree(true);
    }	

    return $tableau;
}

function cisf_article_juste_cree($arg=false){
    static $article_juste_cree = false;

    if ($arg AND !$article_juste_cree)
            $article_juste_cree = true;
    
    return $article_juste_cree;
}

function cisf_lire_monitoring($annee,$saisie='cisf') {
    $return = 0;

    if (intval($annee)>0 AND in_array($saisie, array('cisfM','spipM','cisfC','spipC'))){
        $annee = strval(intval($annee));
        $cle = $annee.$saisie;
        $cisf_meta = cisf_tableau_meta();
        if (isset($cisf_meta[$cle]))
            $return = $cisf_meta[$cle];
    }
    return $return;
}

function cisf_ecrire_monitoring($saisie) {

    if (in_array($saisie, array('cisfM','spipM','cisfC','spipC'))){
        $annee = date("Y");
        $cle = $annee.$saisie;
        $cisf_meta = cisf_tableau_meta();
        if (isset($cisf_meta[$cle]))
            $cisf_meta[$cle] = 1 + $cisf_meta[$cle];
        else
            $cisf_meta[$cle] = 1;

        include_spip('inc/meta');
        ecrire_meta('cisf', @serialize($cisf_meta));
    }
    return true;
}

function cisf_tableau_meta() {	
    $return = array();

    if (isset($GLOBALS['meta']['cisf'])) {
        $cisf_meta = @unserialize($GLOBALS['meta']['cisf']);

        if (is_array($cisf_meta))
                $return = $cisf_meta;
    }
    return $return;
}

function cisf_jquery_plugins($scripts) {	

    if (!test_espace_prive()) {
        $cipage = _request('page');
        if ($cipage AND strlen($cipage)>=5 AND substr($cipage,0,5)=='cisf_') {
            if (defined('_DIR_PLUGIN_BIGUP')){
                if (!lire_config('bigup/charger_public', false)) {
                    $scripts[] = 'javascript/bigup.utils.js';
                    $scripts[] = produire_fond_statique('javascript/bigup.trads.js', [
                            'lang' => $GLOBALS['spip_lang'],
                    ]);
                    $scripts[] = 'lib/flow/flow.js';
                    $scripts[] = 'lib/load_image/load-image.all.min.js';
                    $scripts[] = 'javascript/bigup.js';
                    $scripts[] = 'javascript/bigup.loader.js';
                }
            }
        }
    }
    
    return $scripts;
}

function cisf_insert_head($flux) {	

    if (!test_espace_prive()) {
        $cipage = _request('page');
        if ($cipage AND strlen($cipage)>=5 AND substr($cipage,0,5)=='cisf_') {
            if (defined('_DIR_PLUGIN_BIGUP')){
                if (!lire_config('bigup/charger_public', false)) {
                    include_spip('bigup_pipelines');
                    $flux = bigup_header_prive($flux);
                    $flux = bigup_header_prive_css($flux);
                }
            }
        }
    }
    
    return $flux;
}

function cisf_medias_formulaire_fond($flux) {
    include_spip('inc/config');
    if (!test_espace_prive()) {
        $cipage = _request('page');
        if ($cipage AND strlen($cipage)>=5 AND substr($cipage,0,5)=='cisf_') {
            if (defined('_DIR_PLUGIN_BIGUP')){
                if (!lire_config('bigup/charger_public', false)) {
                    if (
                            !empty($flux['args']['contexte']['_bigup_rechercher_fichiers'])
                            and $form = $flux['args']['form']
                            and $bigup_medias_formulaire = charger_fonction('bigup_medias_formulaire_' . $form, 'inc', true)
                    ) {
                            $bigup = bigup_get_bigup(array('args' => $flux['args']['contexte']));
                            $formulaire = $bigup->formulaire($flux['data'], $flux['args']['contexte']);

                            $formulaire = $bigup_medias_formulaire($flux['args'], $formulaire);

                            $flux['data'] = $formulaire->get();
                    }
                }
            }
        }
    }

    return $flux;
}

function inc_bigup_medias_formulaire_cisf_joindre_document_dist($args, $formulaire) {
	$formulaire->preparer_input(
		'fichier_upload[]',
		array(
			'multiple' => false,
			'previsualiser' => true
		)
	);
// Desactiver imperativement la ligne ci-dessous	
//	$formulaire->inserer_js('bigup.documents.js');
	return $formulaire;
}

function inc_bigup_medias_formulaire_cisf_editer_document_dist($args, $formulaire) {
	$formulaire->preparer_input(
		'fichier_upload[]',
		array(
			'multiple' => false,
			'previsualiser' => true
		)
	);
// Desactiver imperativement la ligne ci-dessous	
//	$formulaire->inserer_js('bigup.documents_edit.js');
	return $formulaire;
}

function inc_bigup_medias_formulaire_cisf_multipj_dist($args, $formulaire) {
	$formulaire->preparer_input(
		'fichier_upload[]',
		array(
			'multiple' => true,
			'previsualiser' => true
		)
	);
// Desactiver imperativement la ligne ci-dessous	
//	$formulaire->inserer_js('bigup.documents.js');
	return $formulaire;
}

function inc_bigup_medias_formulaire_cisf_editer_logo_dist($args, $formulaire) {
	$options = array(
		'accept' => bigup_get_accept_logos(),
		'previsualiser' => true,
// Desactiver imperativement la ligne ci-dessous	
//		'input_class' => 'bigup_logo',
	);
	$formulaire->preparer_input(
		'logo_on',
//		array('logo_on', 'logo_off'),
		$options
	);
// Desactiver imperativement la ligne ci-dessous	
//	$formulaire->inserer_js('bigup.logo.js');
	return $formulaire;
}

function inc_bigup_medias_formulaire_cisf_illustrer_document_dist($args, $formulaire) {
	$formulaire->preparer_input(
		'fichier_upload[]',
		array(
			'multiple' => false,
			'accept' => bigup_get_accept_logos(),
			'previsualiser' => true,
// Desactiver imperativement les lignes ci-dessous	
//			'input_class' => 'bigup_illustration',
//			'drop-zone-extended' => '.formulaire_illustrer_document .editer_fichier',
		)
	);
// Desactiver imperativement la ligne ci-dessous	
//	$formulaire->inserer_js('bigup.documents_illustrer.js');
	return $formulaire;
}

?>