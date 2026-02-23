<?php

/*
 * Squelette : prive/formulaires/instituer_objet.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:08:58 GMT
 * Boucles :   _choix
 */ 

function BOUCLE_choixhtml_4d625efd1f7368ad40ca9214decf4886(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_statuts', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_choix';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', sql_quote(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true))), '', 'STRING'))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('prive/formulaires/instituer_objet.html','html_4d625efd1f7368ad40ca9214decf4886','_choix',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<div class="choix">
						<input
							type="radio" class="radio"
							name="' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
'"
							id="instituer_' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))) .
'_' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true))) .
'_choix_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
'"
							' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)(table_valeur($Pile["vars"]??[], (string)'name', null)), null),true) == (interdire_scripts(safehtml($Pile[$SP]['cle']))))) ?' ' :'')))))!=='' ?
		($t1 . 'selected="selected"') :
		'') .
'
							value="' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
'"
						>
						<label for="instituer_' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))) .
'_' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true))) .
'_choix_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
'">
							<span class="statut">
								' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtre_puce_statut_dist(safehtml($Pile[$SP]['cle']),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))))))))!=='' ?
		('<span class="statut-icone">' . $t1 . '</span>') :
		'') .
'
								' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml($Pile[$SP]['valeur']))))))!=='' ?
		('<span class="statut-label">' . $t1 . '</span>') :
		'') .
'
							</span>
						</label>
					</div>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_choix @ prive/formulaires/instituer_objet.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette prive/formulaires/instituer_objet.html
// Temps de compilation total: 0.860 ms
//

function html_4d625efd1f7368ad40ca9214decf4886($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="instituer_objet' .
(($t1 = strval(retablir_echappements_modeles((objet_test_si_publie((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))),intval((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true)))),'')?' ':''))))!=='' ?
		(' ' . $t1 . 'objet_publie') :
		'') .
'">
	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Dans tous les cas on commence par afficher le statut actuel ') :
		'') .
'

	<div class="statut_actuel">
		<strong class="editer-label">' .
retablir_echappements_modeles(interdire_scripts(_T(entites_html(table_valeur($Pile[0]??[], (string)'_label', null),true)))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_aide', null),true)) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_aide', null),true)))):'')))) :
		'') .
'</strong>
		<div class="statut statut--' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true))) .
'">
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtre_puce_statut_dist(entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))))))))!=='' ?
		('<span class="statut-icone">' . $t1 . '</span>') :
		'') .
'
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(table_valeur(entites_html(table_valeur($Pile[0]??[], (string)'_statuts', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true)))))))))!=='' ?
		('<span class="statut-label">' . $t1 . '</span>') :
		'') .
'
		</div>
	</div>

	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'_publiable', null),true)) ?'' :' ')) AND ((interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true) == 'prepa')) ?' ' :''))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
	<p class="small">' .
	_T('public|spip|ecrire:texte_proposer_publication') .
	'</p>
	')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	<div class="formulaire_spip formulaire_editer formulaire_instituer' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true)))))!=='' ?
			((	' formulaire_' .
		retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
		' formulaire_' .
		retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
		'-') . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true)))))!=='' ?
			((	' formulaire_' .
		retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
		'-' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))) .
		'-') . $t2) :
			'') .
	'">
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
		<form method=\'post\' action=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'\'><div>
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
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'name'] = 'statut')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = (table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),(table_valeur($Pile["vars"]??[], (string)'name', null)))))) .
	'<div class="editer-groupe">
				<fieldset class="editer editer_' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
	' statut_' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(table_valeur($Pile["vars"]??[], (string)'name', null)), null),true))) .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'obli', null))))!=='' ?
			(' ' . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'erreurs', null)) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
					<legend class="editer-label">' .
	_T('public|spip|ecrire:info_modifier_statut') .
	'</legend>
					' .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'erreurs', null))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
					' .
	BOUCLE_choixhtml_4d625efd1f7368ad40ca9214decf4886($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
				</fieldset>
			</div>
			<!--extra-->
			<div class=\'boutons\'>
				<span class=\'image_loading\'>&nbsp;</span>
				<div class="groupe-btns">
					<button type=\'button\' class=\'btn submit btn_secondaire\' name=\'annuler\'>' .
	_T('public|spip|ecrire:bouton_annuler') .
	'</button>
					<button type=\'submit\' class=\'btn submit\' name=\'changer\'>' .
	_T('public|spip|ecrire:bouton_changer') .
	'</button>
				</div>
			</div>
		</div></form>
	</div>
	')) :
		'') .
'
</div>

<script>
	;(function($){
		' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Seulement si éditable et que sans erreur, on masque le form par défaut ') :
		'') .
'
		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
			var form = $(\'.formulaire_' .
	retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
	'-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))) .
	'-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true))) .
	'\');

			// Un bouton pour afficher le form pour modifier
			var bouton_modifier =
				$(\'<button class="btn_mini btn_secondaire btn_modifier float-end" aria-expanded="false">' .
	_T('public|spip|ecrire:bouton_changer') .
	'</button>\')
				.click(function() {
					form.slideDown().closest(\'.instituer_objet\').removeClass(\'form-closed\');
					/*$(this).slideUp().attr(\'aria-expanded\', \'true\');*/
				})
			;

			// On ajoute ce bouton dynamiquement
			$(\'.instituer_objet .statut_actuel .editer-label\').after(bouton_modifier);
			$(\'.instituer_objet button[name=annuler]\').on(\'click\', function() {
				form.find(\'input[type=radio]:checked\').prop(\'checked\', false);
				form.slideUp().closest(\'.instituer_objet\').addClass(\'form-closed\');
			});

			' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile[0]??[], (string)'erreurs', null)) ?'' :' '))))!=='' ?
			($t2 . '
				// On masque au départ le form pour modifier
				form.closest(\'.instituer_objet\').addClass(\'form-closed\');
			') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile[0]??[], (string)'erreurs', null)) ?' ' :''))))!=='' ?
			($t2 . '
				form.css(\'display\',\'block\');
			') :
			'') .
	'
		')) :
		'') .
'
	})(jQuery);
</script>
');

	return analyse_resultat_skel('html_4d625efd1f7368ad40ca9214decf4886', $Cache, $page, 'prive/formulaires/instituer_objet.html');
}
