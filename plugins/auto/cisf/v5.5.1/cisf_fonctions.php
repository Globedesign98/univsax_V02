<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

// Conserver imperativement ce fichier pour la compatibilite ascendante
// et a titre de reservation

function cisf_title_pagination($env=array(), $pas=10) {
    $pas = intval($pas);
    if ($pas<1)
        $pas = 10;
    
    // indispensable (necessite un #ENV sans filtre)
    $p = unserialize($env);
    
    $page = 1;
    foreach ($p as $cle=>$valeur) {
        if (substr($cle,0,6)=="debut_"){
            if (intval($valeur)>0)
                $page = 1 + (intval($valeur)/$pas);

            break;
        }
    }
    
    $return = "("._T('cisquel:eq_page')." : ".strval($page).")";
    
    return $return;
}

function cisf_monitoring($site) {
    $return = "";
	
    if (isset($GLOBALS['meta']['cisf'])) {
        $cisf_meta = @unserialize($GLOBALS['meta']['cisf']);

        if (is_array($cisf_meta)){
            // tri ordre decroissant
            krsort($cisf_meta);
            foreach ($cisf_meta as $key=>$val){
                $return .= $key.':'.$val.'_';
            }
            // enlever le dernier underscore
            if ($return)
                $return = substr($return,0,-1);
        }
    }
	
    return $return;
}


// compatibilite avec CIMS
function cisf_article_du_site($id_article=''){
    $return = true;
    
    if (defined('_DIR_PLUGIN_CIMS') AND defined('_CIMS_ACTIF')){
        if ($id_article>=1){
            $id_rubrique = sql_getfetsel('id_rubrique', 'spip_articles', "id_article=$id_article");
        }
        if ($id_rubrique>=1){
            include_spip('cims_fonctions');
            $ci_site = cims_site_en_cours();
            $tableau_sites_rubrique = cims_tableau_sites_de_la_rubrique($id_rubrique);
            if (!in_array($ci_site,$tableau_sites_rubrique)){
                $return = false;
            }
        }
    }
    
    return $return;
}

// compatibilite avec SPIP 2.1
function cisf_parametres_css_prive(){
        include_spip('inc/filtres_ecrire');
        return parametres_css_prive();
}

function cisf_datepicker_js($var){
    $return = '';
    $majeure = 0;
    $mineure = 0;
    $lang = 'fr';
    
    if ($var AND ctype_alpha(str_replace('_','',$var))){
        $lang = $var;
    } 
    
    // une exception
    if ($lang=='en'){
        $lang = 'en-GB';
    }
    
    $tableau_version = explode('.',$GLOBALS['spip_version_branche']);
    if (isset($tableau_version[0])){
        $majeure = intval($tableau_version[0]);
    }
    if (isset($tableau_version[1])){
        $mineure = intval($tableau_version[1]);
    }

    if ($majeure>=4){

    } elseif ($majeure>=3){
        if (defined('_CIPARAM_SITE_PUBLIC_EN_JQUERY_UI_1_8_21') 
                AND _CIPARAM_SITE_PUBLIC_EN_JQUERY_UI_1_8_21=='oui' 
                AND $mineure>=1){
            // utiliser la version 1.8.21 de jQueryUI stockee dans ciparam (celle qu'utilise SPIP 3.0)  
            $return = '<script src="'.find_in_path('_js/ui_v108/jquery.ui.core.js').'"></script>
<script src="'.find_in_path('_js/ui_v108/jquery.ui.datepicker.js').'"></script>
<script src="'.find_in_path('_js/ui_v108/i18n/jquery.ui.datepicker-'.$lang.'.js').'"></script>';
            
        } elseif ($mineure>=2){
            // SPIP 3.2
            $return = '<script src="'.find_in_path('prive/javascript/ui/jquery-ui.js').'"></script>
<script src="'.find_in_path('prive/javascript/ui/i18n/datepicker-'.$lang.'.js').'"></script>';
        } else {
            // SPIP 3.0 ou SPIP 3.1
            $return = '<script src="'.find_in_path('prive/javascript/ui/jquery.ui.core.js').'"></script>
<script src="'.find_in_path('prive/javascript/ui/jquery.ui.datepicker.js').'"></script>
<script src="'.find_in_path('prive/javascript/ui/i18n/jquery.ui.datepicker-'.$lang.'.js').'"></script>';
        }
    } else {
        // SPIP 2.1 et moins
        $return = '<script src="'.find_in_path('_js/ui.core.js').'"></script>
<script src="'.find_in_path('_js/ui.datepicker.js').'"></script>
<script src="'.find_in_path('_js/ui.datepicker-'.$lang.'.js').'"></script>';
    }

    return $return;
}

function cisf_autorise_modifier_article($id_article='',$droit='modifier'){
    $return = 'non';
    $cisession = false;
    $id_article = intval($id_article);
    
    if ($id_article>0 AND in_array($droit,array('modifier','voirstats','voirrevisions','modererpetition','modererforum'))){
        if (isset($GLOBALS['visiteur_session']['id_auteur']) AND intval($GLOBALS['visiteur_session']['id_auteur'])){
            $cisession = true;
            if (isset($GLOBALS['visiteur_session']['statut']) AND $GLOBALS['visiteur_session']['statut']=='6forum'){
                $cisession = false;
            }
        }

        if ($cisession){
            include_spip('inc/autoriser');
            if (autoriser($droit, 'article', $id_article)){
                $return = 'oui';
            }
        }
    }
    
    return $return;    
}

if (version_compare($GLOBALS['spip_version_branche'], '4.2.13')<0 AND !function_exists('attribut_url')) {
function attribut_url(?string $texte): string {
	if ($texte === null || $texte === '') {
		return '';
	}
	$texte = entites_html($texte, false, false);
	$texte = str_replace(["'", '"'], ['&#039;', '&#034;'], $texte);
	return preg_replace(
		['/&(amp;|#38;)/', '/&(?![A-Za-z]{0,4}\w{2,3};|#[0-9]{2,5};)/'],
		['&', '&amp;'],
		$texte
	);
}
}

?>