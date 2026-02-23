<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/inclure/generer_saisies.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   _contenu
 */ 

function BOUCLE_contenuhtml_a2d771eeffd5114aef92cc944ad08cca(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'saisies', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_contenu';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		"DATA",
		$command,
		array('../plugins/auto/saisies/v6.2.0/inclure/generer_saisies.html','html_a2d771eeffd5114aef92cc944ad08cca','_contenu',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(retablir_echappements_modeles(((array_key_exists('saisie',(interdire_scripts(safehtml($Pile[$SP]['valeur']))))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(saisies_generer_html($Pile[$SP]['valeur'],(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'_env', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (unserialize(serialize($Pile[0]??[])))))))) .
	'
')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_contenu @ ../plugins/auto/saisies/v6.2.0/inclure/generer_saisies.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/inclure/generer_saisies.html
// Temps de compilation total: 0.884 ms
//

function html_a2d771eeffd5114aef92cc944ad08cca($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Génère le contenu (l\'intérieur) d\'un formulaire, à partir d\'une description dans un tableau PHP.
  Le tableau doit être de la forme suivante :

  // Chaque ligne est elle-même un tableau
  array(
  	// Ligne de type "explication"
  	array(
  		\'explication\' => \'Ceci est un bloc d\'explication général.\'
  	),
  	// Ligne classique, cad un champ de formulaire
  	array(
  		\'saisie\' => \'input\',
  		\'options => array(
  			\'nom\' => \'mon_champ\',
  			\'label\' => \'Un joli titre\',
  			\'obligatoire\' => \'oui\'
  		)
  	),
  	// Ligne contenant un fieldset
  	array(
  		\'groupe\' => \'Ceci est le titre du groupe de champs (fieldset)\',
  		\'css\' => \'eventuelles classes css\',
  		\'contenu\' => array(
  			// On recommence ici suivant le même formalisme que le tableau général.
  		)
  	)
  )


  Exemples d\'appels :
    # INCLURE{fond=inclure/generer_saisies, env, saisies=' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'tableau', null),true))) .
	'}

')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'saisies'] = (interdire_scripts(table_valeur($Pile[0]??[], (string)'saisies', null))))) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	' sécurité sur l\'appel : chercher les saisies dans l\'étape courante, on test ' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_env', null),true))) .
	'pour ne pas chercher des étapes au sein d\'une étape, sinon ca tourne en rond !')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_etape', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_env', null),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'saisies_par_etapes'] = (interdire_scripts(((($a = ((($a = table_valeur($Pile[0]??[], (string)'saisies_par_etapes', null)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(table_valeur($Pile[0]??[], (string)'_saisies_par_etapes', null))))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(saisies_lister_par_etapes(table_valeur($Pile[0]??[], (string)'saisies', null))))))))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'saisies'] = (table_valeur($Pile["vars"]??[], (string)(	'saisies_par_etapes/etape_' .
				(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_etape', null),true))) .
				'/saisies'), null)))))) :
			'') .
	'
')) :
		'') .
'

' .
BOUCLE_contenuhtml_a2d771eeffd5114aef92cc944ad08cca($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_a2d771eeffd5114aef92cc944ad08cca', $Cache, $page, '../plugins/auto/saisies/v6.2.0/inclure/generer_saisies.html');
}
