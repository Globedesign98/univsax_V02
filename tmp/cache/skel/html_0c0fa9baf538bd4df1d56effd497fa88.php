<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/selection.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   _recursive, _cond, _selection
 */ 

function BOUCLE_recursivehtml_0c0fa9baf538bd4df1d56effd497fa88(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_selection']) ? $Numrows['_selection'] : array());
	$t0 = BOUCLE_selectionhtml_0c0fa9baf538bd4df1d56effd497fa88($Cache, $Pile, $doublons, $Numrows, $SP);
	$Numrows['_selection'] = ($save_numrows);
	return $t0;
}


function BOUCLE_condhtml_0c0fa9baf538bd4df1d56effd497fa88(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(is_array(safehtml($Pile[$SP]['valeur']))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_cond';
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
		array('../plugins/auto/saisies/v6.2.0/saisies/selection.html','html_0c0fa9baf538bd4df1d56effd497fa88','_cond',81,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts($Pile[$SP-1]['valeur'])))) .
BOUCLE_recursivehtml_0c0fa9baf538bd4df1d56effd497fa88($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_cond @ ../plugins/auto/saisies/v6.2.0/saisies/selection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_selectionhtml_0c0fa9baf538bd4df1d56effd497fa88(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'data', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_selection';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins/auto/saisies/v6.2.0/saisies/selection.html','html_0c0fa9baf538bd4df1d56effd497fa88','_selection',78,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = BOUCLE_condhtml_0c0fa9baf538bd4df1d56effd497fa88($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<optgroup label="' .
		retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
		'">
	') . $t1 . '
	</optgroup>
	') :
		((	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'selected'] = '')) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'selected'] = (($t4 = strval((interdire_scripts((((safehtml($Pile[$SP]['cle']) == (table_valeur($Pile["vars"]??[], (string)'valeur', null)))) ?' ' :'')))))!=='' ?
					($t4 . (($t5 = strval((((strlen(strval(table_valeur($Pile["vars"]??[], (string)'valeur', null)))) ?' ' :''))))!=='' ?
						($t5 . 'selected="selected"') :
						'')) :
					''))) .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'selected'] = (($t4 = strval((interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(sinon(table_valeur($Pile["vars"]??[], (string)'valeur', null), (array()))))) ?' ' :'')))))!=='' ?
					($t4 . 'selected="selected"') :
					''))) .
		'
	')) :
			'') .
	'
	<option value="' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'" ' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'selected', null)) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_any(safehtml($Pile[$SP]['cle']),(table_valeur($Pile["vars"]??[], (string)'disabled', null)))) ?' ' :'')))))!=='' ?
			($t2 . ' disabled="disabled"') :
			'') .
	'>' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	'</option>
	'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_selection @ ../plugins/auto/saisies/v6.2.0/saisies/selection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/selection.html
// Temps de compilation total: 1.812 ms
//

function html_0c0fa9baf538bd4df1d56effd497fa88($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 2678400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Parametres :
  - ** data : tableau de donnees
               liste simple : cle=>valeur
               liste avec groupes :  cle=> tableau (cle=>valeur)
  - option_intro : chaine de langue de la premiere ligne vide ? (defaut:"")
  - cacher_option_intro : pas de premier option vide  (defaut:"")
  - class : classe(s) css ajoutes au select
  - defaut : valeur par defaut si pas présente dans l\'environnement
  - valeur_forcee : valeur utilisee meme si une valeur est dans l\'environnement
  - disable_choix : liste de valeurs à désactiver, séparées par des virgules
	- multiple: permettre une selection multiple

  Exemples d\'appels
  pour une liste simple :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'selection' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'produits', null))) ,
	'nom' => 'produits' ,
	'label' => _T('plugin:info_produits') ,
	'data' => (array('cle1' => 'valeur1', 'cle2' => 'valeur2', 'cle3' => 'valeur3')) ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/selection.html','html_0c0fa9baf538bd4df1d56effd497fa88','',18,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
  pour une liste avec groupes :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'selection' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'produits', null))) ,
	'nom' => 'produits' ,
	'label' => _T('plugin:info_produits') ,
	'data' => (array('cle1' => (array('cle1' => 'valeur1', 'cle2' => 'valeur2')), 'cle2' => (array('cle1' => 'valeur1', 'cle2' => 'valeur2')))) ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/selection.html','html_0c0fa9baf538bd4df1d56effd497fa88','',3,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'data', null), (interdire_scripts(table_valeur($Pile[0]??[], (string)'datas', null)))))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Attention, la valeur ou la valeur forcée peut être une chaine vide. On doit donc tester avec is_null. ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (interdire_scripts((is_null(entites_html(table_valeur($Pile[0]??[], (string)'valeur_forcee', null),true)) ? (interdire_scripts((is_null(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true)) ? (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true))):(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true)))))):(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur_forcee', null),true)))))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' si multiple, la valeur doit être un tableau') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true) == 'non')) ?'' :' ')))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (saisies_valeur2tableau(table_valeur($Pile["vars"]??[], (string)'valeur', null))))))) :
			'') .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (saisies_depublier_data(table_valeur($Pile["vars"]??[], (string)'data', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'depublie_choix', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true))))))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (plus(table_valeur($Pile["vars"]??[], (string)'data', null),(array('@choix_alternatif' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif_label', null),true))))))))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'valeur/choix_alternatif', null)) ?' ' :''))))!=='' ?
				($t3 . (	'
			' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur_choix_alternatif'] = (table_valeur($Pile["vars"]??[], (string)'valeur/choix_alternatif', null)))) .
			(($t4 = strval(retablir_echappements_modeles('')))!=='' ?
					($t4 . '<!-- retrocompatiblite -->') :
					'') .
			'
			' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (plus(table_valeur($Pile["vars"]??[], (string)'valeur', null),(array('@choix_alternatif')))))))) :
				'') .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	'
			' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (array_merge(table_valeur($Pile["vars"]??[], (string)'data', null),(array('@choix_alternatif' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif_label', null),true))))))))) .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'valeur', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
				' .
				(($t5 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)(	'data/' .
					(table_valeur($Pile["vars"]??[], (string)'valeur', null))), null)) ?'' :' '))))!=='' ?
						($t5 . (	'
					' .
					retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur_choix_alternatif'] = (table_valeur($Pile["vars"]??[], (string)'valeur', null)))) .
					retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = '@choix_alternatif')))) :
						'') .
				'
			')) :
					'') .
			'
		')) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (array()))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((strlen(entites_html(sinon(table_valeur($Pile[0]??[], (string)'disable_choix', null), ''),true))) ?' ' :'')))))!=='' ?
		($t1 . (	' ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (interdire_scripts(filtre_explode_dist(entites_html(table_valeur($Pile[0]??[], (string)'disable_choix', null),true),','))))))) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (interdire_scripts(saisies_normaliser_liste_choix(entites_html(table_valeur($Pile[0]??[], (string)'disable_choix', null),true)))))) .
'<select ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'obligatoire', null), 'non'),true) != 'non')) ?' ' :'')))))!=='' ?
		($t1 . ' required="required"') :
		'') .
' name="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true) ? '[]':''))) .
'" id="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'size', null),true)))))!=='' ?
		(' size="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)))))!=='' ?
		(' multiple="' . $t1 . '"') :
		'') .
'>

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'cacher_option_intro', null),true)) ?'' :' ')))))!=='' ?
		($t1 . (	'<option value="">' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'option_intro', null),true))) .
	'</option>')) :
		'') .
'
' .
BOUCLE_selectionhtml_0c0fa9baf538bd4df1d56effd497fa88($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies/_base/choix_alternatif') . ', array_merge('.var_export($Pile[0],1).',array(\'valeur\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur_choix_alternatif', null))) . ',
	\'cle_tableau\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'multiple', null),true)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies/selection.html\',\'html_0c0fa9baf538bd4df1d56effd497fa88\',\'\',43,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_0c0fa9baf538bd4df1d56effd497fa88', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/selection.html');
}
