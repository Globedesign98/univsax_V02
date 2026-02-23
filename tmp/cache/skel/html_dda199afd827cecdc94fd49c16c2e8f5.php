<?php

/*
 * Squelette : ../prive/squelettes/contenu/article_edit.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/article_edit.html
// Temps de compilation total: 0.072 ms
//

function html_dda199afd827cecdc94fd49c16c2e8f5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/contenu/objet_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette('article') . ',
	\'id_objet\' => ' . argumenter_squelette(retablir_echappements_modeles(($Pile[0]['id_article'] ?? null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/article_edit.html\',\'html_dda199afd827cecdc94fd49c16c2e8f5\',\'\',1,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>';

	return analyse_resultat_skel('html_dda199afd827cecdc94fd49c16c2e8f5', $Cache, $page, '../prive/squelettes/contenu/article_edit.html');
}
