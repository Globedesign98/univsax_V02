<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/inc-admin_plugin.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   _afficher, _plugins
 */ 

function BOUCLE_afficherhtml_bf9eed132202b605e50c6d9c9bd03af0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'afficher', null)) AND ((filtre_svp_affichage_filtrer_paquets_dist($Pile[$SP]['id_paquet'])))) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_afficher';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('../plugins-dist/svp/formulaires/inc-admin_plugin.html','html_bf9eed132202b605e50c6d9c9bd03af0','_afficher',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_afficher']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_afficher']['compteur_boucle']++;
		$t0 .= (
'
		' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obsolete'] = (interdire_scripts(((($Pile[$SP-1]['obsolete'] == 'oui')) ?' ' :''))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'details'] = (interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_paquet', null), ''),true) == ($Pile[$SP-1]['id_paquet']))) ?' ' :''))))) .
'<li class="item clearfix' .
(($t1 = strval(retablir_echappements_modeles((table_valeur($Pile["vars"]??[], (string)'actif', null) ? 'actif':'inactif'))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(((((((((table_valeur($Pile["vars"]??[], (string)'obsolete', null)) OR ((table_valeur($Pile["vars"]??[], (string)'attente', null)))) ?' ' :'')) OR ((table_valeur($Pile["vars"]??[], (string)'incompatible', null)))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . ' disabled') :
		'') .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'attente', null))))!=='' ?
		($t1 . ' attente') :
		'') .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'incompatible', null))))!=='' ?
		($t1 . ' incompatible') :
		'') .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'compat_forcee', null)) ?' ' :''))))!=='' ?
		($t1 . ' compat-forcee') :
		'') .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'verrou', null))))!=='' ?
		($t1 . ' verrou') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((((denormaliser_version($Pile[$SP-1]['maj_version'])) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'autoriser_plugins_ajouter', null)) ?' ' :'')))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . 'up') :
		'') .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'details', null)) ?' ' :''))))!=='' ?
		($t1 . 'on') :
		'') .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strtolower($Pile[$SP-1]['prefixe'])))))!=='' ?
		('
			id="' . $t1 . (	'-' .
	retablir_echappements_modeles(($Numrows['_afficher']['compteur_boucle'] ?? 0)) .
	'"')) :
		'') .
(($t1 = strval(retablir_echappements_modeles($Pile[$SP-1]['id_paquet'])))!=='' ?
		(' data-id_paquet="' . $t1 . '"') :
		'') .
'>

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Checkbox pour actions groupées ') :
		'') .
'
			' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'has_check'] = '0')) .
'<div class="col-check">
			' .
(($t1 = strval(retablir_echappements_modeles(((((((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')) OR ((table_valeur($Pile["vars"]??[], (string)'attente', null)))) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'verrou', null)) ?'' :' ')))) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'obsolete', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
					' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'has_check'] = '1')) .
		'<div class="check">
						<input type="checkbox" class="checkbox select_plugin" name="ids_paquet[]" value="' .
		retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
		'" id="check_plugin' .
		retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
		'"
							' .
		(($t3 = strval(retablir_echappements_modeles(in_any($Pile[$SP-1]['id_paquet'],(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ids_paquet', null),true)))))))!=='' ?
				($t3 . ' checked="checked"') :
				'') .
		' />
					</div>
				')) :
			'') .
	'
				' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' si la configuration le permet, on peut activer un plugin obsolete ') :
			'') .
	'
				' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'obsolete', null)) AND ((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')))) ?' ' :''))))!=='' ?
			($t2 . (	'
					' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((((include_spip('inc/config')?lire_config('svp/autoriser_activer_paquets_obsoletes',null,false):'') == 'oui')) ?' ' :'')))))!=='' ?
				($t3 . (	'
						' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'has_check'] = '1')) .
			'<div class="check">
							<input type="checkbox" class="checkbox select_plugin" name="ids_paquet[]" value="' .
			retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
			'" id="check_plugin' .
			retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
			'"
								' .
			(($t4 = strval(retablir_echappements_modeles(in_any($Pile[$SP-1]['id_paquet'],(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ids_paquet', null),true)))))))!=='' ?
					($t4 . ' checked="checked"') :
					'') .
			' />
						</div>
					')) :
				'') .
		'
				')) :
			'') .
	'
			')) :
		'') .
'
			</div>

			<div class="col-icon">' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((($Pile[$SP-1]['logo']) ?' ' :'')))))!=='' ?
		($t1 . (	'<div class="icon">
				' .
	retablir_echappements_modeles(filtre_balise_img_dist(concat((defined((interdire_scripts($Pile[$SP-1]['constante'])))?constant((interdire_scripts($Pile[$SP-1]['constante']))):''),(	(interdire_scripts($Pile[$SP-1]['src_archive'])) .
		'/' .
		(interdire_scripts($Pile[$SP-1]['logo'])))))) .
	'
			</div>')) :
		'') .
'</div>

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Resume du plugin ') :
		'') .
'
			<div class="resume">
				' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'has_check', null)) ?' ' :''))))!=='' ?
		($t1 . (	'<label for="check_plugin' .
	retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
	'">')) :
		'') .
'
				<h3 class="nom">' .
retablir_echappements_modeles(interdire_scripts(svp_importer_charset(extraire_multi(supprimer_numero(typo($Pile[$SP-1]['nom'], "TYPO", $connect, $Pile[0])))))) .
'</h3>
				<small class="version">' .
retablir_echappements_modeles(interdire_scripts(denormaliser_version($Pile[$SP-1]['version']))) .
'</small>
				' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'has_check', null)) ?' ' :''))))!=='' ?
		($t1 . '</label>') :
		'') .
'
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true) == 'tous')) AND ((table_valeur($Pile["vars"]??[], (string)'actif', null)))) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<small class="label label-etat label-etat--actif" title="' .
	attribut_html(_T('svp:plugin_info_actif')) .
	'">' .
	_T('svp:etat_actif') .
	'</small>
				')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true) == 'tous')) AND ((((table_valeur($Pile["vars"]??[], (string)'actif', null)) ?'' :' ')))) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<small class="label label-etat label-etat--inactif">' .
	_T('svp:etat_inactif') .
	'</small>
				')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true) == 'tous')) AND ((table_valeur($Pile["vars"]??[], (string)'verrou', null)))) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<small class="label label-etat label-etat--verrouille" title="' .
	attribut_html(_T('svp:info_verrouille')) .
	'">' .
	_T('svp:etat_verrouille') .
	'</small>
				')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'obsolete', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
					<small class="label label-etat label-etat--obsolete" title="' .
	attribut_html(_T('svp:info_plugin_obsolete')) .
	'">' .
	_T('svp:etat_obsolete') .
	'</small>
				')) :
		'') .
'
				' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'slogan'] = (interdire_scripts(typo(extraire_multi($Pile[$SP-1]['slogan'])))))) .
'
				' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'slogan', null)) ?'' :' '))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'slogan'] = (interdire_scripts(filtre_reset(filtre_explode_dist(PtoBR(filtre_propre_dist($Pile,extraire_multi(propre($Pile[$SP-1]['description'], $connect, $Pile[0])))),'<br />'))))))) :
		'') .
'
				<div class="short">' .
retablir_echappements_modeles(svp_importer_charset(couper(table_valeur($Pile["vars"]??[], (string)'slogan', null),'80'))) .
'</div>
			</div>

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Messages ') :
		'') .
'
			' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = (array_filter(array('attente' => ((table_valeur($Pile["vars"]??[], (string)'attente', null) ? ((table_valeur($Pile["vars"]??[], (string)'autoriser_plugins_ajouter', null) ? _T('svp:info_plugin_attente_dependance'):_T('svp:info_plugin_attente_dependance_interdit'))):'')), 'incompatible' => ((table_valeur($Pile["vars"]??[], (string)'incompatible', null) ? _T('svp:info_plugin_incompatible'):'')), 'compat_forcee' => ((table_valeur($Pile["vars"]??[], (string)'compat_forcee', null) ? _T('svp:info_plugin_compat_forcee'):''))))))) .
'
			' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'messages'] = (array_filter(array('maj' => (((((((((table_valeur($Pile["vars"]??[], (string)'obsolete', null)) ?'' :' ')) AND ((interdire_scripts(denormaliser_version($Pile[$SP-1]['maj_version']))))) ?' ' :'')) AND ((table_valeur($Pile["vars"]??[], (string)'autoriser_plugins_ajouter', null)))) ?' ' :'')), 'erreurs' => (table_valeur($Pile["vars"]??[], (string)'erreurs', null))))))) .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'messages', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
				<div class="messages">
					' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'messages/maj', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
						' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'xyz'] = (interdire_scripts(filtre_svp_diff_xyz(denormaliser_version($Pile[$SP-1]['version']),(interdire_scripts(denormaliser_version($Pile[$SP-1]['maj_version'])))))))) .
		'<span class="svp_message maj ' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'xyz', null))))!=='' ?
				('maj_' . $t3) :
				'') .
		'">
							' .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'xyz', null)) ?' ' :''))))!=='' ?
				($t3 . (	'
								' .
			retablir_echappements_modeles(_T((	'svp:plugin_info_up_' .
				(table_valeur($Pile["vars"]??[], (string)'xyz', null))),(array('version' => (interdire_scripts(denormaliser_version($Pile[$SP-1]['maj_version']))))))) .
			'
							')) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'xyz', null)) ?'' :' '))))!=='' ?
				($t3 . (	'
								' .
			_T('svp:plugin_info_up', array('version' => retablir_echappements_modeles(interdire_scripts(denormaliser_version($Pile[$SP-1]['maj_version']))))) .
			'
							')) :
				'') .
		'
						</span>
					')) :
			'') .
	'
					' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'messages/erreurs', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
						<span class="svp_message important">' .
		retablir_echappements_modeles(filtre_implode_dist(table_valeur($Pile["vars"]??[], (string)'erreurs', null),' - ')) .
		'</span>
					')) :
			'') .
	'
				</div>
			')) :
		'') .
'

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Liens + boutons d\'actions ') :
		'') .
'
			<div class="footer">

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Liens ') :
		'') .
'
			' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'liens'] = (array_filter(array('doc' => (interdire_scripts((($Pile[$SP-1]['lien_doc']) ?' ' :''))), 'demo' => ((((table_valeur($Pile["vars"]??[], (string)'actif', null)) AND ((interdire_scripts((($Pile[$SP-1]['lien_demo']) ?' ' :''))))) ?' ' :''))))))) .
'<div class="links groupe-btns">
				<a href="' .
retablir_echappements_modeles(parametre_url(self(),'id_paquet',((table_valeur($Pile["vars"]??[], (string)'details', null) ? '':($Pile[$SP-1]['id_paquet']))))) .
'" class="btn btn_link ' .
retablir_echappements_modeles((table_valeur($Pile["vars"]??[], (string)'details', null) ? 'fermer':'ouvrir')) .
'" rel="info" role="button" aria-expanded="' .
retablir_echappements_modeles((table_valeur($Pile["vars"]??[], (string)'details', null) ? 'true':'false')) .
'" aria-controls="details_' .
retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
'">' .
retablir_echappements_modeles((table_valeur($Pile["vars"]??[], (string)'details', null) ? _T('svp:lien_details_moins'):_T('svp:lien_details_plus'))) .
'</a>
				' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'liens/doc', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts($Pile[$SP-1]['lien_doc']))))!=='' ?
			('<a href="' . $t2 . (	'" class="btn btn_link spip_out" title="' .
		attribut_html(_T('svp:bulle_aller_documentation')) .
		'" rel="external">' .
		_T('svp:lien_documentation') .
		'</a>')) :
			'') .
	'
				')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'liens/demo', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(svp_calculer_url_demo($Pile[$SP-1]['lien_demo'])))))!=='' ?
			('<a href="' . $t2 . (	'" class="btn btn_link spip_out" title="' .
		attribut_html(_T('svp:bulle_aller_demonstration')) .
		'" rel="external">' .
		_T('svp:lien_demo') .
		'</a>')) :
			'') .
	'
				')) :
		'') .
'
			</div>

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
				Boutons d\'actions :
				- On peut desactiver un plugin, qu\'il soit obsolète ou pas
				- Si la configuration le permet, on peut activer un plugin obsolète
			') :
		'') .
'
			' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fond_configurer'] = (concat('configurer_',(interdire_scripts(strtolower($Pile[$SP-1]['prefixe']))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'dropdown'] = (array_filter(array('maj' => ((((((((((((table_valeur($Pile["vars"]??[], (string)'obsolete', null)) ?'' :' ')) AND ((((table_valeur($Pile["vars"]??[], (string)'verrou', null)) ?'' :' ')))) ?' ' :'')) AND ((interdire_scripts(denormaliser_version($Pile[$SP-1]['maj_version']))))) ?' ' :'')) AND ((table_valeur($Pile["vars"]??[], (string)'autoriser_plugins_ajouter', null)))) ?' ' :'')), 'activer' => ((table_valeur($Pile["vars"]??[], (string)'obsolete', null) ? ((((((((((((table_valeur($Pile["vars"]??[], (string)'actif', null)) ?'' :' ')) AND ((((table_valeur($Pile["vars"]??[], (string)'verrou', null)) ?'' :' ')))) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')))) ?' ' :'')) AND ((interdire_scripts(((include_spip('inc/config')?lire_config('svp/autoriser_activer_paquets_obsoletes',null,false):'') == 'oui'))))) ?' ' :'')):((((((((((((table_valeur($Pile["vars"]??[], (string)'actif', null)) ?'' :' ')) OR ((table_valeur($Pile["vars"]??[], (string)'attente', null)))) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'verrou', null)) ?'' :' ')))) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')))) ?' ' :'')))), 'desactiver' => (((((((table_valeur($Pile["vars"]??[], (string)'actif', null)) AND ((((table_valeur($Pile["vars"]??[], (string)'verrou', null)) ?'' :' ')))) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')))) ?' ' :'')), 'desinstaller' => (((((((((((((table_valeur($Pile["vars"]??[], (string)'actif', null)) AND ((((table_valeur($Pile["vars"]??[], (string)'verrou', null)) ?'' :' ')))) ?' ' :'')) AND ((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')))) ?' ' :'')) AND ((interdire_scripts(($Pile[$SP-1]['installe'] == 'oui'))))) ?' ' :'')) AND ((table_valeur($Pile["vars"]??[], (string)'autoriser_webmestre', null)))) ?' ' :'')), 'supprimer' => ((((((table_valeur($Pile["vars"]??[], (string)'actif', null)) ?'' :' ')) AND ((interdire_scripts((couper($Pile[$SP-1]['src_archive'],'5') == 'auto/'))))) ?' ' :''))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'actions'] = (array_filter(array('configurer' => ((((((((((table_valeur($Pile["vars"]??[], (string)'actif', null)) AND ((((table_valeur($Pile["vars"]??[], (string)'attente', null)) ?'' :' ')))) ?' ' :'')) AND ((tester_url_ecrire(table_valeur($Pile["vars"]??[], (string)'fond_configurer', null))))) ?' ' :'')) AND ((invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', (	'_' .
				(interdire_scripts(invalideur_session($Cache, strtolower($Pile[$SP-1]['prefixe']))))))?" ":"")) ?' ' :''))))) ?' ' :'')), 'dropdown' => ((((table_valeur($Pile["vars"]??[], (string)'dropdown', null)) ?' ' :'')))))))) .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'actions', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
				<div class="actions">
					' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'actions/configurer', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
						<a href="' .
		retablir_echappements_modeles(generer_url_ecrire((table_valeur($Pile["vars"]??[], (string)'fond_configurer', null)))) .
		'" class="btn btn_config btn_secondaire">' .
		_T('svp:bouton_configurer') .
		'</a>
					')) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'actions/dropdown', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
						' .
		(($t3 = strval(retablir_echappements_modeles(((((count(table_valeur($Pile["vars"]??[], (string)'dropdown', null)) == '1')) AND ((table_valeur($Pile["vars"]??[], (string)'dropdown/activer', null)))) ?' ' :''))))!=='' ?
				($t3 . (	'
							<input type="submit" name="' .
			retablir_echappements_modeles(filtre_svp_nom_action($Pile[$SP-1]['id_paquet'],'on')) .
			'" class="submit ok" value="' .
			attribut_html(_T('svp:bouton_activer')) .
			'" />
						')) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(((((((count(table_valeur($Pile["vars"]??[], (string)'dropdown', null)) == '1')) AND ((table_valeur($Pile["vars"]??[], (string)'dropdown/activer', null)))) ?' ' :'')) ?'' :' '))))!=='' ?
				($t3 . (	'
						<div class="dropdown">
							<a role="button" id="dropdown_' .
			retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
			'" href="#" class="dropdown-toggle btn" data-toggle="dropdown">' .
			_T('svp:actions') .
			'</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown_' .
			retablir_echappements_modeles($Pile[$SP-1]['id_paquet']) .
			'">
								' .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'dropdown/maj', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
									<input type="submit" name="' .
				retablir_echappements_modeles(filtre_svp_nom_action($Pile[$SP-1]['id_paquet'],'up')) .
				'" class="dropdown-item submit actualiser btn_link" value="' .
				attribut_html(_T('svp:bouton_up')) .
				' &rarr; ' .
				retablir_echappements_modeles(interdire_scripts(denormaliser_version($Pile[$SP-1]['maj_version']))) .
				'" />
									<div class="dropdown-divider"></div>
								')) :
					'') .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'dropdown/desactiver', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
									<input type="submit" name="' .
				retablir_echappements_modeles(filtre_svp_nom_action($Pile[$SP-1]['id_paquet'],'off')) .
				'" class="dropdown-item submit btn_link" value="' .
				attribut_html(_T('svp:bouton_desactiver')) .
				'" />
								')) :
					'') .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'dropdown/desinstaller', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
									<input type="submit" name="' .
				retablir_echappements_modeles(filtre_svp_nom_action($Pile[$SP-1]['id_paquet'],'stop')) .
				'" class="dropdown-item submit btn_link" value="' .
				attribut_html(_T('svp:bouton_desinstaller')) .
				'" />
								')) :
					'') .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'dropdown/activer', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
									<input type="submit" name="' .
				retablir_echappements_modeles(filtre_svp_nom_action($Pile[$SP-1]['id_paquet'],'on')) .
				'" class="dropdown-item submit btn_link" value="' .
				attribut_html(_T('svp:bouton_activer')) .
				'" />
								')) :
					'') .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'dropdown/supprimer', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
									<input type="submit" name="' .
				retablir_echappements_modeles(filtre_svp_nom_action($Pile[$SP-1]['id_paquet'],'kill')) .
				'" class="dropdown-item submit btn_link" value="' .
				attribut_html(_T('svp:bouton_supprimer')) .
				'" />
								')) :
					'') .
			'
							</div>
						</div>')) :
				'') .
		'
					')) :
			'') .
	'
				</div>
			')) :
		'') .
'

			</div>' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' /.footer ') :
		'') .
'

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Détails ') :
		'') .
'
			' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'details', null))))!=='' ?
		($t1 . (	'
				' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plugin_detail') . ', array_merge('.var_export($Pile[0],1).',array(\'id_paquet\' => ' . argumenter_squelette($Pile[$SP-1]['id_paquet']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/svp/formulaires/inc-admin_plugin.html\',\'html_bf9eed132202b605e50c6d9c9bd03af0\',\'\',103,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
			')) :
		'') .
'

			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_afficher @ ../plugins-dist/svp/formulaires/inc-admin_plugin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_pluginshtml_bf9eed132202b605e50c6d9c9bd03af0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['actif'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'constante', null),true)))))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'paquets';
		$command['id'] = '_plugins';
		$command['from'] = array('paquets' => 'spip_paquets','L1' => 'spip_plugins');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['orderby'] = array('multi', 'paquets.prefixe', 'paquets.constante DESC', 'paquets.actif DESC');
		$command['join'] = array('L1' => array('paquets','id_plugin'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("paquets.id_paquet",
		"paquets.obsolete",
		"paquets.maj_version",
		"paquets.prefixe",
		"paquets.logo",
		"paquets.constante",
		"paquets.src_archive",
		"L1.nom",
		"paquets.version",
		"L1.slogan",
		"paquets.description",
		"paquets.lien_doc",
		"paquets.lien_demo",
		"paquets.installe",
		"".sql_multi('L1.nom', $GLOBALS['spip_lang'])."",
		"paquets.actif",
		"paquets.compatibilite_spip",
		"paquets.dependances",
		"paquets.attente");
	$command['where'] = 
			array(
			array('=', 'paquets.id_depot', "0"), (!is_whereable(($Pile[0]['actif'] ?? null)) ? '' : ((is_array(($Pile[0]['actif'] ?? null))) ? sql_in('paquets.actif', $in) : 
			array('=', 'paquets.actif', sql_quote(($Pile[0]['actif'] ?? null), '','varchar(3) NOT NULL DEFAULT \'non\'')))), (($Pile[0]['constante'] ?? null) ? sql_in('paquets.constante', $in1) : ''));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/svp/formulaires/inc-admin_plugin.html','html_bf9eed132202b605e50c6d9c9bd03af0','_plugins',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'compatibilite'] = (interdire_scripts(svp_tester_compatibilite($Pile[$SP]['prefixe'],(interdire_scripts($Pile[$SP]['compatibilite_spip'])),(interdire_scripts($Pile[$SP]['dependances']))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'incompatible'] = (((table_valeur($Pile["vars"]??[], (string)'compatibilite', null)) ?'' :' ')))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'compat_forcee'] = ((table_valeur($Pile["vars"]??[], (string)'compatibilite', null) == 'force')))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'verrou'] = (interdire_scripts(((($Pile[$SP]['constante'] == '_DIR_PLUGINS_DIST')) ?' ' :''))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'actif'] = (interdire_scripts(((($Pile[$SP]['actif'] == 'oui')) ?' ' :''))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'attente'] = (interdire_scripts(((($Pile[$SP]['attente'] == 'oui')) ?' ' :''))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'incompatible', null))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'incompatibles'] = ' '))) :
		'') .
'
		' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'afficher'] = (((((((((((((((table_valeur($Pile["vars"]??[], (string)'incompatible', null)) ?'' :' ')) OR ((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'afficher_incompatibles', null), ''),true))))) ?' ' :'')) OR ((table_valeur($Pile["vars"]??[], (string)'verrou', null)))) ?' ' :'')) OR ((table_valeur($Pile["vars"]??[], (string)'actif', null)))) ?' ' :'')) OR ((table_valeur($Pile["vars"]??[], (string)'attente', null)))) ?' ' :'')))) .
BOUCLE_afficherhtml_bf9eed132202b605e50c6d9c9bd03af0($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</li>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_plugins @ ../plugins-dist/svp/formulaires/inc-admin_plugin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/inc-admin_plugin.html
// Temps de compilation total: 10.392 ms
//

function html_bf9eed132202b605e50c6d9c9bd03af0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'autoriser_plugins_ajouter'] = (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ajouter', '_plugins')?" ":""))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'autoriser_webmestre'] = (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":""))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'image_verrou'] = (inserer_attribut(filtre_balise_img_dist(chemin_image((string)'cadenas-16.png'),_T('svp:plugin_info_verrouille'),'picto_verrou'),'title',_T('svp:plugin_info_verrouille'))))) .
'
' .
(($t1 = BOUCLE_pluginshtml_bf9eed132202b605e50c6d9c9bd03af0($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'incompatibles', null))))!=='' ?
				($t3 . (	'
	' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'afficher_incompatibles', null), ''),true)) ?'' :' ')))))!=='' ?
					($t4 . (	'
	<a class="btn btn_secondaire ouvrir" id="afficher_incompatibles" href="' .
				retablir_echappements_modeles(parametre_url(self(),'afficher_incompatibles','1')) .
				'">' .
				_T('svp:afficher_les_plugins_incompatibles') .
				'</a>
	')) :
					'') .
			'
	' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'afficher_incompatibles', null), ''),true)) ?' ' :'')))))!=='' ?
					($t4 . (	'
	<a class="btn btn_secondaire fermer" id="afficher_incompatibles" href="' .
				retablir_echappements_modeles(parametre_url(self(),'afficher_incompatibles','')) .
				'">' .
				_T('svp:cacher_les_plugins_incompatibles') .
				'</a>
	')) :
					'') .
			'
')) :
				'') .
		'
<div class="liste plugins" id="liste_plugins">
	<ul class="liste-items">
	') . $t1 . '
	</ul>
</div>
') :
		'') .
'

<script>
	(function($){
		$(\'#liste_plugins\').on(\'click\',\'li.item a[rel=info]\',function(){
			var li = $(this).parents(\'li\').eq(0);
			var id_paquet = li.data(\'id_paquet\');
			var $bouton = $(this);
			// premier clic, on charge le contenu du bloc details en ajax
			if (!$(\'div.details\',li).html()) {
				$(this).ajaxReload({args: {\'id_paquet\':id_paquet}, callback:function(){
					li.addClass(\'on\');
					$bouton.attr(\'aria-expanded\', true);
				}});
			}
			// clics suivants, masquer ou afficher les details
			if ($(\'div.details\',li).toggle().is(\':visible\')) {
				li.addClass(\'on\');
				$bouton
					.attr(\'aria-expanded\', true)
					.text("' .
texte_script(_T('svp:lien_details_moins')) .
'")
					.removeClass(\'ouvrir\').addClass(\'fermer\');
			} else {
				li.removeClass(\'on\');
				$bouton
					.attr(\'aria-expanded\', false)
					.text("' .
texte_script(_T('svp:lien_details_plus')) .
'")
					.removeClass(\'fermer\').addClass(\'ouvrir\');
			}
			return false;
		});
		$(\'#liste_plugins\').on(\'click\',\'li.item\',function(e){
			const li = $(this);
			const checkbox = li.find(\'input.select_plugin\');
			const $target = $(e.target);
			if (!$target.is(\'input\') && !$target.is(\'a\') && !$target.is(\'button\')) {
				checkbox.prop("checked", !checkbox.prop("checked"));
				return false;
			}
		});
		$(\'.plugins li.item input.checkbox\').change(function(){
			$(this).parents(\'form\').eq(0).find(\'.boutons\').slideDown();
		});
	})(jQuery);
</script>
');

	return analyse_resultat_skel('html_bf9eed132202b605e50c6d9c9bd03af0', $Cache, $page, '../plugins-dist/svp/formulaires/inc-admin_plugin.html');
}
