<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/radio.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   _inclusion, _groupes, _radio
 */ 

function BOUCLE_inclusionhtml_f177ab907c8a90933723f7084517af87(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_radio']) ? $Numrows['_radio'] : array());
	$t0 = BOUCLE_radiohtml_f177ab907c8a90933723f7084517af87($Cache, $Pile, $doublons, $Numrows, $SP);
	$Numrows['_radio'] = ($save_numrows);
	return $t0;
}


function BOUCLE_groupeshtml_f177ab907c8a90933723f7084517af87(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(is_array(safehtml($Pile[$SP]['valeur']))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_groupes';
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
		array('../plugins/auto/saisies/v6.2.0/saisies/radio.html','html_f177ab907c8a90933723f7084517af87','_groupes',40,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<div class="choix-groupe">
		<p class="editer-label">' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP-1]['cle']))) .
'</p>
		' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts($Pile[$SP-1]['valeur'])))) .
BOUCLE_inclusionhtml_f177ab907c8a90933723f7084517af87($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</div>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes @ ../plugins/auto/saisies/v6.2.0/saisies/radio.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_radiohtml_f177ab907c8a90933723f7084517af87(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'data', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_radio';
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
		array('../plugins/auto/saisies/v6.2.0/saisies/radio.html','html_f177ab907c8a90933723f7084517af87','_radio',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Soit il y a des sous-groupes ') :
		'') .
'
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'compteur_id'] = (plus(table_valeur($Pile["vars"]??[], (string)'compteur_id', null),'1')))) .
(($t1 = BOUCLE_groupeshtml_f177ab907c8a90933723f7084517af87($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' Soit c\'est un tableau simple ') :
			'') .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (interdire_scripts((is_string(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)) ? (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true))):(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(	'disable/' .
				(interdire_scripts(safehtml($Pile[$SP]['cle'])))), null),true)))))))) .
	'<div class="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'choix', null), 'choix'),true))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'choix', null), 'choix'),true)))))!=='' ?
			(' ' . $t2 . (	'_' .
		retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))))) :
			'') .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'disabled', null)) OR ((interdire_scripts(in_array(safehtml($Pile[$SP]['cle']),(table_valeur($Pile["vars"]??[], (string)'disable_choix', null))))))) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'disabled') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
			(' ' . $t2) :
			'') .
	'">
		<input type="radio" name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" class="radio"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true) != 'non'))))) ?' ' :'')) ?' ' :'')))))!=='' ?
			(' ' . $t2 . ' required="required"') :
			'') .
	' id="champ_' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'prefixe', null)) .
	'_' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'compteur_id', null)) .
	'" ' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'valeur', null) == (interdire_scripts(strval(safehtml($Pile[$SP]['cle'])))))) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'checked="checked"') :
			'') .
	' value="' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'disabled', null)) OR ((interdire_scripts(in_array(safehtml($Pile[$SP]['cle']),(table_valeur($Pile["vars"]??[], (string)'disable_choix', null))))))) ?' ' :''))))!=='' ?
			($t2 . ' disabled="disabled"') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'readonly', null),true)))))!=='' ?
			(' readonly="' . $t2 . '"') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'describedby', null),true)))))!=='' ?
			(' aria-describedby="' . $t2 . '"') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
			(' ' . $t2) :
			'') .
	' />
		<label for="champ_' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'prefixe', null)) .
	'_' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'compteur_id', null)) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'valeur', null) == (interdire_scripts(safehtml($Pile[$SP]['cle']))))) ?' ' :''))))!=='' ?
			($t2 . 'class="on"') :
			'') .
	'>' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	'</label>
	</div>
	'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_radio @ ../plugins/auto/saisies/v6.2.0/saisies/radio.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/radio.html
// Temps de compilation total: 0.837 ms
//

function html_f177ab907c8a90933723f7084517af87($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 2678400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Parametres :
  - data : tableau de donnees cle=>valeur
  - defaut : valeur par defaut si pas présente dans l\'environnement
  - valeur_forcee : valeur utilisee meme si une valeur est dans l\'environnement

  Exemple d\'appel :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'radio' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'afficher_liste', null))) ,
	'nom' => 'afficher_liste' ,
	'label' => _T('plugin:afficher_liste') ,
	'explication' => _T('plugin:explication_afficher_liste') ,
	'data' => (array('cle1' => 'valeur1', 'cle2' => 'valeur2', 'cle3' => 'valeur3')) ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/radio.html','html_f177ab907c8a90933723f7084517af87','',10,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'data', null), (interdire_scripts(table_valeur($Pile[0]??[], (string)'datas', null)))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (saisies_depublier_data(table_valeur($Pile["vars"]??[], (string)'data', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'depublie_choix', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disable_choix'] = (interdire_scripts(saisies_normaliser_liste_choix(entites_html(table_valeur($Pile[0]??[], (string)'disable_choix', null),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (interdire_scripts(strval(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true)))),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'prefixe'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))))) .
'

' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (plus(table_valeur($Pile["vars"]??[], (string)'data', null),(array('@choix_alternatif' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif_label', null),true))))))))) .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'valeur', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)(	'data/' .
			(table_valeur($Pile["vars"]??[], (string)'valeur', null))), null)) ?'' :' '))))!=='' ?
				($t3 . (	'
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

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'compteur_id'] = '0')) .
BOUCLE_radiohtml_f177ab907c8a90933723f7084517af87($Cache, $Pile, $doublons, $Numrows, $SP) .
'

	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies/_base/choix_alternatif') . ', array_merge('.var_export($Pile[0],1).',array(\'valeur\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur_choix_alternatif', null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies/radio.html\',\'html_f177ab907c8a90933723f7084517af87\',\'\',14,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	')) :
		'') .
'

');

	return analyse_resultat_skel('html_f177ab907c8a90933723f7084517af87', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/radio.html');
}
