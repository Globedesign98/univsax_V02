<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/inc-confirmer_actions.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   _erreurs, _demandes, _propositions
 */ 

function BOUCLE_erreurshtml_36dc881d5fa5d498927ee6193dede786(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/decideur_erreurs', null))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_erreurs';
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
		array('../plugins-dist/svp/formulaires/inc-confirmer_actions.html','html_36dc881d5fa5d498927ee6193dede786','_erreurs',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		&bull;&nbsp;' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
'<br />
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_erreurs @ ../plugins-dist/svp/formulaires/inc-confirmer_actions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_demandeshtml_36dc881d5fa5d498927ee6193dede786(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'_libelles_actions/decideur_demandes', null))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_demandes';
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
		array('../plugins-dist/svp/formulaires/inc-confirmer_actions.html','html_36dc881d5fa5d498927ee6193dede786','_demandes',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<li>' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
'</li>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_demandes @ ../plugins-dist/svp/formulaires/inc-confirmer_actions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_propositionshtml_36dc881d5fa5d498927ee6193dede786(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'_libelles_actions/decideur_propositions', null))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_propositions';
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
		array('../plugins-dist/svp/formulaires/inc-confirmer_actions.html','html_36dc881d5fa5d498927ee6193dede786','_propositions',36,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li>' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
'</li>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_propositions @ ../plugins-dist/svp/formulaires/inc-confirmer_actions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/inc-confirmer_actions.html
// Temps de compilation total: 0.199 ms
//

function html_36dc881d5fa5d498927ee6193dede786($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<input type="hidden" name="_todo" class=\'hidden\' value="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_todo', null),true))) .
'" />

' .
(($t1 = BOUCLE_erreurshtml_36dc881d5fa5d498927ee6193dede786($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
	<div class="reponse_formulaire reponse_formulaire_erreur" role="alert">
' . $t1 . '
	</div>
') :
		'') .
'

' .
(($t1 = BOUCLE_demandeshtml_36dc881d5fa5d498927ee6193dede786($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div id="charger_plugin_confirm_boutons_hidden"
     style="position: absolute;left:-5000px;left:-200vw;width:1px;height1px;overflow: hidden">
	<input type="submit" name="annuler_actions" class="btn submit annuler_actions" value="' .
		_T('public|spip|ecrire:bouton_annuler') .
		'" />
	<input type="submit" name="valider_actions" class="btn submit valider_actions" value="' .
		_T('public|spip|ecrire:bouton_valider') .
		'" />
</div>

<div id="charger_plugin_confirm">
	' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'_notices/decideur_warning', null)))))!=='' ?
				('<div class="reponse_formulaire notice">
		' . $t3 . '
	</div>') :
				'') .
		'

	<div class="reponse_formulaire reponse_formulaire_ok" role="status">
		<strong>' .
		_T('svp:actions_demandees') .
		'</strong>
		<ul>
			') . $t1 . (	'
		</ul>
	</div>
	' .
		(($t3 = BOUCLE_propositionshtml_36dc881d5fa5d498927ee6193dede786($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				((	'
		<div class="reponse_formulaire reponse_formulaire_ok" role="status">
			<strong>' .
				_T('svp:actions_necessaires') .
				'</strong>
			<ul>
				') . $t3 . '
			</ul>
		</div>
	') :
				'') .
		'
	<p class="boutons">
		<input type="submit" name="annuler_actions" class="btn submit annuler_actions" value="' .
		_T('public|spip|ecrire:bouton_annuler') .
		'" />
		<input type="submit" name="valider_actions" class="btn submit valider_actions" value="' .
		_T('public|spip|ecrire:bouton_valider') .
		'" />
	</p>
	<script>
		/*' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '
			Fonctionnement du JS.
				- overlayClose // pas de click en dehors des éléments prévus

				- onComplete   // le chargement et fait : si l\'on clique les boutons du formulaire
							   // mis dans la modale, on leur ajoute une classe \'fire\'
							   // et on lance la fermeture de la boite

				- onClose	   // apres la fermeture, on clique le bouton ayant \'fire\'

		') :
				'') .
		'*/
		(function($){
			$(function(){
				if ($.modalbox !== \'undefined\') {
					$.modalboxload(\'#charger_plugin_confirm\', {
						overlayClose: false, // pas de click en dehors
						onShow: function() {
							$(\'.box_mediabox .boutons .submit\').click(function(){
								$(this).addClass(\'fire\'); $.mediaboxClose();
							});
						},
						onClose: function() {
							var $action = $(\'#charger_plugin_confirm .submit.fire\');
							if (!$action.length) {
								$action = $(\'#charger_plugin_confirm .boutons .submit.annuler_actions\');
							}
							var name = $action.attr(\'name\');
							jQuery(\'#charger_plugin_confirm_boutons_hidden\').find(\'input[name=\'+name+\']\').click();
						}
					});
				}
			});
		})(jQuery);
	</script>
</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_36dc881d5fa5d498927ee6193dede786', $Cache, $page, '../plugins-dist/svp/formulaires/inc-confirmer_actions.html');
}
