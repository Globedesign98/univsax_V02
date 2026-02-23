<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _simple
 */ 

function BOUCLE_simplehtml_757615f399cbbf056506b0efe7dc2c8d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)) ?'' :' ')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_simple';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html','html_757615f399cbbf056506b0efe7dc2c8d','_simple',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies-vues/radio') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html\',\'html_757615f399cbbf056506b0efe7dc2c8d\',\'\',3,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_simple @ ../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html
// Temps de compilation total: 0.158 ms
//

function html_757615f399cbbf056506b0efe7dc2c8d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' data peut être une chaine qu\'on sait décomposer ') :
		'') .
'
' .
(($t1 = BOUCLE_simplehtml_757615f399cbbf056506b0efe7dc2c8d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies-vues/selection_multiple') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html\',\'html_757615f399cbbf056506b0efe7dc2c8d\',\'\',5,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
'))) .
'
');

	return analyse_resultat_skel('html_757615f399cbbf056506b0efe7dc2c8d', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies-vues/selection.html');
}
