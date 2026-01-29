<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */

include_spip('inc/presentation');
include_spip('inc/filtres');
include_spip('inc/commencer_page');
include_spip('inc/pipelines');

/*-----------------------------------------------------------------
// Filtres propres au plugin
------------------------------------------------------------------*/

function cisf_style_non_publie($var) {
        return "";
}


function cisf_puce_article($id_article, $statut, $id_rubrique) {
	$return = '';

        include_spip('ecrire/inc/puce_statut');
        $return = cisf3_puce_statut_changement_rapide($id_article, $statut, $id_rubrique, 'article', $ajax=false);
	
	return $return;
}



function cisf_puce_statut_article($id, $statut, $id_rubrique, $type='article', $ajax = false) {
	global $lang_objet;
	static $coord = array('publie' => 2,
			      'prepa' => 0,
			      'prop' => 1,
			      'refuse' => 3,
			      'poubelle' => 4,
			      'archive' => 5);

	$lang_dir = lang_dir($lang_objet);
	if (!$id) {
	  $id = $id_rubrique;
	  $ajax_node ='';
	} else	$ajax_node = " id='imgstatut$type$id'";


	$inser_puce = cisf_puce_statut($statut, " width='9' height='9' style='margin: 1px;'$ajax_node");

	if (!autoriser('publierdans', 'rubrique', $id_rubrique)
	OR !_ACTIVER_PUCE_RAPIDE)
		return $inser_puce;

	$titles = array(
			  "blanche" => _T('texte_statut_en_cours_redaction'),
			  "orange" => _T('texte_statut_propose_evaluation'),
			  "verte" => _T('texte_statut_publie'),
			  "rouge" => _T('texte_statut_refuse'),
			  "poubelle" => _T('texte_statut_poubelle'));

	if (defined('_DIR_PLUGIN_CIARCHIVE'))
		$titles['archive'] = _T('cisf:texte_statut_archive');
			  
			  
	$clip = 1+ (11*$coord[$statut]);

	if ($ajax){
		
		return 	"<span class='puce_article_fixe'>"
		. $inser_puce
		. "</span>"
		. "<span class='puce_article_popup' id='statutdecal$type$id' style='margin-left: -$clip"."px;'>"
// Debut ajout CI		
		  . cisf_afficher_script_statut($id, $type, -1, 'puce-blanche.gif', 'prepa', $titles['blanche'])
		  . cisf_afficher_script_statut($id, $type, -12, 'puce-orange.gif', 'prop', $titles['orange'])
		  . cisf_afficher_script_statut($id, $type, -23, 'puce-verte.gif', 'publie', $titles['verte'])
		  . cisf_afficher_script_statut($id, $type, -34, 'puce-rouge.gif', 'refuse', $titles['rouge'])
		  . cisf_afficher_script_statut($id, $type, -45, 'puce-poubelle.gif', 'poubelle', $titles['poubelle'])
		  . (defined('_DIR_PLUGIN_CIARCHIVE') ? cisf_afficher_script_statut($id, $type, -56, 'puce-archiver-8.png', 'archive', $titles['archive']) : '')
		  . "</span>";
	}

	$nom = "puce_statut_";

	if ((! _SPIP_AJAX) AND $type != 'article') 
	  $over ='';
	else {

	  $action = generer_url_ecrire('cisf_puce_statut',"",true);
	  $action = "if (!this.puce_loaded) { this.puce_loaded = true; prepare_selec_statut('$nom', '$type', '$id', '$action'); }";
	  $over = "\nonmouseover=\"$action\"";
	}

	return 	"<span class='puce_article' id='$nom$type$id' dir='$lang_dir'$over>"
	. $inser_puce
	. '</span>';
}


function cisf_puce_statut($statut, $atts='') {
	
	switch ($statut) {
		case 'publie':
			$img = 'puce-verte.gif';
			$alt = _T('info_article_publie');
			return cisf_http_img_pack($img, $alt, $atts);
		case 'prepa':
			$img = 'puce-blanche.gif';
			$alt = _T('info_article_redaction');
			return cisf_http_img_pack($img, $alt, $atts);
		case 'prop':
			$img = 'puce-orange.gif';
			$alt = _T('info_article_propose');
			return cisf_http_img_pack($img, $alt, $atts);
		case 'refuse':
			$img = 'puce-rouge.gif';
			$alt = _T('info_article_refuse');
			return cisf_http_img_pack($img, $alt, $atts);
		case 'poubelle':
			$img = 'puce-poubelle.gif';
			$alt = _T('info_article_supprime');
			return cisf_http_img_pack($img, $alt, $atts);
		case 'archive':
			if (defined('_DIR_PLUGIN_CIARCHIVE')){
				$img = 'puce-archiver-8.png';
				$alt = _T('ciarchive:info_article_archive');
				return cisf_http_img_pack($img, $alt, $atts);
			} else {
				break;
			}
	}
	return '';
}

function cisf_afficher_script_statut($id, $type, $n, $img, $statut, $titre, $act='') {
	$ir = 'prive/' . _NOM_IMG_PACK .$img;

	// cas complexe
	if ($img=='puce-archiver-8.png'){
		$ir = _DIR_PLUGIN_CISF.'_images/icones/'.$img;
	 	if (substr($ir,0,3)=='../')
	 		$ir = substr($ir,3);
	}

	$i = find_in_path($ir);	
	$i = str_replace('../squelettes/','',$i);
	
//	$i = http_wrapper($img);
	$h = generer_action_auteur("instituer_$type","$id-$statut");
	$h = "javascript:selec_statut('$id', '$type', $n, '$ir', '$h');";
	$t = supprimer_tags($titre);
	$inf = getimagesize($i);
// Ajout CI (compatibilite PHP 7.2                
//	return "<a href=\"$h\"\ntitle=\"$t\"$act><img src='$ir' $inf[3] alt=' '/></a>";
	return "<a href=\"$h\"\ntitle=\"$t\"$act><img src='$ir' ".(isset($inf[3]) ? $inf[3] : '')." alt=' '/></a>";
}


function cisf_http_img_pack($img, $alt, $atts='', $title='') {
	// cas complexe
	if ($img=='puce-archiver-8.png'){
		$img = _DIR_PLUGIN_CISF.'_images/icones/'.$img;
	 	if (substr($img,0,3)=='../')
	 		$img = substr($img,3);
	} else {
		$img = 'prive/'._NOM_IMG_PACK.$img;
	}

	$i = find_in_path($img);
	
	if (strpos($atts, 'width')===FALSE){
		// utiliser directement l'info de taille presente dans le nom
		if (preg_match(',-([0-9]+)[.](png|gif)$,',$img,$regs)){
				$size = array(intval($regs[1]),intval($regs[1]));
		}
		else
			$size = @getimagesize($i);
                
// Ajout CI (compatibilite PHP 7.2                
//		$atts.=" width='".$size[0]."' height='".$size[1]."'";
                if (isset($size[0]) AND isset($size[1])){
                    $atts.=" width='".$size[0]."' height='".$size[1]."'";
                }
                
	}
	return  "<img src='" . $img
	  . ("'\nalt=\"" .
	     str_replace('"','', textebrut($alt ? $alt : ($title ? $title : '')))
	     . '" ')
	  . ($title ? "title=\"$title\" " : '')
	  . $atts
	  . " />";
}

/**
 * Retourne le contenu d'une puce avec changement de statut possible
 * si on en a l'autorisation, sinon simplement l'image de la puce
 *
 * @param int $id
 *     Identifiant de l'objet
 * @param string $statut
 *     Statut actuel de l'objet
 * @param int $id_rubrique
 *     Identifiant du parent, une rubrique
 * @param string $type
 *     Type d'objet
 * @param bool $ajax
 *     Indique s'il ne faut renvoyer que le coeur du menu car on est
 *     dans une requete ajax suite à un post de changement rapide
 * @param bool $menu_rapide
 *     Indique si l'on peut changer le statut, ou si on l'affiche simplement
 * @return string
 *     Code HTML de l'image de puce de statut à insérer (et du menu de changement si présent)
**/
function cisf3_puce_statut_changement_rapide($id, $statut, $id_rubrique, $type='article', $ajax = false, $menu_rapide=_ACTIVER_PUCE_RAPIDE) {
	$src = statut_image($type, $statut);
	if (!$src)
		return $src;

	if (!$id
	  OR !_SPIP_AJAX
	  OR !$menu_rapide) {
	  $ajax_node ='';
	}
	else
		$ajax_node = " class='imgstatut$type$id'";


	$t = statut_titre($type, $statut);
// title redondant avec le alt	
//	$inser_puce = str_replace('../','',http_img_pack($src,$t,$ajax_node,$t));	
	$inser_puce = str_replace('../','',http_img_pack($src,$t,$ajax_node,''));	

	if (!$ajax_node)
		return $inser_puce;

	$table = table_objet_sql($type);
	$desc = lister_tables_objets_sql($table);
	if (!isset($desc['statut_textes_instituer']))
		return $inser_puce;

	// cas ou l'on a un parent connu (devrait disparaitre au profit du second cas plus generique)
	if ($id_rubrique){
		if (!autoriser('publierdans', 'rubrique', $id_rubrique))
			return $inser_puce;
	}
	// si pas d'id_rubrique fourni, tester directement instituer type avec le statut publie
	else {
		if (!autoriser('instituer', $type, $id, null, array('statut'=>'publie')))
			return $inser_puce;
	}

	$coord = array_flip(array_keys($desc['statut_textes_instituer']));
	if (!isset($coord[$statut]))
		return $inser_puce;

	$unit = 8/*widh de img*/+4/*padding*/;
	$margin = 4; /* marge a gauche + droite */
	$zero = 1 /*border*/ + $margin/2 + 2 /*padding*/;
	$clip = $zero+ ($unit*$coord[$statut]);

	if ($ajax){
		$width = $unit*count($desc['statut_textes_instituer'])+$margin;
		$out = "<span class='puce_objet_fixe $type'>"
		. $inser_puce
		. "</span>"
		. "<span class='puce_objet_popup $type statutdecal$type$id' style='width:{$width}px;margin-left:-{$clip}px;'>";
		$i=0;
		foreach($desc['statut_textes_instituer'] as $s=>$t){
			$out .= cisf3_afficher_script_statut($id, $type, -$zero-$i++*$unit, statut_image($type,$s), $s, _T($t));
		}
		$out .= "</span>";
		return $out;
	}
	else {

		$nom = "puce_statut_";
		$action = generer_url_ecrire('cisf_puce_statut',"",true);
		$action = "if (!this.puce_loaded) { this.puce_loaded = true; prepare_selec_statut(this, '$nom', '$type', '$id', '$action'); }";
		$over = " onmouseover=\"$action\"";

		$lang_dir = lang_dir(lang_typo());
		return 	"<span class='puce_objet $type' id='$nom$type$id' dir='$lang_dir'$over>"
		. $inser_puce
		. '</span>';
	}
}

// http://doc.spip.org/@afficher_script_statut
function cisf3_afficher_script_statut($id, $type, $n, $img, $statut, $titre, $act='') {
	$h = generer_action_auteur("instituer_objet","$type-$id-$statut");
	$h = "selec_statut('$id', '$type', $n, jQuery('img',this).attr('src'), '$h');return false;";
	$t = supprimer_tags($titre);
	return "<a href=\"#\" onclick=\"$h\" title=\"$t\"$act>".str_replace('../','',http_img_pack($img,$t))."</a>";
}

function cisf_liste_auteurs_article($id_article=0){
	$return = '';
        $noms = '';
        
	if (intval($id_article)>0){
                $res = sql_select("nom",
                           "spip_auteurs AS A LEFT JOIN spip_auteurs_liens AS L ON (A.id_auteur=L.id_auteur)",
                           "L.id_objet=".intval($id_article)." AND L.objet='article' AND A.statut<>'5poubelle'");
		
		while ($row = sql_fetch($res))
			$noms .= $row['nom']." ";
	
		$return = interdire_scripts(typo(supprimer_numero($noms)));
	}
	
	return $return;
}

function cisf_auteur_article($id_auteur=0,$id_article=0){
	$return = '';

	if (intval($id_auteur)>0 AND intval($id_article)>0){
                if (sql_countsel("spip_auteurs_liens", "id_objet=".intval($id_article)." AND objet='article' AND id_auteur=".intval($id_auteur))>0){
                        $return = "oui";
                }
	}

	return $return;
}

?>