<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/admin_plugin.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   _erreurs_xml
 */ 

function BOUCLE_erreurs_xmlhtml_84488c740b6a2c07419f894ec4495d81(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_erreurs_xml', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_erreurs_xml';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../plugins-dist/svp/formulaires/admin_plugin.html','html_84488c740b6a2c07419f894ec4495d81','_erreurs_xml',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			<li>' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['valeur'])) .
'</li>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_erreurs_xml @ ../plugins-dist/svp/formulaires/admin_plugin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/admin_plugin.html
// Temps de compilation total: 0.702 ms
//

function html_84488c740b6a2c07419f894ec4495d81($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_erreurs_xmlhtml_84488c740b6a2c07419f894ec4495d81($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class=\'svp_retour\'>
	' .
		retablir_echappements_modeles(message_alerte_ouvrir(_T('svp:actions_en_erreur'), 'error', _T('svp:erreurs_xml'), null)) .
		'
		<ul>
			') . $t1 . (	'
		</ul>
	' .
		retablir_echappements_modeles(message_alerte_fermer()) .
		'
</div>
')) :
		'') .
'
<div class="formulaire_spip formulaire_admin_plugin" id="formulaire_admin_plugin">
	<h3 class="titrem">' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'plugin-24.png'),'icone plugin-24','cadre-icone')) .
'
		<span id="nbr_plugin">' .
_T('public|spip|ecrire:plugins_liste') .
'</span>
		<button id="svp_filters_reset" type="button" name="" class="btn_mini btn_secondaire none" value="all">' .
_T('svp:bouton_annuler_filtres') .
'</button>
	</h3>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-plugins_filtres') . ', array(\'constante\' => ' . argumenter_squelette(($Pile[0]['constante'] ?? null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/svp/formulaires/admin_plugin.html\',\'html_84488c740b6a2c07419f894ec4495d81\',\'\',7,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_erreur', null)))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_erreur" role="alert">' . $t1 . '</div>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_ok', null)))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t1 . '</div>') :
		'') .
'
	<form method="post" action="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
'">
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-confirmer_actions') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/svp/formulaires/admin_plugin.html\',\'html_84488c740b6a2c07419f894ec4495d81\',\'\',11,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
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
		<div class="liste-plugins">
			<p class="explication">
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true) == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'
				' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'dir_plugins_dist'] = (joli_repertoire((defined('_DIR_PLUGINS_DIST')?constant('_DIR_PLUGINS_DIST'):''))))) .
	_T('svp:info_admin_plugin_verrouille', array('dir_plugins_dist' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'dir_plugins_dist', null)))) .
	'
			')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true) == 'oui')) ?'' :' ')))))!=='' ?
		($t1 . (	'
				' .
	retablir_echappements_modeles(_T(concat('svp:info_admin_plugin',(($t3 = strval((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'actif', null),true)))))!=='' ?
				('_actif_' . $t3) :
				''),(($t3 = strval((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'verrouille', null), 'non'),true)))))!=='' ?
				('_verrou_' . $t3) :
				'')))) .
	'
			')) :
		'') .
'
			</p>
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-admin_plugin') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/svp/formulaires/admin_plugin.html\',\'html_84488c740b6a2c07419f894ec4495d81\',\'\',17,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
		</div>
		<div class="actions_multiples">
			' .
(($t1 = strval(retablir_echappements_modeles(((in_array('_DIR_PLUGINS_DIST',(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'constante', null), (array())),true))))) ?'' :' '))))!=='' ?
		('<div class="boutons">' . $t1 . (	'
				' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-plugins_cocher') . ', array(\'constante\' => ' . argumenter_squelette(($Pile[0]['constante'] ?? null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/svp/formulaires/admin_plugin.html\',\'html_84488c740b6a2c07419f894ec4495d81\',\'\',8,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
				<select id="action_globale" class="action" name="action_globale">
					' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'actif', null),true) == 'oui')) ?'' :' ')))))!=='' ?
			($t2 . (	'<option value="on">' .
		_T('svp:bouton_activer') .
		'</option>')) :
			'') .
	'
					' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'actif', null),true) == 'non')) ?'' :' ')))))!=='' ?
			($t2 . (	'<option value="off">' .
		_T('svp:bouton_desactiver') .
		'</option>')) :
			'') .
	'
					<option value="up" id="option_up">' .
	_T('svp:bouton_up') .
	'</option>
					' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((((entites_html(table_valeur($Pile[0]??[], (string)'actif', null),true) == 'non')) ?'' :' ')) AND ((invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":""))))) ?' ' :'')) ?' ' :'')))))!=='' ?
			($t2 . (	'<option value="stop">' .
		_T('svp:bouton_desinstaller') .
		'</option>')) :
			'') .
	'
				</select>
				<input type="submit" class="btn submit" name="appliquer" value="' .
	_T('svp:bouton_appliquer') .
	'" />
			</div>')) :
		'') .
'
		</div>
		<script>
			var svp = {
				trads: {
					info_nb_plugins: \'' .
texte_script(_T('svp:info_nb_plugins')) .
'\',
					info_1_plugin: \'' .
texte_script(_T('svp:info_1_plugin')) .
'\',
					info_0_plugin: \'' .
texte_script(_T('svp:info_0_plugin')) .
'\'
				}
			};
			' .
retablir_echappements_modeles(charge_scripts('javascript/admin_plugin.js',false)) .
'
		</script>
	</form>
</div>
');

	return analyse_resultat_skel('html_84488c740b6a2c07419f894ec4495d81', $Cache, $page, '../plugins-dist/svp/formulaires/admin_plugin.html');
}
