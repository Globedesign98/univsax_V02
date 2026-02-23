<?php

/*
 * Squelette : plugins/auto/mailsubscribers/v4.0.3/formulaires/newsletter_subscribe.html
 * Date :      Wed, 03 Dec 2025 05:44:00 GMT
 * Compile :   Thu, 19 Feb 2026 01:08:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/mailsubscribers/v4.0.3/formulaires/newsletter_subscribe.html
// Temps de compilation total: 1.034 ms
//

function html_211c3d13e1fad2774676b52f29001ccc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_newsletter formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
' ajax\'>
	' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_erreur', null)))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'

	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'\'><div>
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
	'<div class="editer-groupe">
			' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'name'] = 'session_email')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'defaut'] = '')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = (table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),(table_valeur($Pile["vars"]??[], (string)'name', null)))))) .
	'<div class="editer editer_' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'obli', null))))!=='' ?
			(' ' . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'erreurs', null)) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
				<label for="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	'">' .
	_T('newsletter:label_email_subscribe') .
	'</label>' .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'erreurs', null))))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type="email" name="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	'" class="email text" value="' .
	retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)(table_valeur($Pile["vars"]??[], (string)'name', null)), null))) .
	'" id="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	'" ' .
	(($t2 = strval(retablir_echappements_modeles((((' ') AND ((table_valeur($Pile["vars"]??[], (string)'obli', null)))) ?' ' :''))))!=='' ?
			($t2 . 'required=\'required\'') :
			'') .
	'/>
			</div>
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_listes_choix', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-subscribing-options') . ', array_merge('.var_export($Pile[0],1).',array(\'label\' => ' . argumenter_squelette(_T('newsletter:label_subscribe_lists')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/mailsubscribers/v4.0.3/formulaires/newsletter_subscribe.html\',\'html_211c3d13e1fad2774676b52f29001ccc\',\'\',8,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
			')) :
			'') .
	'

		</div>
		' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' ajouter les saisies supplementaires : extra et autre, a cet endroit ') :
			'') .
	'
		<!--extra-->
		' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' S\'il y a plusieurs choix possibles, on change le label ') :
			'') .
	'
		' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'bouton'] = (interdire_scripts((((((count(entites_html(table_valeur($Pile[0]??[], (string)'_listes_choix', null),true)) > '1')) AND ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_checkable', null),true))))) ?' ' :'') ? attribut_html(_T('newsletter:bouton_subscribe_multiples')):attribut_html(_T('newsletter:bouton_subscribe'))))))) .
	'
		<p class="boutons"><input type="submit" class="submit" value="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'bouton', null)) .
	'" /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_211c3d13e1fad2774676b52f29001ccc', $Cache, $page, 'plugins/auto/mailsubscribers/v4.0.3/formulaires/newsletter_subscribe.html');
}
