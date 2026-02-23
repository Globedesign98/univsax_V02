<?php

/*
 * Squelette : ../plugins/auto/mailsubscribers/v4.0.3/prive/style_prive_plugin_mailsubscriber.html
 * Date :      Wed, 03 Dec 2025 05:44:00 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/mailsubscribers/v4.0.3/prive/style_prive_plugin_mailsubscriber.html
// Temps de compilation total: 0.065 ms
//

function html_d9d785ff025bed8208deba450719d042($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	<style>
') :
		'') .
'

.mailsubscriber .fiche_objet h1 {word-wrap: break-word;padding-right: 85px;}
.mailsubscriber #wysiwyg .contenu_email {display:none;}
.mailsubscriber #wysiwyg .contenu_lang {margin:0.5em 0;}
.mailsubscriber #wysiwyg .contenu_lang .label {display: inline}
.mailsubscriber #wysiwyg .contenu_nom {font-weight: bold;}
.mailsubscriber #wysiwyg .contenu_nom .label {display: inline}
.mailsubscriber #wysiwyg .contenu_listes .label {display: inline}

.mailsubscriber #wysiwyg table.spip.infos-liees caption {margin-bottom: 0;text-align:left;}
.mailsubscriber #wysiwyg table.spip.infos-liees th,
.mailsubscriber #wysiwyg table.spip.infos-liees td {padding-top:0.25em;padding-bottom: 0.25em;}
.mailsubscriber #wysiwyg table.spip.infos-liees td strong.label{display: none}
.mailsubscriber #wysiwyg table.spip.infos-liees td .valeur p {margin-bottom: 0;}

.mailsubscriber #wysiwyg .contenu_optin {margin:1em 0;}
.mailsubscriber #wysiwyg .contenu_optin .label {display: block}
.mailsubscriber #wysiwyg .contenu_optin pre {display: block;font-family: monospace;line-height: 0.8em;overflow: auto;overflow-y: hidden}

.mailsubscriber .dest_un_destinataire .mailshots_destinataires .email,
.mailsubscribers .dest_un_destinataire .mailshots_destinataires .email {display: none}
.mailsubscriber .dest_un_destinataire .mailshots_destinataires .date,
.mailsubscribers .dest_un_destinataire .mailshots_destinataires .date {width: auto}


.mailsubscribinglist #wysiwyg .contenu_identifiant .label {display: inline-block}
.mailsubscribinglist #wysiwyg .contenu_adresse_envoi_nom .label {display: inline-block}
.mailsubscribinglist #wysiwyg .contenu_adresse_envoi_email .label {display: inline-block}

.liste-objets.mailsubscribers .date {width: auto;min-width: 90px;}
.formulaire_editer_email_subscription .pull-right {float: right;margin-left: auto}

.formulaire_editer_mailsubscriber .editer_listes .choix p,
.formulaire_editer_email_subscription .editer_listes .choix p {
	margin-bottom: 0;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 30px;
}

.liste-objets.mailsubscribinglists .identifiant {word-break: break-word;}

.liste-objets.mailsubscribinglists-segments td.titre {min-width: 15em;}
.liste-objets.mailsubscribinglists-segments .segment-filters {max-height: 7.5em;overflow: auto}
');

	return analyse_resultat_skel('html_d9d785ff025bed8208deba450719d042', $Cache, $page, '../plugins/auto/mailsubscribers/v4.0.3/prive/style_prive_plugin_mailsubscriber.html');
}
