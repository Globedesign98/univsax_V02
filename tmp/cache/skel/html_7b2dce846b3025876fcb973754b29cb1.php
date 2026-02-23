<?php

/*
 * Squelette : ../prive/squelettes/extra/article.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _extra
 */ 

function BOUCLE_extrahtml_7b2dce846b3025876fcb973754b29cb1(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == 'article')));

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_extra';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.id_rubrique",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(($Pile[0]['id_article'] ?? null), '','bigint(20) NOT NULL AUTO_INCREMENT')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('articles.statut', $in) : 
			array('=', 'articles.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/extra/article.html','html_7b2dce846b3025876fcb973754b29cb1','_extra',1,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'statut'] = (interdire_scripts(invalideur_session($Cache, statuts_articles_visibles(table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'where'] = (concat('articles.id_article!=',($Pile[$SP]['id_article']))))) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles-memerubrique') . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette(retablir_echappements_modeles($Pile[$SP]['id_rubrique'])) . ',
	\'where\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'where', null))) . ',
	\'statut\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'statut', null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/extra/article.html\',\'html_7b2dce846b3025876fcb973754b29cb1\',\'\',4,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>

');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_extra @ ../prive/squelettes/extra/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/extra/article.html
// Temps de compilation total: 0.700 ms
//

function html_7b2dce846b3025876fcb973754b29cb1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_extrahtml_7b2dce846b3025876fcb973754b29cb1($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == 'article_edit')) ?' ' :'')))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/extra/article_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/extra/article.html\',\'html_7b2dce846b3025876fcb973754b29cb1\',\'\',7,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>') :
			'') .
	'
')));

	return analyse_resultat_skel('html_7b2dce846b3025876fcb973754b29cb1', $Cache, $page, '../prive/squelettes/extra/article.html');
}
