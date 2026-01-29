<?php

/*
 * Squelette : plugins/auto/contact-2.0.0/formulaires/contact.html
 * Date :      Thu, 29 Jan 2026 02:52:21 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   _previsu_infos, _previsu_pj, _previsu, _tous, _choix, _destinataires, _infos, _pj, _editable
 */ 

function BOUCLE_previsu_infoshtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_champs', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_previsu_infos';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_previsu_infos',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(safehtml($Pile[$SP]['cle']),'mail|sujet|texte')) ?'' :' ')))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(interdire_scripts(safehtml($Pile[$SP]['cle']))), null),true)))))!=='' ?
			((	'<li><strong>' .
		retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
		'</strong> : ') . $t2 . '</li>') :
			'') .
	'
			')) :
		'') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_previsu_infos @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_previsu_pjhtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(table_valeur(entites_html(table_valeur($Pile[0]??[], (string)'erreurs', null),true),'infos_pj'))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_previsu_pj';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_previsu_pj',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li>
						' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'vignette'),'32')),'src')))))!=='' ?
		('<img src="' . $t1 . (	'" ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'mime')))))!=='' ?
			('title="' . $t2 . '"') :
			'') .
	' />')) :
		'') .
'
						' .
retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'nom'))) .
'
					</li>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_previsu_pj @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_previsuhtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'previsu')) ?' ' :'')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_previsu';
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_previsu',17,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:previsualisation');
	$l2 = _T('contact:courriel_de');
	$l3 = _T('public|spip|ecrire:form_prop_sujet');
	$l4 = _T('public|spip|ecrire:info_texte_message');
	$l5 = _T('contact:form_pj_previsu_pluriel');
	$l6 = _T('contact:form_pj_previsu_singulier');
	$l7 = _T('public|spip|ecrire:form_prop_confirmer_envoi');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<fieldset class="previsu">
		<legend>' .
$l1 .
'</legend>
		<ul>
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'mail', null),true)))))!=='' ?
		((	'<li><strong>' .
	$l2 .
	'</strong> : ') . $t1 . '</li>') :
		'') .
'
			' .
BOUCLE_previsu_infoshtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'sujet', null),true)))))!=='' ?
		((	'<li><strong>' .
	$l3 .
	'</strong> : ') . $t1 . '</li>') :
		'') .
'
			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtre_propre_dist($Pile,entites_html(table_valeur($Pile[0]??[], (string)'texte', null),true))))))!=='' ?
		((	'<li><div><strong>' .
	$l4 .
	'</strong></div>') . $t1 . '</li>') :
		'') .
'
			' .
(($t1 = BOUCLE_previsu_pjhtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<li>
				' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((count(table_valeur(entites_html(table_valeur($Pile[0]??[], (string)'erreurs', null),true),'infos_pj')) > '1') ? $l5:$l6)))))!=='' ?
				('<strong>' . $t3 . '</strong>') :
				'') .
		'
				<ul>
				') . $t1 . '
				</ul>
			</li>
			') :
		'') .
'
		</ul>
		<p class="boutons"><input type="submit" class="submit" name="confirmer" value="' .
$l7 .
'" /></p>
	</fieldset>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_previsu @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_toushtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'destinataire', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_tous';
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_tous',53,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<input type="hidden" name="destinataire[]" value="' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
'" />
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_tous @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_choixhtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_destinataires', null),true)) ?'' :' ')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_choix';
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_choix',51,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Si pas de choix, le destinataire est défini automatiquement ') :
		'') .
'
				' .
BOUCLE_toushtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_choix @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_destinataireshtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'choix_destinataires', null))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_destinataires';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+auteurs.nom AS num",
		"CASE ( 0+auteurs.nom ) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"auteurs.nom",
		"auteurs.id_auteur");
		$command['orderby'] = array('sinum, num', 'auteurs.nom');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), sql_in('auteurs.id_auteur', $in));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_destinataires',70,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'type_choix', null),true),'plusieurs|plusieurs_et|plusieurs_ou')) ?' ' :'')))))!=='' ?
		($t1 . (	'
							<li class="choix">
								<input
									type="checkbox" class="checkbox"
									name="destinataire&#91;&#93;" id="destinataire' .
	retablir_echappements_modeles($Pile[$SP]['id_auteur']) .
	'"
									value="' .
	retablir_echappements_modeles($Pile[$SP]['id_auteur']) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'destinataire_selection', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (($t3 = strval(retablir_echappements_modeles(((in_array($Pile[$SP]['id_auteur'],(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'destinataire_selection', null), (array())))))) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'checked="checked"') :
				'')) :
			'') .
	'
									' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'destinataire_selection', null),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
									' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((include_spip('inc/config')?lire_config('contact/c',null,false):'')) ?'' :' ')))))!=='' ?
				($t3 . (($t4 = strval(retablir_echappements_modeles((((((in_array($Pile[$SP]['id_auteur'],(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'destinataire', null), (array())))))) OR ((in_array($Pile[$SP]['id_auteur'],(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'choix_destinataires', null), (array())))))))) ?' ' :'')) ?' ' :''))))!=='' ?
					(' ' . $t4 . 'checked="checked"') :
					'')) :
				''))) :
			'') .
	'
								/>
								<label for="destinataire' .
	retablir_echappements_modeles($Pile[$SP]['id_auteur']) .
	'">' .
	retablir_echappements_modeles(interdire_scripts(safehtml(supprimer_numero(typo($Pile[$SP]['nom'], "TYPO", $connect, $Pile[0]))))) .
	'</label>
							</li>
						')) :
		'') .
'
						' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'type_choix', null),true),'un|un_et|un_ou')) ?' ' :'')))))!=='' ?
		($t1 . (	'
							<option value="' .
	retablir_echappements_modeles($Pile[$SP]['id_auteur']) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(((in_array($Pile[$SP]['id_auteur'],(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'destinataire', null), (array())))))) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'selected="selected"') :
			'') .
	'>' .
	retablir_echappements_modeles(interdire_scripts(safehtml(supprimer_numero(typo($Pile[$SP]['nom'], "TYPO", $connect, $Pile[0]))))) .
	'</option>
						')) :
		'') .
'
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_destinataires @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_infoshtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_champs', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_infos';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"env");
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_infos',99,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_obligatoire_02');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'existe'] = (find_in_path((string)(	'formulaires/contact_champ_' .
		(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
		'.html'))))) .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'existe', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	retablir_echappements_modeles(recuperer_fond( (	'formulaires/contact_champ_' .
		(interdire_scripts(safehtml($Pile[$SP]['cle'])))) , array_merge($Pile[0],array('name' => (interdire_scripts(safehtml($Pile[$SP]['cle']))) ,
	'titre' => (interdire_scripts(safehtml($Pile[$SP]['valeur']))) )), array('compil'=>array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_infos',102,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
			')) :
		'') .
'
			' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'existe', null)) ?'' :' '))))!=='' ?
		($t1 . (	'
			<div class="editer editer_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	' saisie_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_obligatoires', null), (array())),true))))) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'obligatoire') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),(interdire_scripts(safehtml($Pile[$SP]['cle']))))) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
				<label for="info_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'">' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_obligatoires', null), (array())),true))))) ?' ' :'')))))!=='' ?
			(' ' . $t2 . (	'<strong>' .
		$l1 .
		'</strong>')) :
			'') .
	'</label>
				' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),(interdire_scripts(safehtml($Pile[$SP]['cle']))))))))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
				<input type="text" class="text" name="' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'" id="info_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'" value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(interdire_scripts(safehtml($Pile[$SP]['cle']))), null),true))) .
	'" size="30" />
			</div>
			')) :
		'') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_infos @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_pjhtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'pj_fichiers', null),true))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_pj';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_pj',117,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('contact:form_pj_fichier_ajoute');
	$l2 = _T('contact:form_pj_supprimer');
	$l3 = _T('contact:form_pj_importer');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						<li>
							' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'message')) ?' ' :'')))))!=='' ?
		($t1 . (	'
								' .
	$l1 .
	'
								' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'vignette'),'32')),'src')))))!=='' ?
			('<img src="' . $t2 . (	'" ' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'mime')))))!=='' ?
				('title="' . $t3 . '"') :
				'') .
		' />')) :
			'') .
	'
								' .
	retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'nom'))) .
	'
								<input type="hidden" name="pj_enregistrees_nomfichier&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'&#93;" value="' .
	retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'nom'))) .
	'"/>
								<input type="hidden" name="pj_enregistrees_mime&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'&#93;" value="' .
	retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'mime'))) .
	'"/>
								<input type="hidden" name="pj_enregistrees_extension&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'&#93;" value="' .
	retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'extension'))) .
	'"/>
								<input type="hidden" name="pj_enregistrees_vignette&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'&#93;" value="' .
	retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'vignette'))) .
	'"/>
								<input type="submit" name="pj_supprimer_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'" value="' .
	$l2 .
	'"/>
							')) :
		'') .
'

							' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'infos_pj'),(interdire_scripts(safehtml($Pile[$SP]['cle'])))),'message')) ?'' :' ')))))!=='' ?
		($t1 . (	'
								<input type="file" class="fichier" name="pj_fichiers&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'&#93;" title="' .
	$l3 .
	'" />
							')) :
		'') .
'
						</li>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_pj @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_editablehtml_981a2583b14e676986179ae9854b037d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_editable';
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
		array('plugins/auto/contact-2.0.0/formulaires/contact.html','html_981a2583b14e676986179ae9854b037d','_editable',11,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:envoyer_message');
	$l2 = _T('contact:form_destinataires');
	$l3 = _T('contact:form_destinataire');
	$l4 = _T('contact:form_pj_ajouter_pluriel');
	$l5 = _T('contact:form_pj_ajouter_singulier');
	$l6 = _T('public|spip|ecrire:antispam_champ_vide');
	$l7 = _T('public|spip|ecrire:form_prop_envoyer');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<form method=\'post\' action=\'' .
retablir_echappements_modeles(interdire_scripts(ancre_url(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true),'formulaire_contact'))) .
'\' enctype=\'multipart/form-data\'>
	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' declarer les hidden qui declencheront le service du formulaire parametre : url d\'action ') :
		'') .
'
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
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Previsualisation... ') :
		'') .
'
	' .
BOUCLE_previsuhtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP) .
'

	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Sinon, formulaire normal ') :
		'') .
'
	<fieldset>
		<legend>' .
$l1 .
'</legend>
		<div class="editer-groupe">
			' .
(($t1 = BOUCLE_choixhtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
				' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' Sinon on propose le choix, en select ou en checkbox suivant l\'option "type_choix" ') :
			'') .
	'
				' .
	(($t2 = BOUCLE_destinataireshtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			((	'
				<div class="editer obligatoire' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'destinataire')) ?' ' :'')))))!=='' ?
					(' ' . $t4 . 'erreur') :
					'') .
			'">
					' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'type_choix', null),true),'plusieurs|plusieurs_et|plusieurs_ou')) ?' ' :'')))))!=='' ?
					($t4 . (	'
						<label>' .
				$l2 .
				'</label>
						' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'destinataire')))))!=='' ?
						('<span class="erreur_message">' . $t5 . '</span>') :
						'') .
				'
						<ul class="choix_mots">
					')) :
					'') .
			'
					' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'type_choix', null),true),'un|un_et|un_ou')) ?' ' :'')))))!=='' ?
					($t4 . (	'
						<label for="destinataire">' .
				$l3 .
				'</label>
						' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur(table_valeur($Pile[0]??[], (string)'erreurs', null),'destinataire')))))!=='' ?
						('<span class="erreur_message">' . $t5 . '</span>') :
						'') .
				'
						<select name="destinataire&#91;&#93;" id="destinataire">
					')) :
					'') .
			'
					') . $t2 . (	'
					' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'type_choix', null),true),'plusieurs|plusieurs_et|plusieurs_ou')) ?' ' :'')))))!=='' ?
					($t4 . '
						</ul>
					') :
					'') .
			'
					' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'type_choix', null),true),'un|un_et|un_ou')) ?' ' :'')))))!=='' ?
					($t4 . '
						</select>
					') :
					'') .
			'
				</div>
				')) :
			('
				BUG
				')) .
	'
			'))) .
'

			' .
BOUCLE_infoshtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP) .
'

			' .
(($t1 = BOUCLE_pjhtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class =\'editer pieces_jointes\'>
				<label>' .
		retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'nb_max_pj', null),true) > '1') ? $l4:$l5))) .
		'</label>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
		</div>
	</fieldset>

	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Piege a robots spammeurs ') :
		'') .
'
	<p style="display:none;">
		<label for="contact_nobot">' .
$l6 .
'</label>
		<input type="text" class="text" name="nobot" id="contact_nobot" value="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nobot', null),true))) .
'" size="10" />
	</p>

	<p class="boutons"><input type="submit" class="submit" name="valide" value="' .
$l7 .
'" /></p>
</form>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_editable @ plugins/auto/contact-2.0.0/formulaires/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/contact-2.0.0/formulaires/contact.html
// Temps de compilation total: 3.942 ms
//

function html_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
'<div class="formulaire_spip formulaire_contact formulaire_editer_message_contact" id="formulaire_contact">

<br class=\'bugajaxie\' />

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtre_propre_dist($Pile,(include_spip('inc/config')?lire_config('contact/texte',null,false):''))))))!=='' ?
		('<div class="texte">' . $t1 . '</div>') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_ok', null)))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_erreur', null)))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'

' .
BOUCLE_editablehtml_981a2583b14e676986179ae9854b037d($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</div>
');

	return analyse_resultat_skel('html_981a2583b14e676986179ae9854b037d', $Cache, $page, 'plugins/auto/contact-2.0.0/formulaires/contact.html');
}
