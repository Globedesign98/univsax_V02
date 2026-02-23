<?php

/*
 * Squelette : ../plugins/auto/organiseur/v3.3.1/prive/style_prive_plugin_organiseur.html
 * Date :      Thu, 16 Jan 2025 04:03:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/organiseur/v3.3.1/prive/style_prive_plugin_organiseur.html
// Temps de compilation total: 0.746 ms
//

function html_4738eb0cd6a4eda5314c848a1d9e7113($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_claire', null), 'edf3fe'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_foncee', null), '3874b0'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'rtl'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','','_rtl'))))) .
'.item.message .rv {color:#666;font-size:0.9em;padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':20px;background:url(' .
retablir_echappements_modeles(chemin_image((string)'heure-16.png')) .
') no-repeat ' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null))))!=='' ?
		($t1 . ' ') :
		'') .
'top;}
.item.message .rv.on {color:#000;background-image:url(' .
retablir_echappements_modeles(chemin_image((string)'heure-on-16.png')) .
');}

.liste-objets.messages tr > .new,
.liste-objets.messages tr > .type,
.liste-objets.messages tr > .isrv {width: 16px; padding-left:2px;padding-right:2px;text-align:center;}
.liste-objets.messages tr.new td {font-weight: bold;}
.liste-objets.messages .picto-message-new {display: inline-block;width: 0.65em;height: 0.65em;border-radius: 50%;background: #D8DF79;}

/* exec=message */
.message #wysiwyg {position: relative;}
.message #wysiwyg .contenu_from .label,
.message #wysiwyg .contenu_destinataires .label,
.message #wysiwyg .contenu_titre .label,
.message #wysiwyg .contenu_date_heure .label,
.message #wysiwyg .contenu_date_fin .label {display: block;float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';width:6em;clear:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';text-align:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
';padding:0 10px;}
.message #wysiwyg .contenu_date_heure img {vertical-align: middle;}
.message #wysiwyg .contenu_date_fin img {vertical-align: middle;visibility: hidden;}
.message #wysiwyg .contenu_from .spip_logo {position: absolute;' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
': 0;top:0;border-radius: 50%;}

.message #wysiwyg .contenu_titre {display: block;}
.message #wysiwyg .contenu_texte {clear:both;border-top: 1px solid #999;margin-top: 1em;padding-top: 1em;}

/* formulaire editer_message */
.formulaire_editer_message span.dest {padding:1px 3px;background:' .
retablir_echappements_modeles('#EEE') .
';border:1px solid ' .
retablir_echappements_modeles('#CCC') .
';display:block;float:left;margin:0 4px 3px 0;}
.formulaire_editer_message span.dest:hover {background:' .
retablir_echappements_modeles('#DDD') .
';}
.formulaire_editer_message span.dest img {cursor:pointer;padding:1px;}
.formulaire_editer_message .fake-input {background:' .
retablir_echappements_modeles('#FFF') .
';border:1px solid #999;padding: 3px 3px 0; width: 100%; box-sizing: border-box; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;-ms-box-sizing: border-box;}
.formulaire_editer_message .fake-input input.text {width:200px;border: 0;padding: 1px 0;margin-bottom: 3px;}
.formulaire_editer_message .editer_date_debut {padding-bottom: 0;}
.formulaire_editer_message .editer_date_fin {padding-top: 0;}

/* ?exec=messages*/
');

	return analyse_resultat_skel('html_4738eb0cd6a4eda5314c848a1d9e7113', $Cache, $page, '../plugins/auto/organiseur/v3.3.1/prive/style_prive_plugin_organiseur.html');
}
