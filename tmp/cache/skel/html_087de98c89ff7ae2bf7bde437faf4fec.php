<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies-vues/_base.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies-vues/_base.html
// Temps de compilation total: 0.539 ms
//

function html_087de98c89ff7ae2bf7bde437faf4fec($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
Parametres :
** : obligatoire
* : fortement conseille

- ** nom : nom du parametre
- * label : nom joli
- * valeur : valeur actuelle du parametre
- valeur_uniquement : si présent, n\'affichera pas le label ni le bloc englobant la valeur
- sans_reponse : texte affiché s\'il n\'y a rien de saisi pour ce champ

Hors option \'valeur_uniquement\' :
- conteneur_class : pour ajouter une classe CSS sur le conteneur
- vue_class : pour ajouter une classe CSS sur le bloc englobant la valeur

') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'sans_reponse'] = (interdire_scripts((is_null(entites_html(table_valeur($Pile[0]??[], (string)'sans_reponse', null),true)) ? _T('saisies:vue_sans_reponse'):(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'sans_reponse', null),true)))))))) .
'
' .
(($t1 = strval(retablir_echappements_modeles((((defined('_SAISIES_AFFICHAGE_COMPACT')?constant('_SAISIES_AFFICHAGE_COMPACT'):'')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'sans_reponse'] = '')))) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur_uniquement'] = (interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'valeur_uniquement', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'valeur_uniquement', null),true) != 'non'))))) ?' ' :'')) ?' ' :''))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'enfants'] = (interdire_scripts((((table_valeur($Pile[0]??[], (string)'saisies', null)) AND ((interdire_scripts(is_array(table_valeur($Pile[0]??[], (string)'saisies', null)))))) ?' ' :''))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' On génère la réponse et on l\'enregistre dans une variable. Doit être VIDE s\'il n\'y a pas de réponse. ') :
		'') .
'
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'reponse'] = '')) .
(($t1 = strval(retablir_echappements_modeles(((find_in_path((string)(	'saisies-vues/' .
	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true))) .
	'.html'))) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'reponse'] = (trim(recuperer_fond( (	'saisies-vues/' .
			(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true)))) , array_merge($Pile[0],array('sans_reponse' => (table_valeur($Pile["vars"]??[], (string)'sans_reponse', null)) )), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies-vues/_base.html','html_087de98c89ff7ae2bf7bde437faf4fec','',0,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))))) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(((find_in_path((string)(	'saisies-vues/' .
	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true))) .
	'.html'))) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'reponse'] = (interdire_scripts(saisie_traitement_vue(table_valeur($Pile[0]??[], (string)'valeur', null),(serialize($Pile[0]??[]))))))))) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Maintenant on affiche en encapsulant ou pas ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Cas normal avec présentation ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'valeur_uniquement', null)) ?'' :' '))))!=='' ?
		($t1 . (	'
<div class="champ afficher' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(saisie_nom2classe(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))))))!=='' ?
			(' afficher_' . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true)))))!=='' ?
			(' saisie_' . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'conteneur_class', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'li_class', null),true)))),true)))))!=='' ?
			(' ' . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'reponse', null)) ?'' :' '))))!=='' ?
			(' ' . $t2 . 'sans_reponse vide') :
			'') .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true) == 'fieldset')) ?' ' :'')))))!=='' ?
			(' ' . $t2 . (	' aria-labelledby="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
		'_label"')) :
			'') .
	'>
	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' S\'il y a des enfants on n\'inclut que la vue ') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'enfants', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'reponse', null)))) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles((((((table_valeur($Pile["vars"]??[], (string)'enfants', null)) ?'' :' ')) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true) != 'explication'))))) ?' ' :''))))!=='' ?
			($t2 . (	'


	' .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'reponse', null)) ?'' :' '))))!=='' ?
				($t3 . (	'
		' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'reponse'] = (table_valeur($Pile["vars"]??[], (string)'sans_reponse', null)))))) :
				'') .
		'
	' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'label'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'label_case', null), (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'label', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))))))))))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'wrapper'] = 'div')) .
		(($t3 = strval(retablir_echappements_modeles((((defined('_SAISIES_AFFICHAGE_COMPACT')?constant('_SAISIES_AFFICHAGE_COMPACT'):'')) ?' ' :''))))!=='' ?
				($t3 . (	'
		' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'reponse'] = (PtoBr(table_valeur($Pile["vars"]??[], (string)'reponse', null))))) .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'label'] = (label_ponctuer(table_valeur($Pile["vars"]??[], (string)'label', null))))) .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'wrapper'] = 'span')))) :
				'') .
		'

	' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'label', null))))!=='' ?
				((	'<strong class="label' .
			(($t4 = strval(retablir_echappements_modeles((((defined('_SAISIES_AFFICHAGE_COMPACT')?constant('_SAISIES_AFFICHAGE_COMPACT'):'')) ?' ' :''))))!=='' ?
					($t4 . ' colonincluded') :
					'') .
			'">') . $t3 . '</strong>') :
				'') .
		'
		<' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'wrapper', null))))!=='' ?
				($t3 . ' ') :
				'') .
		'class="valeur ' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'vue_class', null),true))) .
		'">
		' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'reponse', null)) .
		'</' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'wrapper', null)) .
		'>
	')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'voir_explications', null), 'non'),true) != 'non')) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true) == 'explication'))))) ?' ' :'')) ?' ' :'')))))!=='' ?
			($t2 . (	'
		' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies/explication') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies-vues/_base.html\',\'html_087de98c89ff7ae2bf7bde437faf4fec\',\'\',31,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	')) :
			'') .
	'
</div>
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Cas où on demande uniquement la valeur ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'valeur_uniquement', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' S\'il y a des enfants on inclut que la vue ') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'enfants', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'reponse', null)))) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'enfants', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(((($a = table_valeur($Pile["vars"]??[], (string)'reponse', null)) OR (is_string($a) AND strlen($a))) ? $a : (table_valeur($Pile["vars"]??[], (string)'sans_reponse', null)))) .
		'
	')) :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_087de98c89ff7ae2bf7bde437faf4fec', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies-vues/_base.html');
}
