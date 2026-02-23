<?php

/*
 * Squelette : ../plugins/auto/contact-2.0.0/prive/style_prive_plugin_contact.html
 * Date :      Thu, 29 Jan 2026 02:52:21 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/contact-2.0.0/prive/style_prive_plugin_contact.html
// Temps de compilation total: 0.076 ms
//

function html_53215cd376faa3be8793322ab3b42233($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).

	ATTENTION: il faut absolument le charset sinon Firefox croit que
	c\'est du text/html ! iso-8859-15 utf-8
	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'.formulaire_configurer_contact .agrandir {margin-bottom:5px;margin-right:5px;border:1px dashed #ddd;background-position: 97% 20%;background-repeat: no-repeat;}
.formulaire_configurer_contact ol.numeroter {list-style-position:outside;list-style-type:decimal;}
.formulaire_configurer_contact ol.numeroter > li {list-style-position:outside;margin-left:40px;list-style-type:decimal;}
.formulaire_configurer_contact .bouton_action_post {display:block;position:absolute;bottom:5px;left:10px;}
');

	return analyse_resultat_skel('html_53215cd376faa3be8793322ab3b42233', $Cache, $page, '../plugins/auto/contact-2.0.0/prive/style_prive_plugin_contact.html');
}
