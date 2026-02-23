<?php

/*
 * Squelette : squelettes/formulaires/envoyer_mail_ues.html
 * Date :      Fri, 13 Feb 2026 21:30:36 GMT
 * Compile :   Sun, 22 Feb 2026 23:51:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/formulaires/envoyer_mail_ues.html
// Temps de compilation total: 0.291 ms
//

function html_55d47d1f113e5d984bf767d1b125909f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Formulaire minimal : un bouton qui envoie un email HTML à l\'auteur de l\'article ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile[0]??[], (string)'message_ok', null)) ?' ' :''))))!=='' ?
		($t1 . '
  <div class="alert alert-success mb-2">Email envoyé.</div>
') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile[0]??[], (string)'message_erreur', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
  <div class="alert alert-danger mb-2">' .
	retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_erreur', null)) .
	'</div>
')) :
		'') .
'

<form method="post" action="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
'">
  ' .
retablir_echappements_modeles(	'<span class="form-hidden">' .
	form_hidden((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true)))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . ($Pile[0]['form'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_args'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_sign\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_sign'] ?? '') . '\'>' .
	($Pile[0]['_hidden'] ?? '') .
	'</span>') .
'<input type="hidden" name="id_article" value="' .
retablir_echappements_modeles(interdire_scripts(intval(entites_html(table_valeur($Pile[0]??[], (string)'id_article', null),true)))) .
'" />
  <input type="hidden" name="type_mail" value="' .
retablir_echappements_modeles(interdire_scripts(textebrut(entites_html(table_valeur($Pile[0]??[], (string)'type_mail', null),true)))) .
'" />

  <button type="submit" class="btn btn-sm ' .
retablir_echappements_modeles(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'btn_class', null),true)) OR (is_string($a) AND strlen($a))) ? $a : 'btn-outline-primary'))) .
'">
    ' .
retablir_echappements_modeles(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'btn_label', null),true)) OR (is_string($a) AND strlen($a))) ? $a : 'Envoyer l\'email'))) .
'
  </button>
</form>');

	return analyse_resultat_skel('html_55d47d1f113e5d984bf767d1b125909f', $Cache, $page, 'squelettes/formulaires/envoyer_mail_ues.html');
}
