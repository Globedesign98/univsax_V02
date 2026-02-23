<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/checkbox.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   _recursive, _groupes, _checkbox
 */ 

function BOUCLE_recursivehtml_b408f3ddfa4589a29b575d95acc13bd9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_checkbox']) ? $Numrows['_checkbox'] : array());
	$t0 = (($t1 = BOUCLE_checkboxhtml_b408f3ddfa4589a29b575d95acc13bd9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'


' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	'
	' .
			
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies/_base/choix_alternatif') . ', array_merge('.var_export($Pile[0],1).',array(\'valeur\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur_choix_alternatif', null))) . ',
	\'cle_tableau\' => ' . argumenter_squelette('oui') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies/checkbox.html\',\'html_b408f3ddfa4589a29b575d95acc13bd9\',\'\',88,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
')) :
				'') .
		'
')) :
		'');
	$Numrows['_checkbox'] = ($save_numrows);
	return $t0;
}


function BOUCLE_groupeshtml_b408f3ddfa4589a29b575d95acc13bd9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('../plugins/auto/saisies/v6.2.0/saisies/checkbox.html','html_b408f3ddfa4589a29b575d95acc13bd9','_groupes',66,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_groupes']['compteur_boucle'] = 0;
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_groupes']['compteur_boucle']++;
		$t0 .= (
'
	<div class="choix-groupe">
		<p class="editer-label">' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP-1]['cle']))) .
'</p>
		' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts($Pile[$SP-1]['valeur'])))) .
BOUCLE_recursivehtml_b408f3ddfa4589a29b575d95acc13bd9($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</div>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes @ ../plugins/auto/saisies/v6.2.0/saisies/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_checkboxhtml_b408f3ddfa4589a29b575d95acc13bd9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'data', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_checkbox';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"env",
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
		array('../plugins/auto/saisies/v6.2.0/saisies/checkbox.html','html_b408f3ddfa4589a29b575d95acc13bd9','_checkbox',64,$GLOBALS['spip_lang'])
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
(($t1 = BOUCLE_groupeshtml_b408f3ddfa4589a29b575d95acc13bd9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' Soit c\'est un tableau simple ') :
			'') .
	'
	<div class="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'choix', null), 'choix'),true))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'choix', null), 'choix'),true)))))!=='' ?
			(' ' . $t2 . (	'_' .
		retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))))) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(table_valeur($Pile["vars"]??[], (string)'disabled', null)))) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'disabled') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
			(' ' . $t2) :
			'') .
	'">' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id'] = (	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
		'_' .
		(md5(concat(($Numrows['_groupes']['compteur_boucle'] ?? 0),'-',(interdire_scripts(safehtml($Pile[$SP]['cle']))))))))) .
	'
		<input type="checkbox" name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'[]" class="checkbox checkbox_' .
	retablir_echappements_modeles(interdire_scripts(saisie_nom2classe(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))) .
	'" id="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null)) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (sinon(table_valeur($Pile["vars"]??[], (string)'valeur', null), (table_valeur($Pile["vars"]??[], (string)'defaut', null))))),true))))) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'checked="checked"') :
			'') .
	' value="' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(table_valeur($Pile["vars"]??[], (string)'disabled', null)))) ?' ' :'')))))!=='' ?
			($t2 . ' disabled="disabled"') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'describedby', null),true)))))!=='' ?
			(' aria-describedby="' . $t2 . '"') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
			(' ' . $t2) :
			'') .
	' />
		' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true) != 'non'))))) ?' ' :'')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(table_valeur($Pile["vars"]??[], (string)'defaut', null)))) ?' ' :'')))))!=='' ?
				($t3 . (	'
			<input type="hidden" name="' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
			'[]" value="' .
			retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
			'" />
			')) :
				'') .
		'
		')) :
			'') .
	'
		<label for="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null)) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (sinon(table_valeur($Pile["vars"]??[], (string)'valeur', null), (table_valeur($Pile["vars"]??[], (string)'defaut', null))))),true))))) ?' ' :'')))))!=='' ?
			($t2 . 'class="on"') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'attribut_title', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	' title="' .
		retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
		'"')) :
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
		spip_log(intval(1000*$timer)."ms BOUCLE_checkbox @ ../plugins/auto/saisies/v6.2.0/saisies/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/checkbox.html
// Temps de compilation total: 2.902 ms
//

function html_b408f3ddfa4589a29b575d95acc13bd9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
	'type_saisie' => 'checkbox' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'criteres', null))) ,
	'nom' => 'criteres' ,
	'label' => _T('plugin:choisir_criteres') ,
	'defaut' => 'cle2' ,
	'data' => (array('cle1' => 'valeur1', 'cle2' => 'valeur2', 'cle3' => 'valeur3')) ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/checkbox.html','html_b408f3ddfa4589a29b575d95acc13bd9','',10,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'data', null), (interdire_scripts(table_valeur($Pile[0]??[], (string)'datas', null)))))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' defaut peut être une chaine (plusieurs valeurs ou pas) qu\'on sait décomposer ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'defaut'] = (interdire_scripts(saisies_chaine2tableau(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' valeur doit être un tableau ! ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (interdire_scripts(saisies_valeur2tableau(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true),(table_valeur($Pile["vars"]??[], (string)'data', null))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (saisies_depublier_data(table_valeur($Pile["vars"]??[], (string)'data', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'depublie_choix', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true))))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<!-- gestion des choix alternatifs -->') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (plus(table_valeur($Pile["vars"]??[], (string)'data', null),(array('@choix_alternatif' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif_label', null),true))))))))) .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'valeur/choix_alternatif', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur_choix_alternatif'] = (table_valeur($Pile["vars"]??[], (string)'valeur/choix_alternatif', null)))) .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- retrocompatiblite -->') :
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
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	' lorsque qu\'on donne un \'disabled\' qui est une chaine,
	il faut la transformer en tableau.
		- Ce tableau est vide si la chaine valait \'\' sinon une clé 0 serait considérée disabled à tord
		- Ce tableau correspond au tablau ' .
	retablir_echappements_modeles(interdire_scripts(($Pile[0]['data'] ?? null))) .
	' si jamais  la chaîne vaut "disabled" (typiquement avec le constructeur .yaml)
')) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true))))) .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'disabled', null) == 'disabled')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (array_keys(table_valeur($Pile["vars"]??[], (string)'data', null))))))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((is_string(table_valeur($Pile["vars"]??[], (string)'disabled', null))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((strlen(table_valeur($Pile["vars"]??[], (string)'disabled', null))) ?'' :' '))))!=='' ?
			($t2 . (	' ' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (array()))))) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'disabled', null)) ?' ' :''))))!=='' ?
			($t2 . (	' ' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (filtre_push(array(),(table_valeur($Pile["vars"]??[], (string)'disabled', null)))))))) :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'disable_choix', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'

	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disabled'] = (interdire_scripts(saisies_normaliser_liste_choix(entites_html(table_valeur($Pile[0]??[], (string)'disable_choix', null),true)))))))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'tout_selectionner', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	<div class="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'choix', null), 'choix'),true))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'choix', null), 'choix'),true)))))!=='' ?
			(' ' . $t2 . '_tout_selectionner ') :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
			(' ' . $t2 . ' ') :
			'') .
	'none-nojs">
		<input type="checkbox" name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'_tout" class="checkbox" id="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'_tout" value="on" onChange="if (jQuery(this).prop(\'checked\')==true) jQuery(this).parent(\'div\').parent().find(\'input\').prop(\'checked\',true); else jQuery(this).parent(\'div\').parent().find(\'input\').prop(\'checked\',false);"/>
		<label for="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'_tout"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'label_class', null),true)))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	'>' .
	_T('saisies:tout_selectionner') .
	'</label>
	</div>
')) :
		'') .
'

' .
(($t1 = BOUCLE_checkboxhtml_b408f3ddfa4589a29b575d95acc13bd9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'


' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	'
	' .
			
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('saisies/_base/choix_alternatif') . ', array_merge('.var_export($Pile[0],1).',array(\'valeur\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur_choix_alternatif', null))) . ',
	\'cle_tableau\' => ' . argumenter_squelette('oui') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies/checkbox.html\',\'html_b408f3ddfa4589a29b575d95acc13bd9\',\'\',88,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
')) :
				'') .
		'
')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((intval(entites_html(table_valeur($Pile[0]??[], (string)'maximum_choix', null),true))) ?' ' :'')))))!=='' ?
		($t1 . (	'
<script type="text/javascript">
	$(\'input.checkbox_' .
	retablir_echappements_modeles(interdire_scripts(saisie_nom2classe(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))) .
	'\').on(\'change\', function() {
		if($(\'input.checkbox_' .
	retablir_echappements_modeles(interdire_scripts(saisie_nom2classe(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))) .
	':checked\').length > ' .
	retablir_echappements_modeles(interdire_scripts(intval(entites_html(table_valeur($Pile[0]??[], (string)'maximum_choix', null),true)))) .
	') {
			this.checked = false;
		}
	});
</script>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_b408f3ddfa4589a29b575d95acc13bd9', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/checkbox.html');
}
