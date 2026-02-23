<?php

/*
 * Squelette : squelettes/inc-checklist-admin.html
 * Date :      Fri, 13 Feb 2026 20:38:30 GMT
 * Compile :   Sun, 22 Feb 2026 23:51:12 GMT
 * Boucles :   _ues_photo, _ues_insc, _ues_docs_count, _ues_pay
 */ 

function BOUCLE_ues_photohtml_4414adad5a65ef99a99cc2e86cfa64e5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_ues_photo';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.id_objet', sql_quote(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)), '', 'bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-checklist-admin.html','html_4414adad5a65ef99a99cc2e86cfa64e5','_ues_photo',23,$GLOBALS['spip_lang'])
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
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_photo @ squelettes/inc-checklist-admin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_inschtml_4414adad5a65ef99a99cc2e86cfa64e5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('squelettes/inc-checklist-admin.html','html_4414adad5a65ef99a99cc2e86cfa64e5','_ues_insc',28,$GLOBALS['spip_lang'])
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
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_insc @ squelettes/inc-checklist-admin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_docs_counthtml_4414adad5a65ef99a99cc2e86cfa64e5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_ues_docs_count';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
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
		array('squelettes/inc-checklist-admin.html','html_4414adad5a65ef99a99cc2e86cfa64e5','_ues_docs_count',40,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_ues_docs_count']['command'] = $command;
	$Numrows['_ues_docs_count']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
', $Numrows['_ues_docs_count']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_docs_count @ squelettes/inc-checklist-admin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_payhtml_4414adad5a65ef99a99cc2e86cfa64e5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('squelettes/inc-checklist-admin.html','html_4414adad5a65ef99a99cc2e86cfa64e5','_ues_pay',51,$GLOBALS['spip_lang'])
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
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_pay @ squelettes/inc-checklist-admin.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc-checklist-admin.html
// Temps de compilation total: 1.884 ms
//

function html_4414adad5a65ef99a99cc2e86cfa64e5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_id_article'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_article', null),true))))) .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_statut'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'statut', null),true))))) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Sécurité: id_article requis') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ?'' :' '))))!=='' ?
		($t1 . '
  <div class="alert alert-warning mb-3">
    Checklist admin : id_article manquant.
  </div>
') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ?' ' :''))))!=='' ?
		($t1 . (	'

  ' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' Etats des pastilles ') :
			'') .
	'
  ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step1_done'] = '0')) .
	'
  ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_statut', null) == 'prop')) ?' ' :''))))!=='' ?
			($t2 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step1_done'] = '1'))) :
			'') .
	'
  ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_statut', null) == 'publie')) ?' ' :''))))!=='' ?
			($t2 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step1_done'] = '1'))) :
			'') .
	'

  ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step2_done'] = '0')) .
	'
  ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_statut', null) == 'publie')) ?' ' :''))))!=='' ?
			($t2 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_step2_done'] = '1'))) :
			'') .
	'

  ' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' Photo = logo du participant (premier auteur lié à l\'article) ') :
			'') .
	'
  ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_photo_done'] = '0')) .
	'
  ' .
	BOUCLE_ues_photohtml_4414adad5a65ef99a99cc2e86cfa64e5($Cache, $Pile, $doublons, $Numrows, $SP) .
	'

  ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_inscription_ok'] = '0')) .
	'
  ' .
	BOUCLE_ues_inschtml_4414adad5a65ef99a99cc2e86cfa64e5($Cache, $Pile, $doublons, $Numrows, $SP) .
	'

  ' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . '
    4) Copie signée envoyée (pièces jointes) :
    Blanc si 0 ou 1 document; Vert si ≥ 2 documents
    -> On compte TOUS les documents liés à l\'article (PDF inclus), sans filtrer par mode
  ') :
			'') .
	'
  ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_docs_ok'] = '0')) .
	'
' .
	(($t2 = BOUCLE_ues_docs_counthtml_4414adad5a65ef99a99cc2e86cfa64e5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('
' . $t2 . (	'
  ' .
			(($t4 = strval(retablir_echappements_modeles((((($Numrows['_ues_docs_count']['total'] ?? 0) >= '2')) ?' ' :''))))!=='' ?
					($t4 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_docs_ok'] = '1'))) :
					'') .
			'
')) :
			('
')) .
	'

' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . '
  Paiement effectué : vert si PAIEMENTOK = oui
  (on le lit sur l\'article courant)
') :
			'') .
	'
' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_paiement_ok'] = '0')) .
	'
' .
	BOUCLE_ues_payhtml_4414adad5a65ef99a99cc2e86cfa64e5($Cache, $Pile, $doublons, $Numrows, $SP) .
	'


  <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white ues-checklist mt-3">

    <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
      <i class="bi bi-check2-circle"></i>
      <span class="fw-semibold">Checklist</span>
    </div>

    <!-- 1) Formulaire envoyé -->
    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="ues-checkline">
        <i class="bi bi-1-circle mt-1"></i>
        <div class="ues-checktext">Formulaire complété et <strong>envoyé</strong></div>
        <span class="ues-step-dot ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_step1_done', null) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'is-done') :
			'') .
	'" aria-hidden="true"></span>
      </div>
    </div>

    <!-- 2) Photo d\'identité -->
    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="ues-checkline">
        <i class="bi bi-2-circle mt-1"></i>
        <div class="ues-checktext">Photo d\'identité</div>
        <span class="ues-step-dot ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_photo_done', null) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'is-done') :
			'') .
	'" aria-hidden="true"></span>
      </div>
    </div>

    <!-- 3) Formulaire validé par l\'administration -->
    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="ues-checkline">
        <i class="bi bi-3-circle mt-1"></i>
        <div class="ues-checktext">Formulaire <strong>validé</strong> par l\'administration</div>
        <span class="ues-step-dot ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_step2_done', null) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'is-done') :
			'') .
	'" aria-hidden="true"></span>
      </div>
    </div>

    <!-- 4) Copie signée envoyée (pièce jointe) -->
    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="ues-checkline">
        <i class="bi bi-4-circle mt-1"></i>
        <div class="ues-checktext">Copie <strong>signée</strong> envoyée (pièce jointe)</div>
        <span class="ues-step-dot ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_docs_ok', null) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'is-done') :
			'') .
	'" aria-hidden="true"></span>
      </div>
    </div>
    
      ' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' NOUVEAU : Paiement effectué ') :
			'') .
	'
  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
    <div class="ues-checkline">
      <i class="bi bi-5-circle mt-1"></i>
      <div class="ues-checktext">Paiement effectué</div>
      <span class="ues-step-dot ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_paiement_ok', null) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'is-done') :
			'') .
	'" aria-hidden="true"></span>
    </div>
  </div>

    <!-- 5) Inscription validée et confirmée par l\'UES -->
    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="ues-checkline">
        <i class="bi bi-5-circle mt-1"></i>
        <div class="ues-checktext">Inscription <strong>validée et confirmée</strong> par l\'UES</div>
        <span class="ues-step-dot ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'ues_inscription_ok', null) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'is-done') :
			'') .
	'" aria-hidden="true"></span>
      </div>
    </div>

  </div>

')) :
		''));

	return analyse_resultat_skel('html_4414adad5a65ef99a99cc2e86cfa64e5', $Cache, $page, 'squelettes/inc-checklist-admin.html');
}
