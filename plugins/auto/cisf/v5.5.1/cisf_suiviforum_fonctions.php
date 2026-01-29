<?php
/**
 * Plugin Saisie facile
 * @copyright 2010 MTECT
 * @author Christophe IMBERTI (cf. CPI art L121-1)
 * @license GNU/GPLv3
 */


function cisf_boutons_controle_forum($id_forum, $id_article, $forum_stat, $forum_id_auteur=0, $forum_ip='') {
	$controle = $original = $spam = '';

        $prefixe = 'forum:';
        $icone_spam = 'icone_bruler_message';
        $icone_repondre = 'repondre_message';
	
	// selection du bouton correspondant a l'etat du forum
	switch ($forum_stat) {
		# forum publie sur le site public
		case "publie":
			$valider = false;
			$valider_repondre = false;
			$suppression = 'off';
			break;
		# forum supprime sur le site public
		case "off":
			$valider = 'publie';
			$valider_repondre = false;
			$suppression = false;
			$controle = "<br /><span style='color: red; font-weight: bold;'>"._T('cisf:info_message_supprime')." $forum_ip</span>";
			break;
		# forum propose (a moderer) sur le site public
		case "prop":
			$valider = 'publie';
			$valider_repondre = true;
			$suppression = 'off';
			break;
		# forum signale comme spam sur le site public
		case "spam":
			$valider = 'publie';
			$valider_repondre = false;
			$suppression = false;
			$spam = true;
			break;
		# forum original (reponse a un forum modifie) sur le site public
		case "original":
			$original = true;
			break;
		default:
			return "";
	}

	$id_article = intval($id_article);
	$id_forum = intval($id_forum);

	$lien = generer_url_public("cisf_suiviforum", "id_article=$id_article");
	$boutons ='';
	if ($suppression)
	  $boutons .= '<a href="'.generer_action_auteur('instituer_forum',"$id_forum-$suppression", $lien).'" class="repmsg">['._T($prefixe.'icone_supprimer_message').']</a>';

	if ($valider)
	  $boutons .= '<a href="'.generer_action_auteur('instituer_forum',"$id_forum-$valider", $lien).'" class="repmsg">['._T($prefixe.'icone_valider_message').']</a>';

	if ($valider_repondre) {
	  $lien2 = generer_url_public("forum", "id_article=$id_article&id_forum=$id_forum");
	  $boutons .= '<a href="'.generer_action_auteur('instituer_forum',"$id_forum-$valider", $lien2).'" class="repmsg">['._T($prefixe.'icone_valider_message') . " &amp; " .   _T($prefixe.$icone_repondre).']</a>';
	}

	if ($boutons) $controle .= "<div>". $boutons . "</div>";

	// un bouton retablir l'original
	if ($original) {
		$controle .= "<div style='float:".$GLOBALS['spip_lang_right'].";color:green'>"
		."("
		._T($prefixe.'forum_info_original')
		.")</div>";
	}

	if ($spam) {
		$controle .= "<div style='float:".$GLOBALS['spip_lang_right'].";color:red'>"
		."("
		._T($prefixe.$icone_spam) // Marque' comme spam ?
		.")</div>";
	}

	return $controle;
}
 

/*-----------------------------------------------------------------
// Filtres propres au plugin
------------------------------------------------------------------*/

// Lien suivi forum public d'un article par flux RSS
function cisf_rss_forums_public($id_article){
	$id_article = intval($id_article);
	$a = "id_article-".$id_article;
	$op = "forums_public";
	$id = $GLOBALS['visiteur_session']['id_auteur'];
	$args = "id_article=".$id_article . "&op=".$op . "&id=".$id . "&cle=".substr(md5("rss $op $a".low_sec($id)),0,8) . "&args=".$a;			
	$url = generer_url_public('rss', $args);

	return "<a href='$url'>".http_img_pack('feed.png', 'RSS', '', 'RSS')."</a>";
}

?>