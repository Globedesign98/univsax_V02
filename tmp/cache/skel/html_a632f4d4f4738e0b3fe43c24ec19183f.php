<?php

/*
 * Squelette : ../plugins-dist/medias/prive/objets/contenu/portfolio_document.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/objets/contenu/portfolio_document.html
// Temps de compilation total: 0.186 ms
//

function html_a632f4d4f4738e0b3fe43c24ec19183f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
(($t1 = strval(retablir_echappements_modeles(recuperer_fond( 'prive/squelettes/inclure/portfolio-documents' , array_merge($Pile[0],array('id_unique' => '' )), array('ajax' => ($v=( 'documents' ))?$v:true,'compil'=>array('../plugins-dist/medias/prive/objets/contenu/portfolio_document.html','html_a632f4d4f4738e0b3fe43c24ec19183f','',2,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))!=='' ?
		('
' . $t1 . '
') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('joindredocument', (interdire_scripts(invalideur_session($Cache, entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true)))), (interdire_scripts(invalideur_session($Cache, entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true)))))?" ":"")) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(recuperer_fond( 'prive/squelettes/inclure/ajouter-documents' , array_merge($Pile[0],array()), array('ajax' => ($v=( ($Pile[0]['ajax'] ?? null) ))?$v:true,'compil'=>array('../plugins-dist/medias/prive/objets/contenu/portfolio_document.html','html_a632f4d4f4738e0b3fe43c24ec19183f','',3,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))!=='' ?
			('
	' . $t2 . '
	') :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_a632f4d4f4738e0b3fe43c24ec19183f', $Cache, $page, '../plugins-dist/medias/prive/objets/contenu/portfolio_document.html');
}
