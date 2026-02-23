<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 01:04:27 GMT
 * Boucles :   _illustrations, _portfolio
 */ 

function BOUCLE_illustrationshtml_0438f0211092771545a15d8d58d76e2b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['pagination'] = array((isset($Pile[0]['debut_illustrations']) ? $Pile[0]['debut_illustrations'] : null), 50);
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
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.media', "'image'"), 
			array('=', 'documents.mode', "'image'"), 
			array('=', 'L1.id_objet', sql_quote(($Pile[0]['id_objet'] ?? null), '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote(($Pile[0]['objet'] ?? null), '','varchar(25) NOT NULL DEFAULT \'\'')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('documents.statut', $in) : 
			array('=', 'documents.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html','html_0438f0211092771545a15d8d58d76e2b','_illustrations',7,$GLOBALS['spip_lang'])
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
	'recurs'=>(++$recurs)), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html','html_0438f0211092771545a15d8d58d76e2b','_illustrations',8,$GLOBALS['spip_lang']), 'trim'=>true), ''))
));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_illustrations @ ../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_portfoliohtml_0438f0211092771545a15d8d58d76e2b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['pagination'] = array((isset($Pile[0]['debut_portfolio']) ? $Pile[0]['debut_portfolio'] : null), 50);
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_portfolio';
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
			array('=', 'documents.media', "'image'"), 
			array('=', 'documents.mode', "'document'"), 
			array('=', 'L1.id_objet', sql_quote(($Pile[0]['id_objet'] ?? null), '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote(($Pile[0]['objet'] ?? null), '','varchar(25) NOT NULL DEFAULT \'\'')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('documents.statut', $in) : 
			array('=', 'documents.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html','html_0438f0211092771545a15d8d58d76e2b','_portfolio',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_portfolio']['compteur_boucle'] = 0;
	$Numrows['_portfolio']['command'] = $command;
	$Numrows['_portfolio']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_portfolio']) ? $Pile[0]['debut_portfolio'] : _request('debut_portfolio');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_portfolio'] = quete_debut_pagination('id_document',$Pile[0]['@id_document'] = substr($debut_boucle,1),50,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_portfolio']['total']-1)/(50))*(50)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_portfolio']['total'] : $debut_boucle + 49), $Numrows['_portfolio']['total'] - 1);
	$Numrows['_portfolio']['grand_total'] = $Numrows['_portfolio']['total'];
	$Numrows['_portfolio']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_portfolio']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_portfolio']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_portfolio']['compteur_boucle']++;
		if ($Numrows['_portfolio']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_portfolio']['compteur_boucle']-1 > $fin_boucle) break;
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
	'recurs'=>(++$recurs)), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html','html_0438f0211092771545a15d8d58d76e2b','_portfolio',29,$GLOBALS['spip_lang']), 'trim'=>true), ''))
));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_portfolio @ ../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html
// Temps de compilation total: 3.373 ms
//

function html_0438f0211092771545a15d8d58d76e2b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' D\'abord les images illustration') :
		'') .
'
' .
(($t1 = BOUCLE_illustrationshtml_0438f0211092771545a15d8d58d76e2b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3 class="portfolios__titre"><span class="image_loading"></span>' .
		_T('medias:info_illustrations') .
		'</h3>
<div class="liste_items documents ordonner_rang_lien" id="illustrations' .
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
		(($t3 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', (interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))), (invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))))?" ":"")))))!=='' ?
				($t3 . (	'
	<div class="actions-liste groupe-btns">
	' .
			retablir_echappements_modeles(bouton_action(_T('medias:lien_tout_enlever'),(invalideur_session($Cache, generer_action_auteur('dissocier_document',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
					'-' .
					(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
					'-I/image'),(invalideur_session($Cache, ancre_url(self(),'illustrations')))))),'ajax noscroll tout_dissocier',_T('medias:lien_tout_enlever_verif'))) .
			'
	' .
			retablir_echappements_modeles(bouton_action(_T('medias:lien_tout_desordonner'),(invalideur_session($Cache, generer_action_auteur('desordonner_liens_documents',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
					'-' .
					(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
					'-I/image'),(invalideur_session($Cache, ancre_url(self(),'illustrations')))))),'ajax tout_desordonner',_T('medias:lien_tout_desordonner_verif'))) .
			'
	</div>
')) :
				'') .
		'
</div>
' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nbdocs'] = (plus(table_valeur($Pile["vars"]??[], (string)'nbdocs', null),(($Numrows['_illustrations']['grand_total'] ?? $Numrows['_illustrations']['total'] ?? 0)))))))) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' puis les images du portfolio') :
		'') .
'
' .
(($t1 = BOUCLE_portfoliohtml_0438f0211092771545a15d8d58d76e2b($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<h3 class="portfolios__titre">' .
		_T('medias:info_portfolio') .
		'</h3>
<div class="liste_items documents ordonner_rang_lien" id="portfolio' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_unique', null),true))) .
		'" data-cookie-affichage="portfolio" data-lien="' .
		retablir_echappements_modeles(interdire_scripts(attribut_html(concat(($Pile[0]['objet'] ?? null),'/',(($Pile[0]['id_objet'] ?? null)))))) .
		'">
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_portfolio"]["grand_total"],
 		'_portfolio',
		isset($Pile[0]['debut_portfolio'])?$Pile[0]['debut_portfolio']:intval(_request('debut_portfolio')),
		50, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
<div class="sortable">
') . $t1 . (	'
</div>
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_portfolio"]["grand_total"],
 		'_portfolio',
		isset($Pile[0]['debut_portfolio'])?$Pile[0]['debut_portfolio']:intval(_request('debut_portfolio')),
		50, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
' .
		(($t3 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', (interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))), (invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))))?" ":"")))))!=='' ?
				($t3 . (	'
	<div class="actions-liste groupe-btns">
		' .
			retablir_echappements_modeles(bouton_action(_T('medias:lien_tout_enlever'),(invalideur_session($Cache, generer_action_auteur('dissocier_document',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
					'-' .
					(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
					'-I/document'),(invalideur_session($Cache, ancre_url(self(),'portfolio')))))),'ajax noscroll tout_dissocier',_T('medias:lien_tout_enlever_verif'))) .
			'
		' .
			retablir_echappements_modeles(bouton_action(_T('medias:lien_tout_desordonner'),(invalideur_session($Cache, generer_action_auteur('desordonner_liens_documents',(	(invalideur_session($Cache, ($Pile[0]['id_objet'] ?? null))) .
					'-' .
					(interdire_scripts(invalideur_session($Cache, ($Pile[0]['objet'] ?? null)))) .
					'-I/document'),(invalideur_session($Cache, ancre_url(self(),'illustrations')))))),'ajax tout_desordonner',_T('medias:lien_tout_desordonner_verif'))) .
			'
	</div>
')) :
				'') .
		'
</div>
' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nbdocs'] = (plus(table_valeur($Pile["vars"]??[], (string)'nbdocs', null),(($Numrows['_portfolio']['grand_total'] ?? $Numrows['_portfolio']['total'] ?? 0)))))))) :
		'') .
'
');

	return analyse_resultat_skel('html_0438f0211092771545a15d8d58d76e2b', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/portfolio-images-legacy.html');
}
