<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 01:04:27 GMT
 * Boucles :   _illustrations, _documents
 */ 

function BOUCLE_illustrationshtml_19c41d6a575079bd21dd45c0d6543bee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['pagination'] = array((isset($Pile[0]['debut_illustrations']) ? $Pile[0]['debut_illustrations'] : null), 50);
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles((((defined('_COMPORTEMENT_HISTORIQUE_PORTFOLIO')?constant('_COMPORTEMENT_HISTORIQUE_PORTFOLIO'):'')) ?'' :' '));

	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_illustrations';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("L1.rang_lien",
		"0+documents.titre AS num1",
		"CASE ( 0+documents.titre ) WHEN 0 THEN 1 ELSE 0 END AS sinum1",
		"documents.date",
		"documents.id_document",
		"L1.id_objet",
		"L1.objet");
		$command['orderby'] = array('L1.rang_lien', 'sinum1, num1', 'documents.date', 'documents.id_document');
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.media', "'image'"), 
			array('=', 'L1.id_objet', sql_quote(($Pile[0]['id_objet'] ?? null), '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote(($Pile[0]['objet'] ?? null), '','varchar(25) NOT NULL DEFAULT \'\'')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('documents.statut', $in) : 
			array('=', 'documents.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html','html_19c41d6a575079bd21dd45c0d6543bee','_illustrations',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_illustrations']['compteur_boucle'] = 0;
	$Numrows['_illustrations']['command'] = $command;
	$Numrows['_illustrations']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_illustrations']) ? $Pile[0]['debut_illustrations'] : _request('debut_illustrations');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_illustrations'] = quete_debut_pagination('id_document',$Pile[0]['@id_document'] = substr($debut_boucle,1),50,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_illustrations']['total']-1)/(50))*(50)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_illustrations']['total'] : $debut_boucle + 49), $Numrows['_illustrations']['total'] - 1);
	$Numrows['_illustrations']['grand_total'] = $Numrows['_illustrations']['total'];
	$Numrows['_illustrations']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_illustrations']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_illustrations']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_illustrations']['compteur_boucle']++;
		if ($Numrows['_illustrations']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_illustrations']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
	' .
retablir_echappements_modeles(
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/document_desc', array('id_document' => $Pile[$SP]['id_document'] ,
	'id_objet' => $Pile[$SP]['id_objet'] ,
	'objet' => $Pile[$SP]['objet'] ,
	'espace_prive' => ($Pile[0]['espace_prive'] ?? null) ,
	'lang' => $GLOBALS["spip_lang"] ,
	'id_document'=>$Pile[$SP]['id_document'],
	'id'=>$Pile[$SP]['id_document'],
	'recurs'=>(++$recurs)), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html','html_19c41d6a575079bd21dd45c0d6543bee','_illustrations',19,$GLOBALS['spip_lang']), 'trim'=>true), ''))
));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_illustrations @ ../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_documentshtml_19c41d6a575079bd21dd45c0d6543bee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['pagination'] = array((isset($Pile[0]['debut_documents']) ? $Pile[0]['debut_documents'] : null), 50);
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("L1.rang_lien",
		"0+documents.titre AS num1",
		"CASE ( 0+documents.titre ) WHEN 0 THEN 1 ELSE 0 END AS sinum1",
		"documents.date",
		"documents.id_document",
		"L1.id_objet",
		"L1.objet");
		$command['orderby'] = array('L1.rang_lien', 'sinum1, num1', 'documents.date', 'documents.id_document');
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('NOT', 
			array('=', 'documents.media', "'image'")), 
			array('NOT', 
			array('=', 'documents.mode', "'vignette'")), 
			array('=', 'L1.id_objet', sql_quote(($Pile[0]['id_objet'] ?? null), '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote(($Pile[0]['objet'] ?? null), '','varchar(25) NOT NULL DEFAULT \'\'')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('documents.statut', $in) : 
			array('=', 'documents.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html','html_19c41d6a575079bd21dd45c0d6543bee','_documents',43,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_documents']['compteur_boucle'] = 0;
	$Numrows['_documents']['command'] = $command;
	$Numrows['_documents']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_documents']) ? $Pile[0]['debut_documents'] : _request('debut_documents');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_documents'] = quete_debut_pagination('id_document',$Pile[0]['@id_document'] = substr($debut_boucle,1),50,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_documents']['total']-1)/(50))*(50)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_documents']['total'] : $debut_boucle + 49), $Numrows['_documents']['total'] - 1);
	$Numrows['_documents']['grand_total'] = $Numrows['_documents']['total'];
	$Numrows['_documents']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_documents']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_documents']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_documents']['compteur_boucle']++;
		if ($Numrows['_documents']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_documents']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
	' .
retablir_echappements_modeles(
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/document_desc', array('id_document' => $Pile[$SP]['id_document'] ,
	'id_objet' => $Pile[$SP]['id_objet'] ,
	'objet' => $Pile[$SP]['objet'] ,
	'espace_prive' => ($Pile[0]['espace_prive'] ?? null) ,
	'lang' => $GLOBALS["spip_lang"] ,
	'id_document'=>$Pile[$SP]['id_document'],
	'id'=>$Pile[$SP]['id_document'],
	'recurs'=>(++$recurs)), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html','html_19c41d6a575079bd21dd45c0d6543bee','_documents',44,$GLOBALS['spip_lang']), 'trim'=>true), ''))
));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_documents @ ../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html
// Temps de compilation total: 13.675 ms
//

function html_19c41d6a575079bd21dd45c0d6543bee($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

  Squelette
  (c) xxx
  Distribue sous licence GPL

') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' pour permettre d\'inclure ce squelette plusieurs fois dans une page, fournir un parametre id_unique dans l\'appel') :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nbdocs'] = '0')) .
'<div id="portfolios' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_unique', null),true))) .
'" class="portfolios">
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Toutes les images') :
		'') .
'
' .
(($t1 = BOUCLE_illustrationshtml_19c41d6a575079bd21dd45c0d6543bee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3 class="portfolios__titre"><span class="image_loading"></span>' .
		_T('medias:info_illustrations') .
		'</h3>
<div class="liste_items documents ordonner_rang_lien clearfix" id="illustrations' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_unique', null),true))) .
		'"  data-cookie-affichage="illustrations" data-lien="' .
		retablir_echappements_modeles(interdire_scripts(attribut_html(concat(($Pile[0]['objet'] ?? null),'/',(($Pile[0]['id_objet'] ?? null)))))) .
		'">
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_illustrations"]["grand_total"],
 		'_illustrations',
		isset($Pile[0]['debut_illustrations'])?$Pile[0]['debut_illustrations']:intval(_request('debut_illustrations')),
		50, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
<div class="sortable">
') . $t1 . (	'
</div>
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_illustrations"]["grand_total"],
 		'_illustrations',
		isset($Pile[0]['debut_illustrations'])?$Pile[0]['debut_illustrations']:intval(_request('debut_illustrations')),
		50, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
' .
		(($t3 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', (interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))), (invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))))?" ":"")) ?' ' :'')))))!=='' ?
				($t3 . (	'
	<div class="actions-liste groupe-btns groupe-btns_mini float-end">
		' .
			(($t4 = strval(retablir_echappements_modeles((((($Numrows['_illustrations']['compteur_boucle'] ?? 0) > '1')) ?' ' :''))))!=='' ?
					($t4 . (	'
			' .
				retablir_echappements_modeles(ajouter_class(bouton_action(_T('medias:lien_tout_enlever'),(invalideur_session($Cache, generer_action_auteur('dissocier_document',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
						'-' .
						(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
						'-I/image'),(invalideur_session($Cache, ancre_url(self(),'illustrations')))))),'ajax noscroll btn_secondaire',_T('medias:lien_tout_enlever_verif')),'tout_dissocier')) .
				'
		')) :
					'') .
			(($t4 = strval(retablir_echappements_modeles('')))!=='' ?
					($t4 . ' Le masquage de ce bouton est géré en JS ') :
					'') .
			'
		' .
			retablir_echappements_modeles(ajouter_class(bouton_action(_T('medias:lien_tout_desordonner'),(invalideur_session($Cache, generer_action_auteur('desordonner_liens_documents',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
					'-' .
					(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
					'-I/image'),(invalideur_session($Cache, ancre_url(self(),'illustrations')))))),'ajax btn_secondaire',_T('medias:lien_tout_desordonner_verif')),'tout_desordonner')) .
			'
	</div>
')) :
				'') .
		'
</div>
' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nbdocs'] = (plus(table_valeur($Pile["vars"]??[], (string)'nbdocs', null),(($Numrows['_illustrations']['grand_total'] ?? $Numrows['_illustrations']['total'] ?? 0)))))))) :
		((	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/portfolio-images-legacy') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html\',\'html_19c41d6a575079bd21dd45c0d6543bee\',\'\',34,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
'))) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' puis les documents') :
		'') .
'
' .
(($t1 = BOUCLE_documentshtml_19c41d6a575079bd21dd45c0d6543bee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3 class="portfolios__titre">' .
		_T('medias:info_documents') .
		'</h3>
<div class="liste_items documents ordonner_rang_lien clearfix" id="documents' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_unique', null),true))) .
		'" data-cookie-affichage="documents" data-lien="' .
		retablir_echappements_modeles(interdire_scripts(attribut_html(concat(($Pile[0]['objet'] ?? null),'/',(($Pile[0]['id_objet'] ?? null)))))) .
		'">
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_documents"]["grand_total"],
 		'_documents',
		isset($Pile[0]['debut_documents'])?$Pile[0]['debut_documents']:intval(_request('debut_documents')),
		50, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
<div class="sortable">
') . $t1 . (	'
</div>
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_documents"]["grand_total"],
 		'_documents',
		isset($Pile[0]['debut_documents'])?$Pile[0]['debut_documents']:intval(_request('debut_documents')),
		50, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
' .
		(($t3 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', (interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))), (invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))))?" ":"")) ?' ' :'')))))!=='' ?
				($t3 . (	'
	<div class="actions-liste groupe-btns groupe-btns_mini float-end">
		' .
			(($t4 = strval(retablir_echappements_modeles((((($Numrows['_documents']['compteur_boucle'] ?? 0) > '1')) ?' ' :''))))!=='' ?
					($t4 . (	'
			' .
				retablir_echappements_modeles(ajouter_class(bouton_action(_T('medias:lien_tout_enlever'),(invalideur_session($Cache, generer_action_auteur('dissocier_document',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
						'-' .
						(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
						'-D/document'),(invalideur_session($Cache, ancre_url(self(),'documents')))))),'ajax noscroll btn_secondaire',_T('medias:lien_tout_enlever_verif')),'tout_dissocier')) .
				'
		')) :
					'') .
			(($t4 = strval(retablir_echappements_modeles('')))!=='' ?
					($t4 . ' Le masquage de ce bouton est géré en JS ') :
					'') .
			'
		' .
			retablir_echappements_modeles(ajouter_class(bouton_action(_T('medias:lien_tout_desordonner'),(invalideur_session($Cache, generer_action_auteur('desordonner_liens_documents',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
					'-' .
					(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
					'-D/document'),(invalideur_session($Cache, ancre_url(self(),'documents')))))),'ajax btn_secondaire',_T('medias:lien_tout_desordonner_verif')),'tout_desordonner')) .
			'
	</div>
')) :
				'') .
		'
</div>
' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nbdocs'] = (plus(table_valeur($Pile["vars"]??[], (string)'nbdocs', null),(($Numrows['_documents']['grand_total'] ?? $Numrows['_documents']['total'] ?? 0)))))))) :
		'') .
'

<script>

/* Sur la page d\'une rubrique, recharger la boîte d\'info en cas de rechargement ajax */
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((((((($Pile[0]['objet'] ?? null) == 'rubrique')) AND (((defined('_AJAX')?constant('_AJAX'):'')))) ?' ' :'')) AND (((table_valeur($Pile["vars"]??[], (string)'nbdocs', null) == '1')))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . '
if (window.jQuery) jQuery(\'#navigation .box.info\').ajaxReload();') :
		'') .
'

/* Gestion des différents modes d\'affichages, du tri des documents, et des rechargements ajax */
' .
retablir_echappements_modeles(filtre_compacte_dist(recuperer_fond( 'javascript/gestion_listes_documents.js' , array(), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html','html_19c41d6a575079bd21dd45c0d6543bee','',18,$GLOBALS['spip_lang'])), _request('connect') ?? ''),'js')) .
'
</script>
</div>
');

	return analyse_resultat_skel('html_19c41d6a575079bd21dd45c0d6543bee', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/portfolio-documents.html');
}
