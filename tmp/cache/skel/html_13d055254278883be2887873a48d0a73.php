<?php

/*
 * Squelette : squelettes/inc-ues-accordion-item.html
 * Date :      Mon, 16 Feb 2026 07:58:59 GMT
 * Compile :   Sun, 22 Feb 2026 23:51:12 GMT
 * Boucles :   _aut, _mail_aut, _docs, _art
 */ 

function BOUCLE_authtml_13d055254278883be2887873a48d0a73(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_aut';
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
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_aut',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
              ' .
retablir_echappements_modeles(inserer_attribut(inserer_attribut(filtrer('image_graver', filtrer('image_reduire',quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', ''),'45','45')),'class','ues-author-avatar'),'alt','')) .
'
            ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_aut @ squelettes/inc-ues-accordion-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mail_authtml_13d055254278883be2887873a48d0a73(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_mail_aut';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.email");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_mail_aut',175,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
                          ' .
retablir_echappements_modeles(interdire_scripts(($Pile[$SP]['email'] ? (	'<a class="text-white" href="mailto:' .
	(interdire_scripts(textebrut($Pile[$SP]['email']))) .
	'">' .
	(interdire_scripts(textebrut($Pile[$SP]['email']))) .
	'</a>'):''))) .
'
                        ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mail_aut @ squelettes/inc-ues-accordion-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_docshtml_13d055254278883be2887873a48d0a73(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'document';
	$in[]= 'image';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_docs';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.date",
		"documents.id_document",
		"documents.titre",
		"documents.fichier");
		$command['orderby'] = array('documents.date DESC');
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')), sql_in('documents.mode', $in));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_docs',265,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
                  <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
                    <div class="d-flex align-items-center justify-content-between gap-3">
                      <a class="link-light" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_document'], 'document', '', '', true)))) .
'" target="_blank" rel="noopener">
                        ' .
retablir_echappements_modeles(interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(basename(get_spip_doc($Pile[$SP]['fichier']))))))) .
'
                      </a>
                      <span class="text-white-50">' .
retablir_echappements_modeles(interdire_scripts(affdate(normaliser_date($Pile[$SP]['date'])))) .
'</span>
                    </div>
                  </div>
                ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_docs @ squelettes/inc-ues-accordion-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_arthtml_13d055254278883be2887873a48d0a73(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.statut",
		"articles.inscription",
		"articles.paiementok",
		"articles.titre",
		"articles.prenom",
		"articles.auditeur",
		"articles.date",
		"articles.id_rubrique",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(($Pile[0]['id_article'] ?? null), '','bigint(20) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_art',1,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'prio'] = '1')) .
'
  ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
		($t1 . (	'
    ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['inscription'] == 'confirmée')) ?' ' :'')))))!=='' ?
			($t2 . (	'
      ' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['paiementok'] == 'oui')) ?' ' :'')))))!=='' ?
				($t3 . (	'
        ' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'prio'] = '2')) .
			'
      ')) :
				'') .
		'
    ')) :
			'') .
	'
  ')) :
		'') .
'

  ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'uid'] = ($Pile[$SP]['id_article']))) .
'

  <div class="accordion-item mb-2"
       data-name="' .
retablir_echappements_modeles(interdire_scripts(strtolower(textebrut(concat(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])),' ',(interdire_scripts($Pile[$SP]['prenom']))))))) .
'"
       data-prio="' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'prio', null)) .
'"
       data-docsok="' .
retablir_echappements_modeles(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'docs_ok', null),true)) OR (is_string($a) AND strlen($a))) ? $a : '0'))) .
'"
       data-payok="' .
retablir_echappements_modeles(interdire_scripts((($Pile[$SP]['paiementok'] == 'oui') ? '1':'0'))) .
'"
       data-auditeur="' .
retablir_echappements_modeles(interdire_scripts((($Pile[$SP]['auditeur'] == 'oui') ? '1':'0'))) .
'"
       data-ts="' .
retablir_echappements_modeles(interdire_scripts(strtotime(normaliser_date($Pile[$SP]['date'])))) .
'">

    <h2 class="accordion-header" id="h-insc-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'uid', null)) .
'">
      <button class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#c-insc-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'uid', null)) .
'"
              aria-expanded="false"
              aria-controls="c-insc-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'uid', null)) .
'">

        <div class="d-flex w-100 align-items-center justify-content-between gap-3 flex-wrap">
          <div class="d-flex align-items-center gap-2 flex-wrap">
            <!-- Avatar auteur -->
            ' .
(($t1 = BOUCLE_authtml_13d055254278883be2887873a48d0a73($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		('
            ')) .
'

            <strong>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
' </strong>
            <strong> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['prenom'])) .
'</strong>

            ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'prio', null) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--ok">
                <i class="bi bi-star-fill"></i> ' .
	_T('ues:acc_validated_confirmed_paid') .
	'
              </span>
            ')) :
		'') .
'
          </div>

          <div class="d-flex align-items-center gap-2 flex-wrap">

            <!-- WHATSAPP -->
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[0]['whatsapp'] ?? null)) ?' ' :'')))))!=='' ?
		($t1 . (	'
              <span class="" title="' .
	_T('ues:acc_whatsapp_yes') .
	'">
                <i class="bi bi-whatsapp"></i>
              </span>
            ')) :
		'') .
'
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[0]['whatsapp'] ?? null)) ?'' :' ')))))!=='' ?
		($t1 . (	'
              <span class="" style="opacity:0.3;" title="' .
	_T('ues:acc_whatsapp_no') .
	'">
                <i class="bi bi-whatsapp"></i>
              </span>
            ')) :
		'') .
'

            <span class="ues-pill ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
		($t1 . 'ues-pill--ok') :
		'') .
'">
              <i class="bi bi-sliders"></i>
              ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
		($t1 . _T('ues:acc_published_online')) :
		'') .
'
              ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?'' :' ')))))!=='' ?
		($t1 . retablir_echappements_modeles(interdire_scripts($Pile[$SP]['statut']))) :
		'') .
'
            </span>

            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'docs_ok', null),true) == '1')) ?' ' :'')))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--ok">
                <i class="bi bi-check2-circle"></i> ' .
	_T('ues:acc_signed') .
	'
              </span>
            ')) :
		'') .
'
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'docs_ok', null),true) == '1')) ?'' :' ')))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--todo">
                <span class="ues-dot ues-dot--todo"></span> ' .
	_T('ues:acc_todo') .
	'
              </span>
            ')) :
		'') .
'

            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['paiementok'] == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--ok">
                <i class="bi bi-credit-card"></i> ' .
	_T('ues:acc_payment_ok') .
	'
              </span>
            ')) :
		'') .
'
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['paiementok'] == 'oui')) ?'' :' ')))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--todo">
                <i class="bi bi-credit-card"></i> ' .
	_T('ues:acc_payment_pending') .
	'
              </span>
            ')) :
		'') .
'

            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['inscription'] == 'confirmée')) ?' ' :'')))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--ok">
                <i class="bi bi-check2-circle"></i> ' .
	_T('ues:acc_confirmed') .
	'
              </span>
            ')) :
		'') .
'
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['inscription'] == 'confirmée')) ?'' :' ')))))!=='' ?
		($t1 . (	'
              <span class="ues-pill ues-pill--todo">
                <span class="ues-dot ues-dot--todo"></span> ' .
	_T('ues:acc_pending') .
	'
              </span>
            ')) :
		'') .
'
          </div>
        </div>

      </button>
    </h2>

    <div id="c-insc-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'uid', null)) .
'"
         class="accordion-collapse collapse"
         aria-labelledby="h-insc-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'uid', null)) .
'"
         data-bs-parent="#accInscriptions">

      <div class="accordion-body text-white">
        <div class="row g-4 align-items-start">

          <!-- COLONNE GAUCHE -->
          <div class="col-12 col-lg-7">
            <div class="card ues-card-dark shadow-sm border-0 bg-dark bg-opacity-25 text-white ues-adminbox">

              <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-pencil-square" aria-hidden="true"></i>
                  <span class="fw-semibold">' .
_T('ues:acc_edit_file') .
'</span>
                </div>
                <span class="badge rounded-pill text-bg-info">' .
_T('ues:acc_course_2026') .
'</span>
              </div>

              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap mb-3 ues-savebar">
                  <div class="text-white-50">
                    ' .
_T('ues:acc_remember_save') .
'
                  </div>
                  <button type="button" class="btn btn-outline-light ues-save-top">' .
_T('ues:acc_save') .
'</button>
                </div>

                <div class="ues-form-surface p-3 rounded-3 border border-light border-opacity-25">
                  ' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_EDITER_ARTICLE',
	array(($Pile[$SP]['id_article']),($Pile[$SP]['id_rubrique']),(self())),
	array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_art',90,$GLOBALS['spip_lang']))) .
'</div>

              </div>
            </div>
          </div>

          <!-- COLONNE DROITE -->
          <div class="col-12 col-lg-5">

            

            <!-- Informations -->
            <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white">
              <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-person-badge" aria-hidden="true"></i>
                  <span class="fw-semibold">' .
_T('ues:acc_information') .
'</span>
                </div>
              </div>

              <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
                <div class="d-flex align-items-center justify-content-between gap-3">
                  <div>' .
_T('ues:acc_name_label') .
'</div>
                  <div class="text-white text-end fw-semibold">' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
' ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['prenom'])) .
'</div>
                </div>
              </div>

              <!-- Email -->
              <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
                <div class="d-flex align-items-center justify-content-between gap-3">
                  <div>' .
_T('ues:acc_email') .
'</div>

                  <div class="text-white text-end">
                    ' .
retablir_echappements_modeles(interdire_scripts(((($a = (($Pile[0]['email'] ?? null) ? (	'<a class="text-white" href="mailto:' .
	(interdire_scripts(textebrut(($Pile[0]['email'] ?? null)))) .
	'">' .
	(interdire_scripts(textebrut(($Pile[0]['email'] ?? null)))) .
	'</a>'):(	BOUCLE_mail_authtml_13d055254278883be2887873a48d0a73($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
                      '))) OR (is_string($a) AND strlen($a))) ? $a : '—'))) .
'
                  </div>
                </div>
              </div>

              <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
                <div class="d-flex align-items-center justify-content-between gap-3">
                  <div>' .
_T('ues:acc_registration_status') .
'</div>
                  <div class="text-white text-end">
                    ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'insc'] = (interdire_scripts(((($a = $Pile[$SP]['inscription']) OR (is_string($a) AND strlen($a))) ? $a : 'en attente'))))) .
'
                    ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'insc', null) == 'confirmée')) ?' ' :''))))!=='' ?
		($t1 . (	'
                      <span class="badge text-bg-success">' .
	_T('ues:acc_confirmed_lower') .
	'</span>
                    ')) :
		'') .
'
                    ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'insc', null) == 'confirmée')) ?'' :' '))))!=='' ?
		($t1 . (	'
                      <strong class="text-white">' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'insc', null)) .
	'</strong>
                    ')) :
		'') .
'
                  </div>
                </div>

                <div class="border-top border-light border-opacity-25 my-2"></div>

                <div class="d-flex align-items-center justify-content-between gap-3">
                  <div>' .
_T('ues:acc_payment') .
'</div>
                  <div class="text-white text-end">
                    ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'pay'] = (interdire_scripts(((($a = $Pile[$SP]['paiementok']) OR (is_string($a) AND strlen($a))) ? $a : 'en attente'))))) .
'
                    ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'pay', null) == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
                      <span class="badge text-bg-success">' .
	_T('ues:acc_yes') .
	'</span>
                    ')) :
		'') .
'
                    ' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'pay', null) == 'oui')) ?'' :' '))))!=='' ?
		($t1 . (	'
                      <strong class="text-white">' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'pay', null)) .
	'</strong>
                    ')) :
		'') .
'
                  </div>
                </div>
              </div>
            </div>

' .
retablir_echappements_modeles(recuperer_fond( 'inc-checklist-admin' , array('id_article' => ($Pile[$SP]['id_article']) ,
	'statut' => (interdire_scripts($Pile[$SP]['statut'])) ,
	'id_auteur' => (($Pile[0]['id_auteur'] ?? null)) ,
	'with_help' => 'non' ), array('compil'=>array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_art',152,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo')) ?' ' :''))))))!=='' ?
		($t1 . (	'

  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
			($t2 . (	'
    ' .
		retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_ENVOYER_MAIL_UES',
	array(($Pile[$SP]['id_article']),'publie','Envoyer email : formulaire validé','btn-outline-info mt-3'),
	array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_art',57,$GLOBALS['spip_lang']))))) :
			'') .
	'

  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['paiementok'] == 'oui')) ?' ' :'')))))!=='' ?
			($t2 . (	'
    ' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['inscription'] == 'confirmée')) ?' ' :'')))))!=='' ?
				($t3 . (	'
      ' .
			retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_ENVOYER_MAIL_UES',
	array(($Pile[$SP]['id_article']),'ok_paiement','Envoyer email : inscription confirmée','btn-outline-success mt-3'),
	array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_art',60,$GLOBALS['spip_lang']))))) :
				'') .
		'
  ')) :
			'') .
	'

')) :
		'') .
'
       

            
            <!-- Documents -->
            <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
              <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-paperclip" aria-hidden="true"></i>
                  <span class="fw-semibold">' .
_T('ues:acc_documents') .
'</span>
                </div>

                <a class="btn btn-sm btn-warning d-inline-flex align-items-center gap-1 ues-btn-regen"
                   href="' .
retablir_echappements_modeles(interdire_scripts(generer_url_public('article_pdf', (	'id_article=' .
	($Pile[$SP]['id_article']) .
	'&var_mode=recalcul')))) .
'"
                   target="_blank" rel="noopener"
                   data-article-id="' .
retablir_echappements_modeles($Pile[$SP]['id_article']) .
'"
                   data-refresh-url="' .
retablir_echappements_modeles(interdire_scripts(generer_url_public('tableau_inscriptions', (	'id_article=' .
	($Pile[$SP]['id_article']))))) .
'"
                   title="' .
_T('ues:acc_regenerate_pdf_title') .
'">
                  <i class="bi bi-file-earmark-pdf" aria-hidden="true"></i>
                  ' .
_T('ues:acc_regenerate_pdf') .
'
                </a>

                ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'docs_ok', null),true) == '1')) ?' ' :'')))))!=='' ?
		($t1 . (	'
                  <span class="badge rounded-pill ues-status-pill" style="background-color: rgba(25,135,84,.18); border:1px solid rgba(25,135,84,.40);">
                    ' .
	_T('ues:acc_signed') .
	'
                  </span>
                ')) :
		'') .
'
                ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'docs_ok', null),true) == '1')) ?'' :' ')))))!=='' ?
		($t1 . (	'
                  <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">
                    ' .
	_T('ues:acc_todo') .
	'
                  </span>
                ')) :
		'') .
'
              </div>

              ' .
(($t1 = BOUCLE_docshtml_13d055254278883be2887873a48d0a73($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
                ' . $t1 . '
              ') :
		('

              ')) .
'
              <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
                ' .
_T('ues:acc_no_documents') .
'
              </div>
            </div>

            <!-- Statut admin -->
            <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3 ues-admin-statutbox">
              <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-sliders" aria-hidden="true"></i>
                  <span class="fw-semibold">' .
_T('ues:acc_status') .
'</span>
                </div>
                <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">
                  ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['statut'])) .
'
                </span>
              </div>

              <div class="px-3 py-2 border-top border-light border-opacity-25">
                ' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_INSTITUER_OBJET',
	array('article',($Pile[$SP]['id_article']),(self())),
	array('squelettes/inc-ues-accordion-item.html','html_13d055254278883be2887873a48d0a73','_art',199,$GLOBALS['spip_lang']))) .
'</div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art @ squelettes/inc-ues-accordion-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc-ues-accordion-item.html
// Temps de compilation total: 8.227 ms
//

function html_13d055254278883be2887873a48d0a73($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_arthtml_13d055254278883be2887873a48d0a73($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_13d055254278883be2887873a48d0a73', $Cache, $page, 'squelettes/inc-ues-accordion-item.html');
}
