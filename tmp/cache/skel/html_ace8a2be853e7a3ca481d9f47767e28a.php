<?php

/*
 * Squelette : ../prive/squelettes/contenu/article.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _proposer, _article
 */ 

function BOUCLE_proposerhtml_ace8a2be853e7a3ca481d9f47767e28a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, ((((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '1comite')) AND ((invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', (invalideur_session($Cache, $Pile[$SP]['id_article'])))?" ":""))))) ?' ' :''))));

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_proposer';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'], '','bigint(20) NOT NULL AUTO_INCREMENT')), 
			array('=', 'articles.statut', "'prepa'"), 'JOIN-L1' => 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'L1.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(20) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/article.html','html_ace8a2be853e7a3ca481d9f47767e28a','_proposer',31,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(boite_ouvrir('', 'pop notice')) .
'<p>' .
_T('public|spip|ecrire:texte_proposer_publication') .
'</p>
' .
retablir_echappements_modeles(boite_pied()) .
'
	' .
retablir_echappements_modeles(bouton_action(_T('public|spip|ecrire:bouton_demande_publication'),(invalideur_session($Cache, generer_action_auteur('instituer_objet',(	'article-' .
		(invalideur_session($Cache, $Pile[$SP]['id_article'])) .
		'-prop'),(invalideur_session($Cache, self()))))),'btn_secondaire',_T('public|spip|ecrire:confirm_changer_statut'))) .
'
' .
retablir_echappements_modeles(boite_fermer()) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_proposer @ ../prive/squelettes/contenu/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articlehtml_ace8a2be853e7a3ca481d9f47767e28a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true) == 'article')));

	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre",
		"articles.surtitre",
		"articles.titre AS titre_rang",
		"articles.soustitre",
		"articles.statut");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(($Pile[0]['id_article'] ?? null), '','bigint(20) NOT NULL AUTO_INCREMENT')), 
			array('REGEXP', 'articles.statut', "'.*'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/article.html','html_ace8a2be853e7a3ca481d9f47767e28a','_article',2,$GLOBALS['spip_lang'])
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
retablir_echappements_modeles(changer_typo(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']))) .
'
' .
retablir_echappements_modeles(boite_ouvrir((($t2 = strval((interdire_scripts(((($a = supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre'))))))!=='' ?
			((	'

	' .
		(($t3 = strval((invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', (invalideur_session($Cache, $Pile[$SP]['id_article'])))?" ":"")))))!=='' ?
				($t3 . (	'

		' .
			(($t4 = strval((((afficher_qui_edite($Pile[$SP]['id_article'],'article')) ?'' :' '))))!=='' ?
					($t4 . (	'
			' .
				(filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
					($Pile[$SP]['id_article']))),_T('public|spip|ecrire:icone_modifier_article'),'article','edit','right ajax preload')) .
				'
		')) :
					'') .
			'
		' .
			(($t4 = strval((((afficher_qui_edite($Pile[$SP]['id_article'],'article')) ?' ' :''))))!=='' ?
					($t4 . (	'
			' .
				(filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
					($Pile[$SP]['id_article']))),(afficher_qui_edite($Pile[$SP]['id_article'],'article')),'warning-24','','right edition_deja ajax preload')) .
				'
		')) :
					'') .
			'
	')) :
				'') .
		'
	' .
		(($t3 = strval((interdire_scripts(filtrer('image_graver',filtrer('image_reduire',typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0]),'440','300'))))))!=='' ?
				((	'<h4 class=\'surtitre ' .
			('') .
			'\'>') . $t3 . '</h4>') :
				'') .
		'
	<h1' .
		(($t3 = strval(('')))!=='' ?
				(' class=\'' . $t3 . '\'') :
				'') .
		'>' .
		(($t3 = strval((calculer_rang_smart($Pile[$SP]['titre_rang'], 'article', $Pile[$SP]['id_article'], $Pile[0]))))!=='' ?
				('<span class=\'rang\'>' . $t3 . '.</span> ') :
				'')) . $t2 . (	(filtre_balise_img_dist(chemin_image((string)'article-24.png'),'article','cadre-icone')) .
		'</h1>
	' .
		(($t3 = strval((interdire_scripts(typo($Pile[$SP]['soustitre'], "TYPO", $connect, $Pile[0])))))!=='' ?
				((	'<h2 class=\'soustitre ' .
			('') .
			'\'>') . $t3 . '</h2>') :
				'') .
		'
')) :
			''), 'simple fiche_objet')) .
'
' .
retablir_echappements_modeles(changer_typo('')) .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'options'] = (array()))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'prop')) ?' ' :'')))))!=='' ?
		($t1 . (	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'options'] = (array('label_date' => _T('public|spip|ecrire:texte_date_publication_objet'))))) .
	' ')) :
		'') .
'
<div class="ajax">
	' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_DATER',
	array('article',($Pile[$SP]['id_article']),'',(table_valeur($Pile["vars"]??[], (string)'options', null))),
	array('../prive/squelettes/contenu/article.html','html_ace8a2be853e7a3ca481d9f47767e28a','_article',9,$GLOBALS['spip_lang']))) .
'</div>

<div class="ajax">
	' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_EDITER_LIENS',
	array('auteurs','article',($Pile[$SP]['id_article'])),
	array('../prive/squelettes/contenu/article.html','html_ace8a2be853e7a3ca481d9f47767e28a','_article',12,$GLOBALS['spip_lang']))) .
'</div>

<!--affiche_milieu-->
' .
BOUCLE_proposerhtml_ace8a2be853e7a3ca481d9f47767e28a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'prop')) ?' ' :'')))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(message_alerte_ouvrir('', 'info', null, null)) .
	'<p>' .
	_T('public|spip|ecrire:text_article_propose_publication') .
	'</p>
' .
	retablir_echappements_modeles(message_alerte_fermer()) .
	'
')) :
		'') .
'

<div id="wysiwyg">
	<h2 class="invisible">' .
_T('public|spip|ecrire:previsualisation') .
'</h2>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/contenu/article') . ', array(\'id\' => ' . argumenter_squelette(retablir_echappements_modeles($Pile[$SP]['id_article'])) . ',
	\'id_article\' => ' . argumenter_squelette(retablir_echappements_modeles($Pile[$SP]['id_article'])) . ',
	\'virtuel\' => ' . argumenter_squelette('oui') . ',
	\'wysiwyg\' => ' . argumenter_squelette('1') . ',
	\'espace_prive\' => ' . argumenter_squelette(($Pile[0]['espace_prive'] ?? null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/contenu/article.html\',\'html_ace8a2be853e7a3ca481d9f47767e28a\',\'\',22,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('wysiwyg') . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
</div>

<div class="nettoyeur"></div>

' .
(($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', (invalideur_session($Cache, $Pile[$SP]['id_article'])))?" ":"")))))!=='' ?
		($t1 . (	'

	' .
	(($t2 = strval(retablir_echappements_modeles(((afficher_qui_edite($Pile[$SP]['id_article'],'article')) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
			($Pile[$SP]['id_article']))),_T('public|spip|ecrire:icone_modifier_article'),'article','edit','right ajax preload')) .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((afficher_qui_edite($Pile[$SP]['id_article'],'article')) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(filtre_icone_verticale_dist(generer_url_ecrire('article_edit',(	'id_article=' .
			($Pile[$SP]['id_article']))),(afficher_qui_edite($Pile[$SP]['id_article'],'article')),'warning-24','','right edition_deja ajax preload')) .
		'
	')) :
			'') .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(pipeline( 'afficher_complement_objet' , (array('args' => (array('type' => 'article', 'id' => ($Pile[$SP]['id_article']))), 'data' => '<div class="nettoyeur"></div>')) )) .
retablir_echappements_modeles(boite_fermer()) .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'enfants'] = '')) .
retablir_echappements_modeles(pipeline( 'affiche_enfants' , (array('args' => (array('exec' => (table_valeur($Pile[0]??[], (string)'exec', null)), 'objet' => 'article', 'id_objet' => ($Pile[$SP]['id_article']))), 'data' => (table_valeur($Pile["vars"]??[], (string)'enfants', null)))) )) .
'

' .
(($t1 = strval(retablir_echappements_modeles((((defined('_AJAX')?constant('_AJAX'):'')) ?' ' :''))))!=='' ?
		($t1 . (	'
	<script>
		reloadExecPage(\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true))) .
	'\',\'#navigation,#chemin,#extra\');
	</script>
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
		spip_log(intval(1000*$timer)."ms BOUCLE_article @ ../prive/squelettes/contenu/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/article.html
// Temps de compilation total: 4.218 ms
//

function html_ace8a2be853e7a3ca481d9f47767e28a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', 'article', (invalideur_session($Cache, ($Pile[0]['id_article'] ?? null))))?" ":"")))) .
'
' .
(($t1 = BOUCLE_articlehtml_ace8a2be853e7a3ca481d9f47767e28a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	retablir_echappements_modeles(((table_valeur($Pile[0]??[], (string)'exec', null) == 'article_edit') ? (recuperer_fond( 'prive/squelettes/contenu/article_edit' , array_merge($Pile[0],array('redirect' => '' ,
	'retourajax' => 'oui' )), array('compil'=>array('../prive/squelettes/contenu/article.html','html_ace8a2be853e7a3ca481d9f47767e28a','',0,$GLOBALS['spip_lang'])), _request('connect') ?? '')):(sinon_interdire_acces('','',_T('public|spip|ecrire:info_aucun_article'))))) .
	'
'))) .
'
');

	return analyse_resultat_skel('html_ace8a2be853e7a3ca481d9f47767e28a', $Cache, $page, '../prive/squelettes/contenu/article.html');
}
