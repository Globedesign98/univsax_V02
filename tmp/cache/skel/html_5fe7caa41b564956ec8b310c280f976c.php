<?php

/*
 * Squelette : ../prive/echafaudage/hierarchie/objet.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   _ariane, _rub, _testrub
 */ 

function BOUCLE_arianehtml_5fe7caa41b564956ec8b310c280f976c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,true);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ariane';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.lang",
		"rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.id_secteur");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/echafaudage/hierarchie/objet.html','html_5fe7caa41b564956ec8b310c280f976c','_ariane',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' &gt;' .
retablir_echappements_modeles(changer_typo(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']))) .
'
' .
retablir_echappements_modeles(lien_ou_expose(generer_objet_url($Pile[$SP]['id_rubrique'],'rubrique'),(interdire_scripts(((($a = couper(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])),'80')) OR (is_string($a) AND strlen($a))) ? $a : _T('ecrire:info_sans_titre')))),(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true)) ?'' :' ')) AND ((($Pile[$SP]['id_rubrique'] == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_parent', null),true))))))) ?' ' :''))))) .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id_secteur'] = ($Pile[$SP]['id_secteur']))));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ariane @ ../prive/echafaudage/hierarchie/objet.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubhtml_5fe7caa41b564956ec8b310c280f976c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'rubriques.id_rubrique', sql_quote(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_parent', null),true))), '', 'bigint(20) NOT NULL AUTO_INCREMENT')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('rubriques.statut', $in) : 
			array('=', 'rubriques.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/echafaudage/hierarchie/objet.html','html_5fe7caa41b564956ec8b310c280f976c','_rub',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
BOUCLE_arianehtml_5fe7caa41b564956ec8b310c280f976c($Cache, $Pile, $doublons, $Numrows, $SP));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rub @ ../prive/echafaudage/hierarchie/objet.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_testrubhtml_5fe7caa41b564956ec8b310c280f976c(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_testrub';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'rubriques.statut', "'poub'")));
		$command['join'] = array();
		$command['limit'] = '1,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/echafaudage/hierarchie/objet.html','html_5fe7caa41b564956ec8b310c280f976c','_testrub',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_testrub']['command'] = $command;
	$Numrows['_testrub']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_testrub @ ../prive/echafaudage/hierarchie/objet.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/echafaudage/hierarchie/objet.html
// Temps de compilation total: 3.009 ms
//

function html_5fe7caa41b564956ec8b310c280f976c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- hierarchie -->
<a href="' .
retablir_echappements_modeles(generer_url_ecrire('rubriques')) .
'">' .
_T('public|spip|ecrire:info_racine_site') .
'</a>
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id_secteur'] = '0')) .
BOUCLE_rubhtml_5fe7caa41b564956ec8b310c280f976c($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
retablir_echappements_modeles(interdire_scripts(changer_typo(generer_objet_info((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))), 'lang', '', [])))) .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($a = couper(generer_objet_info((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))), 'titre', '', []),'80')) OR (is_string($a) AND strlen($a))) ? $a : _T('ecrire:info_sans_titre'))))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'
' .
retablir_echappements_modeles(changer_typo('')) .
'
' .
retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('rubhier'):''))) .
BOUCLE_testrubhtml_5fe7caa41b564956ec8b310c280f976c($Cache, $Pile, $doublons, $Numrows, $SP)
. (	'
' .
	(($t2 = strval(retablir_echappements_modeles((((((($Numrows['_testrub']['total'] ?? 0)) AND ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true))))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'deplacer', null),true)) ?'' :' ')))))!=='' ?
				($t3 . (	'
	<span class="bouton_deplacer"><span class="image_loading" style="float:' .
			retablir_echappements_modeles(interdire_scripts(($Pile[0]['dir_lang_left'] ?? null))) .
			';"></span> <a href="' .
			retablir_echappements_modeles(parametre_url(self(),'deplacer','oui')) .
			'" class="ajax btn btn_mini btn_secondaire">' .
			_T('public|spip|ecrire:bouton_deplacer') .
			'</a></span>
	')) :
				'') .
		'
	' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'deplacer', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	'
	<span class="bouton_deplacer"><a href="#" class="btn btn_mini btn_secondaire" onclick="jQuery(\'#chercher_rubrique\').toggle(\'fast\');return false;">' .
			_T('public|spip|ecrire:bouton_deplacer') .
			'</a></span>
	<div id="chercher_rubrique">
	' .
			retablir_echappements_modeles(boite_ouvrir(_T('public|spip|ecrire:titre_cadre_interieur_rubrique'), 'simple')) .
			'
	' .
			retablir_echappements_modeles(filtre_chercher_rubrique_dist('',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_parent', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_secteur', null), (table_valeur($Pile["vars"]??[], (string)'id_secteur', null))),true))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'restreint', null), (interdire_scripts(deplacement_restreint(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true),(interdire_scripts(generer_objet_info((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))), 'statut', '', []))))))),true))),'true','form_simple')) .
			'
	<br class="nettoyeur">
	' .
			retablir_echappements_modeles(boite_fermer()) .
			'
	</div>
	')) :
				'') .
		'
')) :
			'') .
	'
'));

	return analyse_resultat_skel('html_5fe7caa41b564956ec8b310c280f976c', $Cache, $page, '../prive/echafaudage/hierarchie/objet.html');
}
