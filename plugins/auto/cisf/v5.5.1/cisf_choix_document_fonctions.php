<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

 /*-----------------------------------------------------------------
// Fonctions pour les recherches
------------------------------------------------------------------*/

function cisf_filtrer_recherche($recherche, $verif_alpha=false) {
	$safe = '';
	$verif = true;

	// recherche avant traitement
	if ($t = _request('recherche'))	{
		$t = trim($t);
	// recherche apres traitement
	} else {	
                if (empty($recherche)){
                    $t = '';
                } else {
                    $t = trim($recherche);
                    include_spip('inc/filtres');	
                    $t = filtrer_entites($t);
                }
	}

	if ($t) {
		// supprimer les accents
		include_spip('inc/charsets');
		$tsa = translitteration($t);
	
		// interdire les caracteres dangereux
		// limiter a a-zA-Z0-9 et aux espaces, underscores, apostrophe, guillemets, tirets, points, slash
		$tableau = array(" ","_","'",'"','-','.','/');
		$tscs = str_replace($tableau,'',$tsa);		
		if (!ctype_alnum($tscs)) {
			$verif = false;

			// passer le cas echeant en iso pour avoir la meme longueur avec ou sans accent en utf-8	
			if ($GLOBALS['meta']['charset'] != 'iso-8859-1')
				$tiso = iconv(strtoupper($GLOBALS['meta']['charset']), "ISO-8859-1", $t);
			else
				$tiso = $t;

			// enlever les caracteres speciaux
			$longueur = strlen($tsa);
		    for ($i = 0; $i < $longueur; $i++){
		    	if (ctype_alnum($tsa[$i]) OR in_array($tsa[$i], $tableau))
		    		$safe .= $tiso[$i];
		    	else
		        	$safe .= ' ';
		    }
			// repasser le cas echeant dans le charset du site
			if ($GLOBALS['meta']['charset'] != 'iso-8859-1')
				$safe = iconv("ISO-8859-1", strtoupper($GLOBALS['meta']['charset']), $safe);
		    
		} else {
			$safe = $t;
		}

	    // supprimer les espaces doubles
	    $safe = trim(preg_replace ( '~\s{2,}~' , ' ' , $safe )); 
	}

    if ($verif_alpha)
    	return $verif;
    
   	return $safe;
}

function cisf_recherche_autorise($recherche) {
	static $resultat = array();

	if (isset($GLOBALS['cisf_recherche_sans_filtre']) AND $GLOBALS['cisf_recherche_sans_filtre']=='oui') {
		$return = 'oui';
	} else {
		if (isset($resultat[$recherche])) {
			$return = $resultat[$recherche];
		} else {
			if (cisf_filtrer_recherche($recherche, true))
				$return = 'oui';
			else
				$return = 'non';
				
			$resultat[$recherche] = $return;
		}
	}
				
	return $return;	
}
/*
function cisf_typesdoc($a='') {
	$typesdoc = array();
	
	// lire la configuration du plugin
	$t = cisf_config('cisftypesdocuments');
	if ($t AND is_array($t)) {
		foreach ($t as $cle=>$valeur)
			$typesdoc[] = $cle;
	}

	return $typesdoc;
}
*/
/*
function cisf_typesdoclib($extension) {
	static $typesdoclib = array();
	$return	= $extension;
	
	if (!$typesdoclib) {
		// lire la configuration du plugin
		$t = cisf_config('cisftypesdocuments');
		if ($t AND is_array($t))
			$typesdoclib = $t;	
	}
	
	if (isset($typesdoclib[$extension]))
		$return = $typesdoclib[$extension];
	
	return $return;
}
*/
function cisf_extensions_utilisees(){
	$return = array();
	$result = sql_select('extension','spip_documents','','extension');
	while ($row = sql_fetch($result))
		$return[] = $row['extension'];
	
	return $return;
}

function cisf_extension_est_utilisee($extension=''){
	$extensions = cisf_extensions_utilisees();
	return in_array($extension,$extensions);
}

function cisf_extensions_media($media=''){
	$return = array();
	if ($media){
		$typesdoc = cisf_extensions_utilisees();
	
		if (is_array($typesdoc)) {
			$in = sql_in('extension',$typesdoc);		
			$result = sql_select("mime_type,extension","spip_types_documents",$in);
			while ($row = sql_fetch($result)) {
				$type_mime = $row['mime_type'];
				// type de media
				$media_row = "file";
				if (preg_match(",^image/,",$type_mime) OR in_array($type_mime,array('application/illustrator')))
					$media_row = "image";
				elseif (preg_match(",^audio/,",$type_mime))
					$media_row = "audio";
				elseif (preg_match(",^video/,",$type_mime) OR in_array($type_mime,array('application/ogg','application/x-shockwave-flash','application/mp4')))
					$media_row = "video";
					
				if ($media_row == $media)
					$return[] = $row['extension'];
			}
		}
	}	
	
	return $return;
}

function cisf_choix_extensions($media='',$extension=''){
	$return = array();	

	if ($extension AND cisf_extension_est_utilisee($extension))
		$return = array($extension);
	elseif ($media AND in_array($media,array('document','file','image','audio','video')))
		$return = cisf_extensions_media($media);
	else
		$return = cisf_extensions_utilisees();
	
	return $return;
}

function cisf_verifier_et_convertir_date($a) {
	$return = false;

   	if (isset($a) AND $a!="") {
	    list($dd,$mm,$yy) = explode("/",$a);
	    if ($dd!="" && $mm!="" && $yy!="") {
		    if (is_numeric($yy) && is_numeric($mm) && is_numeric($dd)) {
		            if (checkdate($mm,$dd,$yy))
						$return = $yy."-".$mm."-".$dd;
		    }
	    } 
   	}

   	return $return;
}

function cisf_verifier_date($a) {
	$return = '';

   	if (isset($a) AND $a!="") {
	    list($dd,$mm,$yy) = explode("/",$a);
	    if ($dd!="" && $mm!="" && $yy!="") {
		    if (is_numeric($yy) && is_numeric($mm) && is_numeric($dd)) {
		            if (checkdate($mm,$dd,$yy))
						$return = $dd."/".$mm."/".$yy;
		    }
	    } 
   	}

   	return $return;
}

?>