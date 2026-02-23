<?php

/*
 * Squelette : squelettes/tableau_inscriptions.html
 * Date :      Mon, 16 Feb 2026 08:00:49 GMT
 * Compile :   Sun, 22 Feb 2026 23:51:12 GMT
 * Boucles :   _total_conf, _total_pay, _total_audi, _docs_count, _insc
 */ 

function BOUCLE_total_confhtml_e2d9c378beda3accd9e662ad47bd98e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_total_conf';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(articles.id_rubrique,' . $zqv . ')')), ((!$zqv=sql_quote($in1) OR $zqv==="''") ? 0 : ('FIELD(articles.statut,' . $zqv . ')')));
	$command['where'] = 
			array(sql_in('articles.id_rubrique', $in), sql_in('articles.statut', $in1), 
			array('=', 'YEAR(articles.date)', "'2026'"), 
			array('=', 'articles.inscription', "'confirmée'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','_total_conf',256,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_total_conf']['command'] = $command;
	$Numrows['_total_conf']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
        ', $Numrows['_total_conf']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_total_conf @ squelettes/tableau_inscriptions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_total_payhtml_e2d9c378beda3accd9e662ad47bd98e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_total_pay';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(articles.id_rubrique,' . $zqv . ')')), ((!$zqv=sql_quote($in1) OR $zqv==="''") ? 0 : ('FIELD(articles.statut,' . $zqv . ')')));
	$command['where'] = 
			array(sql_in('articles.id_rubrique', $in), sql_in('articles.statut', $in1), 
			array('=', 'YEAR(articles.date)', "'2026'"), 
			array('=', 'articles.paiementok', "'oui'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','_total_pay',273,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_total_pay']['command'] = $command;
	$Numrows['_total_pay']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
        ', $Numrows['_total_pay']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_total_pay @ squelettes/tableau_inscriptions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_total_audihtml_e2d9c378beda3accd9e662ad47bd98e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_total_audi';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(articles.id_rubrique,' . $zqv . ')')), ((!$zqv=sql_quote($in1) OR $zqv==="''") ? 0 : ('FIELD(articles.statut,' . $zqv . ')')));
	$command['where'] = 
			array(sql_in('articles.id_rubrique', $in), sql_in('articles.statut', $in1), 
			array('=', 'YEAR(articles.date)', "'2026'"), 
			array('=', 'articles.auditeur', "'oui'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','_total_audi',290,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_total_audi']['command'] = $command;
	$Numrows['_total_audi']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
        ', $Numrows['_total_audi']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_total_audi @ squelettes/tableau_inscriptions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_docs_counthtml_e2d9c378beda3accd9e662ad47bd98e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'document';
	$in[]= 'image';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_docs_count';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(documents.mode,' . $zqv . ')')));
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
		array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','_docs_count',354,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_docs_count']['command'] = $command;
	$Numrows['_docs_count']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
', $Numrows['_docs_count']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_docs_count @ squelettes/tableau_inscriptions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_inschtml_e2d9c378beda3accd9e662ad47bd98e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_insc';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.date",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('articles.id_rubrique', $in), sql_in('articles.statut', $in1), 
			array('=', 'YEAR(articles.date)', "'2026'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','_insc',351,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'docs_ok'] = '0')) .
'
' .
(($t1 = BOUCLE_docs_counthtml_e2d9c378beda3accd9e662ad47bd98e4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
' . $t1 . (	'
  ' .
		(($t3 = strval(retablir_echappements_modeles((((($Numrows['_docs_count']['total'] ?? 0) >= '2')) ?' ' :''))))!=='' ?
				($t3 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'docs_ok'] = '1'))) :
				'') .
		'
')) :
		('
')) .
'

            ' .
retablir_echappements_modeles(recuperer_fond( 'inc-ues-accordion-item' , array('id_article' => ($Pile[$SP]['id_article']) ,
	'docs_ok' => (table_valeur($Pile["vars"]??[], (string)'docs_ok', null)) ), array('compil'=>array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','_insc',355,$GLOBALS['spip_lang'])), _request('connect') ?? '')));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_insc @ squelettes/tableau_inscriptions.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/tableau_inscriptions.html
// Temps de compilation total: 8.914 ms
//

function html_e2d9c378beda3accd9e662ad47bd98e4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
'<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>' .
retablir_echappements_modeles(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
' — Tableau inscriptions</title>

  <link href="assets/img/favicon.ico" rel="icon"/>
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"/>
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet"/>

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>

  <link href="assets/css/main.css" rel="stylesheet"/>
  <link href="assets/css/hero-video.css" rel="stylesheet"/>
  <link href="assets/css/univsax.css" rel="stylesheet"/>
  <link href="assets/css/ues.css" rel="stylesheet"/>
  <link href="assets/css/menu-override.css" rel="stylesheet"/>

  ' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->')) .
'

  <style>
    body.tablo{ background: #2b445c !important; }

    /* Pastilles tableau */
    .ues-pill{
      display:inline-flex; align-items:center; gap:.45rem;
      padding:.2rem .55rem; border-radius:999px;
      border:1px solid rgba(255,255,255,.22);
      background: rgba(255,255,255,.08);
      color:#fff; font-size:.78rem; white-space:nowrap;
    }
    .ues-pill--ok{ background: #2ecc71; border-color: rgba(25,135,84,.55); }
    .ues-pill--todo{ background: rgba(255,255,255,.07); border-color: rgba(255,255,255,.20); }
    .ues-dot{ width:10px; height:10px; border-radius:50%; display:inline-block; background:#fff; opacity:.85; }
    .ues-dot--ok{ background:#20c997; }
    .ues-dot--todo{ background:#fff; opacity:.7; }

    /* Accordéon */
    #accInscriptions .accordion-item{ background: transparent; border:0; }
    #accInscriptions .accordion-body{ padding: 14px 0 6px; }

    #accInscriptions .accordion-button{
      background: rgba(0,0,0,.25) !important;
      color: #fff !important;
      box-shadow: none !important;
      border: 1px solid rgba(255,255,255,.14) !important;
      border-radius: 14px !important;
    }
    #accInscriptions .accordion-button::after{ filter: invert(1); opacity: .9; margin: 0 0 0 19px; }
    #accInscriptions .accordion-button:focus{
      border-color: rgba(255,255,255,.25) !important;
      box-shadow: 0 0 0 .25rem rgba(134,182,255,.15) !important;
    }

    /* Inputs dark */
    .ues-card-dark input,
    .ues-card-dark select,
    .ues-card-dark textarea,
    .ues-card-dark .form-control{
      background: rgba(255,255,255,.08) !important;
      border-color: rgba(255,255,255,.18) !important;
      color: #fff !important;
    }
    .ues-card-dark .form-control::placeholder{ color: rgba(255,255,255,.55) !important; }
    .ues-card-dark .form-check-input{
      background-color: rgba(255,255,255,.08) !important;
      border-color: rgba(255,255,255,.25) !important;
    }

    /* =========================================================
       TABLEAU (admin) — Formulaire comme rubrique-5
       Scope: body.tablo + .ues-adminbox
       ========================================================= */
    body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer,
    body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie{
      margin-bottom: 12px;
    }
    body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer > label,
    body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie > label{
      display: block;
      margin-bottom: .35rem;
    }
    @media (min-width: 992px){
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: .65rem 1rem;
      }
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer > label,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie > label{
        flex: 0 0 34%;
        max-width: 34%;
        margin: 0;
        padding-top: .2rem;
        color: rgba(255,255,255,.90);
        font-weight: 700;
      }
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer > input,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer > select,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer > textarea,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie > input,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie > select,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie > textarea{
        flex: 1 1 0;
        min-width: 260px;
        max-width: 560px;
        margin: 0;
      }
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .editer > .input,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie > .input,
      body.tablo .ues-adminbox .ues-form-surface .formulaire_spip .saisie .saisie_input{
        flex: 1 1 0;
        min-width: 260px;
        max-width: 560px;
      }
    }
    body.tablo .ues-adminbox .ues-form-surface .formulaire_spip ul.choix{
      list-style: none; padding-left: 0; margin: 0;
    }
    body.tablo .ues-adminbox .ues-form-surface .formulaire_spip ul.choix > li{
      display: inline-flex; align-items: center;
      gap: .5rem; margin: .25rem .75rem .25rem 0;
    }

    /* =========================================================
       TABLEAU — Statut admin (instituer_objet)
       Scope: body.tablo
       ========================================================= */
    body.tablo .ues-admin-statutbox .instituer_objet{ background: transparent; }

    body.tablo .ues-admin-statutbox .instituer_objet .statut_actuel{
      display:flex;
      align-items:center;
      justify-content: space-between;
      gap: 10px;
      padding: 10px 12px;
      border-radius: 12px;
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.14);
    }
    body.tablo .ues-admin-statutbox .instituer_objet .statut_actuel .editer-label{
      margin:0; font-weight: 800; color:#fff;
    }
    body.tablo .ues-admin-statutbox .instituer_objet .statut_actuel .btn_modifier{
      display:inline-flex !important;
      align-items:center;
      border-radius: 999px;
      padding: .25rem .7rem;
      border: 1px solid rgba(255,255,255,.22);
      background: rgba(255,255,255,.08);
      color:#fff;
      cursor: pointer;
    }

    /* Statut fermé par défaut */
    body.tablo .ues-admin-statutbox .instituer_objet .formulaire_instituer_objet{ display:none; }
    body.tablo .ues-admin-statutbox .instituer_objet.is-open .formulaire_instituer_objet{ display:block; }

    /* Boutons Annuler/Changer */
    body.tablo .ues-admin-statutbox .instituer_objet .boutons .groupe-btns{
      display:flex;
      justify-content:flex-end;
      gap: 10px;
    }
    body.tablo .ues-admin-statutbox .instituer_objet .boutons button[name="annuler"],
    body.tablo .ues-admin-statutbox .instituer_objet .boutons button[name="changer"]{
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: .25rem .5rem;
      font-size: .875rem;
      line-height: 1.5;
      color: #000;
      background-color: var(--bs-warning);
      border: 1px solid var(--bs-warning);
      border-radius: .2rem;
      font-weight: 600;
      cursor: pointer;
    }
  </style>
</head>

<body class="index-page ues-page rub tablo">
  ' .
retablir_echappements_modeles(recuperer_fond( 'inc-ues-header' , array(), array('compil'=>array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','',191,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
'<main class="main ues-main">
    <div class="container-xxl py-3">

      ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo')) ?'' :' '))))))!=='' ?
		($t1 . (	'
  <div class="card ues-card-dark shadow-sm border-0 bg-dark bg-opacity-25 text-white mb-3">
    <div class="card-header bg-dark text-white">
      Accès administrateur requis
    </div>

    <div class="card-body">
      <div class="row g-4 align-items-start">
        <div class="col-12 col-lg-8">
          <div class="alert alert-warning mb-3">
            Accès interdit. Cette page est réservée aux administrateurs.
          </div>

          ' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_LOGIN',
	array((self())),
	array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','',203,$GLOBALS['spip_lang']))) .
	'<div class="text-white-50 small mt-3">
            Après connexion, vous serez redirigé vers cette page.
          </div>
        </div>

        <div class="col-12 col-lg-4 text-center">
          <img src="assets/img/login-side.jpg" alt="" class="img-fluid rounded-4" style="max-width:220px;">
        </div>
      </div>
    </div>
  </div>
')) :
		'') .
'


' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo')) ?' ' :''))))))!=='' ?
		($t1 . (	'

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
          <div class="text-white-50 small">
            <i class="bi bi-person-circle me-1" aria-hidden="true"></i>
            <strong class="text-white">Bonjour</strong>
            ' .
	retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'nom', null))))) .
	' ' .
	retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'prenom', null))))) .
	'
          </div>

          <div class="d-flex align-items-center ms-auto">
            <div id="uesDate" class="text-white-50 small"></div>

            <a href="' .
	retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
	'spip.php?action=export_articles_xlsx_download" rel="nofollow" class="btn btn-sm btn-outline-light">
	Télécharger l\'export Excel
</a>
<a class="btn btn-sm btn-outline-light" href="' .
	retablir_echappements_modeles(executer_balise_dynamique('URL_LOGOUT',
	array((self())),
	array('squelettes/tableau_inscriptions.html','html_e2d9c378beda3accd9e662ad47bd98e4','',193,$GLOBALS['spip_lang']))) .
	'">
              <i class="bi bi-box-arrow-right me-1" aria-hidden="true"></i>
              Se déconnecter
            </a>
          </div>
        </div>

        <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-3">
  <h1 class="h3 text-white m-0">TABLEAU INSCRIPTIONS UES 2026</h1>

  <div class="ues-title-metrics">

    <div class="ues-metric">
      <span class="ues-metric-label">Etudiants confirmés :</span>
      <span class="ues-metric-value">
        ' .
	(($t2 = BOUCLE_total_confhtml_e2d9c378beda3accd9e662ad47bd98e4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('
        ' . $t2 . (	'
          ' .
			retablir_echappements_modeles(($Numrows['_total_conf']['total'] ?? 0)) .
			'
        ')) :
			('
        ')) .
	'
      </span>
    </div>

    <div class="ues-metric">
      <span class="ues-metric-label">Paiement :</span>
      <span class="ues-metric-value">
        ' .
	(($t2 = BOUCLE_total_payhtml_e2d9c378beda3accd9e662ad47bd98e4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('
        ' . $t2 . (	'
          ' .
			retablir_echappements_modeles(($Numrows['_total_pay']['total'] ?? 0)) .
			'
        ')) :
			('
        ')) .
	'
      </span>
    </div>

    <div class="ues-metric">
      <span class="ues-metric-label">Auditeur libre :</span>
      <span class="ues-metric-value">
        ' .
	(($t2 = BOUCLE_total_audihtml_e2d9c378beda3accd9e662ad47bd98e4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('
        ' . $t2 . (	'
          ' .
			retablir_echappements_modeles(($Numrows['_total_audi']['total'] ?? 0)) .
			'
        ')) :
			('
        ')) .
	'
      </span>
    </div>

  </div>
</div>

        <div class="card ues-card-dark shadow-sm border-0 bg-dark bg-opacity-25 text-white mb-3">
          <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between">
            <span class="fw-semibold">
              <i class="bi bi-funnel me-2" aria-hidden="true"></i> Filtres
            </span>
            <span class="badge rounded-pill text-bg-info">Admin</span>
          </div>

          <div class="card-body">
            <div class="row g-2 align-items-center">
              <div class="col-12 col-lg-6">
                <label class="form-label text-white-50 small mb-1" for="uesFilterText">Rechercher (Nom / Prénom)</label>
                <input id="uesFilterText" type="search" class="form-control" placeholder="Ex : Dupont Jean">
              </div>

              <div class="col-12 col-lg-6">
                <div class="d-flex flex-wrap gap-3 align-items-center mt-4 mt-lg-0">
                  <label class="form-check d-flex align-items-center gap-2 m-0">
                    <input id="uesFilterPriority" class="form-check-input" type="checkbox">
                    <span class="form-check-label text-white">Validé/Confirmé/Payé </span>
                  </label>

                  <label class="form-check d-flex align-items-center gap-2 m-0">
  <input id="uesFilterAuditeur" class="form-check-input" type="checkbox">
  <span class="form-check-label text-white">Auditeur libre</span>
</label>
                  <!-- AJOUTER dans la zone Filtres, à côté des autres checkboxes -->
<label class="form-check d-flex align-items-center gap-2 m-0">
  <input id="uesFilterPayPending" class="form-check-input" type="checkbox">
  <span class="form-check-label text-white">Paiement en attente</span>
</label>

                  <button id="uesFilterReset" type="button" class="btn btn-outline-light btn-sm">
                    Réinitialiser
                  </button>

                  <div class="text-white-50 small ms-auto" id="uesFilterCount"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion" id="accInscriptions">
          ' .
	(($t2 = BOUCLE_inschtml_e2d9c378beda3accd9e662ad47bd98e4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('
          ' . $t2 . '
          ') :
			('

          <div class="alert alert-info">Aucune inscription 2026 trouvée.</div>
          ')) .
	'
        </div>

      ')) :
		'') .
'<!-- /admin -->

    </div>
  </main>

  ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['insert_footer'] ?? null))) .
'
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Statut admin : boutons + toggle -->
  <script>
  (function(){
    function patchStatutButtons(){
      document
        .querySelectorAll(\'body.tablo .ues-admin-statutbox .instituer_objet .boutons .groupe-btns > *\')
        .forEach((el) => {
          const name = (el.getAttribute(\'name\') || \'\').toLowerCase();
          if (!name) return;
          el.classList.add(\'btn\',\'btn-warning\',\'btn-sm\');
          if (name === \'annuler\') el.setAttribute(\'type\', \'button\');
        });
    }

    function initAdminStatut(){
      document.querySelectorAll(\'body.tablo .ues-admin-statutbox .instituer_objet\').forEach((wrap) => {
        if (wrap.dataset.uesStatutInit === \'1\') return;
        wrap.dataset.uesStatutInit = \'1\';

        const statutActuel = wrap.querySelector(\'.statut_actuel\');
        const form = wrap.querySelector(\'.formulaire_instituer_objet\');
        if (!statutActuel || !form) return;

        // supprimer doublons DOM
        const btns = statutActuel.querySelectorAll(\'.btn_modifier\');
        btns.forEach((b, i) => { if (i > 0) b.remove(); });

        let btn = statutActuel.querySelector(\'.btn_modifier\');
        if (!btn){
          btn = document.createElement(\'button\');
          btn.type = \'button\';
          btn.className = \'btn btn-warning btn-sm btn_modifier\';
          btn.textContent = \'Changer\';
          statutActuel.appendChild(btn);
        }

        wrap.classList.remove(\'is-open\');
        btn.setAttribute(\'aria-expanded\', \'false\');
        btn.textContent = \'Changer\';

        btn.addEventListener(\'click\', (e) => {
          e.preventDefault();
          e.stopPropagation();
          const open = !wrap.classList.contains(\'is-open\');
          wrap.classList.toggle(\'is-open\', open);
          btn.setAttribute(\'aria-expanded\', open ? \'true\' : \'false\');
          btn.textContent = open ? \'Fermer\' : \'Changer\';
        }, true);

        const cancel = wrap.querySelector(\'button[name="annuler"], input[name="annuler"]\');
        if (cancel){
          cancel.addEventListener(\'click\', (e) => {
            e.stopPropagation();
            setTimeout(() => {
              wrap.classList.remove(\'is-open\');
              btn.setAttribute(\'aria-expanded\', \'false\');
              btn.textContent = \'Changer\';
            }, 0);
          }, true);
        }
      });
    }

    function initAll(){
      patchStatutButtons();
      initAdminStatut();
    }

    document.addEventListener(\'DOMContentLoaded\', initAll);
    if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(initAll);
  })();
  </script>

  <!-- ENREGISTRER en haut : soumission réelle du form -->
  <script>
  (function(){
    function initSaveTopButtons(){
      document.querySelectorAll(\'body.tablo .ues-adminbox\').forEach((box) => {
        if (box.dataset.uesSaveTopInit === \'1\') return;
        box.dataset.uesSaveTopInit = \'1\';

        const topBtn = box.querySelector(\'.ues-save-top\');
        if (!topBtn) return;

        const form = box.querySelector(\'form\');
        if (!form) return;

        topBtn.addEventListener(\'click\', (e) => {
          e.preventDefault();
          if (typeof form.requestSubmit === \'function\') form.requestSubmit();
          else form.submit();
        });
      });
    }

    document.addEventListener(\'DOMContentLoaded\', initSaveTopButtons);
    if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(initSaveTopButtons);
  })();
  </script>

  <!-- AUTO-OPEN accordéon sur id_article (après save) -->
  <script>
  (function(){
    function getWantedId(){
      try {
        const u = new URL(window.location.href);
        return u.searchParams.get(\'id_article\') || \'\';
      } catch(e){
        return \'\';
      }
    }

    function openAccordion(id){
      if (!id) return false;

      const collapse = document.getElementById(\'c-insc-\' + id);
      if (!collapse) return false;

      // déjà ouvert => ok
      if (collapse.classList.contains(\'show\')) return true;

      if (window.bootstrap && bootstrap.Collapse){
        bootstrap.Collapse.getOrCreateInstance(collapse, { toggle: false }).show();
      } else {
        collapse.classList.add(\'show\');
      }

      const btn = document.querySelector(\'[data-bs-target="#c-insc-\' + id + \'"]\');
      if (btn){
        btn.classList.remove(\'collapsed\');
        btn.setAttribute(\'aria-expanded\', \'true\');
      }

      setTimeout(() => {
        collapse.scrollIntoView({ behavior: \'smooth\', block: \'start\' });
      }, 120);

      return true;
    }

    function initAutoOpen(){
      // une seule fois par chargement, pour ne pas empêcher la fermeture au clic
      if (window.__uesAutoOpenDone) return;
      window.__uesAutoOpenDone = true;

      const id = getWantedId();
      if (!id) return;

      // réessais courts: laisse le temps à tes scripts/tri de passer
      let tries = 0;
      const maxTries = 10;
      const timer = setInterval(() => {
        tries++;
        if (openAccordion(id) || tries >= maxTries) clearInterval(timer);
      }, 100);
    }

    document.addEventListener(\'DOMContentLoaded\', () => setTimeout(initAutoOpen, 0));
    if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(() => setTimeout(initAutoOpen, 0));
  })();
  </script>

<!-- Script: ouvre le PDF dans un nouvel onglet, puis recharge la page et rouvre l\'article -->
<script>
(function(){
  function initRegenBtn(){
    document.querySelectorAll(\'.ues-btn-regen\').forEach((btn) => {
      if (btn.dataset.uesInit === \'1\') return;
      btn.dataset.uesInit = \'1\';

      btn.addEventListener(\'click\', (e) => {
        e.preventDefault();

        const pdfUrl = btn.getAttribute(\'href\');
        const id = btn.getAttribute(\'data-article-id\') || \'\';
        // URL de rafraîchissement fournie par le template (avec id_article)
        let refreshUrl = btn.getAttribute(\'data-refresh-url\') || \'\';

        // Ouvrir le PDF dans un nouvel onglet
        if (pdfUrl) window.open(pdfUrl, \'_blank\', \'noopener\');

        // Construire l\'URL de rafraîchissement si absente
        if (!refreshUrl) {
          try {
            const u = new URL(window.location.href);
            if (id) u.searchParams.set(\'id_article\', id);
            refreshUrl = u.toString();
          } catch(e) {
            refreshUrl = window.location.href;
          }
        }

        // Attendre un peu que le PDF soit généré/attaché, puis recharger
        setTimeout(() => {
          window.location.replace(refreshUrl);
        }, 2000);
      }, true);
    });
  }

  document.addEventListener(\'DOMContentLoaded\', initRegenBtn);
  if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(initRegenBtn);
})();
</script>

<script>
(function(){
  function initFilters(){
    const acc = document.getElementById(\'accInscriptions\');
    if (!acc) return;

    // 1. Récupération des 4 éléments de filtre + Reset + Compteur
    const inputText    = document.getElementById(\'uesFilterText\');
    const cbPriority   = document.getElementById(\'uesFilterPriority\');
    const cbAuditeur   = document.getElementById(\'uesFilterAuditeur\');
    const cbPayPending = document.getElementById(\'uesFilterPayPending\');
    const btnReset     = document.getElementById(\'uesFilterReset\');
    const count        = document.getElementById(\'uesFilterCount\');

    // Sécurité : si un seul manque (ex: nom d\'ID modifié), on arrête pour éviter le crash
    if (!inputText || !cbPriority || !cbAuditeur || !cbPayPending || !btnReset || !count) return;

    function getItems(){
      return Array.from(acc.querySelectorAll(\':scope > .accordion-item\'));
    }

    function norm(s){
      return (s || \'\').toString().trim().toLowerCase();
    }

    function apply(){
      // Valeurs actuelles des filtres
      const q = norm(inputText.value);
      const wantPriority   = cbPriority.checked;
      const wantAuditeur   = cbAuditeur.checked;
      const wantPayPending = cbPayPending.checked;

      const items = getItems();
      let shown = 0;

      items.forEach((item) => {
        // Lecture des données HTML (data-...)
        const name     = norm(item.getAttribute(\'data-name\'));
        const prio     = item.getAttribute(\'data-prio\') || \'1\';
        const auditeur = item.getAttribute(\'data-auditeur\') || \'0\';
        const payok    = item.getAttribute(\'data-payok\') || \'0\';

        // Tests
        const okText       = !q || name.includes(q);
        const okPrio       = !wantPriority || prio === \'2\';       // Priorité = \'2\'
        const okAuditeur   = !wantAuditeur || auditeur === \'1\';   // Auditeur = \'1\'
        const okPayPending = !wantPayPending || payok !== \'1\';    // Paiement en attente = Pas payé (\'1\')

        // Résultat final
        const visible = okText && okPrio && okAuditeur && okPayPending;
        
        item.classList.toggle(\'d-none\', !visible);
        if (visible) shown++;
      });

      // Mise à jour du texte compteur
      count.textContent = shown + \' résultat\' + (shown > 1 ? \'s\' : \'\');
    }

    // Bouton Reset
    btnReset.addEventListener(\'click\', () => {
      inputText.value = \'\';
      cbPriority.checked = false;
      cbAuditeur.checked = false;
      cbPayPending.checked = false;
      apply();
      inputText.focus();
    });

    // Écouteurs d\'événements
    inputText.addEventListener(\'input\', apply);
    cbPriority.addEventListener(\'change\', apply);
    cbAuditeur.addEventListener(\'change\', apply);
    cbPayPending.addEventListener(\'change\', apply);

    // Premier lancement
    apply();
  }

  document.addEventListener(\'DOMContentLoaded\', initFilters);
  if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(initFilters);
})();
</script>
</body>
</html>');

	return analyse_resultat_skel('html_e2d9c378beda3accd9e662ad47bd98e4', $Cache, $page, 'squelettes/tableau_inscriptions.html');
}
