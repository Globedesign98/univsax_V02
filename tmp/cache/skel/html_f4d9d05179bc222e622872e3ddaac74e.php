<?php

/*
 * Squelette : ../prive/squelettes/navigation/dist.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 02:23:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/dist.html
// Temps de compilation total: 0.353 ms
//

function html_f4d9d05179bc222e622872e3ddaac74e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_match_dist(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true),'configurer_')) ?' ' :'')))))!=='' ?
		($t1 . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/configurer') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/dist.html\',\'html_f4d9d05179bc222e622872e3ddaac74e\',\'\',2,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
')) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'objet_exec'] = (interdire_scripts(trouver_objet_exec(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true)))))) .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'objet_exec', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'f'] = ((table_valeur($Pile["vars"]??[], (string)'objet_exec/edition', null) ? 'objet_edit':'objet')))) .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/echafaudage/navigation/' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'f', null)))) . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'objet_exec/type', null))) . ',
	\'id_objet\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(table_valeur($Pile["vars"]??[], (string)'objet_exec/id_table_objet', null)), null),true)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/dist.html\',\'html_f4d9d05179bc222e622872e3ddaac74e\',\'\',5,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_f4d9d05179bc222e622872e3ddaac74e', $Cache, $page, '../prive/squelettes/navigation/dist.html');
}
