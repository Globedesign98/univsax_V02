<?php

/*
 * Squelette : ../plugins-dist/forum/formulaires/activer_forums_objet.html
 * Date :      Thu, 04 Dec 2025 23:14:30 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/forum/formulaires/activer_forums_objet.html
// Temps de compilation total: 0.446 ms
//

function html_35551b910f74fb1bd6ee4ff2eab71131($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
'\' id=\'formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
'-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['id'] ?? null))) .
'\'>
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_suivi_forums', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(filtre_icone_horizontale_dist(generer_url_ecrire('controler_forum',(	'objet=' .
		(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
		'&id_objet=' .
		(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_suivi_forums', null),true))),'forum-24.png','','')) .
	'
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_ok', null)))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t1 . '</div>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_erreur', null)))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_erreur" role="alert">' . $t1 . '</div>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
		($t1 . (	'
	<form action="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'#formulaire_configurer_forums_article_moderation" method="post"><div>
		' .
	retablir_echappements_modeles(	'<span class="form-hidden">' .
	form_hidden(($Pile[0]['action'] ?? '')) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . ($Pile[0]['form'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_args'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_sign\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_sign'] ?? '') . '\'>' .
	($Pile[0]['_hidden'] ?? '') .
	'</span>') .
	'
		<div class="editer-groupe">
			<div class=\'editer configurer_accepter_forum' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/accepter_forum', null)) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'\'>
				<label for=\'accepter_forum\'>' .
	_T('forum:info_fonctionnement_forum') .
	'</label>' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/accepter_forum', null)))))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<select name=\'accepter_forum\' id=\'accepter_forum\'>
					<option value=\'pos\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'accepter_forum', null),true) == 'pos')) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'selected=\'selected\'') :
			'') .
	'>' .
	_T('forum:bouton_radio_modere_posteriori') .
	'</option>
					<option value=\'pri\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'accepter_forum', null),true) == 'pri')) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'selected=\'selected\'') :
			'') .
	'>' .
	_T('forum:bouton_radio_modere_priori') .
	'</option>
					<option value=\'abo\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'accepter_forum', null),true) == 'abo')) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'selected=\'selected\'') :
			'') .
	'>' .
	_T('forum:bouton_radio_modere_abonnement') .
	'</option>
					<option value=\'non\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'accepter_forum', null),true) == 'non')) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'selected=\'selected\'') :
			'') .
	'>' .
	_T('forum:info_pas_de_forum') .
	'</option>
				</select>
			</div>
		</div>
		<p class=\'boutons\'><input class=\'btn submit\' type="submit" name="ok" value="' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'"/></p>
	</div></form>
')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_35551b910f74fb1bd6ee4ff2eab71131', $Cache, $page, '../plugins-dist/forum/formulaires/activer_forums_objet.html');
}
