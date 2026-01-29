<?php
/**
 * Plugin CISF
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


function cisf_ciwidget_raccourcis_widget($id_widget, $type_widget) {
    $return = '';
    $raccourci = '';
    $sans_alignement = '';
    $config_align = '';
    
    // Ajout d'un prefixe
    // pour eviter les confusions lorsqu'un widget est lié à un document
    $doc = 'widget_'.$type_widget;

    // version de CIWIDGET
    $liste = isset($GLOBALS['meta']['plugin']) ? $GLOBALS['meta']['plugin'] : '';
    if ($liste) {
        $tableau = unserialize($liste);
        if (isset($tableau['CIWIDGET']['version']) AND intval(substr($tableau['CIWIDGET']['version'],0,1)>=2)){
            include_spip('inc/ciwidget_inc_divers');    
            $sans_alignement = ciwidget_widget_sans_alignement($type_widget);        
            $config_align = ciwidget_lire_meta_cle($type_widget,'imposer_alignement_widget');        
        }
    }




    if ($sans_alignement){
        // sans alignement => ne pas proposer left/center/right
        $raccourci = cisf_ciwidget_affiche_raccourci_widget($doc, $id_widget, '');
    } elseif ($config_align AND in_array($config_align,array('left','center','right'))){
        // alignement imposé du widget => ne pas proposer left/center/right
        $raccourci = cisf_ciwidget_affiche_raccourci_widget($doc, $id_widget, '');
    } else {








        // Affichage du raccourci <type_widget...> correspondant
        $raccourci =
                cisf_ciwidget_affiche_raccourci_widget($doc, $id_widget, 'left')
                . cisf_ciwidget_affiche_raccourci_widget($doc, $id_widget, 'center')
                . cisf_ciwidget_affiche_raccourci_widget($doc, $id_widget, 'right');
    }
    
    $return = "<div class='raccourci_item'>" . $raccourci . '</div>';

    return $return;
}

function cisf_ciwidget_affiche_raccourci_widget($doc, $id, $align='', $short = false) {
    
    $pipe = $onclick = '';

    if ($align) {
            $pipe = "|$align";
    }

    $onclick = "\nondblclick=\"barre_inserer('\\x3C$doc$id$pipe&gt;', $('textarea[name=texte]')[0]);\"\ntitle=\"" .
            str_replace(
                    '&amp;',
                    '&',
                    entites_html(_T('medias:double_clic_inserer_doc'))
            ) . '"';

    if (!$align) {
            $align = "center";
    }

    $return = "\n<div style='text-align: $align'$onclick>&lt;$doc$id$pipe&gt;</div>\n";

    $return = pipeline(
            'ciwidget_raccourci_doc',
            array(
                    'args' => array(
                        'doc' => $doc,
                        'id' => $id,
                        'align' => $align
                    ),
                    'data' => $return
            )
    );
    
    return $return;
}

?>