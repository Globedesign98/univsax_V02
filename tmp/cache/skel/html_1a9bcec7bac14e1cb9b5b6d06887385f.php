<?php

/*
 * Squelette : squelettes/rubrique-5.html
 * Date :      Thu, 19 Feb 2026 01:10:22 GMT
 * Compile :   Sun, 22 Feb 2026 23:50:46 GMT
 * Boucles :   _inscription_01, _extra, _art, _articles_paiement, _ues_last, _art8, _extra2, _article_formulaire, _nb_pj, _fiche_pdf, _pj, _ues_me_logo, _article_statut, _articles_paiement2
 */ 

function BOUCLE_inscription_01html_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 5;
	$in[]= 7;
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_inscription_01';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("1");
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(articles.id_rubrique,' . $zqv . ')')));
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 'JOIN-L1' => 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'L1.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(20) NOT NULL DEFAULT 0')), sql_in('articles.id_rubrique', $in));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_inscription_01',334,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_inscription_01']['command'] = $command;
	$Numrows['_inscription_01']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
                <div class="txt_blc12 me-5">
                  Votre inscription a bien été <strong>enregistrée</strong>. Elle sera validée :
                  <br><br>1. dès réception des sommes dues<br>2. dès réception du formulaire d\'inscription signé et téléversé dans votre dossier.
                  
                  
                 <div class="d-flex flex-wrap gap-2 my-3">
 <!-- Bouton pour pointer sur la slide 3 -->
<a href="#ues-slides"
   class="btn btn-outline-light d-inline-flex align-items-center"
   data-bs-target="#uesCarousel" 
   data-bs-slide-to="4">
    <i class="bi bi-credit-card-2-front me-2" aria-hidden="true"></i>
    Effectuer votre paiement
</a>

<!-- Bouton pour pointer sur la slide 4 -->
<a href="#ues-slides"
   class="btn btn-outline-light d-inline-flex align-items-center"
   data-bs-target="#uesCarousel" 
   data-bs-slide-to="3">
    <i class="bi bi-file-earmark-text me-2" aria-hidden="true"></i>
    Mon dossier d\'inscription
</a>
</div>
                  
                  
                  
                  <div class="card shadow-sm border-0 mt-4 bg-dark bg-opacity-25 text-white">
                    
                    <div class="vstack gap-3">

  <p class="mb-0">
    La <strong>trente-septième édition</strong> de l\'Université Européenne de Saxophone se déroulera du
    <strong>13 au 23 juillet 2026</strong>.
    Les inscriptions seront prises en compte jusqu\'au <strong>15 juin 2026</strong>,
    dans la limite des places disponibles.<br>
<br>

  </p>

  <div class="border border-light border-opacity-25 rounded-3 overflow-hidden">

  <!-- Header -->
  <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
    <i class="bi bi-tag" aria-hidden="true"></i>
    <span class="fw-semibold">Tarifs</span>
  </div>

  <!-- Ligne 1 -->
  <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <i class="bi bi-house-door" aria-hidden="true"></i>
      <span>Droits d\'inscription + hébergement</span>
    </div>
    <span class="badge rounded-pill text-dark" style="background:#f6c343;">1028 €</span>
  </div>

  <!-- Ligne 2 -->
  <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <i class="bi bi-mortarboard" aria-hidden="true"></i>
      <span>Sans hébergement</span>
    </div>

    <span class="badge rounded-pill text-dark" style="background:#57d2ff;">500 €</span>
  </div>

  <!-- Ligne 3 -->
  <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <i class="bi bi-person" aria-hidden="true"></i>
      <span>Auditeurs libres</span>
    </div>
    <span class="badge rounded-pill text-white" style="background:#6c757d;">250 €</span>
  </div>


</div>
<br>


  <div class="alert alert-warning text-dark mb-0 d-flex align-items-start gap-2">
  <i class="bi bi-exclamation-triangle-fill mt-1" aria-hidden="true"></i>
  <div>
    <div class="fw-semibold text-dark">Conditions de remboursement</div>
    <div class="small text-dark">
      En cas de désistement, un remboursement pourra être effectué (retenue de <strong>130 €</strong> pour frais de dossier).
      <strong class="text-dark">Aucun remboursement après le 10 juin 2026.</strong>
    </div>
  </div>
</div>

</div>

                  </div>
                </div>
                <p class="small text-white-50 mt-3 mb-0">
        Besoin d\'aide ? Écrivez à <a href="mailto:inscription@univsax.com">inscription@univsax.com</a>.
      </p>
              ', $Numrows['_inscription_01']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_inscription_01 @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_extrahtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_extras', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_extra';
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_extra',688,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
           <div class="ues-extra-row d-flex flex-wrap align-items-start gap-2 py-2 border-top border-light
  border-opacity-10">
               <div class="ues-extra-label text-white-50 small fw-semibold" style="flex:0 0 34%;max-width:34%;">
                   ' .
retablir_echappements_modeles(interdire_scripts(ucfirst(replace(safehtml($Pile[$SP]['cle']),'_',' ')))) .
'
               </div>
               <div class="ues-extra-value flex-grow-1">
                   ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((is_array(safehtml($Pile[$SP]['valeur']))) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(interdire_scripts(filtre_implode_dist(safehtml($Pile[$SP]['valeur']),', ')))) :
		'') .
'
                   ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((is_array(safehtml($Pile[$SP]['valeur']))) ?'' :' ')))))!=='' ?
		($t1 . retablir_echappements_modeles(interdire_scripts(textebrut(safehtml($Pile[$SP]['valeur']))))) :
		'') .
'
               </div>
           </div>
       ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_extra @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_arthtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_art';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"L1.id_auteur",
		"articles.adresse",
		"articles.ville",
		"articles.pays",
		"articles.phone",
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_art',628,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

       <!-- Afficher le logo de l\'utilisateur -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2"></div>
           <div class="text-end position">
               ' .
(($t1 = strval(retablir_echappements_modeles(((quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', '')) ?' ' :''))))!=='' ?
		($t1 . (	'
                   <img src="' .
	retablir_echappements_modeles(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', ''),'200','200')),'src')) .
	'"
                        alt="Logo de l\'utilisateur"
                        class="rounded-circle shadow-sm"
                        style="width:80px;height:80px;object-fit:cover;">')) :
		'') .
'
           </div>
       </div>

       <!-- Nom -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
               <i class="bi bi-person" aria-hidden="true"></i><span>Nom</span>
           </div>
           <div class="text-white-50 text-end">' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'nom', null))))) .
' ' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'prenom', null))))) .
'</div>
       </div>

       <!-- Adresse -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-start
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
               <i class="bi bi-geo-alt" aria-hidden="true"></i><span>Adresse</span>
           </div>
           <div class="text-white-50 text-end">
               ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['adresse'])) .
'
               ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['code_postal'] ?? null))) .
'
               ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['ville'])) .
'
               ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['pays'])) .
'
           </div>
       </div>

       <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
               <i class="bi bi-telephone" aria-hidden="true"></i><span>Téléphone</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['phone'])) .
' </div>
       </div>

       <!-- Email -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
               <i class="bi bi-envelope" aria-hidden="true"></i><span>Email</span>
           </div>
           <div class="text-white-50 text-end">' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'email', null))))) .
'</div>
       </div>

       <!-- Champs extras -->
       
       ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_extras'] = (interdire_scripts(((($a = unserialize(generer_objet_info(($Pile[$SP]['id_article']), 'article', 'extra', '', []))) OR (is_string($a) AND strlen($a))) ? $a : (array())))))) .
'
       ' .
(($t1 = BOUCLE_extrahtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
       ' . $t1 . '
       <div class="text-white-50 small">Aucun champ extra trouvé.</div>
       ') :
		'') .
'
       ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_statut'] = (interdire_scripts($Pile[$SP]['statut'])))) .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_id_article'] = ($Pile[$SP]['id_article']))) .
'

   ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_paiementhtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 5;
	$in[]= 7;
	$in1 = array();
	$in1[]= 'prop';
	$in1[]= 'publie';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_paiement';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("1");
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(articles.id_rubrique,' . $zqv . ')')), ((!$zqv=sql_quote($in1) OR $zqv==="''") ? 0 : ('FIELD(articles.statut,' . $zqv . ')')));
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_articles_paiement',744,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_articles_paiement']['command'] = $command;
	$Numrows['_articles_paiement']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
            <button class="btn btn-light ues-tabbtn" data-bs-slide-to="4" data-bs-target="#uesCarousel" type="button">
                <i class="bi bi-credit-card me-1"></i> Paiement
            </button>
        ', $Numrows['_articles_paiement']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_paiement @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_lasthtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_ues_last';
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_ues_last',893,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(recuperer_fond( 'inc-checklist' , array('id_article' => ($Pile[$SP]['id_article']) ,
	'statut' => (interdire_scripts($Pile[$SP]['statut'])) ,
	'with_help' => 'oui' ), array('compil'=>array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_ues_last',895,$GLOBALS['spip_lang'])), _request('connect') ?? '')));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_last @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_art8html_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_art8';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.prenom",
		"articles.titre",
		"L1.id_auteur",
		"articles.adresse",
		"articles.ville",
		"articles.pays",
		"articles.phone",
		"articles.sexo",
		"articles.age",
		"articles.sante",
		"articles.contact_nom",
		"articles.contact_prenom",
		"articles.vegetarien",
		"articles.hebergement",
		"articles.auditeur",
		"articles.ecole",
		"articles.prof",
		"articles.piece",
		"articles.type_saxo",
		"articles.type_bec",
		"articles.oui_non_2",
		"articles.paiement",
		"articles.remarque",
		"articles.lang");
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_art8',1149,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
       <div class="mb-2">
       
       
       ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[0]['whatsapp'] ?? null)) ?' ' :'')))))!=='' ?
		($t1 . '
              <span class="ues-pill ues-pill--ok" title="Utilise WhatsApp">
               <i class="bi bi-whatsapp"></i>
              </span>
            ') :
		'') .
'
            
         <strong>' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['prenom'])) .
' ' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</strong>
       </div>

       <!-- Afficher le logo de l\'utilisateur -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2"></div>
           <div class="text-end position">
               ' .
(($t1 = strval(retablir_echappements_modeles(((quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', '')) ?' ' :''))))!=='' ?
		($t1 . (	'
                   <img src="' .
	retablir_echappements_modeles(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', ''),'200','200')),'src')) .
	'"
                        alt="Logo de l\'utilisateur"
                        class="rounded-circle shadow-sm"
                        style="width:80px;height:80px;object-fit:cover;">')) :
		'') .
'
           </div>
       </div>

       <!-- Nom -->


       <!-- Adresse -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-start
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
               <i class="bi bi-geo-alt" aria-hidden="true"></i><span>Adresse</span>
           </div>
           <div class="text-white-50 text-end">
               ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['adresse'])) .
'
               ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['code_postal'] ?? null))) .
'
               ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['ville'])) .
'
               ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['pays'])) .
'
           </div>
       </div>

       <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <i class="bi bi-telephone" aria-hidden="true"></i><span>Téléphone</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['phone'])) .
' </div>
       </div>

       <!-- Email -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center
  justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
               <i class="bi bi-envelope" aria-hidden="true"></i><span>Email</span>
           </div>
           <div class="text-white-50 text-end">' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'email', null))))) .
'</div>
       </div>

       <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Sexe</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['sexo'])) .
' </div>
       </div>
              <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
       <span>Age</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['age'])) .
' </div>
       </div>
              <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Particularités sanitaires</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['sante'])) .
' </div>
       </div>
              <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Personne à joindre</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['contact_nom'])) .
'
' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['contact_prenom'])) .
'</div>
       </div>
              <!-- Téléphone -->
        <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:texte_vegetarien') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['vegetarien'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Hébergement </span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['hebergement'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:texte_auditeur') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['auditeur'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:texte_nomecole') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['ecole'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:texte_nomprof') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['prof'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Pièce préparée</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['piece'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:texte_vegetarien') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['type_saxo'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:info_typebec') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['type_bec'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Droits d auteur</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['oui_non_2'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>' .
_T('public|spip|ecrire:texte_modepaie') .
'</span>
           </div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['paiement'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Message</span></div>
           <div class="text-white-50 text-end"> ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['remarque'])) .
' </div>
       </div>
                     <!-- Téléphone -->
       <div class="px-3 py-2 border-top border-light border-opacity-25 d-flex align-items-center justify-content-between gap-3">
           <div class="d-flex align-items-center gap-2">
        <span>Règlement UES</span>
           </div>
           <div class="text-white-50 text-end">Vous avez lu et accepté le règlement.</div>
       </div>
                     <!-- Téléphone -->
      
   ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art8 @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_extra2html_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'ues_extras', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_extra2';
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_extra2',1335,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((safehtml($Pile[$SP]['valeur'])) ?' ' :'')))))!=='' ?
		($t1 . (	'
              <div class="ues-extra-row d-flex flex-wrap align-items-start gap-2 py-2 border-top border-light border-opacity-10">
                <div class="ues-extra-label text-white-50 small fw-semibold" style="flex:0 0 34%;max-width:34%;">
                  ' .
	retablir_echappements_modeles(interdire_scripts(ucfirst(replace(safehtml($Pile[$SP]['cle']),'_',' ')))) .
	'
                </div>
                <div class="ues-extra-value flex-grow-1">
                  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((is_array(safehtml($Pile[$SP]['valeur']))) ?' ' :'')))))!=='' ?
			($t2 . retablir_echappements_modeles(interdire_scripts(filtre_implode_dist(safehtml($Pile[$SP]['valeur']),', ')))) :
			'') .
	'
                  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((is_array(safehtml($Pile[$SP]['valeur']))) ?'' :' ')))))!=='' ?
			($t2 . retablir_echappements_modeles(interdire_scripts(textebrut(safehtml($Pile[$SP]['valeur']))))) :
			'') .
	'
                </div>
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
		spip_log(intval(1000*$timer)."ms BOUCLE_extra2 @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_article_formulairehtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_article_formulaire';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.date",
		"articles.statut",
		"articles.id_article",
		"articles.id_rubrique",
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_formulaire',1089,$GLOBALS['spip_lang'])
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
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'edit', null),true) == '1')) ?' ' :'')))))!=='' ?
		($t1 . (	'
    
<div class="col-12">
  <div class="cadre_txt me-5">


' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?'' :' ')))))!=='' ?
			($t2 . '
  <p class="mb-0 text-white-50 info_txt">
    Lors de cette seconde étape, vous devez :<br>
    <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">1</span> Compléter le formulaire<br>
    <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">2</span> Enregistrer le formulaire (en bas de page <span class="bot">ENREGISTRER</span> )<br>
    <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">3</span> Envoyer votre formulaire en modifiant son statut
  </p>
') :
			'') .
	'
  </div>
</div>
   

  <!-- MODE ÉDITION : formulaire complet -->
    <div class="card ues-card-dark ues-form-card shadow-sm border-0 bg-dark bg-opacity-25 text-white">
      <!-- Header -->
      <div class="card-header bg-dark d-flex align-items-center justify-content-between">
        <span class="fw-semibold"><span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25 me-2" style="width: 24px; height: 24px; display: inline-flex; align-items: center; justify-content: center;">1</span> Éditer votre formulaire</span>
        <a href="' .
	retablir_echappements_modeles(ancre_url(parametre_url(parametre_url(parametre_url(self(),'slide','3'),'edit',''),'id_article',''),'ues-slides')) .
	'" class="btn btn-outline-light btn-sm">
          <i class="bi bi-eye me-1"></i> Voir le résumé
        </a>
      </div>
      <div class="card-body">
        <div class="ues-form-surface p-3 rounded-3 border border-light border-opacity-25">
          ' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_EDITER_ARTICLE',
	array(($Pile[$SP]['id_article']),($Pile[$SP]['id_rubrique']),(ancre_url(parametre_url(parametre_url(parametre_url(self(),'slide','3'),'edit',''),'id_article',($Pile[$SP]['id_article'])),'ues-slides'))),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_formulaire',1112,$GLOBALS['spip_lang']))) .
	'</div>
        <div class="small text-white-50 mt-3 mb-0">
          Après modification, cliquez sur <strong class="text-white">Enregistrer »</strong>.
        </div>
      </div>
    </div>
  ')) :
		'') .
'

  ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'edit', null),true) == '1')) ?'' :' ')))))!=='' ?
		($t1 . (	'
  <!-- MODE RÉSUMÉ -->
    <div class="card ues-card-dark ues-summary-card shadow-sm border-0 bg-dark bg-opacity-25 text-white me-5">
      <div class="card-header bg-dark d-flex align-items-center justify-content-between">
        <span class="fw-semibold"><i class="bi bi-file-earmark-text me-2"></i> Votre formulaire</span>
        ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((generer_objet_info(($Pile[$SP]['id_article']), 'article', 'statut', '', []) == 'publie')) ?'' :' ')))))!=='' ?
			($t2 . (	'
        <a href="' .
		retablir_echappements_modeles(ancre_url(parametre_url(parametre_url(parametre_url(self(),'slide','3'),'edit','1'),'id_article',($Pile[$SP]['id_article'])),'ues-slides')) .
		'" class="btn btn-warning btn-sm">
        
          <i class="bi bi-pencil"></i> Modifier
        </a>')) :
			'') .
	'
      </div>
      <div class="card-body">
        <div class="small text-white-50 mb-2">Résumé</div>
        <div class="p-3 border border-light border-opacity-25">
          <!-- Informations générales -->
          

          <!-- Champs extras -->
          
          
          
        ' .
	BOUCLE_art8html_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP) .
	'  
          
          
          
          
          ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ues_extras'] = (interdire_scripts(((($a = unserialize(generer_objet_info(($Pile[$SP]['id_article']), 'article', 'extra', '', []))) OR (is_string($a) AND strlen($a))) ? $a : (array())))))) .
	'

          ' .
	(($t2 = BOUCLE_extra2html_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			('
          ' . $t2 . '
          <div class="text-white-50 small">Aucun champ extra trouvé.</div>
          ') :
			'') .
	'
        </div>
      </div>
<div class=" bott card-header bg-dark d-flex align-items-center justify-content-between">
 ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((generer_objet_info(($Pile[$SP]['id_article']), 'article', 'statut', '', []) == 'publie')) ?'' :' ')))))!=='' ?
			($t2 . (	'
        <a href="' .
		retablir_echappements_modeles(ancre_url(parametre_url(parametre_url(parametre_url(self(),'slide','3'),'edit','1'),'id_article',($Pile[$SP]['id_article'])),'ues-slides')) .
		'" class="btn btn-warning btn-sm">
          <i class="bi bi-pencil"></i> Modifier
        </a>')) :
			'') .
	'
      </div>
    </div>
  ')) :
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
		spip_log(intval(1000*$timer)."ms BOUCLE_article_formulaire @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_nb_pjhtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'document';
	$in[]= 'image';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_nb_pj';
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
			array('=', 'L1.id_objet', sql_quote(retablir_echappements_modeles($Pile[$SP]['id_article']), '', 'bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')), sql_in('documents.mode', $in));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_nb_pj',1437,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_nb_pj']['command'] = $command;
	$Numrows['_nb_pj']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
    ', $Numrows['_nb_pj']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nb_pj @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_fiche_pdfhtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_fiche_pdf';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.date",
		"documents.id_document");
		$command['orderby'] = array('documents.date DESC');
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote(retablir_echappements_modeles($Pile[$SP]['id_article']), '', 'bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'documents.extension', "'pdf'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_fiche_pdf',1447,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
        <a class="btn btn-outline-light w-100 mb-2"
           href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_document'], 'document', '', '', true)))) .
'"
           target="_blank" rel="noopener">
          <i class="bi bi-download me-2"></i>
          Télécharger votre fiche d\'inscription
        </a>
      ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_fiche_pdf @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_pjhtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'document';
	$in[]= 'image';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_pj';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(documents.mode,' . $zqv . ')')));
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote(retablir_echappements_modeles($Pile[$SP]['id_article']), '', 'bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')), sql_in('documents.mode', $in));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_pj',1486,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
        ' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nb_pj'] = (plus(table_valeur($Pile["vars"]??[], (string)'nb_pj', null),'1')))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_pj @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ues_me_logohtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_ues_me_logo';
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_ues_me_logo',1563,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'

      <!-- Aperçu logo actuel (SANS LIEN) -->
      <div class="text-center mb-3">
        ' .
(($t1 = strval(retablir_echappements_modeles(((quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', '')) ?' ' :''))))!=='' ?
		($t1 . (	'
            <img src="' .
	retablir_echappements_modeles(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', ''),'220','0')),'src')) .
	'" 
                 class="img-fluid rounded shadow-sm ues-photo-img" 
                 alt="Logo utilisateur">
        ')) :
		'') .
'
        ' .
(($t1 = strval(retablir_echappements_modeles(((quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', '')) ?'' :' '))))!=='' ?
		($t1 . '
          <div class="text-white-50 small">Aucun logo pour le moment.</div>
        ') :
		'') .
'
      </div>

     <!-- Upload / remplacement via SPIP -->
<div class="p-3 rounded-3 border border-light border-opacity-25">
    ' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Note : on force le paramètre slide=3 pour revenir sur cet onglet ') :
		'') .
'
    ' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_EDITER_LOGO',
	array('auteur',($Pile[$SP]['id_auteur']),(ancre_url(parametre_url(self(),'slide','3'),'ues-slides'))),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_ues_me_logo',1574,$GLOBALS['spip_lang']))) .
'</div>

    ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ues_me_logo @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_article_statuthtml_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		$command['id'] = '_article_statut';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.date",
		"articles.statut",
		"articles.prenom",
		"articles.titre",
		"articles.lang");
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_statut',1406,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

        <div class="card ues-card-dark ues-status-card shadow-sm border-0 bg-dark bg-opacity-25 text-white  mt-3">
          <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between bg-light bg-opacity-10 ">
            <span class="fw-semibold">
              <i class="bi bi-sliders me-2" aria-hidden="true"></i>
              Statut du dossier
            </span>

            <span class="badge rounded-pill ues-status-pill" data-statut="' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['statut'])) .
'">' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['statut'])) .
'</span>
          </div>

          <div class="card-body">
            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'prepa')) ?' ' :'')))))!=='' ?
		($t1 . '
  <p class="mb-4">
    Lorsque votre formulaire est terminé,
    vous pouvez <strong class="text-white">envoyer votre candidature</strong>,
    en sélectionnant <em class="text-white">« Envoyer mon formulaire »</em>,
    puis cliquez sur <strong class="text-white">Changer</strong>.
  </p>
') :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'prop')) ?' ' :'')))))!=='' ?
		($t1 . '
  <p class="mb-4">
    Votre formulaire a bien été envoyé. Un administrateur de l\'UES va contrôler
    puis valider votre formulaire.
  </p>
') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
		($t1 . (	'
  <p class="mb-4">
    Votre formulaire a été validé par l\'UES.
    ' .
	(($t2 = BOUCLE_nb_pjhtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			$t2 :
			((	'
      ' .
		(($t3 = strval(retablir_echappements_modeles((((($Numrows['_nb_pj']['total'] ?? 0) >= '2')) ?'' :' '))))!=='' ?
				($t3 . '
        Vous pouvez maintenant le télécharger et le signer.
      ') :
				'') .
		'
    '))) .
	'
    
  </p>
')) :
		'') .
'
 ' .
(($t1 = BOUCLE_fiche_pdfhtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
    ' . $t1) :
		('
    
')) .
'

            ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?'' :' ')))))!=='' ?
		($t1 . (	'
            <div class="ues-status-form p-3 rounded-3 border border-light border-opacity-25 bg-light bg-opacity-10">
              ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '1comite')) ?' ' :''))))))!=='' ?
			($t2 . (	'
                ' .
		retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_INSTITUER_OBJET',
	array('article',($Pile[$SP]['id_article']),(ancre_url(parametre_url(parametre_url(self(),'slide','3'),'var_mode','preview'),'ues-slides'))),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_statut',1434,$GLOBALS['spip_lang']))))) :
			'') .
	'
              ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo')) ?' ' :''))))))!=='' ?
			($t2 . (	'
                ' .
		retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_INSTITUER_OBJET',
	array('article',($Pile[$SP]['id_article']),(ancre_url(parametre_url(parametre_url(self(),'slide','3'),'var_mode','preview'),'ues-slides'))),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_statut',1435,$GLOBALS['spip_lang']))))) :
			'') .
	'
            </div> ')) :
		'') .
'
          </div>
        </div>
        
        
     ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . (	'
  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
			($t2 . (	'
    
    <!-- DÉBUT DU BLOC AJAX -->
    <!-- On met une classe \'ajax\' sur le parent pour que tout ce qui est dedans se mette à jour -->
    <div class="card ues-card-dark shadow-sm border-0 bg-dark bg-opacity-25 text-white mt-3 ajax cadre_depo">
      
      <!-- 1. On recalcule le nombre de pièces jointes à chaque rechargement ajax -->
      ' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nb_pj'] = '0')) .
		BOUCLE_pjhtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP) .
		'

      <!-- 2. Header de la carte (Badge Statut) -->
      <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between bg-light bg-opacity-10">
        
        ' .
		(($t3 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'nb_pj', null) >= '2')) ?' ' :''))))!=='' ?
				($t3 . '
          <span class="fw-semibold">
            <i class="bi bi-file-earmark-arrow-up me-2" aria-hidden="true"></i>
            Formulaire signé
          </span>
          <span class="badge rounded-pill ues-status-pill">
            Envoyé
          </span>
        ') :
				'') .
		'
        
        ' .
		(($t3 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'nb_pj', null) >= '2')) ?'' :' '))))!=='' ?
				($t3 . '
          <span class="fw-semibold">
            <i class="bi bi-file-earmark-arrow-up me-2" aria-hidden="true"></i>
            Déposer votre formulaire signé
          </span>
          <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25 px-3 py-2">
            A faire
          </span>
        ') :
				'') .
		'
      </div>

      <!-- 3. Corps de la carte (Formulaire ou Message) -->
      ' .
		(($t3 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'nb_pj', null) >= '2')) ?'' :' '))))!=='' ?
				($t3 . (	'
        <div class="card-body">
          <p class="text-white-50">
            Votre fiche d\'inscription a été validée par l\'UES.
            Vous pouvez maintenant déposer votre fiche signée ici :
          </p>

          <!-- Formulaire simple, sans redirection complexe, géré par le bloc ajax parent -->
          ' .
			retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_JOINDRE_DOCUMENT',
	array('new',($Pile[$SP]['id_article']),'article','document'),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_statut',1468,$GLOBALS['spip_lang']))) .
			'</div>
      ')) :
				'') .
		'
      
      <!-- Optionnel : Message de succès une fois envoyé -->
      ' .
		(($t3 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'nb_pj', null) >= '2')) ?' ' :''))))!=='' ?
				($t3 . '
        <div class="card-body cadre">
          <div class="alert alert-success mb-0 d-flex align-items-center gap-2">
             <i class="bi bi-check-circle-fill"></i>
             <div>Bien reçu ! Votre formulaire signé est enregistré.</div>
          </div>
        </div>
      ') :
				'') .
		'

    </div>
    <!-- FIN DU BLOC AJAX -->

  ')) :
			'') .
	'
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
		($t1 . '
  <div class="text-white-50 small">Vous devez être connecté pour déposer une fiche.</div>
') :
		'') .
'

        
        <!-- Section pour afficher ou mettre à jour le logo -->
<!-- Logo utilisateur (logo auteur SPIP) -->
<!-- Logo utilisateur (logo auteur SPIP) -->
<div class="photos card ues-card-dark shadow-sm border-0 bg-dark bg-opacity-25 text-white mt-3">
  <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between">
    <span class="fw-semibold">
      <i class="bi bi-image me-2" aria-hidden="true"></i>
      ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['prenom'])) .
' ' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'
    </span>
    <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25 px-3 py-2">
      Photo
    </span>
  </div>

  <div class="card-body">
    ' .
(($t1 = BOUCLE_ues_me_logohtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		('

    <!-- Si pas connecté -->
    <div class="alert alert-warning mb-0">
      Vous devez être connecté pour ajouter un logo.
    </div>

    ')) .
'
  </div>
</div>

  
        
         ' .
retablir_echappements_modeles(recuperer_fond( 'inc-checklist' , array('id_article' => (table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ,
	'statut' => (table_valeur($Pile["vars"]??[], (string)'ues_statut', null)) ,
	'with_help' => 'oui' ), array('compil'=>array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_article_statut',1456,$GLOBALS['spip_lang'])), _request('connect') ?? '')));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_article_statut @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_paiement2html_1a9bcec7bac14e1cb9b5b6d06887385f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 5;
	$in[]= 7;
	$in1 = array();
	$in1[]= 'prop';
	$in1[]= 'publie';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_paiement2';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("1");
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!$zqv=sql_quote($in) OR $zqv==="''") ? 0 : ('FIELD(articles.id_rubrique,' . $zqv . ')')), ((!$zqv=sql_quote($in1) OR $zqv==="''") ? 0 : ('FIELD(articles.statut,' . $zqv . ')')));
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
		array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','_articles_paiement2',1928,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_articles_paiement2']['command'] = $command;
	$Numrows['_articles_paiement2']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
            <button class="btn btn-light ues-tabbtn" data-bs-slide-to="4" data-bs-target="#uesCarousel" type="button">
              <i class="bi bi-credit-card me-1"></i> Paiement
            </button>
          ', $Numrows['_articles_paiement2']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_paiement2 @ squelettes/rubrique-5.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/rubrique-5.html
// Temps de compilation total: 85.976 ms
//

function html_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<!DOCTYPE html>

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
<link href="assets/img/favicon.ico" rel="icon"/>
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

.ues-edition-encard{
  position: relative;
  overflow: hidden;
  border-radius: 16px;
  padding: 16px 18px;
  background: linear-gradient(135deg, rgba(255,255,255,.12), rgba(255,255,255,.04));
  border: 1px solid rgba(255,255,255,.18);
  box-shadow: 0 14px 32px rgba(0,0,0,.25);
  backdrop-filter: blur(6px);
}

.ues-edition-encard::before{
  content:"";
  position:absolute;
  inset:-2px;

  /* ✅ voile animé blanc (nacré) */
  background: linear-gradient(120deg,
    rgba(255,255,255,0),
    rgba(255,255,255,.32),
    rgba(255,255,255,0));

  transform: translateX(-70%);
  animation: ues-encard-shine 6s ease-in-out infinite;
  pointer-events:none;
  z-index:0;
  opacity:.9;
  mix-blend-mode: screen; /* joli sur fond sombre */
}


.ues-edition-encard__inner{
  position: relative;
  display: flex;
  align-items: center;
  gap: 14px;
}

.ues-edition-badge{
  display: inline-flex;
  align-items: center;
  gap: .4rem;
  flex: 0 0 auto;
  padding: 6px 12px;
  border-radius: 999px;
  background: rgba(255,214,10,.18);
  border: 1px solid rgba(255,214,10,.35);
  color: #ffd60a;
  font-weight: 800;
  letter-spacing: .04em;
  text-transform: uppercase;
  font-size: .75rem;
  white-space: nowrap;
}

.ues-edition-title{
  font-weight: 900;
  font-size: 1.05rem;
  line-height: 1.1;
  margin: 0;
  padding: 0 0 13px;
}

.ues-edition-date{
  margin-top: 3px;
  opacity: .95;
  font-size: .95rem;
}

.ues-edition-icon{
  margin-left: auto;
  font-size: 1.6rem;
  color: #ffd60a;
  opacity: .95;
  animation: ues-encard-float 2.8s ease-in-out infinite;
}

@keyframes ues-encard-shine{
  0%   { transform: translateX(-70%); opacity: .2; }
  40%  { opacity: .45; }
  60%  { opacity: .45; }
  100% { transform: translateX(70%);  opacity: .2; }
}

@keyframes ues-encard-float{
  0%, 100% { transform: translateY(0); }
  50%      { transform: translateY(-4px); }
}

/* Mobile */
@media (max-width: 575px){
  .ues-edition-encard__inner{ flex-wrap: wrap; }
  .ues-edition-icon{ margin-left: 0; }
}

/* Accessibilité */
@media (prefers-reduced-motion: reduce){
  .ues-edition-encard::before,
  .ues-edition-icon{
    animation: none !important;
  }
}
/* Si le formulaire a une réponse positive, on cache la partie saisie */
.formulaire_joindre_document .reponse_formulaire_ok ~ form {
    display: none !important;
}
</style>
</head>
<body class="index-page ues-page rub only">
<header class="header fixed-top ues-header ues-header--compact" id="header">
    <button id="backToTop" class="btn-back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>
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
    <nav class="navbar navbar-expand-xl ues-nav ues-nav--compact">
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
        <!-- Liens existants (visible partout ou Desktop) -->
        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
        <li class="nav-item"><a href="index.php#ues-slides" class="nav-link">Présentation</a></li>
        
        <!-- LIENS MOBILES UNIQUEMENT (Enseignement, Histoire...) -->
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="index.php?slide=1#ues-slides">Enseignement</a>
        </li>
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="index.php?slide=2#ues-slides">Histoire</a>
        </li>
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="index.php?slide=3#ues-slides">Une journée à l\'UES</a>
        </li>

        <!-- LIEN COMMUN -->
        <li class="nav-item"><a class="nav-link active" href="spip.php?rubrique5">Inscriptions 2026</a></li>

        <!-- LIENS MOBILES UNIQUEMENT (Connexion / Dossier) -->
        <!-- Si connecté -->
        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . '
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="spip.php?rubrique5?slide=3">Mon dossier</a>
        </li>
        ') :
		'') .
'
        <!-- Si PAS connecté -->
        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
		($t1 . '
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="spip.php?rubrique5?slide=1">Se connecter</a>
        </li>
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="spip.php?rubrique5?slide=2">S\'inscrire</a>
        </li>
        ') :
		'') .
'

        <!-- Reste des liens existants -->
        <li class="nav-item"><a class="nav-link" href="#cta">Partenaires</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
    </ul>
</div>
        </div>
    </nav>
</header>
<main class="main ues-main">
<div class="container-xxl py-3">
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . (	'

  <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
    <div class="text-white-50 small">
      <i class="bi bi-person-circle me-1" aria-hidden="true"></i>
      <strong class="text-white">Bonjour</strong>
      ' .
	retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'nom', null))))) .
	' ' .
	retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'prenom', null))))) .
	'
    </div>

    <div class="d-flex align-items-center  ms-auto">
      <div id="uesDate" class="text-white-50 small"></div>
' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo')) ?' ' :''))))))!=='' ?
			($t2 . (	'
      <a class="btn btn-sm btn-outline-light me-2" href="' .
		retablir_echappements_modeles(interdire_scripts(generer_url_public('tableau_inscriptions', ''))) .
		'">
        <i class="bi bi-clipboard-data me-1" aria-hidden="true"></i>
        Tableau inscriptions
      </a>
    ')) :
			'') .
	'
      <a class="btn btn-sm btn-outline-light" href="' .
	retablir_echappements_modeles(executer_balise_dynamique('URL_LOGOUT',
	array((self())),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',268,$GLOBALS['spip_lang']))) .
	'">
        <i class="bi bi-box-arrow-right me-1" aria-hidden="true"></i>
        Se déconnecter
      </a>
    </div>
  </div>

')) :
		'') .
'


</div>

<section class="ues-slides py-7" id="ues-slides" style="scroll-margin-top: 160px;">>
  <div class="container-xxl">
    <div class="carousel slide" data-bs-ride="false" data-bs-touch="true" id="uesCarousel">
      <div class="carousel-inner">
        <!-- SLIDE 1 (0) : Présentation -->
        <div class="carousel-item active" id="slide-inscription">>
          <div class="row align-items-start">
            <div class="col-lg-7">
              <h3 class="mb-3 ues-slide-title me-5"><i class="bi bi-wechat ues-qi"></i> <span class="txt_yellow">I</span>nscriptions</h3>

              ' .
(($t1 = BOUCLE_inscription_01html_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
              ' . $t1 . '
              ') :
		((	'
              
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . '
<!-- ===== UES — Parcours d\'inscription (Bootstrap) ===== -->
<div class="card shadow-sm border-0 mt-4 bg-dark bg-opacity-25 text-white ues-steps-card">
  <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between">
    <span class="fw-bold"><i class="bi bi-list-check me-2" aria-hidden="true"></i>Prochaines étapes</span>
    <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">Inscription 2026</span>
  </div>

  <div class="card-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
      <div class="small text-white-50">
        Les inscriptions sont prises en compte jusqu\'au <strong class="text-white">15 juin 2026</strong> <br>
(dans la limite des places disponibles).
      </div>
    </div>

    <hr class="border-light border-opacity-25">

    <div class="list-group list-group-flush rounded-3 overflow-hidden border border-light border-opacity-25">

      

      <!-- Étape 2 — Formulaire -->
      <div class="list-group-item bg-transparent text-white border-light border-opacity-25">
        <div class="d-flex align-items-start justify-content-between gap-3">
          <div class="d-flex align-items-start gap-2">
            <div class="flex-shrink-0">
              <span class="badge rounded-pill text-dark" style="background:#f6c343;">1</span>
            </div>
            <div>
              <div class="fw-semibold d-flex align-items-center gap-2">
                
                Formulaire d\'inscription
              </div>
              <div class="small text-white-50 mt-1">
                Complétez et enregistrez le formulaire, puis cliquez sur <strong class="text-white">« Envoyer votre inscription »</strong>.
                Après validation par l\'UES, imprimez, signez et téléversez une copie dans votre dossier en ligne.
              </div>

              <div class="mt-3 d-flex flex-wrap gap-2">
                <a class="btn btn-light text-dark fw-semibold"
                   href="#ues-slides"
                   data-bs-target="#uesCarousel"
                   data-bs-slide-to="3">
                  <i class="bi bi-pencil-square me-2" aria-hidden="true"></i>Accéder au formulaire
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- Étape 1 — Paiement -->
      
      <!-- Étape 3 — Confirmation -->
      <div class="list-group-item bg-transparent text-white border-light border-opacity-25">
        <div class="d-flex align-items-start gap-2">
          <div class="flex-shrink-0">
            <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">2</span>
          </div>
          <div>
            <div class="fw-semibold d-flex align-items-center gap-2">
              Confirmation
            </div>
            <div class="small text-white-50 mt-1">
              Un email comprenant votre fiche d\'inscription vous sera envoyé après validation de votre formulaire (≈ 72 h).
              Pensez à le déposer ensuite dans votre dossier en ligne.
            </div>
          </div>
        </div>
      </div>
      
      <div class="list-group-item bg-transparent text-white border-light border-opacity-25">
        <div class="d-flex align-items-start justify-content-between gap-3">
          <div class="d-flex align-items-start gap-2">
            <div class="flex-shrink-0">
              <span class="badge rounded-pill bg-light bg-opacity-10 text-white border border-light border-opacity-25">3</span>
            </div>
            <div>
              <div class="fw-semibold d-flex align-items-center gap-2">
                Paiement
              </div>
              <div class="small text-white-50 mt-1">
                Votre inscription sera validée dès réception des sommes dues. Pour toute question ou autre mode de paiement,
                contactez-nous via la section <a class="link-light" href="#contact">Contact</a>.
              </div>

              

              

            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-3">
      <a class="btn btn-sm btn-outline-light mediabox boxIframe boxWidth-90% boxHeight-90%"
         href="spip.php?page=reglement_2026">
        <i class="bi bi-shield-check me-2" aria-hidden="true"></i>Règlement / Rules 2026
      </a>

      <div class="small text-white-50">
        Besoin d\'aide ? <a class="link-light" href="mailto:inscription@univsax.com">inscription@univsax.com</a>
      </div>
    </div>
  </div>
</div>
<!-- ===== /UES — Parcours d\'inscription ===== -->
') :
			'') .
	'

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
			($t2 . '
                  
                  <div class="txt_blc12 me-5">Les inscriptions seront prises en compte jusqu&rsquo;au <strong>15 juin 2026</strong>, dans la limite des places disponibles. <br />
                    <br>
              La <span class="txt_yellow">37ème</span>  &eacute;dition de l&rsquo;Universit&eacute; Europ&eacute;enne de Saxophone se d&eacute;roulera du lundi 13 juillet au vendredi 24 juillet 2026. <br>
                <br>
                <strong>TARIFS : 1028 &euro;</strong><br>  
                <br>
                Le tarif comprend les droits d&rsquo;inscription au cours p&eacute;dagogiques (500&euro;), ainsi que l&rsquo;h&eacute;bergement (facultatif) en pension compl&egrave;te au Foyer des Jeunes Travailleurs de Gap, pendant la dur&eacute;e de l&rsquo;Universit&eacute; (528&euro;). Le coût de l\'hébergement en pension complète (petit-déjeuner, déjeuner et dîner) est à 49 .30 € par jour (uniquement à titre indicatif, pas de possibilité de fractionnement).<br>
                <br>
                <strong>TARIFS : 500&euro;</strong> (sans l\'h&eacute;bergement)<br>
                <br>
                <strong>TARIFS : 250&euro;</strong> (Auditeurs libres)<br>
                <br>
                En cas de d&eacute;sistement, un remboursement pourra &ecirc;tre effectu&eacute; (avec une retenue de 130 &euro; pour les frais de dossier).  Il n\'y aura aucun remboursement apr&egrave;s le 10 juin 2026. <br>
                <br />
                <br>
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-3">
    <!-- Bouton Règlement -->
    <div class="">
        <a href="spip.php?page=reglement_2026" class="mediabox boxIframe boxWidth-90% boxHeight-90% btn btn-outline-light btn-sm">
            Règlement / Rules 2026
        </a>
    </div>

    <!-- Boutons Connexion / Inscription -->
    <div class="d-flex flex-wrap gap-2">
        <a href="#ues-slides"
           class="btn btn-primary btn-sm px-3 d-inline-flex align-items-center gap-2"
           data-bs-target="#uesCarousel"
           data-bs-slide-to="1">
            <i class="bi bi-box-arrow-in-right" aria-hidden="true"></i>
            Se connecter
        </a>

        <a href="#ues-slides"
           class="btn btn-warning btn-sm px-3 fw-semibold d-inline-flex align-items-center gap-2"
           data-bs-target="#uesCarousel"
           data-bs-slide-to="2">
            <i class="bi bi-person-plus-fill" aria-hidden="true"></i>
            S\'inscrire
        </a>
    </div>
</div>
<br />
                </div>
') :
			'') .
	'
                </div></td>
              </tr>
            </table>
            '))) .
'
              
              
              
              
              
              
              
            </div>
            <!-- Second Column -->
            <div class="col-lg-5">
              
              
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . (	'
             

  <div class="inffo border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">

  <!-- Header -->
  <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <i class="bi bi-person-badge" aria-hidden="true"></i>
      <span class="fw-semibold">Informations sur votre compte</span>
    </div>
  </div>
' .
	BOUCLE_arthtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
  

</div>

' .
	retablir_echappements_modeles(recuperer_fond( 'inc-checklist' , array('id_article' => (table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ,
	'statut' => (table_valeur($Pile["vars"]??[], (string)'ues_statut', null)) ,
	'with_help' => 'non' ), array('compil'=>array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',328,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'<div class="ues-slide-nav d-flex gap-2 flex-wrap">
    <!-- Bouton "Inscription" -->
    <button class="btn btn-light ues-tabbtn" data-bs-slide-to="0" data-bs-target="#uesCarousel" type="button">
        <i class="bi bi-pencil-square me-1"></i> Inscription
    </button>
    
    <!-- Boutons pour les utilisateurs déconnectés -->
    ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
			($t2 . '
  <button class="btn btn-light ues-tabbtn" data-bs-slide-to="1" data-bs-target="#uesCarousel" type="button">
    <i class="bi bi-box-arrow-in-right me-1"></i> Se connecter
  </button>
  <button class="btn btn-light ues-tabbtn" data-bs-slide-to="2" data-bs-target="#uesCarousel" type="button">
    <i class="bi bi-person-plus-fill me-1"></i> S\'inscrire
  </button>
') :
			'') .
	'

    <!-- Bouton "Formulaire" - affiché uniquement pour les utilisateurs connectés -->
    ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . '
        <button class="btn btn-light ues-tabbtn" data-bs-slide-to="3" data-bs-target="#uesCarousel" type="button">
            <i class="bi bi-folder2-open me-1"></i> Formulaire
        </button>
    ') :
			'') .
	'

    <!-- Bouton "Paiement" - affiché uniquement pour utilisateurs connectés qui ont des articles -->
    ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . (	' 
        ' .
		BOUCLE_articles_paiementhtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
    ')) :
			'') .
	'
</div>
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
		($t1 . '

<div class="ues-edition-encard my-3" role="note" aria-label="Annonce édition 2026">
  <div class="ues-edition-encard__inner">
    <div class="ues-edition-main">
     <div class="ues-edition-title">La trente-septième édition arrive !</div>
      <div class="ues-edition-top">
        <span class="ues-edition-chip">
          Gap · du 13 au 23 juillet 2026
        </span>
        <span class="ues-edition-badge">
          <a href="#ues-slides"
     class=""
     data-bs-target="#uesCarousel"
     data-bs-slide-to="2">S\'inscrire</a> </span>
        
      </div>

     
      <div class="ues-edition-date">
        La trente-septième édition de l\'Université Européenne de Saxophone se déroulera à
        <strong>Gap</strong> du <strong>13</strong> au <strong>23</strong> juillet <strong>2026</strong>.
      </div>
    </div>

    <i class="bi bi-stars ues-edition-icon" aria-hidden="true"></i>
  </div>
</div>
<!-- Infos pratiques (sous l\'encart édition) -->
<div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
  <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
    <i class="bi bi-building" aria-hidden="true"></i>
    <span class="fw-semibold">Université Européenne de Saxophone</span>
  </div>

  <div class="px-3 py-2 border-top border-light border-opacity-25">
    <div class="small text-white-50">Adresse</div>
    <div class="mt-1">
      <span class="small text-white">14 chemin de Vigneaux – Romette<br>
      05000 Gap, FRANCE</span>
    </div>
  </div>
</div>

<!-- Avertissement : âge -->
<div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
  <div class="px-3 py-2 d-flex align-items-start gap-2">
    <i class="bi bi-exclamation-triangle-fill text-warning mt-1" aria-hidden="true"></i>
    <div>
      <div class="fw-semibold">Condition d\'âge</div>
      <div class="small text-white-50">
        Les étudiants doivent avoir au moins <strong class="text-white">18 ans</strong> le <strong class="text-white">13 juillet 2026</strong>.
      </div>
    </div>
  </div>
</div>

<!-- Avertissement : frais CB -->
<div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
  <div class="px-3 py-2 d-flex align-items-start gap-2">
    <i class="bi bi-exclamation-triangle-fill text-warning mt-1" aria-hidden="true"></i>
    <div>
      <div class="fw-semibold">Paiement par carte bancaire</div>
      <div class="small text-white-50">
        Les étudiants qui règlent par <strong class="text-white">carte bancaire</strong> doivent ajouter
        <strong class="text-white">38 €</strong> (frais bancaires + commission PayPal).  
        Cette somme ne sera <strong class="text-white">plus à payer</strong> à l\'arrivée à Gap.
      </div>
    </div>
  </div>
</div>

') :
		'') .
'
            </div>
          </div>
        </div>
        <!-- SLIDE 2 (1) : Enseignement -->
        <div class="carousel-item" id="slide-connexion"><br>
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
		($t1 . (	'
  <div class="row g-4 align-items-start">

    <div class="col-lg-7">
      <h3 class="mb-3 ues-slide-title me-5">
        <i class="bi bi-box-arrow-in-right me-2"></i> Se connecter
      </h3>

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . '

        <div class="alert alert-success d-flex align-items-start gap-2 mb-0 me-5" role="alert">
          <i class="bi bi-check-circle-fill mt-1" aria-hidden="true"></i>
          <div>
            <div class="fw-semibold">Vous êtes déjà connecté(e).</div>
            <div class="small">
              Vous pouvez accéder à votre dossier, au formulaire et au paiement.
            </div>
          </div>
        </div>

') :
			'') .
	'

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
			($t2 . (	'

        <div class="card ues-card-dark shadow-sm border-0 text-white me-5">
          <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between">
            <span class="fw-semibold">
              <i class="bi bi-person-lock me-2" aria-hidden="true"></i> Connexion
            </span>
            <span class="badge rounded-pill text-bg-info">Stage 2026</span>
          </div>

          <div class="card-body">
            <p class="text-white-50 mb-3">
              Pour vous inscrire à l\'Université Européenne de Saxophone 2026, vous devez posséder un compte.
            </p>

            <!-- Surface claire pour que le formulaire reste lisible -->
            <div class="ues-form-surface p-3 rounded-3 border border-light border-opacity-25">
  <div class="login">
    <!-- FORMULAIRE_LOGIN avec paramètres -->
    <!-- On ajoute |parametre_url{focus,\'\'} pour désactiver l\'autofocus -->
' .
		retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_LOGIN',
	array((parametre_url(parametre_url(parametre_url(self(),'slide','0'),'var_login',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'var_login', null),true)))),'focus',''))),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',375,$GLOBALS['spip_lang']))) .
		'
  </div>
</div>

            <div class="small text-white-50 mt-3 mb-0">
              Pas encore de compte ? Utilisez l\'onglet <strong class="text-white">"S\'inscrire"</strong>.
            </div>
          </div>
        </div>

')) :
			'') .
	'

    </div>

    <div class="col-lg-5 bloc_marg">

  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . (	'

    <!-- ✅ Connecté : checklist -->
    ' .
		(($t3 = BOUCLE_ues_lasthtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				('
    ' . $t3 . '
    ') :
				('

    <!-- (optionnel) si connecté mais pas de dossier -->
    <div class="alert alert-info mt-5 mb-0">
      Aucun dossier trouvé pour le moment.
    </div>
    ')) .
		'
  ')) :
			'') .
	'

  ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
			($t2 . '

    <!-- ❌ Pas connecté : conseils -->
    <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white h-100 mt-5">
      <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
        <i class="bi bi-info-circle" aria-hidden="true"></i>
        <span class="fw-semibold">Conseils</span>
      </div>

      <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
        <div class="padd d-flex align-items-start gap-2">
          <i class="bi bi-key" aria-hidden="true"></i>
          <div>
            Mot de passe oublié ? Utilisez le lien <strong class="text-white">"Mot de passe oublié"</strong>
            sur le formulaire de connexion.
          </div>
        </div>
      </div>

      <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
        <div class="padd d-flex align-items-start gap-2">
          <i class="bi bi-envelope" aria-hidden="true"></i>
          <div>
            Support : <a class="link-light" href="mailto:inscription@univsax.com">inscription@univsax.com</a><br>
            <span class="small">Réponse sous 24–48h (jours ouvrés).</span>
          </div>
        </div>
      </div>

      <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
        <div class="padd d-flex align-items-start gap-2">
          <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
          <div>
            Ensuite : allez sur <strong class="text-white">"S\'inscrire"</strong> pour créer un compte,
            puis <strong class="text-white">"Formulaire"</strong>.
          </div>
        </div>
      </div>
    </div>
  ') :
			'') .
	'

</div>


  </div>
  ')) :
		'') .
'
</div>

        <!-- SLIDE 3 (2) : Historique -->
        <div class="carousel-item" id="slide-inscription">
        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
		($t1 . (	'
          <div class="row g-4 align-items-start">
            <div class="col-lg-7">
  <h3 class="mb-3 ues-slide-title me-5">
    <i class="bi bi-person-plus-fill me-2"></i> S\'inscrire
  </h3>

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . '

    <div class="alert alert-success d-flex align-items-start gap-2 mb-0 me-5" role="alert">
      <i class="bi bi-check-circle-fill mt-1" aria-hidden="true"></i>
      <div>
        <div class="fw-semibold">Vous avez déjà un compte (connecté).</div>
        <div class="small">
          Vous pouvez passer au formulaire et au paiement.
        </div>
      </div>
    </div>

') :
			'') .
	'

' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
			($t2 . (	'

    <div class="card ues-card-dark shadow-sm border-0 text-white me-5">
      <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between">
        <span class="fw-semibold">
          <i class="bi bi-person-plus me-2" aria-hidden="true"></i> Création de compte
        </span>
        <span class="badge rounded-pill text-bg-info">Stage 2026</span>
      </div>

      <div class="card-body">
        <p class="text-white-50 mb-3">
          Pour vous inscrire à l\'Université Européenne de Saxophone 2026, vous devez posséder un compte.
          Créez-le ici en quelques minutes.
        </p>

        <!-- Surface claire pour que le formulaire reste lisible -->
        <div class="ues-form-surface p-3 rounded-3 border border-light border-opacity-25">
  <div class="login">
    <div class="noajax">
  ' .
		retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_INSCRIPTION',
	array(),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',415,$GLOBALS['spip_lang']))) .
		'
</div>
  </div>
</div>

        <div class="small text-white-50 mt-3 mb-0">
          Déjà un compte ? Utilisez l\'onglet <strong class="text-white"><a href="#ues-slides"
     class="btn btn-primary btn-sm px-3 d-inline-flex align-items-center gap-2"
     data-bs-target="#uesCarousel"
     data-bs-slide-to="1">Se connecter</a></strong>.
        </div>
      </div>
    </div>

')) :
			'') .
	'
</div>

<div class="col-lg-5">
  <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white h-100 mt-5">
    <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
      <i class="bi bi-info-circle" aria-hidden="true"></i>
      <span class="fw-semibold">Conseils</span>
    </div>

    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="padd d-flex align-items-start gap-2">
        <i class="bi bi-shield-check" aria-hidden="true"></i>
        <div>
          Utilisez une adresse email <strong class="text-white">valide</strong> : elle servira pour le suivi de votre dossier.
        </div>
      </div>
    </div>

    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="padd d-flex align-items-start gap-2">
        <i class="bi bi-key" aria-hidden="true"></i>
        <div>
          Choisissez un mot de passe sûr et conservez-le : il sera nécessaire pour accéder au formulaire et au paiement.
        </div>
      </div>
    </div>

    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="padd d-flex align-items-start gap-2">
        <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
        <div>
          Après création du compte : allez sur <strong class="text-white">"Se connecter"</strong>,
          puis <strong class="text-white">"Formulaire"</strong>.
        </div>
      </div>
    </div>

    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <div class="padd d-flex align-items-start gap-2">
        <i class="bi bi-envelope" aria-hidden="true"></i>
        <div>
          Support : <a class="link-light" href="mailto:inscription@univsax.com">inscription@univsax.com</a>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
')) :
		'') .
'
        </div>
        <!-- SLIDE 4 (3) : Déroulement -->
        
        <div class="carousel-item" id="slide-formulaire">
        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . (	'
  <div class="row align-items-start">

    <!-- Titre -->
   

    <!-- Colonne gauche -->
    <div class="col-12 col-lg-7">
     <div class="col-12">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
        <h3 class="mb-0 ues-slide-title me-5">
          <i class="bi bi-music-note-list me-2"></i> Formulaire d\'inscription
        </h3>
      </div>
    </div>
    
    ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . (	'
' .
		(($t3 = BOUCLE_article_formulairehtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				('  
    ' . $t3 . '
') :
				((	'

<!-- Aucun article trouvé -->
<div class="card ues-card-dark ues-create-card shadow-sm border-0 bg-dark bg-opacity-25 text-white">
  <div class="card-header bg-dark text-white">
    <span class="fw-semibold"><i class="bi bi-file-earmark-plus me-2"></i> Créer votre formulaire</span>
    <span class="badge rounded-pill bg-light text-dark px-3 py-2">Stage 2026</span>
  </div>
  <div class="card-body">
    <p class="text-white-50 mb-3">Commencez par créer votre dossier. Ensuite, le formulaire complet apparaîtra.</p>
    <div class="ues-form-surface p-3 rounded-3 border border-light border-opacity-25">
      ' .
			retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_INSCRIPTION_UES',
	array((($Pile[0]['id_rubrique'] ?? null)),(ancre_url(parametre_url(self(),'slide','3'),'ues-slides'))),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',1372,$GLOBALS['spip_lang']))) .
			'</div>
  </div>
</div>
'))) .
		'

' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
				($t3 . '
  <div class="alert alert-warning mb-0">Vous devez vous identifier pour compléter un formulaire.</div>
') :
				'') .
		'

' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
				($t3 . '
  <div class="alert alert-warning mb-0">
    Vous devez vous identifier pour compléter un formulaire.
  </div>
') :
				'') .
		'


      ')) :
			'') .
	'

      ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
			($t2 . '
        <div class="alert alert-warning mb-0">
          Vous devez vous identifier pour compléter un formulaire.
        </div>
      ') :
			'') .
	'

    </div>
    

    <!-- Colonne droite -->
    <div class="col-12 col-lg-5">

      ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
			($t2 . (	'

      ' .
		(($t3 = BOUCLE_article_statuthtml_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				('
      ' . $t3 . '
      ') :
				((	'

        <div class="alert alert-info mb-4 mt-4">
          Une fois votre compte créé, commencez par <strong>remplir le formulaire</strong> (colonne gauche).
        </div>
        
        ' .
			retablir_echappements_modeles(recuperer_fond( 'inc-checklist' , array('id_article' => (table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ,
	'statut' => (table_valeur($Pile["vars"]??[], (string)'ues_statut', null)) ,
	'with_help' => 'non' ), array('compil'=>array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',1611,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))) .
		'

      ')) :
			'') .
	'

    </div>

  </div>
  ')) :
		'') .
'
</div>

<div class="carousel-item" id="slide-paiement">
[(' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))) .
'|oui) 
  <div class="row align-items-start">

    <!-- COLONNE GAUCHE (7) -->
    <div class="col-12 col-lg-5">
      <h3 class="mb-3 ues-slide-title">
        <i class="bi bi-credit-card me-2"></i> Paiement
      </h3>

      <div class="inffo border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
        <!-- Header -->
        <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-credit-card-2-front" aria-hidden="true"></i>
            <span class="fw-semibold">Modes de paiement</span>
          </div>
        </div>

        <!-- Body -->
        <div class="px-3 py-3">
          <p class="mb-3">
            Votre inscription sera validée dès réception des sommes dues.
            Pour toutes autres questions et/ou autres modes de paiement, n\'hésitez pas à nous contacter.
          </p>

          <h6 class="mb-3">Choisir son mode de paiement :</h6>

          <div class="d-grid gap-2" style="max-width: 320px;">
            <button type="button" class="btn btn-outline-light" data-paytab-target="#pay-virement">
              Virement
            </button>
            <button type="button" class="btn btn-outline-light" data-paytab-target="#pay-cheque">
              Chèque
            </button>
            <button type="button" class="btn btn-outline-light" data-paytab-target="#pay-carte">
              Carte bancaire
            </button>
          </div>

          <small class="x-small text-white-50 d-block mt-3">
            Sélectionne un mode de paiement pour afficher les informations.
          </small>
        </div>
      </div>
    </div>

    <!-- COLONNE DROITE (5) : checklist/panneaux -->
    <div class="col-12 col-lg-7">

      <div class="">

        <div class="">

          <!-- ✅ Par défaut : checklist visible -->
          <div class="pay-default mt-3">
            ' .
retablir_echappements_modeles(recuperer_fond( 'inc-checklist' , array('id_article' => (table_valeur($Pile["vars"]??[], (string)'ues_id_article', null)) ,
	'statut' => (table_valeur($Pile["vars"]??[], (string)'ues_statut', null)) ,
	'with_help' => 'non' ), array('compil'=>array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',388,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
'</div>

          <!-- ✅ Panneaux : cachés au départ -->
          <div id="pay-virement"  class="pay-panel d-none" hidden>

  <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
    <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
      <i class="bi bi-bank" aria-hidden="true"></i>
      <span class="fw-semibold">Paiement / Virement bancaire</span>
    </div>

    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
      <p>
        Le paiement par virement permet, tout comme le paiement par carte bancaire, une sécurité totale de l\'opération.
      </p>

      <p class="mb-2"><strong>TARIFS : 1028 €</strong></p>
      <p class="mb-2">
        Le tarif comprend les droits d\'inscription au cours pédagogiques (500€), ainsi que l\'hébergement (facultatif)
        en pension complète au Foyer des Jeunes Travailleurs de Gap, pendant la durée de l\'Université (528€).
        Hébergement et restauration en pension complète, soit 48€/jour (uniquement à titre indicatif, pas de possibilité de fractionnement).
      </p>

      <p class="mb-1"><strong>TARIFS : 500€</strong> (sans l\'hébergement)</p>
      <p class="mb-3"><strong>TARIFS : 250€</strong> (Auditeurs libres)</p>

      <p class="mb-3"><strong>Indiquer le nom de l\'étudiant lors du virement</strong></p>

      <a href="images/ues_rib.jpg" target="_blank" rel="noopener">
        <img
          src="images/ues_rib.jpg"
          class="pay-img"
          alt="RIB - Université Européenne de Saxophone"
          loading="lazy"
        />
      </a>
      <div class="mt-2">
        <small class="text-white-50">Cliquer sur l\'image pour l\'ouvrir en grand.</small>
      </div>
    </div>
  </div>

</div>

          <div id="pay-cheque"  class="pay-panel d-none" hidden>

          <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
        <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
          <i class="bi bi-person-badge" aria-hidden="true"></i>
      <span class="fw-semibold">Paiement / Chèque</span>
        </div>
        <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">

            <p class="mb-2"><br>
<strong>TARIFS : 1028 €</strong></p>
            <p class="mb-2">
              The price includes the registration fee for the pedagogical courses (500€), as well as the (optional) accommodation
              with full board at the Foyer des Jeunes Travailleurs de Gap, for the duration of the University (528€).
              Accommodation and catering with full board, i.e. 48€/day (only as an indication, no possibility of splitting).
            </p>

            <p class="mb-1"><strong>TARIFS : 500€</strong> (sans l\'hébergement)</p>
            <p class="mb-3"><strong>TARIFS : 250€</strong> (Auditeurs libres)</p>

            <p>
              Nous acceptons le paiement par chèque pour les clients résidents en France, titulaires de comptes domiciliés
              dans des banques situées en France.
            </p>

            <p class="mb-2">
              Adressez-nous par courrier un chèque bancaire ou postal libellé à l\'ordre de l\'
              <strong>"Université Européenne de Saxophone"</strong> l\'adresse suivante (accompagné de votre bulletin d\'inscription signé) :
            </p>

            <address class="mb-0 text-white">
              <strong>Université Européenne de Saxophone</strong><br/>
              14 chemin de Vigneaux - Romette<br/>
              05000 Gap FRANCE
            </address>


        </div>
      </div>
          
            <!-- ⚠️ IMPORTANT : ne pas remettre la checklist ici (elle est déjà dans pay-default) -->
          </div>

          <div id="pay-carte"  class="pay-panel d-none" hidden>
  <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
    <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
      <i class="bi bi-credit-card-2-front" aria-hidden="true"></i>
      <span class="fw-semibold">Paiement / Carte bancaire</span>
    </div>

    <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">

      <p class="mb-2"><br><strong>TARIFS : 1066 €</strong> (1028€ + 38€*)</p>
      <p class="mb-2">
        Le tarif comprend les droits d\'inscription au cours pédagogiques (500€), ainsi que l\'hébergement (facultatif)
        en pension complète au Foyer des Jeunes Travailleurs de Gap, pendant la durée de l\'Université (528€).
        Hébergement et restauration en pension complète, soit 48€/jour (uniquement à titre indicatif, pas de possibilité de fractionnement).
      </p>

      <p class="mb-1"><strong>TARIFS : 538 €</strong> (500€ + 38€*) : sans l\'hébergement</p>
      <p class="mb-3"><strong>TARIFS : 288 €</strong> (250€ + 38€*) : Auditeurs libres</p>

      <p>
        En cliquant sur "Paiement" vous serez alors automatiquement redirigé vers une page sécurisée du site Paypal.
      </p>

      <div id="smart-button-container">
        <div style="text-align: center;">
          <div style="margin-bottom: 1.25rem;">
            <p class="mb-2">Paiement :</p>
            <select id="item-options">
              <option value="avec hebergement" price="1066">avec hebergement - 1066 EUR</option>
              <option value="sans hebergement" price="538">sans hebergement - 538 EUR</option>
              <option value="Auditeurs libres" price="288">Auditeurs libres - 288 EUR</option>
            </select>
            <select style="visibility: hidden" id="quantitySelect"></select>
          </div>
          <div id="paypal-button-container">
          <div class="mb-2">
  <label for="pp-nom" class="form-label text-white mb-1">Nom / Prénom (obligatoire)</label>
  <input id="pp-nom" type="text" class="form-control" placeholder="Ex : Dupont Jean" required>
  <div class="form-text text-white-50">Sera transmis avec le paiement pour identifier votre dossier.</div>
</div></div>
        </div>
      </div>
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . (	'
<script>
  window.UES_ID_AUTEUR = "' .
	retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))) .
	'";
</script>
')) :
		'') .
'
<script src="https://www.paypal.com/sdk/js?client-id=AYxzgXqNMRnGmqZdfzaR0eUNFc-5YZFSugPxITbHutRicB4u0s7NbLD46t77gVYnNfrigzE-wTc2OjNP&enable-funding=venmo&disable-funding=card&currency=EUR" data-sdk-integration-source="button-factory"></script>
      <script>
function initPayPalButton() {
  var shipping = 0;
  var itemOptions = document.querySelector("#smart-button-container #item-options");
  var quantity = parseInt();
  var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");

  paypal.Buttons({
    // ✅ force uniquement le bouton PayPal (supprime "Carte bancaire")
    fundingSource: paypal.FUNDING.PAYPAL,

    style: { shape: \'rect\', color: \'gold\', layout: \'vertical\', label: \'paypal\' },

    createOrder: function(data, actions) {
      const nom = (document.getElementById(\'pp-nom\')?.value || \'\').trim();
      if (!nom) {
        alert("Merci de renseigner votre Nom / Prénom.");
        return;
      }

      var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
      var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));

      if(quantitySelect.options.length > 0) {
        quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
      } else {
        quantity = 1;
      }

      var priceTotal = Math.round((quantity * selectedItemPrice + shipping) * 100) / 100;
      var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

      return actions.order.create({
        purchase_units: [{
          description: `UES 2026 - ${selectedItemDescription} - ${nom}`.slice(0, 127),
          custom_id: nom.slice(0, 127),
          amount: {
            currency_code: \'EUR\',
            value: priceTotal,
            breakdown: {
              item_total: { currency_code: \'EUR\', value: itemTotalValue },
              shipping: { currency_code: \'EUR\', value: shipping }
            }
          },
          items: [{
            name: selectedItemDescription,
            unit_amount: { currency_code: \'EUR\', value: selectedItemPrice },
            quantity: quantity
          }]
        }]
      });
    },

    onApprove: function(data, actions) {
      return actions.order.capture().then(function(orderData) {
        const element = document.getElementById(\'paypal-button-container\');
        element.innerHTML = \'<h3>Paiement enregistré. Merci !</h3>\';
      });
    },

    onError: function(err) { console.log(err); }
  }).render(\'#paypal-button-container\');
}
initPayPalButton();
</script>

    </div>
  </div>

</div>

        </div>
      </div>

      <!-- Optionnel : encart aide -->
      <div class="border border-light border-opacity-25 rounded-3 overflow-hidden text-white mt-3">
        <div class="bg-light bg-opacity-10 px-3 py-2 d-flex align-items-center gap-2">
          <i class="bi bi-info-circle" aria-hidden="true"></i>
          <span class="fw-semibold">Aide</span>
        </div>
        <div class="px-3 py-2 border-top border-light border-opacity-25 text-white-50 small">
          Besoin d\'aide ? <a class="link-light" href="mailto:inscription@univsax.com">inscription@univsax.com</a>
        </div>
      </div>

    </div>

  </div>
  ]
</div>
<!-- ✅ MENU SLIDES : à remettre ici -->
      <div class="ues-slide-nav d-flex gap-2 flex-wrap">
        <!-- Bouton "Inscription" -->
        <button class="btn btn-light ues-tabbtn" data-bs-slide-to="0" data-bs-target="#uesCarousel" type="button">
          <i class="bi bi-pencil-square me-1"></i> Inscription
        </button>

        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?'' :' '))))))!=='' ?
		($t1 . '
  <button class="btn btn-light ues-tabbtn" data-bs-slide-to="1" data-bs-target="#uesCarousel" type="button">
    <i class="bi bi-box-arrow-in-right me-1"></i> Se connecter
  </button>
  <button class="btn btn-light ues-tabbtn" data-bs-slide-to="2" data-bs-target="#uesCarousel" type="button">
    <i class="bi bi-person-plus-fill me-1"></i> S\'inscrire
  </button>
') :
		'') .
'

        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . '
          <button class="btn btn-light ues-tabbtn" data-bs-slide-to="3" data-bs-target="#uesCarousel" type="button">
            <i class="bi bi-folder2-open me-1"></i> Formulaire
          </button>
        ') :
		'') .
'

        ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)) ?' ' :''))))))!=='' ?
		($t1 . (	'
          ' .
	BOUCLE_articles_paiement2html_1a9bcec7bac14e1cb9b5b6d06887385f($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
        ')) :
		'') .
'
      </div>

    </div><!-- /#uesCarousel -->
  </div><!-- /.container-xxl -->
</section>
<!-- Bandeau logos (après #hero) -->
<div aria-label="Logos partenaires" class="ues-logo-strip-wrap">
<p class="ues-logo-strip__title">Avec la participation de :</p>
<section class="ues-logo-strip" id="logo-strip">
<div class="ues-logo-strip__container">
<div class="ues-logo-strip__row">
<img alt="Henri SELMER Paris" class="ues-logo ues-logo--selmer" loading="lazy" src="assets/img/ues/Henri_Selmer_Paris_logo.svg"/>
<img alt="Vandoren" class="ues-logo ues-logo--vandoren" loading="lazy" src="assets/img/ues/vandoren.svg"/>
<img alt="Ville de Gap" class="ues-logo ues-logo--gap" loading="lazy" src="assets/img/ues/Logo_ville_de_Gap.svg"/>
<img alt="Hautes-Alpes — le département" class="ues-logo ues-logo--hautes-alpes" loading="lazy" src="assets/img/ues/Logo_Hautes_Alpes.svg"/>

</div>
</div>
</section>
</div>

    <!-- ============================
         CONTACT
         ============================ -->
    <section id="contact" class="ues-contact py-7">
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
              <p class="small">14 chemin de Vigneaux<br>
                Romette<br>05000 Gap FRANCE</p>
            </div>
          </div>

          <div class="ues-contact__item">
            <span class="ues-contact__icon" aria-hidden="true">
              <i class="bi bi-telephone-inbound"></i>
            </span>
            <div>
              <h4>Téléphone:</h4>
              <p>+033 (0)4.92.45.06.48</p>
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
          
          <div class="ues-contact__item">
            <span class="ues-contact__icon" aria-hidden="true">
              <i class="bi bi-house-check"></i>
            </span>
            <div>
              <h4>Hébergement:</h4>
              <p>Foyer Des Jeunes Travailleurs<br>
73 Boulevard Georges Pompidou<br>
05000 Gap FRANCE	 <br>
<br>
Tel : +033 (0)4 92 40 24 00</p>
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
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',713,$GLOBALS['spip_lang']))) .
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
                <div class="logo ues_logo"> <img src="assets/img/ues/ues_blc.png" alt="UES saxophone stage">
                </div>
                <h4 class="social-title">
                  Suivez-nous :
                  <a href="https://www.facebook.com/univsax/" target="_blank" rel="noopener">
                    <i class="bi bi-facebook"></i>
                  </a>
                </h4>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer f-link">
                <h3>Menu</h3>
                  <ul>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="index.php">Accueil</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="1">Présentation</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="spip.php?rubrique5">Inscription</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="2">Enseignement</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="3">Histoire</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#ues-slides" data-bs-target="#uesCarousel" data-bs-slide-to="4">Une journée à l\'UES</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#ues-concerts">Les concerts</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#part">Nos partenaires</a></li>
                    <li class="nav-item"><i class="bi bi-check2-square"></i> <a href="#contact">Nous contacter</a></li>
                  </ul>
                </nav>
                </B_nav>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-12">
              <div class="single-footer f-link">
                <h3>Espace étudiants</h3>
                <ul>
                  <li class="puce"><i class="bi bi-check2-square"></i> <a href="index.php">Accueil</a></li>
        <li class="puce"><i class="bi bi-check2-square"></i> <a href="index.php">S\'inscrire</a></li>
        <li class="puce"><i class="bi bi-check2-square"></i> <a href="index.php">Formulaire</a></li>
        <li class="puce"><i class="bi bi-check2-square"></i> <a href="index.php">Téléchargement</a></li>
      <li class="puce"><i class="bi bi-check2-square"></i> <a href="index.php">Chat UES</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer newsletter">
                <h3>S\'inscrire à la newsletter</h3>
                <p>Recevez les dernières actualités, programme et prochaines projection débat de Cinecitoyen.</p>
                ' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_NEWSLETTER_SUBSCRIBE',
	array(),
	array('squelettes/rubrique-5.html','html_1a9bcec7bac14e1cb9b5b6d06887385f','',777,$GLOBALS['spip_lang']))) .
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
              <p class="copyright-text">© 2026 Université Européenne de Saxophone - Tous droits réservés</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <p class="copyright-owner">Designed and Developed by GD</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Waves (DOIT rester DANS le footer) -->
  <div class="ues-footer-waves" aria-hidden="true">
    <svg class="ues-waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
      <defs>
        <path id="ues-gentle-wave" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"></path>
      </defs>
      <g class="ues-parallax">
  <use href="#ues-gentle-wave" x="48" y="0"></use>
  <use href="#ues-gentle-wave" x="48" y="4"></use>
</g>

    </svg>
  </div>
</footer>

<!-- ======= Bandeau partenaires (EN DEHORS du footer, sous la vague) ======= -->
<section id="cta" class="cta partenaire">
  <div class="container">
    <div class="row" data-aos="zoom-out">
      <div class="col-lg-12">
        <div class="ues-logo-strip__container">
<div class="ues-logo-strip__row">
<img alt="Henri SELMER Paris" class="ues-logo ues-logo--selmer" loading="lazy" src="assets/img/ues/Henri_Selmer_Paris_logo.svg"/>
<img alt="Vandoren" class="ues-logo ues-logo--vandoren" loading="lazy" src="assets/img/ues/vandoren.svg"/>
<img alt="Ville de Gap" class="ues-logo ues-logo--gap" loading="lazy" src="assets/img/ues/Logo_ville_de_Gap.svg"/>
<img alt="Hautes-Alpes — le département" class="ues-logo ues-logo--hautes-alpes" loading="lazy" src="assets/img/ues/Logo_Hautes_Alpes.svg"/>

</div>
</div>
      </div>
    </div>
  </div>
</section>
  ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['insert_footer'] ?? null))) .
'
  <script>
(function(){
  function fixInstituerToggle(){
    const root = document.querySelector(\'#slide-formulaire .ues-status-form\');
    if (!root) return;

    const inst = root.querySelector(\'.instituer_objet\');
    const form = root.querySelector(\'.formulaire_instituer_objet-article-1437\') || root.querySelector(\'.formulaire_instituer_objet\');
    if (!inst || !form) return;

    // 1) Supprimer les boutons "Changer" dupliqués injectés par SPIP
    const buttons = inst.querySelectorAll(\'.statut_actuel .btn_modifier\');
    buttons.forEach((b, i) => { if (i > 0) b.remove(); });

    // 2) Garantir qu\'il y a un bouton "Changer" fonctionnel
    let btn = inst.querySelector(\'.statut_actuel .btn_modifier\');
    if (!btn){
      btn = document.createElement(\'button\');
      btn.type = "button";
      btn.className = "btn_mini btn_secondaire btn_modifier float-end";
      btn.textContent = "Changer";
      inst.querySelector(\'.statut_actuel .editer-label\')?.after(btn);
    }

    // 3) Handler "Changer" => ouvre le formulaire
    btn.addEventListener(\'click\', () => {
      if (window.jQuery) {
        window.jQuery(form).stop(true, true).slideDown();
      } else {
        form.style.display = "";
      }
      inst.classList.remove(\'form-closed\');
      btn.setAttribute(\'aria-expanded\', \'true\');
    }, { passive: true });

    // 4) Handler "Annuler" => ferme le formulaire mais laisse le bouton cliquable
    const cancel = inst.querySelector(\'button[name="annuler"]\');
    if (cancel){
      cancel.addEventListener(\'click\', () => {
        // laisse SPIP faire son slideUp, on renforce juste l\'état ensuite
        setTimeout(() => {
          inst.classList.add(\'form-closed\');
          btn.setAttribute(\'aria-expanded\', \'false\');
          btn.style.display = "inline-flex"; // au cas où une règle le cache
        }, 0);
      });
    }
  }

  document.addEventListener(\'DOMContentLoaded\', fixInstituerToggle);
  if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(fixInstituerToggle);
})();
</script>
<script>
(function () {
  function ensureBootstrap(cb) {
    if (window.bootstrap && window.bootstrap.Carousel) return cb();

    const existing = document.querySelector(\'script[data-ues-bootstrap]\');
    if (existing) {
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

  function renderUesDate(){
    const el = document.getElementById("uesDate");
    if(!el) return;

    const today = new Date();
    const jours = ["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
    const mois  = ["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];
    const d = String(today.getDate()).padStart(2,"0");
    el.textContent = `${jours[today.getDay()]} ${d} ${mois[today.getMonth()]} ${today.getFullYear()}`;
  }

  function initCarousel(){
    const carouselEl = document.querySelector("#uesCarousel");
    if (!carouselEl || !window.bootstrap) return;

    const slidesSection = document.querySelector("#ues-slides");
    const items = Array.from(carouselEl.querySelectorAll(".carousel-item"));
    const carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl, { interval:false, touch:true });

    // --- MAPPING DES IDs POUR LE MOBILE ---
    // Assurez-vous que vos <div class="carousel-item"> ont bien ces IDs dans le HTML
    const slideIds = [
        "slide-presentation", // data-bs-slide-to="0"
        "slide-connexion",    // data-bs-slide-to="1"
        "slide-inscription",  // data-bs-slide-to="2"
        "slide-formulaire",   // data-bs-slide-to="3"
        "slide-paiement"      // data-bs-slide-to="4"
    ];

    const navButtons = Array.from(
      document.querySelectorAll(\'.ues-tabbtn[data-bs-target="#uesCarousel"][data-bs-slide-to]\')
    );

    const setActiveButton = (activeIndex) => {
      navButtons.forEach((btn) => {
        const isActive = Number(btn.getAttribute("data-bs-slide-to")) === activeIndex;
        btn.classList.toggle("is-active", isActive);
        btn.setAttribute("aria-current", isActive ? "true" : "false");
        btn.classList.toggle("btn-dark", isActive);
        btn.classList.toggle("btn-light", !isActive);
      });
    };

    // initial
    const initialActive = carouselEl.querySelector(".carousel-item.active");
    if(initialActive) {
        setActiveButton(Math.max(0, items.indexOf(initialActive)));
    }

    // update on slide (Desktop only usually)
    carouselEl.addEventListener("slid.bs.carousel", (e) => {
      const idx = (typeof e.to === "number")
        ? e.to
        : Math.max(0, items.indexOf(carouselEl.querySelector(".carousel-item.active")));
      setActiveButton(idx);
    });

    // --- GESTION DES CLICS (Mobile vs Desktop) ---
    // On cible à la fois les liens <a> et les boutons <button>
    document
      .querySelectorAll(\'a[data-bs-target="#uesCarousel"][data-bs-slide-to], button[data-bs-target="#uesCarousel"][data-bs-slide-to]\')
      .forEach((link) => {
        link.addEventListener("click", (e) => {
          const idx = parseInt(link.getAttribute("data-bs-slide-to"), 10);
          if (Number.isNaN(idx)) return;

          // Détection Mobile (< 768px correspond au breakpoint MD de Bootstrap)
          if (window.innerWidth < 768) {
              e.preventDefault(); // Empêche le comportement par défaut (remonter en haut)
              
              const targetId = slideIds[idx];
              const targetEl = document.getElementById(targetId);

              if (targetEl) {
                  // Calcul du scroll avec marge pour le header fixe (env. 150px)
                  const headerOffset = 150;
                  const elementPosition = targetEl.getBoundingClientRect().top;
                  const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                  window.scrollTo({
                      top: offsetPosition,
                      behavior: "smooth"
                  });
              } else {
                  console.warn("Element cible introuvable pour mobile : #" + targetId);
              }

          } else {
              // Comportement Desktop Classique
              e.preventDefault();
              carousel.to(idx);
              (slidesSection || carouselEl).scrollIntoView({ behavior: "smooth", block: "start" });
              if (location.hash !== "#ues-slides") history.replaceState(null, "", "#ues-slides");
          }
        });
      });

    // URL ?slide= (Desktop mainly)
    const params = new URLSearchParams(window.location.search);
    const slideParam = parseInt(params.get("slide"), 10);
    if (!Number.isNaN(slideParam) && slideParam >= 0 && slideParam < items.length) {
      carousel.to(slideParam);

      params.delete("slide");
      const qs = params.toString();
      const newUrl = window.location.pathname + (qs ? ("?" + qs) : "") + window.location.hash;
      history.replaceState(null, "", newUrl);

      (slidesSection || carouselEl).scrollIntoView({ behavior: "auto", block: "start" });
    }

    return { carousel };
  }

  // init
  document.addEventListener("DOMContentLoaded", () => {
    renderUesDate();
    ensureBootstrap(() => {
      const api = initCarousel();

      // Après Ajax SPIP : remettre date + rester sur slide 3 si logo modifié
      const onAjax = () => {
        renderUesDate();

        // Si le formulaire logo est présent (zone rechargée), on force slide 3 (Desktop)
        if (api?.carousel && document.querySelector(\'#slide-formulaire .photos .formulaire_editer_logo\')) {
            if (window.innerWidth >= 768) {
                api.carousel.to(3);
                const slidesSection = document.querySelector("#ues-slides");
                const carouselEl = document.querySelector("#uesCarousel");
                (slidesSection || carouselEl).scrollIntoView({ behavior: "auto", block: "start" });
            }
        }
      };

      if (typeof window.onAjaxLoad === "function") {
        window.onAjaxLoad(onAjax);
      }
    });
  });
})();
</script>
<script>
(function(){
  function patchStatutLabel(){
    document
      .querySelectorAll(\'#slide-formulaire .instituer_objet .statut_prepa label .statut-label\')
      .forEach((el) => {
        if (el.textContent.trim() === "proposé à l\'évaluation") {
          el.textContent = "Envoyer mon formulaire";
        }
      });
  }

  document.addEventListener("DOMContentLoaded", patchStatutLabel);
  if (typeof window.onAjaxLoad === "function") {
    window.onAjaxLoad(patchStatutLabel);
  }
})();
</script>
<script>
(function(){
  function patchStatutLabels(){
    // 1) Badge du statut actuel (prop => "Inscription envoyée")
    document
      .querySelectorAll(\'#slide-formulaire .statut_actuel .statut.statut--prop .statut-label\')
      .forEach((el) => { el.textContent = "Inscription envoyée"; });

    // 2) Option de changement de statut (radio prop)
    document
      .querySelectorAll(\'#slide-formulaire fieldset.editer_statut .choix input[value="prop"] + label .statut-label\')
      .forEach((el) => { el.textContent = "Envoyer mon formulaire"; });
  }

  document.addEventListener("DOMContentLoaded", patchStatutLabels);

  // si SPIP recharge en Ajax (logo/statut/etc.)
  if (typeof window.onAjaxLoad === "function") {
    window.onAjaxLoad(patchStatutLabels);
  }
  // 3) Badge du statut actuel (publie => "Formulaire validé")
document
  .querySelectorAll(\'#slide-formulaire .statut_actuel .statut.statut--publie .statut-label\')
  .forEach((el) => { el.textContent = "Formulaire validé"; });

// Fallback si jamais la classe n\'est pas présente mais le texte est "publié en ligne"
document
  .querySelectorAll(\'#slide-formulaire .statut_actuel .statut-label\')
  .forEach((el) => {
    if (/publi(é|e)\\s+en\\s+ligne/i.test(el.textContent.trim())) {
      el.textContent = "Formulaire validé";
    }
  });
// 3) Option de changement de statut (radio publie)
document
  .querySelectorAll(\'#slide-formulaire fieldset.editer_statut .choix input[value="publie"] + label .statut-label\')
  .forEach((el) => { el.textContent = "Formulaire validé"; });

// 4) Badge du statut actuel (si déjà publié)
document
  .querySelectorAll(\'#slide-formulaire .statut_actuel .statut.statut--publie .statut-label\')
  .forEach((el) => { el.textContent = "Formulaire validé"; });

// 5) Fallback (si SPIP change le HTML) : remplace tout "publié en ligne" dans le bloc statut
document
  .querySelectorAll(\'#slide-formulaire .ues-status-form .statut-label\')
  .forEach((el) => {
    if (/publi(é|e)\\s+en\\s+ligne/i.test(el.textContent.trim())) {
      el.textContent = "Formulaire validé";
    }
  });
  // 6) Option de changement de statut (radio poubelle)
document
  .querySelectorAll(\'#slide-formulaire fieldset.editer_statut .choix input[value="poubelle"] + label .statut-label\')
  .forEach((el) => { el.textContent = "Envoyer à la poubelle"; });

// 7) Fallback : remplace le texte si jamais le HTML change
document
  .querySelectorAll(\'#slide-formulaire .ues-status-form .statut-label\')
  .forEach((el) => {
    if (/^\\s*à\\s+la\\s+poubelle\\s*$/i.test(el.textContent.trim())) {
      el.textContent = "Envoyer à la poubelle";
    }
  });


})();
</script>
<script id="ues-menu-indicator">
document.addEventListener(\'DOMContentLoaded\', () => {
  const menu = document.querySelector(\'.ues-menu\');
  if (!menu) return;

  // On n\'active l\'effet qu\'en desktop (menu en ligne)
  const mq = window.matchMedia(\'(min-width: 992px)\');
  if (!mq.matches) return;

  menu.classList.add(\'ues-menu--indicator\');

  const indicator = document.createElement(\'span\');
  indicator.className = \'ues-menu__indicator\';
  menu.appendChild(indicator);

  const links = Array.from(menu.querySelectorAll(\'.nav-link\'));
  if (!links.length) return;

  const getActive = () => menu.querySelector(\'.nav-link.active\') || links[0];

  function moveTo(el){
    if (!el) { indicator.style.opacity = \'0\'; return; }

    const r = el.getBoundingClientRect();
    const m = menu.getBoundingClientRect();

    const pad = 12; // pour imiter ton ancien left/right:12px
    const left = (r.left - m.left) + pad;
    const width = Math.max(0, r.width - pad * 2);

    indicator.style.width = width + \'px\';
    indicator.style.transform = `translateX(${left}px)`;
    indicator.style.opacity = \'1\';
  }

  // Position initiale sur l\'active
  requestAnimationFrame(() => moveTo(getActive()));

  // Hover/focus -> on déplace la barre
  links.forEach(a => {
    a.addEventListener(\'mouseenter\', () => moveTo(a));
    a.addEventListener(\'focus\', () => moveTo(a));

    // Optionnel : si tu veux que le clic fixe l\'active visuellement
    a.addEventListener(\'click\', () => {
      links.forEach(l => l.classList.remove(\'active\'));
      a.classList.add(\'active\');
      moveTo(a);
    });
  });

  // Quand on sort du menu -> retour sur l\'active
  menu.addEventListener(\'mouseleave\', () => moveTo(getActive()));

  // Resize -> recalc
  window.addEventListener(\'resize\', () => moveTo(getActive()));

  // Si le menu se replie/déplie (Bootstrap), on recalc à l\'ouverture
  const collapse = document.getElementById(\'uesNav\');
  if (collapse) {
    collapse.addEventListener(\'shown.bs.collapse\', () => moveTo(getActive()));
  }
});
</script>
<script id="ues-status-toggle">
document.addEventListener(\'DOMContentLoaded\', () => {
  document.querySelectorAll(\'#slide-formulaire .ues-status-form\').forEach((box, idx) => {
    // Évite double init
    if (box.dataset.uesInit === \'1\') return;
    box.dataset.uesInit = \'1\';

    const statutActuel = box.querySelector(\'.statut_actuel\');
    if (!statutActuel) return;

    // Bouton qui ouvre/ferme (celui déjà présent / injecté)
    let toggle = box.querySelector(\'.statut_actuel .btn_modifier\');
    if (!toggle) return;

    // Crée le conteneur repliable et y déplace tout ce qui suit .statut_actuel
    let collapse = box.querySelector(\'.ues-status-form__collapse\');
    if (!collapse) {
      collapse = document.createElement(\'div\');
      collapse.className = \'ues-status-form__collapse\';
      collapse.id = `uesStatusCollapse-${idx}`;

      let node = statutActuel.nextSibling;
      while (node) {
        const next = node.nextSibling;
        // Ne déplace pas le collapse lui-même
        if (!(node.nodeType === 1 && node.classList && node.classList.contains(\'ues-status-form__collapse\'))) {
          collapse.appendChild(node);
        }
        node = next;
      }
      box.appendChild(collapse);
    }

    // Accessibilité
    toggle.setAttribute(\'aria-controls\', collapse.id);
    toggle.setAttribute(\'aria-expanded\', \'false\');

    const labelOpen  = toggle.textContent.trim() || \'Changer\';
    const labelClose = \'Fermer\';

    function setOpen(open){
      box.classList.toggle(\'is-open\', open);
      toggle.setAttribute(\'aria-expanded\', open ? \'true\' : \'false\');
      toggle.textContent = open ? labelClose : labelOpen;

      if (open){
        // hauteur animée
        collapse.style.maxHeight = collapse.scrollHeight + \'px\';
        // focus premier champ
        const first = collapse.querySelector(\'input, select, textarea, button\');
        if (first) first.focus({ preventScroll: true });
      } else {
        collapse.style.maxHeight = \'0px\';
      }
    }

    // Fermé au départ
    collapse.style.maxHeight = \'0px\';
    setOpen(false);

    // Ouvrir/fermer via le bouton "Changer"
    toggle.addEventListener(\'click\', (e) => {
      e.preventDefault();
      setOpen(!box.classList.contains(\'is-open\'));
    });

    // Bouton "Annuler" => referme (sans bloquer le comportement SPIP)
    const btnAnnuler = collapse.querySelector(\'button[name="annuler"], input[name="annuler"]\');
    if (btnAnnuler) {
      btnAnnuler.addEventListener(\'click\', () => requestAnimationFrame(() => setOpen(false)));
    }

    // Resize : recalc hauteur si ouvert
    window.addEventListener(\'resize\', () => {
      if (box.classList.contains(\'is-open\')) {
        collapse.style.maxHeight = collapse.scrollHeight + \'px\';
      }
    });

    // Optionnel : si erreurs, ouvrir automatiquement
    if (collapse.querySelector(\'.erreur_message, .erreur\')) setOpen(true);
  });
});
</script>
<script>
(function(){
  function initPaiementTabs(){
    const root = document.getElementById(\'slide-paiement\');
    if (!root) return;

    // Evite double init (SPIP ajax / reload partiels)
    if (root.dataset.payInit === \'1\') return;
    root.dataset.payInit = \'1\';

    const def = root.querySelector(\'.pay-default\');
    const buttons = Array.from(root.querySelectorAll(\'[data-paytab-target]\'));

    // On cible explicitement les panneaux (robuste)
    const panels = buttons
      .map(b => root.querySelector(b.getAttribute(\'data-paytab-target\')))
      .filter(Boolean);

    function hidePanel(p){
      p.hidden = true;
      p.classList.add(\'d-none\');
    }

    function showPanel(p){
      p.hidden = false;
      p.classList.remove(\'d-none\');
    }

    function setButtonsActive(activeBtn){
      buttons.forEach(btn => {
        const active = (btn === activeBtn);
        btn.classList.toggle(\'active\', active);
        btn.setAttribute(\'aria-pressed\', active ? \'true\' : \'false\');
      });
    }

    function showDefault(){
      // checklist visible
      if (def) def.classList.remove(\'d-none\');

      // panneaux cachés
      panels.forEach(hidePanel);

      // aucun bouton actif
      setButtonsActive(null);
    }

    function showOnly(panelToShow, btn){
      if (def) def.classList.add(\'d-none\');

      panels.forEach(p => (p === panelToShow ? showPanel(p) : hidePanel(p)));

      setButtonsActive(btn);
    }

    // Etat initial
    showDefault();

    // Click boutons
    buttons.forEach(btn => {
      btn.type = \'button\';
      btn.setAttribute(\'aria-pressed\', \'false\');

      btn.addEventListener(\'click\', () => {
        const sel = btn.getAttribute(\'data-paytab-target\');
        const panel = sel ? root.querySelector(sel) : null;
        if (!panel) return;

        // Re-clic sur le même => retour checklist
        if (btn.classList.contains(\'active\')) {
          showDefault();
          return;
        }

        showOnly(panel, btn);
      });
    });
  }

  document.addEventListener(\'DOMContentLoaded\', initPaiementTabs);
  if (typeof window.onAjaxLoad === "function") window.onAjaxLoad(initPaiementTabs);
})();
</script>

</body>
</html>');

	return analyse_resultat_skel('html_1a9bcec7bac14e1cb9b5b6d06887385f', $Cache, $page, 'squelettes/rubrique-5.html');
}
