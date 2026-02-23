<?php

/*
 * Squelette : ../prive/squelettes/page.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:00 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/page.html
// Temps de compilation total: 0.107 ms
//

function html_56125d7b28000164906b937e7ac4134a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Security-Policy: frame-ancestors \'none\'') . '); ?'.'>') .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type-page\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type-page', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true)))),true)))) . ',
	\'composition\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'composition', null), ''),true)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/page.html\',\'html_56125d7b28000164906b937e7ac4134a\',\'\',2,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
');

	return analyse_resultat_skel('html_56125d7b28000164906b937e7ac4134a', $Cache, $page, '../prive/squelettes/page.html');
}
