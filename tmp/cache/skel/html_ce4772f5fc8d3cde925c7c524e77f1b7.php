<?php

/*
 * Squelette : squelettes/inc-checklist.html
 * Date :      Wed, 18 Feb 2026 22:38:43 GMT
 * Compile :   Thu, 19 Feb 2026 01:08:58 GMT
 * Boucles :   _ues_article, _ues_has_doc, _ues_photo, _ues_insc, _ues_docs_count, _ues_pay
 */ 

function BOUCLE_ues_articlehtml_ce4772f5fc8d3cde925c7c524e77f1b7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 5;
	$in[]= 7;
	$in1 = array();
	$in1[]= 'prepa';
	$in1[]= 'prop';
	$in1[]= 'publie';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ues_article';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.statut",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array('JOIN-L1' => 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'L1.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(20) NOT NULL DEFAULT 0')), sql_in('articles.id_rubrique', $in), sql_in('articles.statut', $in1));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist.html','html_ce4772f5fc8d3cde925c7c524e77f1b7','_ues_article',6,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_id_article'] = ($Pile[$SP]['id_article']))) .
'
    ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_statut'] = (interdire_scripts($Pile[$SP]['statut'])))) .
'
  ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_article @ squelettes/inc-checklist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_has_dochtml_ce4772f5fc8d3cde925c7c524e77f1b7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_ues_has_doc';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)), '', 'bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist.html','html_ce4772f5fc8d3cde925c7c524e77f1b7','_ues_has_doc',26,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
  ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_has_doc'] = '1')) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_has_doc @ squelettes/inc-checklist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_photohtml_ce4772f5fc8d3cde925c7c524e77f1b7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_ues_photo';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist.html','html_ce4772f5fc8d3cde925c7c524e77f1b7','_ues_photo',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
  ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_photo_done'] = ((extraire_attribut(quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', ''),'src') ? '1':'0')))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_photo @ squelettes/inc-checklist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_inschtml_ce4772f5fc8d3cde925c7c524e77f1b7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ues_insc';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.inscription",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)), '', 'bigint(20) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist.html','html_ce4772f5fc8d3cde925c7c524e77f1b7','_ues_insc',36,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_inscription_norm'] = (interdire_scripts(trim(strtolower(translitteration($Pile[$SP]['inscription']))))))) .
'
  ' .
(($t1 = strval(retablir_echappements_modeles(((filtre_match_dist(table_valeur($Pile["vars"]??[], (string)'ues_inscription_norm', null),'^confirme')) ?' ' :''))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_inscription_ok'] = '1'))) :
		'') .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_insc @ squelettes/inc-checklist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_docs_counthtml_ce4772f5fc8d3cde925c7c524e77f1b7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_ues_docs_count';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)), '', 'bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist.html','html_ce4772f5fc8d3cde925c7c524e77f1b7','_ues_docs_count',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
  ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'compteur_docs'] = (plus(table_valeur($Pile["vars"]??[], (string)'compteur_docs', null),'1')))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_docs_count @ squelettes/inc-checklist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_payhtml_ce4772f5fc8d3cde925c7c524e77f1b7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ues_pay';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.paiementok",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)), '', 'bigint(20) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist.html','html_ce4772f5fc8d3cde925c7c524e77f1b7','_ues_pay',59,$GLOBALS['spip_lang'])
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
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['paiementok'] == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_paiement_ok'] = '1'))) :
		'') .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_pay @ squelettes/inc-checklist.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc-checklist.html
// Temps de compilation total: 3.460 ms
//

function html_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null) . '{#ENV{lang}}')) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_id_article'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_article', null),true))))) .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_statut'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true))))) .
'

' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ?'' :' '))))!=='' ?
		($t1 . (	'
  ' .
	(($t2 = BOUCLE_ues_articlehtml_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			('
  ')) .
	'
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Etats des pastilles ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step1_done'] = '0')) .
'
' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_statut', null) == 'prop')) ?' ' :''))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step1_done'] = '1'))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_statut', null) == 'publie')) ?' ' :''))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step1_done'] = '1'))) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step2_done'] = '0')) .
'
' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_statut', null) == 'publie')) ?' ' :''))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step2_done'] = '1'))) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_has_doc'] = '0')) .
'
' .
BOUCLE_ues_has_dochtml_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_photo_done'] = '0')) .
'
' .
BOUCLE_ues_photohtml_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_inscription_ok'] = '0')) .
'
' .
BOUCLE_ues_inschtml_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
  4) Copie signée envoyée (pièces jointes)
  Vert si ≥ 2 documents liés à l\'article.
  FIX: On utilise un compteur explicite pour éviter l\'erreur TOTAL_BOUCLE hors boucle.
') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'compteur_docs'] = '0')) .
'
' .
BOUCLE_ues_docs_counthtml_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_docs_ok'] = '0')) .
'
' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'compteur_docs', null) >= '2')) ?' ' :''))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_docs_ok'] = '1'))) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
  Paiement effectué : vert si PAIEMENTOK = oui
  (on le lit sur l\'article courant)
') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_paiement_ok'] = '0')) .
'
' .
BOUCLE_ues_payhtml_ce4772f5fc8d3cde925c7c524e77f1b7($Cache, $Pile, $doublons, $Numrows, $SP) .
'

<div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white ues-checklist">

  <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
    <i class="bi bi-check2-circle"></i>
    <span class="fw-semibold">' .
_T('ues:checklist_title') .
'</span>
  </div>

  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-1-circle mt-1"></i>
      <div class="ues-checktext">' .
_T('ues:checklist_step1') .
'</div>
      <span class="ues-step-dot ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_step1_done', null) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'is-done') :
		'') .
'" aria-hidden="true"></span>
    </div>
  </div>

  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-2-circle mt-1"></i>
      <div class="ues-checktext">' .
_T('ues:checklist_step2') .
'</div>
      <span class="ues-step-dot ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_photo_done', null) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'is-done') :
		'') .
'" aria-hidden="true"></span>
    </div>
  </div>

  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-3-circle mt-1"></i>
      <div class="ues-checktext">' .
_T('ues:checklist_step3') .
'</div>
      <span class="ues-step-dot ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_step2_done', null) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'is-done') :
		'') .
'" aria-hidden="true"></span>
    </div>
  </div>

  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-4-circle mt-1"></i>
      <div class="ues-checktext">' .
_T('ues:checklist_step4') .
'</div>
      <span class="ues-step-dot ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_docs_ok', null) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'is-done') :
		'') .
'" aria-hidden="true"></span>
    </div>
  </div>
  
  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-5-circle mt-1"></i>
      <div class="ues-checktext">' .
_T('ues:checklist_step5') .
'</div>
      <span class="ues-step-dot ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_paiement_ok', null) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'is-done') :
		'') .
'" aria-hidden="true"></span>
    </div>
  </div>

  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-6-circle mt-1"></i>
      <div class="ues-checktext">' .
_T('ues:checklist_step6') .
'</div>
      <span class="ues-step-dot ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_inscription_ok', null) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'is-done') :
		'') .
'" aria-hidden="true"></span>
    </div>
  </div>

</div>

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'with_help', null), 'oui'),true) == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'
  <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-4">
    <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
      <i class="bi bi-life-preserver"></i>
      <span class="fw-semibold">' .
	_T('ues:help_title') .
	'</span>
    </div>
    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      ' .
	_T('ues:help_text') .
	'
      <a class="link-light" href="mailto:inscription@univsax.com">inscription@univsax.com</a>
    </div>
  </div>
')) :
		''));

	return analyse_resultat_skel('html_ce4772f5fc8d3cde925c7c524e77f1b7', $Cache, $page, 'squelettes/inc-checklist.html');
}
