<?php

/*
 * Squelette : ../prive/squelettes/hierarchie/dist.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/hierarchie/dist.html
// Temps de compilation total: 0.961 ms
//

function html_839ff22da254e4291551e6a9de7727fe($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- hierarchie -->
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'objet_exec'] = (interdire_scripts(trouver_objet_exec(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true)))))) .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'objet_exec', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'objet'] = (table_valeur($Pile["vars"]??[], (string)'objet_exec/type', null)))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id_objet'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)(table_valeur($Pile["vars"]??[], (string)'objet_exec/id_table_objet', null)), null), '0'),true))))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id_parent'] = (((table_valeur($Pile["vars"]??[], (string)'objet', null) == 'rubrique') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_parent', null), (interdire_scripts(generer_objet_info((table_valeur($Pile["vars"]??[], (string)'id_objet', null)), (table_valeur($Pile["vars"]??[], (string)'objet', null)), 'id_parent', '', [])))),true))):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_rubrique', null), (interdire_scripts(generer_objet_info((table_valeur($Pile["vars"]??[], (string)'id_objet', null)), (table_valeur($Pile["vars"]??[], (string)'objet', null)), 'id_rubrique', '', [])))),true))))))) .
	(($t2 = strval(retablir_echappements_modeles((((((table_valeur($Pile["vars"]??[], (string)'id_parent', null)) OR (((table_valeur($Pile["vars"]??[], (string)'objet', null) == 'rubrique')))) ?' ' :'')) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/hierarchie/objet') . ', array(\'objet\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'objet', null))) . ',
	\'id_objet\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id_objet', null))) . ',
	\'id_parent\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id_parent', null))) . ',
	\'id_secteur\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(generer_objet_info((table_valeur($Pile["vars"]??[], (string)'id_objet', null)), (table_valeur($Pile["vars"]??[], (string)'objet', null)), 'id_secteur', '', [])))) . ',
	\'editable\' => ' . argumenter_squelette(retablir_echappements_modeles(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', (invalideur_session($Cache, table_valeur($Pile["vars"]??[], (string)'objet', null))), (invalideur_session($Cache, table_valeur($Pile["vars"]??[], (string)'id_objet', null))))?" ":"")))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/hierarchie/dist.html\',\'html_839ff22da254e4291551e6a9de7727fe\',\'\',9,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
	')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles((((((table_valeur($Pile["vars"]??[], (string)'id_parent', null)) OR (((table_valeur($Pile["vars"]??[], (string)'objet', null) == 'rubrique')))) ?' ' :'')) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/hierarchie/objet.sans_rubrique') . ', array(\'objet\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'objet', null))) . ',
	\'id_objet\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id_objet', null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/hierarchie/dist.html\',\'html_839ff22da254e4291551e6a9de7727fe\',\'\',10,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
	')) :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_839ff22da254e4291551e6a9de7727fe', $Cache, $page, '../prive/squelettes/hierarchie/dist.html');
}
