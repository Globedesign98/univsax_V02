<?php
/**
 * Plugin CISF
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

include_spip('inc/ciwidget_commun');


function cisf_ciwidget_nom_formulaire($id){
    $return = '';
    
    $types_widget = ciwidget_types_widget();

    foreach ($types_widget AS $type_widget) {
        if (isset($type_widget['id']) 
                AND $type_widget['id']==$id 
                AND isset($type_widget['formulaire'])){
            if (strtolower(substr($type_widget['formulaire'],0,11))=='formulaire_'){
                $type_widget['formulaire'] = substr($type_widget['formulaire'],11);
            }
            $return = $type_widget['formulaire'];
        }
    };
    
    return $return;
}

?>