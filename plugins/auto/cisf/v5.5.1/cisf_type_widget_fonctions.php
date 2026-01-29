<?php
/**
 * Plugin CIWIDGET
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

include_spip('inc/ciwidget_commun');


function cisf_ciwidget_affiche_types_widget($objet='',$id_objet=0,$id_rubrique=0){
    $return = '';
    $ciwiget_v2 = false;

    // version de CIWIDGET
    $liste = isset($GLOBALS['meta']['plugin']) ? $GLOBALS['meta']['plugin'] : '';
    if ($liste) {
        $tableau = unserialize($liste);
        if (isset($tableau['CIWIDGET']['version']) AND intval(substr($tableau['CIWIDGET']['version'],0,1)>=2)){
            $ciwiget_v2 = true;
        }
    }

    if ($ciwiget_v2){
        include_spip('inc/ciwidget_inc_divers');
        $return = ciwidget_affiche_types_widget_pour_cisf($objet,$id_objet,$id_rubrique);
        
    } else {
    
        $types_widget = ciwidget_types_widget($objet);

        foreach ($types_widget AS $type_widget) {
            $img = '';
            if (isset($type_widget['vignette']) AND $type_widget['vignette']){
                $img = '<img src="'.find_in_path('_vignettes/'.$type_widget['vignette']).'" alt="" class="ciwidget_type_widget_vignette">';

            }
            $params = 'type_widget='.$type_widget['id'].'&id_article='.intval($id_objet).'&id_rubrique='.intval($id_rubrique);
            $return .= '<li><a href="'.generer_url_public("cisf_widget",$params).'" class="ciwidget_type_widget_lien">'.$img.'<div class="ciwidget_type_widget_titre">'. $type_widget['titre'] .'</div><div class="ciwidget_type_widget_descriptif">'. $type_widget['descriptif'] .'</div></a></li>';
        };

        if ($return){
            $return = '<ul>'.$return.'</ul>';
        }
    }
    
    return $return;
}

?>