<?php

/*
 * Squelette : ../plugins-dist/dump/formulaires/sauvegarder.html
 * Date :      Thu, 04 Dec 2025 23:14:30 GMT
 * Compile :   Thu, 19 Feb 2026 02:23:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/dump/formulaires/sauvegarder.html
// Temps de compilation total: 0.581 ms
//

function html_5a6372a615a12680a53c10f1c922195c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'
	Formulaire de sauvegarde ' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_SAUVEGARDER',
	array(),
	array('../plugins-dist/dump/formulaires/sauvegarder.html','html_5a6372a615a12680a53c10f1c922195c','',2,$GLOBALS['spip_lang']))) .
	'
')) :
		'') .
'
<div class="formulaire_spip formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
' formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
'-' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'nouveau'),true))) .
'">

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
	<form method=\'post\' action=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'\'><div>
		' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' declarer les hidden qui declencheront le service du formulaire
		parametre : url d\'action ') :
			'') .
	'
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
		<input type=\'hidden\' name=\'reinstall\' value=\'non\' />
	  <div class="editer-groupe">
	  	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'name'] = 'nom_sauvegarde')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = (interdire_scripts(table_valeur($Pile[0]??[], (string)(	'erreurs/' .
			(table_valeur($Pile["vars"]??[], (string)'name', null))), null))))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire')) .
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
	_T('dump:label_nom_fichier_sauvegarde') .
	'</label>
				' .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'erreurs', null))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
				<input type=\'text\' class=\'text\' name=\'' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	'\' id=\'' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	'\' value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(table_valeur($Pile["vars"]??[], (string)'name', null)), null),true))) .
	'" />
	    </div>
	  	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'name'] = 'tables')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = (interdire_scripts(table_valeur($Pile[0]??[], (string)(	'erreurs/' .
			(table_valeur($Pile["vars"]??[], (string)'name', null))), null))))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire')) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'_tables', null)))))!=='' ?
			((	'<div class="editer editer_' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'obli', null))))!=='' ?
				(' ' . $t3) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'erreurs', null)) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
	    	<label>' .
		_T('public|spip|ecrire:install_tables_base') .
		'</label>
				' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'erreurs', null))))!=='' ?
				('<span class=\'erreur_message\'>' . $t3 . '</span>') :
				'') .
		'
				<div class="choix">
					<input type="checkbox" name="tout_sauvegarder" id="tout_sauvegarder" value="oui"' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'tout_sauvegarder', null),true)) ?' ' :'')))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		'
						onclick="$(this).blur();"
						onchange="jQuery(this).prop(\'checked\')?jQuery(\'#liste_tables\').hide(\'fast\'):jQuery(\'#liste_tables\').show(\'fast\');"
					/><label for="tout_sauvegarder">' .
		_T('dump:tout_sauvegarder') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'_prefixe', null),true) == 'spip')) ?'' :' ') ? (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_prefixe', null),true))):'')))))!=='' ?
				((	'
					<br />(' .
			_T('public|spip|ecrire:texte_choix_table_prefix') .
			'<b> ') . $t3 . '</b>)') :
				'') .
		'</label>
					<div id="liste_tables"' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'tout_sauvegarder', null),true)) ?' ' :'')))))!=='' ?
				($t3 . 'style="display:none;"') :
				'') .
		'>
					') . $t2 . '
					</div>
				</div>
	    </div>') :
			'') .
	'
	  </div>
	  ' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' ajouter les saisies supplementaires : extra et autre, a cet endroit ') :
			'') .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'btn submit\' value=\'' .
	_T('dump:texte_sauvegarde_base') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_5a6372a615a12680a53c10f1c922195c', $Cache, $page, '../plugins-dist/dump/formulaires/sauvegarder.html');
}
