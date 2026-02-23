<?php

/*
 * Squelette : prive/formulaires/editer_logo.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:08:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/editer_logo.html
// Temps de compilation total: 0.836 ms
//

function html_0a535e4b96726bd5a81dadcbeb541c37($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((((include_spip('inc/config')?lire_config('activer_logos',null,false):'') == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'<div class=\'formulaire_spip formulaire_editer formulaire_editer_logo formulaire_editer_logo_' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
	'\'>
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'_options/titre', null)))))!=='' ?
			('<h3 class="titrem">' . $t2 . '</h3>') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_ok', null))))!=='' ?
			('<div class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t2 . '</div>') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_erreur', null)))))!=='' ?
			('<div class="reponse_formulaire reponse_formulaire_erreur" role="alert">' . $t2 . '</div>') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
			($t2 . (	'
	' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valider'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valider', null), ''),true))))) .
		'<form method=\'post\' action=\'' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
		'\' enctype=\'multipart/form-data\'><div>
		' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . ' declarer les hidden qui declencheront le service du formulaire
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
		' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . ' un submit pour attraper la touche entree') :
				'') .
		'
		<div style="display:none;"><input type=\'submit\' class=\'btn submit\' value=\'' .
		_T('public|spip|ecrire:bouton_upload') .
		'\'></div>
	')) :
			'') .
	'
		<div class="editer-groupe">
			<div class="editer editer_logo_on' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_on', null),true)) ?'' :' ')))))!=='' ?
			(' ' . $t2 . 'logo_upload') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/logo_on', null)) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_on', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
					' .
		retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-apercu-logo' , array_merge($Pile[0],array('id_logo' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'logo_id_on', null),true))) ,
	'logo' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'logo_on', null),true))) ,
	'quoi' => 'logo_on' ,
	'editable' => (interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true)) ?'' :' ')) AND ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true))))) ?' ' :''))) )), array('compil'=>array('prive/formulaires/editer_logo.html','html_0a535e4b96726bd5a81dadcbeb541c37','',17,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
		'
				')) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
			($t2 . (	'
					' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_on', null),true)) ?'' :' ')))))!=='' ?
				($t3 . (	'
						<label for="logo_on_' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
			'_' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))) .
			'">' .
			retablir_echappements_modeles(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'_options/label', null),true)) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_telecharger_nouveau_logo')))) .
			'</label>' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/logo_on', null)))))!=='' ?
					('
						<span class=\'erreur_message\'>' . $t4 . '</span>
						') :
					'') .
			'<input type=\'file\' class=\'file\' name=\'logo_on\' size="' .
			retablir_echappements_modeles(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'_options/size_input', null),true)) OR (is_string($a) AND strlen($a))) ? $a : '12'))) .
			'" id=\'logo_on_' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
			'_' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))) .
			'\' value="">
						' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valider'] = ' ')))) :
				'') .
		'
				')) :
			'') .
	'
			</div>
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'logo_survol', null),true)) OR ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true))))) ?' ' :'')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_logo_off' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true)) ?'' :' ')))))!=='' ?
				(' ' . $t3 . 'logo_upload') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_show_upload_off', null),true)) ?' ' :'')))))!=='' ?
				($t3 . 'open') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/logo_off', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	'
					' .
			retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-apercu-logo' , array_merge($Pile[0],array('id_logo' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'logo_id_off', null),true))) ,
	'logo' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true))) ,
	'quoi' => 'logo_off' ,
	'editable' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true))) )), array('compil'=>array('prive/formulaires/editer_logo.html','html_0a535e4b96726bd5a81dadcbeb541c37','',24,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
			'
				')) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
				($t3 . (	'
					' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true)) ?'' :' ')))))!=='' ?
					($t4 . (	'
						<div ' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/logo_off', null)) ?'' :' ')))))!=='' ?
						($t5 . (	'
							class="ajouter_survol"><a href="#" onclick="jQuery(this).parent().siblings().show().parent().addClass(\'open\').parents(\'form\').find(\'.boutons\').show();return false;">' .
					_T('public|spip|ecrire:logo_survol') .
					'</a></div>
						<div ' .
					(($t6 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_show_upload_off', null),true)) ?'' :' ')))))!=='' ?
							($t6 . (	'style="display:none;" ' .
						retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'hide'] = ' ')))) :
							''))) :
						'') .
				'>
						<label for="logo_off">' .
				_T('public|spip|ecrire:info_telecharger_nouveau_logo') .
				'</label>' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/logo_off', null)))))!=='' ?
						('
						<span class=\'erreur_message\'>' . $t5 . '</span>
						') :
						'') .
				'<input type=\'file\' class=\'file\' name=\'logo_off\' size="' .
				retablir_echappements_modeles(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'_options/size_input', null),true)) OR (is_string($a) AND strlen($a))) ? $a : '12'))) .
				'" id=\'logo_off_' .
				retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
				'_' .
				retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))) .
				'\' value="">
						' .
				retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valider'] = ' ')) .
				'</div>
					')) :
					'') .
			'
				')) :
				'') .
		'
			</div>
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
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valider', null))))!=='' ?
				($t3 . (	'
		<p class="boutons"' .
			(($t4 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'hide', null))))!=='' ?
					($t4 . 'style=\'display:none;\'') :
					'') .
			'><button type=\'submit\' class=\'btn submit btn-upload\' value=\'1\'>' .
			_T('public|spip|ecrire:bouton_upload') .
			'</button></p>
		')) :
				'') .
		'
	</div></form>
	')) :
			'') .
	'
</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0a535e4b96726bd5a81dadcbeb541c37', $Cache, $page, 'prive/formulaires/editer_logo.html');
}
