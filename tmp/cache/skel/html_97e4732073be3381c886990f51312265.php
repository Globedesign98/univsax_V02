<?php

/*
 * Squelette : squelettes/sommaire.html
 * Date :      Thu, 29 Jan 2026 23:12:04 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   _nav, _serv3
 */ 

function BOUCLE_navhtml_97e4732073be3381c886990f51312265(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_nav';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"CASE ( 0+rubriques.titre ) WHEN 0 THEN 1 ELSE 0 END AS sinum",
		"rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array('sinum, num', 'rubriques.titre');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', 0));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_97e4732073be3381c886990f51312265','_nav',832,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_nav']['compteur_boucle'] = 0;
	$Numrows['_nav']['command'] = $command;
	$Numrows['_nav']['total'] = @intval($iter->count());
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_nav']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                      <li class="nav-item' .
(($t1 = strval(retablir_echappements_modeles((calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? 'on' : ''))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles((((($Numrows['_nav']['compteur_boucle'] ?? 0) == '1')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'first') :
		'') .
(($t1 = strval(retablir_echappements_modeles((((($Numrows['_nav']['compteur_boucle'] ?? 0) == (($Numrows['_nav']['total'] ?? 0)))) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'last') :
		'') .
'">
                        <a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true)))) .
'">' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</a>
                      </li>
                    ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nav @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_serv3html_97e4732073be3381c886990f51312265(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_serv3';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "2"));
		$command['join'] = array();
		$command['limit'] = '0,10';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_97e4732073be3381c886990f51312265','_serv3',847,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    <li class="puce">
                      <a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_article'], 'article', '', '', true)))) .
'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16" aria-hidden="true">
                          <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
                        </svg>
                        ' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'
                      </a>
                    </li>
                  ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_serv3 @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sommaire.html
// Temps de compilation total: 11.162 ms
//

function html_97e4732073be3381c886990f51312265($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>' .
retablir_echappements_modeles(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
' — ' .
retablir_echappements_modeles(interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
<meta content="' .
retablir_echappements_modeles(interdire_scripts(textebrut(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0])))) .
'" name="description"/>
<meta content="saxophone, université, gap, musique, stage, france" name="keywords"/>
<link href="assets/img/favicon.png" rel="icon"/>
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet"/>
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
<link href="assets/vendor/aos/aos.css" rel="stylesheet"/>
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"/>
<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"/>
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>
<link href="assets/css/main.css" rel="stylesheet"/>
<link href="assets/css/hero-video.css" rel="stylesheet"/>
<link href="assets/css/univsax.css" rel="stylesheet"/>
<link href="assets/css/ues.css" rel="stylesheet"/>
<link href="assets/css/menu-override.css" rel="stylesheet"/>

  ' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->')) .
'
<style id="ues-scroll-header-patch">
/* ============================
   UES — Logo dans la topbar au scroll + barre noire menu
   ============================ */
:root{
  --ues-logo-big: 140px;
  --ues-logo-small: 80px;
}

/* Logo (navbar) : grand en haut de page */
#header .ues-nav .ues-brand img{
  height: var(--ues-logo-big);
  width: auto;
  transition: height .35s ease;
}

/* Logo de la topbar (masqué en haut de page) */
#header .ues-topbar-brand{
  display: none;
  align-items: center;
  gap: 10px;
  margin-right: 12px;
  will-change: transform, opacity;
}
#header .ues-topbar-brand img{
  height: var(--ues-logo-small);
  width: auto;
  display: block;
}

/* Au scroll : on affiche le logo dans la topbar */
#header.ues-header--compact .ues-topbar-brand{
  display: flex;
}

/* Au scroll : on cache le logo de la navbar (avec animation) */
#header .ues-nav .ues-brand{
  will-change: transform, opacity;
}
#header.ues-header--compact .ues-nav .ues-brand{
  opacity: 0;
  transform: translateY(-90px);
  pointer-events: none;
}

/* Animation : logo navbar qui sort par le haut */
#header .ues-nav .ues-brand.ues-brand--out{
  animation: ues-logo-out .45s cubic-bezier(.22,.85,.2,1) both;
}
@keyframes ues-logo-out{
  0%   { transform: translateY(0);     opacity: 1; }
  100% { transform: translateY(-90px); opacity: 0; }
}

/* Animation : logo topbar qui entre */
#header .ues-topbar-brand.ues-brand--in{
  animation: ues-logo-in .55s cubic-bezier(.22,.85,.2,1) both;
}
@keyframes ues-logo-in{
  0%   { transform: translateY(-35px); opacity: 0; }
  100% { transform: translateY(0);     opacity: 1; }
}

/* Menu : barre noire dès le scroll */
#header.ues-header--compact .ues-nav{
  background: #000;
  box-shadow: 0 10px 28px rgba(0,0,0,.45);
}

/* (optionnel) Navbar un peu plus compacte quand le logo est petit */
#header.ues-header--compact .navbar{
  padding-top: .2rem;
  padding-bottom: .2rem;
}

/* Mobile */
@media (max-width: 991px){
  :root{
    --ues-logo-big: 84px;
    --ues-logo-small: 80px;
  }
}
</style>
</head>
<body class="index-page ues-page">
<header class="header fixed-top ues-header" id="header">
<div class="ues-topbar">
<div class="container-xxl ues-topbar-inner">
<div class="ues-topbar-title">Université Européenne de Saxophone - Edition 2026</div>
<div class="ues-topbar-actions">
<a href="https://www.facebook.com/univsax/" title="Facebook UES" target="_blank" class="ues-social" rel="noopener" aria-label="Facebook">
<i class="bi bi-facebook"></i>
</a>
<div aria-label="Langue" class="ues-lang-pill" role="group">
<a class="ues-lang-pill-btn is-active" href="#">FR</a>
<a class="ues-lang-pill-btn" href="#">ENG</a>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-xl ues-nav">
<div class="container-xxl ues-nav-inner">
<a aria-label="Université Européenne de Saxophone" class="navbar-brand ues-brand" href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'">
<img alt="Université Européenne de Saxophone" src="assets/img/ues/logo_ues.png"/>
</a>
<button aria-controls="uesNav" aria-expanded="false" aria-label="Ouvrir le menu" class="navbar-toggler ues-toggler" data-bs-target="#uesNav" data-bs-toggle="collapse" type="button">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="uesNav">
<ul class="navbar-nav ms-auto ues-menu">
<li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
<li class="nav-item"><a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="0" class="nav-link">Présentation</a></li>
<li class="nav-item"><a class="nav-link" href="#!">Inscriptions 2026</a></li>
<li class="nav-item"><a class="nav-link" href="#part">Partenaires</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
</ul>
</div>
</div>
</nav>
</header>
<main class="main ues-main">
<section aria-label="Accueil" class="hero section ues-hero" id="hero">
<video autoplay="" class="ues-hero-video" loop="" muted="" playsinline="">
<source src="assets/video/votre_video.mp4" type="video/mp4"/>
        Votre navigateur ne supporte pas la lecture de vidéo.
      </video>
<div aria-hidden="true" class="ues-hero-overlay"></div>
<div class="container ues-hero-container ues-hero-content">
<div class="row justify-content-center">
<div class="col-12 col-xxl-10">
<div class="d-flex justify-content-end ues-cta-wrap">
<a class="ues-cta" href="#">Inscriptions 2026 : <strong>OUVERTE</strong></a>
</div>
<div class="ues-panel">
<div class="row g-4 align-items-start">
<div class="col-lg-6">
<h1 class="roboto"><span class="txt_yellow txt_27">B</span>ienvenue à l\'Université Européenne de Saxophone</h1>
<div class="ues-panel-text">
<p>Depuis sa création, l\'Université Européenne de Saxophone a contribué à promouvoir la pratique du saxophone au plus haut niveau.</p>
<p>Le Directeur Artistique Monsieur Claude DELANGLE et son équipe pédagogique constituée des plus renommés pédagogues français mais aussi de grandes personnalités du saxophone, ont permis d\'assurer la libre circulation des compétences et des connaissances sur le plan européen et international.</p>
<p class="mb-0">L\'Université, en collaboration avec la ville de GAP et le concours des sociétés <strong><a class="a_jaune" href="partenaires.php">VANDOREN</a></strong> et <strong><a class="a_jaune" href="partenaires.php">SELMER</a></strong>, vous réserve une programmation inédite. Pendant toute la période du stage, du <strong class="txt_yellow">lundi 14 juillet au vendredi 25 juillet 2025</strong>, vous pourrez entendre lors des différents concerts, les étudiants ainsi que leurs professeurs.<br/></p>
</div>
<ul class="ues-quicklinks">
  <li>
    <a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="0">
      <i class="bi bi-wechat ues-qi"></i> Date et présentation de la 37ème édition
    </a>
  </li>

  <li>
    <a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="1">
      <i class="bi bi-apple-music ues-qi"></i> Enseignements
    </a>
  </li>

  <li>
    <a href="#ues-slides">
      <i class="bi bi-mic-fill ues-qi"></i> Les concerts
    </a>
  </li>
</ul>
</div>
<div class="col-lg-6">
<img alt="Affiche 2026 — European University of Saxophone" class="ues-poster img-fluid" src="assets/img/ues/affiche-2026.jpg"/>
</div>
</div>
</div><!-- /panel -->
</div>
</div>
<div   id="part"></div>
</div>

</section>
<!-- Ajoutez ici d\'autres sections dynamiques SPIP si besoin -->
<!-- Bandeau logos (après #hero) -->
<div aria-label="Logos partenaires" class="ues-logo-strip-wrap">
<p class="ues-logo-strip__title">Avec la participation de :</p>
<section class="ues-logo-strip" id="logo-strip">
<div class="ues-logo-strip__container">
<div class="ues-logo-strip__row">
<img alt="Henri SELMER Paris" class="ues-logo ues-logo--selmer" loading="lazy" src="assets/img/ues/Henri_Selmer_Paris_logo.svg"/>
<img alt="Vandoren" class="ues-logo ues-logo--vandoren" loading="lazy" src="assets/img/ues/vandoren.svg"/>
<img alt="Hautes-Alpes — le département" class="ues-logo ues-logo--hautes-alpes" loading="lazy" src="assets/img/ues/Logo_Hautes_Alpes.svg"/>
<img alt="Ville de Gap" class="ues-logo ues-logo--gap" loading="lazy" src="assets/img/ues/Logo_ville_de_Gap.svg"/>
</div>
</div>
</section>
</div>
<section class="ues-slides py-3" id="ues-slides">
<div class="container-xxl">
<div class="carousel slide" data-bs-ride="false" data-bs-touch="true" id="uesCarousel">
<div class="carousel-inner">
<!-- SLIDE 1 (0) : Présentation -->
<div class="carousel-item active">
<div class="row g-4 align-items-start">
<div class="col-lg-7">
<h3 class="mb-3 ues-slide-title"><i class="bi bi-wechat ues-qi"></i> Présentation</h3>
<p>L\'Université Européenne de Saxophone se déroule sur 12 jours complets, dans la deuxième partie du mois de juillet.<br/><br/>
Lors de leur arrivée à Gap, les 54 étudiants inscrits sont accueillis dans les locaux du foyer des jeunes travailleurs (voir schéma) par l\'ensemble du personnel : organisateurs, professeurs et pianistes, représentants locaux, etc.<br/><br/>
Un cocktail de bienvenue leur permet de se rencontrer, de faire connaissance avec les autres étudiants, et de s\'entretenir avec les professeurs et les organisateurs. Ces derniers abordent ensuite avec eux l\'ensemble des détails pratiques (planning du stage, déroulement des journées, enseignement, programme des concerts, etc.). Les étudiants sont accompagnés par une personne qui les encadre durant la totalité de leur stage. Elle est leur référent direct en cas de question ou de problème, et dort également au foyer afin de pallier à tout problème qui pourrait se dérouler durant la nuit. </p>
</div>
<div class="col-lg-5">
<div class="ues-video-box d-flex align-items-center justify-content-center">
                Clip video
              </div>
</div>
</div>
<div class="ues-slide-nav d-flex gap-2 flex-wrap">
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="0" data-bs-target="#uesCarousel" type="button">Présentation</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="1" data-bs-target="#uesCarousel" type="button">Enseignement</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="2" data-bs-target="#uesCarousel" type="button">Historique</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="3" data-bs-target="#uesCarousel" type="button">Déroulement d\'une journée à l\'UES</button>
</div>
</div>
<!-- SLIDE 2 (1) : Enseignement -->
<div class="carousel-item">
<div class="row g-4 align-items-start">
<div class="col-lg-7">
<h3 class="mb-3 ues-slide-title"><i class="bi bi-apple-music ues-qi"></i> Enseignement</h3>
<p>

              Depuis plusieurs années, l\'équipe pédagogique de l\'Université Européenne de   Saxophone de Gap se réjouit d\'accueillir une cinquantaine d\'étudiants dont le   niveau d\'ensemble est plutôt homogène. Cette réalité très appréciable permet aux   professeurs présents de faire évoluer leurs techniques d\'enseignement, vers   davantage de polyvalence.<br/>
<br/>

              Les cours individuels restent naturellement le   noyau de cet enseignement, et permettent à tous les étudiants de côtoyer chacun   des professeurs, mais ils sont à présent accompagnés de nombreuses autres   activités. Les stagiaires peuvent ainsi apprécier les membres de l\'équipe en   tant que professeurs, mais aussi en tant qu\'artistes. Outre le perfectionnement   instrumental à proprement parler, les activités qui sont proposées aux   stagiaires sont les suivantes : <br/>
<br/>
<ul class="ues-featurelist">
  <li>Possibilité pour chacun de répéter individuellement avec les deux pianistes (Fumie Ito et Cyrille Lehn)</li>
  <li>Master classe</li>
  <li>Ensemble de saxophones</li>
  <li>Préparation au Concours</li>
  <li>Cours de pédagogie</li>
  <li>Préparation à des concerts</li>
</ul>
<br/>
</p>
</div>
<div class="col-lg-5">
<div class="ues-enseignement-box h-100">
<p class="mb-2">
      Tous les étudiants devront avoir préparé un programme de <strong>30 minutes minimum</strong>
      avant le début de l\'Université.
    </p>
<p class="mb-4">
      Nous vous rappelons que l\'usage des <strong>photocopies</strong> pour les partitions est
      <strong>strictement interdit</strong>.
    </p>
<p class="mb-3 underline">2 formules sont proposées :</p>
<div class="ues-offers">
  <article class="ues-offer">
    <header class="ues-offer__head">
      <h4 class="ues-offer__title"><i class="bi bi-people-fill"></i> Stagiaire</h4>
      <span class="ues-offer__badge">Formule complète</span>
    </header>

    <ul class="ues-offer__list">
      <li>Cours individuel de <strong>40 minutes</strong> par jour, avec chacun des professeurs</li>
      <li>Cours individuel avec chacune des pianistes</li>
      <li>Participation aux ensembles, aux concerts et aux Master Classes</li>
    </ul>
  </article>

  <article class="ues-offer">
    <header class="ues-offer__head">
      <h4 class="ues-offer__title"><i class="bi bi-people-fill"></i> Auditeur</h4>
      <span class="ues-offer__price">250€</span>
    </header>

    <p class="ues-offer__text">
      Possibilité d\'assister à tous les cours sans participation instrumentale.
      Pour vous inscrire ou avoir des informations supplémentaires, nous contacter par mail.
    </p>

    <a class="btn btn-dark btn-sm ues-offer__cta" href="mailto:contact@univsax.com">
      Nous contacter
    </a>
  </article>
</div>
</div>
</div>
</div>
<div class="ues-slide-nav d-flex gap-2 flex-wrap">
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="0" data-bs-target="#uesCarousel" type="button">Présentation</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="1" data-bs-target="#uesCarousel" type="button">Enseignement</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="2" data-bs-target="#uesCarousel" type="button">Historique</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="3" data-bs-target="#uesCarousel" type="button">Déroulement d\'une journée à l\'UES</button>
</div>
</div>
<!-- SLIDE 3 (2) : Historique -->
<div class="carousel-item">
<div class="row g-4">
<div class="col-12">
<h3 class="mb-3 ues-slide-title"><i class="bi bi-journal-richtext"></i> Historique</h3>
<div class="ues-histo-text mt-3">
<img alt="Ville de Gap" class="ues-histo-float-img" loading="lazy" src="images/img_gap.jpg"/>
<p>
        C\'est en 1989 que Serge <strong>BICHON</strong> (Professeur au Conservatoire National de Région de Lyon),
        Claude <strong>DELANGLE</strong> (Professeur au Conservatoire National Supérieur de Musique de Paris) et
        Yves <strong>RAMBAUD</strong> (Professeur à l\'Ecole Nationale de Musique de Gap) ont créé l\'Université
        Européenne de Saxophone, grâce au soutien financier de la municipalité gapençaise.
      </p>
<p>
        Leurs objectifs sont multiples. Ils cherchent à affirmer la place du saxophone en tant qu\'instrument moderne
        et classique à la fois, ils souhaitent améliorer la formation des étudiants et ils préparent activement
        (et avant l\'heure !) la libre circulation des connaissances et des compétences au sein d\'un continent européen
        qui se cherche. Enfin, ce projet est un excellent moyen d\'égayer la programmation culturelle du département
        des Hautes-Alpes. Ils vont faire appel pour cela aux meilleurs professeurs de saxophone en France, et décident
        de compléter chaque année l\'équipe pédagogique avec la présence d\'un Professeur Européen – c\'est ainsi que
        l\'Université gagne ses galons d\'événement « Européen ».
      </p>
<p>
        Lors des 35 éditions précédentes, les étudiants ont donc eu l\'occasion de perfectionner leur maîtrise instrumentale
        avec des Professeurs venus d\'Espagne, de Suisse, d\'Allemagne, d\'Italie, de Hollande, etc.
      </p>
<p>
        Pensée à l\'origine pour des étudiants Français, l\'Université s\'est rapidement mise au goût du jour, et accueille
        depuis de nombreuses années déjà des étudiants venus des quatre coins du monde. Japonais, Chinois, Australiens,
        Américains, Russes, et bien sûr des ressortissants de tous les pays de l\'Union Européenne composent à présent
        la plus grande partie de l\'effectif, et viennent assimiler la technique et le style français, plébiscités
        dans le monde entier.
      </p>
<p class="mb-0">
        La première génération d\'étudiants est aujourd\'hui devenue professionnelle, et elle a progressivement exporté
        le « modèle gapençais » dans le monde entier. Si, un peu partout en Europe, le concept a été repris, Gap garde
        toujours une longueur d\'avance grâce à son équipe pédagogique de très haut niveau, grâce aux innovations apportées
        année après année, grâce aussi au cadre somptueux des Hautes-Alpes et à l\'ambiance unique qui règne durant le stage.
        L\'Université Européenne de Saxophone de Gap est ainsi devenue un passage incontournable pour les saxophonistes
        professionnels du monde entier.
      </p>
</div>
</div>
</div>
<div class="ues-slide-nav d-flex gap-2 flex-wrap">
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="0" data-bs-target="#uesCarousel" type="button">Présentation</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="1" data-bs-target="#uesCarousel" type="button">Enseignement</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="2" data-bs-target="#uesCarousel" type="button">Historique</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="3" data-bs-target="#uesCarousel" type="button">Une journée à l\'UES</button>
</div>
</div>
<!-- SLIDE 4 (3) : Déroulement -->
<!-- SLIDE 4 (3) : Déroulement -->
<div class="carousel-item">
<div class="row  align-items-start">
<div class="col-12">
<h3 class="mb-3 ues-slide-title"><i class="bi bi-music-note-list"></i> Déroulement d\'une journée</h3>
</div>
<div class="col-lg-6">
<p>
<strong class="date">7h30</strong> : Après une nuit passée au foyer des jeunes travailleurs, les 54 étudiants sont conviés à un petit-déjeuner dans le restaurant de l\'établissement. Un repas que l\'on recommande de ne pas manquer car la journée est souvent longue et intense.<br/><br/>
<strong class="date">De 8h45 à 12h45</strong> : Les 54 participants sont répartis dans 9 groupes différents de 6 étudiants. Chacun des étudiants passera durant la totalité du stage 40 minutes avec chacun des 7 professeurs présents, ainsi qu\'avec les deux pianistes accompagnatrices. Tous les étudiants devront avoir au préalable préparé un programme de 30 minutes minimum, qu\'ils auront loisir de travailler avec chacun des membres de l\'équipe pédagogique de l\'Université Européenne de Saxophone. Durant le reste de la matinée, les étudiants ont à leur disposition de nombreuses salles de répétition. Ils peuvent également tester les produits présentés par les fabricants <strong>Selmer</strong> et <strong>Vandoren</strong>, présents sur les lieux du stage pendant quelques jours (2 à 3 jours pleins en général), et faire réviser leur instrument au réparateur de chez <strong>JS Musique</strong> également présent.<br/>
<br/>
<strong class="date">13h00</strong> : Les étudiants prennent le repas du midi au restaurant du foyer. Les professeurs sont souvent présents également.<br/><br/> </p>
</div>
<div class="col-lg-6">
<p>
<strong class="date">APRES-MIDI</strong> : Le début d\'après-midi est généralement consacré aux répétitions avec les quatuors et les différents ensembles formés par les professeurs dès le premier jour selon les souhaits et le niveau des étudiants (C\'est dans cette configuration de groupe que les étudiants donneront en conclusion du stage leur concert final). Le reste de l\'après-midi est principalement consacré à des Cours Publics, donnés par certains des Professeurs présents, mais aussi par des intervenants extérieurs de renom. Enfin, les étudiants peuvent profiter des nombreux atouts touristiques de la ville de Gap...<br/><br/>
<strong class="date">19h 30 ou 20h 30</strong> : Les étudiants prennent le repas du soir au restaurant du foyer, et se préparent pour le dernier événement de la journée, toujours très attendu, soit le concert programmé, soit la soirée libre...<br/><br/>
<strong class="date">18h 30 ou 21h 00</strong> : À tour de rôle, et accompagnés par les pianistes de renom de l\'Université Européenne de Saxophone, chacun des professeurs se produit en concert à la Chapelle des Pénitents, en plein centre de Gap. Ils donnent, pour les étudiants mais aussi pour environ 200 personnes présentes tous les soirs, des concerts de grande qualité, et gratuits.
      </p>
</div>
</div>
<div class="ues-slide-nav d-flex gap-2 flex-wrap">
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="0" data-bs-target="#uesCarousel" type="button">Présentation</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="1" data-bs-target="#uesCarousel" type="button">Enseignement</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="2" data-bs-target="#uesCarousel" type="button">Historique</button>
<button class="btn btn-light ues-tabbtn" data-bs-slide-to="3" data-bs-target="#uesCarousel" type="button">Déroulement d\'une journée à l\'UES</button>
</div>
</div>
</div>

</div>
</div>
</section>
<!-- SECTION : Équipe pédagogique (cartes) -->
<section class="ues-team py-5" id="ues-team">
<div class="container-xxl">
<div class="d-flex align-items-end justify-content-between flex-wrap gap-3 mb-4">
<div>
<h2 class="h4 mb-1">Équipe pédagogique</h2>
<p class="mb-0 ues-team__lead">Les professeurs et la pianiste accompagnatrice de la 37ème édition.</p>
</div>
<ul class="nav nav-pills ues-team__tabs" id="uesTeamTabs" role="tablist">
<li class="nav-item" role="presentation">
<button aria-controls="pane-profs" aria-selected="true" class="nav-link active" data-bs-target="#pane-profs" data-bs-toggle="pill" id="tab-profs" role="tab" type="button">
            Professeurs
          </button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="pane-pianistes" aria-selected="false" class="nav-link" data-bs-target="#pane-pianistes" data-bs-toggle="pill" id="tab-pianistes" role="tab" type="button">
            Pianistes
          </button>
</li>
</ul>
</div>
<div class="tab-content" id="uesTeamTabContent">
<!-- PROFS -->
<div aria-labelledby="tab-profs" class="tab-pane fade show active" id="pane-profs" role="tabpanel" tabindex="0">
<div class="row g-4">
<!-- Delangle -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Claude Delangle" class="ues-person__img" src="images/Delangle.jpg"/>
<h3 class="h6 mb-1">Claude Delangle</h3>
<p class="ues-person__role mb-3">Directeur artistique · Professeur au CNSMDP</p>
<ul class="ues-person__bullets mb-3">
<li>Enseigne au Conservatoire de Paris depuis 1988</li>
<li>Fondateur de l\'UES de Gap</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalDelangle" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Arsenijevic -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Nicolas Arsenijevic" class="ues-person__img" src="images/arsenijevic.jpg"/>
<h3 class="h6 mb-1">Nicolas Arsenijevic</h3>
<p class="ues-person__role mb-3">Saxophoniste · Enseignant</p>
<ul class="ues-person__bullets mb-3">
<li>Diplômé du CNSMDP (classe Claude Delangle)</li>
<li>Lauréat de concours internationaux</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalArsenijevic" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Rautiola -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Joonatan Rautiola" class="ues-person__img" src="images/rautolia_j.jpg"/>
<h3 class="h6 mb-1">Joonatan Rautiola</h3>
<p class="ues-person__role mb-3">Saxophoniste · Sibelius Academy</p>
<ul class="ues-person__bullets mb-3">
<li>Soliste (orchestres européens &amp; nordiques)</li>
<li>Pédagogue et interprète de musique contemporaine</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalRautiola" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Braquart -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Philippe Braquart" class="ues-person__img" src="images/braquart_cv.jpg"/>
<h3 class="h6 mb-1">Philippe Braquart</h3>
<p class="ues-person__role mb-3">Saxophoniste · Professeur</p>
<ul class="ues-person__bullets mb-3">
<li>Premier prix (CNSM de Paris)</li>
<li>Orchestres &amp; projets jazz / contemporains</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalBraquart" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Wirth -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Christian Wirth" class="ues-person__img" src="images/ChristianWirth1-60116e5fc1b8c.webp"/>
<h3 class="h6 mb-1">Christian Wirth</h3>
<p class="ues-person__role mb-3">Saxophoniste · Musique de chambre</p>
<ul class="ues-person__bullets mb-3">
<li>Fondateur du Quatuor HABANERA</li>
<li>Garde Républicaine (orchestre d’harmonie)</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalWirth" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Garcia -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Mariano García" class="ues-person__img" src="images/garcia_cv.jpg"/>
<h3 class="h6 mb-1">Mariano García</h3>
<p class="ues-person__role mb-3">Saxophoniste · Professeur (Espagne)</p>
<ul class="ues-person__bullets mb-3">
<li>Chaire de saxophone (Conservatoire sup. d’Aragon)</li>
<li>Artiste Selmer · Duo ÁniMa</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalGarcia" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Compagnon -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Sandro Compagnon" class="ues-person__img" src="images/compagnon_bio.jpg"/>
<h3 class="h6 mb-1">Sandro Compagnon</h3>
<p class="ues-person__role mb-3">Saxophoniste · Soliste</p>
<ul class="ues-person__bullets mb-3">
<li>Prix internationaux (Osaka, Dinant, Thessalonique…)</li>
<li>Formé au CNSMDP (Delangle / Moraguès)</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalCompagnon" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
<!-- Sumiya -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Miho Sumiya" class="ues-person__img" src="images/63c10b4b4d6731.png"/>
<h3 class="h6 mb-1">Miho Sumiya</h3>
<p class="ues-person__role mb-3">Saxophoniste · Tokyo (Japon)</p>
<ul class="ues-person__bullets mb-3">
<li>Diplômée major de l’Université des Arts de Tokyo</li>
<li>Soliste &amp; chambriste · enseignante</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalSumiya" data-bs-toggle="modal" type="button">Voir la bio</button>
</div>
</div>
</div>
</div>
</div>
<!-- PIANISTES -->
<div aria-labelledby="tab-pianistes" class="tab-pane fade" id="pane-pianistes" role="tabpanel" tabindex="0">
<div class="row g-4">
<div class="col-12 col-sm-6 col-lg-3">
<div class="card ues-person h-100">
<div class="card-body">
<img alt="Fumie Ito" class="ues-person__img" src="images/fumie.jpg"/>
<h3 class="h6 mb-1">Fumie Ito</h3>
<p class="ues-person__role mb-3">Pianiste accompagnatrice</p>
<ul class="ues-person__bullets mb-3">
<li>Accompagne les cours &amp; concerts de l’UES</li>
<li>Intervient sur plusieurs édition de l\'UES</li>
</ul>
<button class="btn btn-outline-light btn-sm w-100" data-bs-target="#modalIto" data-bs-toggle="modal" type="button">Voir la fiche</button>
</div>
</div>
</div>
</div>
</div>
</div><!-- /tab-content -->
</div>
</section>
<!-- Modals (bios courtes + lien vers page complète) -->
<div aria-hidden="true" class="modal fade" id="modalDelangle" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Claude Delangle</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Claude Delangle" class="img-fluid rounded-3 ues-modal-photo" src="images/Delangle.jpg"/></div><div class="col-md-8"><div class="ues-modal-bio"><p>Claude Delangle enseigne le saxophone au Conservatoire de Paris (CNSMDP) depuis septembre 1988, année où il fonde l’Université Européenne du Saxophone de Gap dont il est le directeur artistique.</p>
<p>A la demande de Pierre Boulez il s’est produit en soliste et au sein de l’Ensemble Intercontemporain de 1986 à 2000. Il fut très proche de Luciano Berio qui écrivit pour lui le concerto pour saxophone Chemin VII – Récit et s’est produit à ses côtés aux Norton Lectures à l’Université d’Harvard, au Queen Elizabeth Hall de Londres, au Tisch Center de New York, à la Philharmonie de Cologne, avec le BBC Symphony. <br/></p>
<p>Ses spectacles « Canticum » (Roma Europa) avec Luciano Berio et London Voices, « Tango Futur » (Aix-en-Provence) avec Susanna Moncayo, « Quest » (Zagreb Biennale) avec Thierry Coduys, « Récit » (Agora/Ircam et Shizuoka-Japon) avec les œuvres de Pierre Boulez, Ichiro Nodaira et Marco Stroppa, « Elucidation » avec le chorégraphe Loïc Touzé, « Japanese Songs » (Manca/Nice) avec la mezzo soprano Marie Kobayashi et plus récemment « Duo » avec la danseuse Anne-Hélène Kotoujansky (Bach, Debussy, Mantovani, Leroux) sont des repères qui ont profondément nourri sa réflexion pour un partage vivant de la création musicale. Claude Delangle a créé des oeuvres de G.Amy, L.Berio, E.Denisov, H.Dufourt, G.Grisey, B.Jolas, G.Ligeti, A.Piazzolla, K.Stockhausen, Y.Taïra, T.Takemitsu, J.L.Campana, B.Dubedout, F.Durieux, T.Hosokawa, Ph.Hurel, M.Jarrell, P.Jodlovski, Ch.Lauba, Ph.Leroux, J.M.Lopez-Lopez, A.Louvier, B.Mantovani, M.Matalon, L.Naon, M.Natsuda, I.Nodaïra, Y.Robin, O.Strasnoy, F.Tanada, Ton-That Tiêt entre autres. Créer et transmettre motivent toute son activité musicale.</p>
<p>Claude Delangle a gravé douze disques pour BIS et participé à des enregistrements monographiques des compositeurs Claude Debussy, Anton Webern, Luciano Berio, Edison Denisov, Hugues Dufourt, Gérard Grisey et Philippe Leroux, pour Deutsche Grammophon, Harmonia Mundi, Erato et Verany.</p>
<p>Il se produit depuis quatre décennies avec son épouse la pianiste Odile Catelin-Delangle, professeur à l’Ecole Normale de Musique de Paris.</p>
<p>Claude Delangle contribue au développement des prototypes de la société Henri-Selmer-Paris et dirige une collection aux Editions Lemoine Paris dans laquelle il se réjouit d’avoir publié des œuvres de ses amis Bruno Mantovani, Ichiro Nodaïra, Fuminori Tanada et nombre de compositeurs de plusieurs générations.</p>
<p>Claude Delangle est Chevalier des Arts et des Lettres.<br/>
<br/>
<br/>
<span class="txt_gris10"><a href="http://www.sax-delangle.com" target="_blank">www.sax-delangle.com</a></span></p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalArsenijevic" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Nicolas Arsenijevic</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Nicolas Arsenijevic" class="img-fluid rounded-3 ues-modal-photo" src="images/arsenijevic.jpg"/></div><div class="col-md-8"><div class="ues-modal-bio"><p>Nicolas Arsenijevic est l\'un des saxophonistes les plus reconnus de sa génération. Diplômé du Conservatoire National Supérieur de Musique de Paris en 2016 dans la classe de Claude Delangle (Licence et Master), il navigue depuis plusieurs années entre création contemporaine, répertoire original pour saxophone, transcriptions, musique traditionnelle des Balkans ou encore théâtre musical. <br/></p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalRautiola" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Joonatan Rautiola</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Joonatan Rautiola" class="img-fluid rounded-3 ues-modal-photo" src="images/rautolia_j.jpg"/></div><div class="col-md-8"><div class="ues-modal-bio"><p>Né à Helsinki, Finlande en 1983, Joonatan Rautiola étudie le saxophone à l\'Académie Sibelius avec Pekka Savijoki et au Conservatoire de Paris avec Claude Delangle. Lauréat de grands concours internationaux (Dinant, Düsseldorf, Oslo, Nova Gorica, Paris), Joonatan Rautiola se produit en soliste avec l\'Orchestre Philharmonique de Strasbourg, l\'Orchestre national de la Lettonie, l\'Orchestre de la Radio Finlandaise et le Düsseldorf Symfoniker entre autres, et donne des récitals à Londres, Dublin, Saint Pétersbourg, Tokyo et au Carnegie Hall de New York. Joonatan Rautiola a créé de nombreux œuvres de compositeurs contemporains, notamment à l\'IRCAM (Paris) et a reçu les conseils de Pierre Boulez et Betsy Jolas. En 2012, il enregistre le disque monographique "8 Solos" (Sismal Records) du compositeur Patrick Marcland avec les solistes de l\'Ensemble Intercontemporain. Il enseigne le saxophone à l\'Académie Sibelius et donne des cours publics à Londres, Tokyo, Strasbourg et Riga. Joonatan Rautiola joue les saxophones Henri Selmer Paris et les anches D\'Addario Woodwinds. www.joonatanrautiola.com</p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalBraquart" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Philippe Braquart</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Philippe Braquart" class="img-fluid rounded-3 ues-modal-photo" src="images/braquart_cv.jpg"/></div><div class="col-md-8"><div class="ues-modal-bio"><p><br/>
<strong><br/>
            Saxophoniste, professeur et compositeur</strong><br/>
<br/>
            Après des études au Conservatoire Supérieur de Musique de Paris terminées par un premier prix
en 1988, il obtient plusieurs prix internationaux de Musique de Chambre ( Martigny, Ilzaach) avec
le quatuor de saxophones DIASTEMA et enregistre plusieurs disques sous les labels Naxos
(saxophone classics et french saxophone quartets) et Ames (d\'Ouest en Est et Hispano).
            <br/>
<br/>
            Il se produit régulièrement au sein de l\'orchestre national de Montpellier, de l\'ensemble
Intercontemporain et de l\'orchestre de Paris avec lequel il il a effectué plusieurs tournées
internationales (Chine, Corée, Japon, USA...)
<br/>
Il a notamment travaillé sous la direction de P.Boulez, Z.Metha, M.Plasson, G.Prêtre,
C.Eschenbach...
<br/>
<br/>
Saxophoniste polyvalent, sa passion pour le Jazz l\'amène à diriger le Big Band du Conservatoire
de Montpellier de 1999 à 2006.
<br/>
Il a en outre dirigé et participé à plusieurs sessions de l\'atelier 21 , ensemble de musique
contemporaine du CRR de Montpellier.
<br/>
<br/>
Ses activités artistiques et pédagogiques le conduisent maintenant à explorer d\'autres univers
comme l\'improvisation collective et le Sound-Painting ainsi que le théâtre musical au sein du trio
BHL, formation originale dont le répertoire est teinté d\'humour, de poésie, d\'improvisation, de
chansons françaises, de recettes de cuisine et de faits divers.
<br/>
<br/>
Il rejoint le Quartet CHAMAD en 2011 et aborde un jazz mélodique à la fois sensible et explosif au
travers des compositions originales du groupe. Sortie du premier album SILLAGE 1 en octobre
2013.
<br/>
<br/>
En 2014 , il rencontre les Chanteurs d\'oiseaux dans un festival à l\'Abbaye de Sylvanès (Aveyron)
et fasciné par leur univers, il a maintenant le plaisir de travailler régulièrement avec eux.
<br/>
<br/>
Titulaire du C.A de Saxophone, Philippe Braquart est professeur au Conservatoire à Rayonnement
Régional de Montpellier Agglomération ainsi qu\'à l\'Institut Supérieur des Arts de Toulouse
spectacle vivant (ISDAT)
<br/>
Il a également été professeur de saxophone au CNSM de Paris de 2000 à 2004.<br/>
<br/></p>
<p>Pour tous renseignements  complémentaires, n’hésitez pas à contacter philippe Braquart à  l’adresse suivante : <a href="mailto:contact@univsax.com">contact@univsax.com</a></p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalWirth" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Christian Wirth</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Christian Wirth" class="img-fluid rounded-3 ues-modal-photo" src="images/christian.jpg"/></div><div class="col-md-8"><div class="ues-modal-bio"><p>Après avoir obtenu les 1er Prix à l’unanimité de saxophone et  de musique de chambre au Conservatoire National Supérieur de Musique et de Danse de Paris, il réussit ensuite les concours d\'entrée dans les classes de perfectionnement de ces mêmes disciplines. Passionné de musique de chambre, il fonde le Quatuor de saxophones HABANERA, au sein duquel il se produit en France et à l\'étranger depuis 15 ans. Il enseigne actuellement au Conservatoire Maurice Ravel de Paris XIIIème, et depuis 1995, il fait partie de l\'Orchestre d\'Harmonie de la Garde Républicaine.</p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalGarcia" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Mariano García</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Mariano García" class="img-fluid rounded-3 ues-modal-photo" src="images/garcia_cv.jpg"/></div><div class="col-md-8"><div class="ues-modal-bio"><p>Passionné de saxophone, ses interprétations sont une recherche incessante de dépassement des limites de l\'instrument, élargissant le répertoire, soit avec des transcriptions de la grande musique de chambre de tous les temps soit avec la musique contemporaine. Alliant sa carrière pédagogique à celle de concertiste, il se produit en Chine, aux USA et participe à des festivals importants à Andorre, au Portugal, en Autriche et en Italie, avec un répertoire adapté aux différentes situations et veille tout particulièrement au répertoire de notre temps ainsi qu\'aux transcriptions. Au niveau pédagogique, il dispense de nombreux cours et master-classes en Espagne, notamment à l\'Esmuc de Barcelone, au Conservatoire Supérieur de Salamanque et à l\'Université Francisco de Vitoria de Madrid. Aux Etats-Unis, il est invité par différentes universités, comme North Carolina, South Carolina, Furman University, Shenandoah, Georgia University, Augusta… Depuis 2009, il est titulaire de la chaire de saxophone au Conservatoire Supérieur de Musique d\'Aragon et actuellement l\'un des professeurs les plus prisés de cet instrument. Son dernier enregistrement « Ritmo En El Espacio » avec la pianiste Aniana Jaime autour de compositeurs espagnols sous le label discographique IBS classical a reçu un accueil chaleureux de la critique spécialisée. Sollicité comme membre du jury de différents concours internationaux, il est, depuis 2010, artiste Selmer et membre du duo ÁniMa. www.marianogarciasax.com</p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalCompagnon" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Sandro Compagnon</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body">
  <div class="row g-4 align-items-start">
    <div class="col-md-4">
      <img src="images/compagnon_bio.jpg" class="img-fluid rounded ues-modal-photo" alt="Sandro Compagnon" loading="lazy">
    </div>
    <div class="col-md-8">
      <div class="ues-modal-bio">
        <p>Né à Nice en 1996, Sandro Compagnon commence le saxophone à 6 ans lorsqu’il déménage à Chamonix Mont-Blanc avec comme premier professeur, son père. Deux ans plus tard, il commence sa scolarité au CRR d’Annecy dans la classe de Christian Charnay puis de Fabrizio Mancuso. En 2006, il obtient le troisième prix au concours européen de Gap dans la catégorie des moins de 16 ans et en 2010 le troisième prix du concours européen de Valenciennes dans la catégorie soliste.</p><p>Après avoir obtenu un DEM de saxophone et de musique de chambre en 2011, il intègre la classe de Jean-Denis Michat au CRR de Lyon en 2013. Parallèlement à ses études de musique classique, Sandro pratique beaucoup le jazz et se produit lors de nombreux concerts dans des festivals comme le festival de jazz de Vannes (invité par le Spok Frevo Orchestra) ou encore au Cosmo Jazz Festival de Chamonix d’André Manoukian. Il se produit régulièrement en concert avec ce dernier et a récemment enregistré pour l’un de ses albums.</p><p>Depuis le début de sa jeune carrière, Sandro Compagnon a eu l’occasion de se produire dans des salles et festivals de prestige, en France ainsi qu’à l’international (Philharmonie de Paris, Wigmore Hall de Londres, Festival Radio-France de Montpellier, salle Cortot, Izumi Hall d’Osaka, Topan Hall de Tokyo, Folles Journées de Nantes, maison de la radio, invité en soliste par l’orchestre de la Garde Républicaine…). Il joue régulièrement avec le pianiste Gaspard Dehaene. Ensemble, ils se sont notamment produits au prestigieux festival du Printemps des Arts de Monte-Carlo. Aussi, Sandro Compagnon collabore étroitement depuis plusieurs années avec le compositeur Bruno Mantovani. Il a fait la création de la version pour saxophone soprano de sa pièce pour flûte seule « Früh » à la Scala Paris en direct sur France Musique, a transcrit de nombreuses œuvres pour bois au saxophone et a récemment enregistré son premier disque solo, dédié à la musique du compositeur.</p><p>Il est diplômé de Master en saxophone et en musique de chambre au CNSMDP dans les classes de Claude Delangle et Michel Moraguès et, il suit le cursus d’improvisation générative auprès de Vincent LêQuang et Alexandros Markeas. En 2017, il remporte le 1er prix du concours international de musique de chambre d’Osaka avec le quatuor Zahir dont il était membre entre 2016 et 2021, en novembre 2019, le 3ème prix au concours international Adolphe Sax de Dinant en Belgique et en octobre 2021, le 1er prix au concours international Thomas Kuti à Thessalonique, en Grèce. Sandro est aussi, depuis mai 2021, lauréat de la Fondation Banque Populaire. Il vient d’être admis en Master Soliste à la ZHdK de Zürich (Suisse) dans la classe de Lars Mlekusch.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalSumiya" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Miho Sumiya</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body"><div class="row g-4 align-items-start"><div class="col-md-4"><img alt="Miho Sumiya" class="img-fluid rounded-3 ues-modal-photo" src="images/63c10b4b4d6731.png"/></div><div class="col-md-8"><div class="ues-modal-bio"><p><strong>Sumiya</strong> est diplômée, major de sa promotion de l\'Université des Arts de Tokyo.</p>
<p>Elle a remporté la 1ère place et le Grand Prix au 6ème Concours de Musique Akiyoshidai et le premier prix au 9ème Concours International de Saxophone SAX GO (Slovénie).</p>
<p>Elle a également reçu de nombreux autres prix comme la 2ème place au 34ème Concours japonais d\'instruments à vent et à percussion, et récemment, le 5ème prix au Concours international Aeolus pour instruments à vent.</p>
<p>Son premier album CD « Promenade » est sorti en 2018.
          
          Elle s\'est produite en tant que soliste avec l\'Orchestre Philharmonique de Tokyo, l\'Orchestre Symphonique de Gunma, l\'Orchestre Philharmonique du Kansai, l\'Orchestre Symphonique de Tokyo, le New Japan Philharmonic, l\'Orchestre Philharmonique de Geidai, l\'Orchestre à Vent de Sienne et l\'Orchestre de Chambre de Tokyo.</p>
<p>Actuellement, elle est membre du Lumie Saxophone Quartet et du Panda Wind Orchestra et enseigne le saxophone au Showa Music College.<br/>
<br/></p></div></div></div></div>
</div>
</div>
</div>
<div aria-hidden="true" class="modal fade" id="modalIto" tabindex="-1">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content ues-modal">
<div class="modal-header">
<h5 class="modal-title">Fumie Ito</h5>
<button aria-label="Fermer" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body">
<p class="mb-0">Pianiste accompagnatrice de l’UES, elle participe aux activités pédagogiques (cours, accompagnement) et apparaît régulièrement sur les programmes des concerts.</p>
<hr class="my-4"/>
<a class="btn btn-outline-light btn-sm" href="https://www.univsax.com/enseignement_equipe.php" rel="noopener" target="_blank">Voir la liste de l’équipe</a>
<a class="btn btn-outline-light btn-sm" href="https://www.univsax.com/concerts.php" rel="noopener" target="_blank">Voir les concerts 2025</a>
</div>
</div>
</div>
</div>

    <!-- ============================
         CONTACT
         ============================ -->
    <section id="contact" class="ues-contact py-5">
  <div class="container-xxl ues-contact__wrap">

    <!-- Titre gauche (style OIB) -->
    <div class="ues-contact__head" data-aos="zoom-out">
      <div class="ues-contact__kicker">MESSAGERIE</div>
      <h2 class="ues-contact__title">Université Européenne de Saxophone</h2>
    </div>

    <div class="row g-4 mt-4">
      <!-- Colonne infos -->
      <div class="col-lg-4" data-aos="fade-right">
        <div class="ues-contact__info">
          <div class="ues-contact__item">
            <span class="ues-contact__icon" aria-hidden="true">
              <i class="bi bi-geo-alt"></i>
            </span>
            <div>
              <h4>Adresse :</h4>
              <p>14 chemin de Vigneaux - Romette<br>05000 Gap FRANCE</p>
            </div>
          </div>

          <div class="ues-contact__item">
            <span class="ues-contact__icon" aria-hidden="true">
              <i class="bi bi-envelope"></i>
            </span>
            <div>
              <h4>Email:</h4>
              <p><a href="mailto:contact@univsax.com">contact@univsax.com</a></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Colonne formulaire -->
      <div class="col-lg-8" data-aos="fade-left">
        <div class="ues-contact__form">
          <h3 class="ues-contact__formtitle">Envoyer un message</h3>

          <div class="ajax">
            ' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_CONTACT',
	array(),
	array('squelettes/sommaire.html','html_97e4732073be3381c886990f51312265','',793,$GLOBALS['spip_lang']))) .
'
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

</main>
<footer class="footer header2 ues-footer">
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <div class="single-footer f-about">
                <div class="logo">
                  <a href="index.html">
                    <img src="assets/images/logo/logo_cine.png" alt="Cinecitoyen">
                  </a>
                </div>
                <p><em>De l\'émotion... à la reflexion !</em></p>
                <h4 class="social-title">
                  Suivez-nous :
                  <a href="https://fr-fr.facebook.com/cinecitoyen/" target="_blank" rel="noopener">
                    <i class="bi bi-facebook"></i>
                  </a>
                </h4>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-12">
              <div class="single-footer f-link">
                <h3>Menu</h3>
                ' .
(($t1 = BOUCLE_navhtml_97e4732073be3381c886990f51312265($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
                <nav class="nav clearfix' .
		(($t3 = strval(retablir_echappements_modeles((((($Numrows['_nav']['total'] ?? 0) == '1')) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'none') :
				'') .
		'" id="nav" role="navigation">
                  <ul>
                    <li class="nav-item"><a href="index.php">Accueil</a></li>
                    ') . $t1 . '
                  </ul>
                </nav>
                ') :
		'') .
'
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer f-link">
                <h3>Films en débat</h3>
                <ul>
                  ' .
BOUCLE_serv3html_97e4732073be3381c886990f51312265($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer newsletter">
                <h3>S\'inscrire à la newsletter</h3>
                <p>Recevez les dernières actualités, programme et prochaines projection débat de Cinecitoyen.</p>
                ' .
retablir_echappements_modeles('') .
'
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright-area">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <p class="copyright-text">© 2023 Cinecitoyen - Tous droits réservés</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <p class="copyright-owner">Designed and Developed by GD</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Waves -->
    <div class="ues-footer-waves" aria-hidden="true">
      <svg class="ues-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
        <defs>
          <path id="ues-gentle-wave" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"/>
        </defs>
        <g class="ues-parallax">
          <use href="#ues-gentle-wave" xlink:href="#ues-gentle-wave" x="48" y="0"></use>
          <use href="#ues-gentle-wave" xlink:href="#ues-gentle-wave" x="48" y="3"></use>
          <use href="#ues-gentle-wave" xlink:href="#ues-gentle-wave" x="48" y="5"></use>
          <use href="#ues-gentle-wave" xlink:href="#ues-gentle-wave" x="48" y="7"></use>
        </g>
      </svg>
    </div>
  </footer>
  ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['insert_footer'] ?? null))) .
'
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const ensureBootstrap = (cb) => {
      if (window.bootstrap && window.bootstrap.Carousel) return cb();
      const s = document.createElement("script");
      s.src = "assets/vendor/bootstrap/js/bootstrap.bundle.min.js";
      s.onload = cb;
      s.onerror = () => console.warn("Bootstrap JS introuvable :", s.src);
      document.body.appendChild(s);
    };

    ensureBootstrap(() => {
      const carouselEl = document.querySelector("#uesCarousel");
      if (!carouselEl) return;

      const navButtons = Array.from(
        document.querySelectorAll(\'.ues-tabbtn[data-bs-target="#uesCarousel"][data-bs-slide-to]\')
      );

      const items = Array.from(carouselEl.querySelectorAll(".carousel-item"));

      const setActiveButton = (activeIndex) => {
        navButtons.forEach((btn) => {
          const isActive = Number(btn.getAttribute("data-bs-slide-to")) === activeIndex;

          btn.classList.toggle("is-active", isActive);
          btn.setAttribute("aria-current", isActive ? "true" : "false");

          // Optionnel : variation Bootstrap (actif en sombre)
          btn.classList.toggle("btn-dark", isActive);
          btn.classList.toggle("btn-light", !isActive);
        });
      };

      // Etat initial
      const activeItem = carouselEl.querySelector(".carousel-item.active");
      const initialIndex = Math.max(0, items.indexOf(activeItem));
      setActiveButton(initialIndex);

      // Mise à jour à chaque changement
      carouselEl.addEventListener("slid.bs.carousel", (e) => {
        const idx = (typeof e.to === "number")
          ? e.to
          : Math.max(0, items.indexOf(carouselEl.querySelector(".carousel-item.active")));
        setActiveButton(idx);
      });
    });
  });
  </script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const carouselEl = document.querySelector("#uesCarousel");
    if (!carouselEl) return;

    const items = Array.from(carouselEl.querySelectorAll(".carousel-item"));
    const buttons = Array.from(carouselEl.querySelectorAll(".ues-tabbtn"));

    function setActiveButtonByIndex(activeIndex){
      buttons.forEach(btn => btn.classList.remove("active"));
      buttons
        .filter(btn => Number(btn.getAttribute("data-bs-slide-to")) === activeIndex)
        .forEach(btn => btn.classList.add("active"));
    }

    function getActiveIndex(){
      const activeItem = carouselEl.querySelector(".carousel-item.active");
      return Math.max(0, items.indexOf(activeItem));
    }

    // état initial
    setActiveButtonByIndex(getActiveIndex());

    // à chaque changement de slide
    carouselEl.addEventListener("slid.bs.carousel", () => {
      setActiveButtonByIndex(getActiveIndex());
    });
  });
</script>

<script id="ues-scroll-header-script">
/* UES : au scroll -> logo sort de la navbar, revient plus petit dans la topbar + menu noir */
(function(){
  const header = document.getElementById(\'header\');
  if(!header) return;

  const navBrand = header.querySelector(\'.ues-nav .ues-brand\');
  const topBrand = header.querySelector(\'.ues-topbar-brand\');
  const threshold = 40; // px

  let isCompact = false;
  let ticking = false;

  function play(el, cls){
    if(!el) return;
    el.classList.remove(cls);
    void el.offsetWidth; // reflow -> relance l\'animation
    el.classList.add(cls);
  }

  function setCompact(on){
    if(on === isCompact) return;
    isCompact = on;

    header.classList.toggle(\'ues-header--compact\', on);

    if(on){
      play(navBrand, \'ues-brand--out\');
      play(topBrand, \'ues-brand--in\');
    }
  }

  function onScroll(){
    if(ticking) return;
    ticking = true;
    window.requestAnimationFrame(() => {
      setCompact(window.scrollY > threshold);
      ticking = false;
    });
  }

  window.addEventListener(\'scroll\', onScroll, {passive: true});
  onScroll();

  function cleanup(e){
    if(e.animationName === \'ues-logo-out\'){
      e.target.classList.remove(\'ues-brand--out\');
    }
    if(e.animationName === \'ues-logo-in\'){
      e.target.classList.remove(\'ues-brand--in\');
    }
  }

  if(navBrand) navBrand.addEventListener(\'animationend\', cleanup);
  if(topBrand) topBrand.addEventListener(\'animationend\', cleanup);
})();
</script>
<script>
(function(){
  function ensureBootstrap(cb){
    if (window.bootstrap && window.bootstrap.Carousel) return cb();

    // évite de charger 2 fois si un script a déjà été injecté
    const existing = document.querySelector(\'script[data-ues-bootstrap]\');
    if (existing){
      existing.addEventListener(\'load\', cb, { once: true });
      return;
    }

    const s = document.createElement("script");
    s.src = "assets/vendor/bootstrap/js/bootstrap.bundle.min.js";
    s.dataset.uesBootstrap = "1";
    s.onload = cb;
    s.onerror = () => console.warn("Bootstrap JS introuvable :", s.src);
    document.body.appendChild(s);
  }

  document.addEventListener("DOMContentLoaded", () => {
    ensureBootstrap(() => {
      const carouselEl = document.querySelector("#uesCarousel");
      const slidesSection = document.querySelector("#ues-slides");
      if (!carouselEl) return;

      const carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl, {
        interval: false,
        touch: true
      });

      document
        .querySelectorAll(\'.ues-quicklinks a[data-bs-target="#uesCarousel"][data-bs-slide-to]\')
        .forEach((link) => {
          link.addEventListener("click", (e) => {
            e.preventDefault();

            const idx = parseInt(link.getAttribute("data-bs-slide-to"), 10);
            carousel.to(idx);

            (slidesSection || carouselEl).scrollIntoView({
              behavior: "smooth",
              block: "start"
            });

            // optionnel : met à jour l\'URL proprement
            history.replaceState(null, "", "#ues-slides");
          });
        });
    });
  });
})();
</script>
</body>
</html>
');

	return analyse_resultat_skel('html_97e4732073be3381c886990f51312265', $Cache, $page, 'squelettes/sommaire.html');
}
