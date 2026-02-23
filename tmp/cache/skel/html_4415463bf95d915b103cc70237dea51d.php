<?php

/*
 * Squelette : plugins-dist/medias/formulaires/inc-upload_document.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 00:52:35 GMT
 * Boucles :   _methodes_liens, _methodes
 */ 

function BOUCLE_methodes_lienshtml_4415463bf95d915b103cc70237dea51d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'methodes_upload', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_methodes_liens';
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
		array('plugins-dist/medias/formulaires/inc-upload_document.html','html_4415463bf95d915b103cc70237dea51d','_methodes_liens',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'
				' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'methode_upload', null) == (interdire_scripts(safehtml($Pile[$SP]['cle']))))) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'label_lien')))))) :
		'') .
'
				' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'methode_upload', null) == (interdire_scripts(safehtml($Pile[$SP]['cle']))))) ?'' :' '))))!=='' ?
		($t1 . (	'
					<a href=\'#\' onclick="change_methode(\'' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'domid', null)) .
	'\',\'' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'\');return false;">' .
	retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'label_lien')))) .
	'</a>
				')) :
		'') .
'
			');
		$t0 .= ((strlen($t1) && strlen($t0)) ? '|' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_methodes_liens @ plugins-dist/medias/formulaires/inc-upload_document.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_methodeshtml_4415463bf95d915b103cc70237dea51d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'methodes_upload', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_methodes';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"env");
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
		array('plugins-dist/medias/formulaires/inc-upload_document.html','html_4415463bf95d915b103cc70237dea51d','_methodes',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode_upload'] = (interdire_scripts(safehtml($Pile[$SP]['cle']))))) .
'<div class=\'joindre_mode' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'domid', null)) .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'methode', null) == (interdire_scripts(safehtml($Pile[$SP]['cle']))))) ?'' :' '))))!=='' ?
		($t1 . 'none-js') :
		'') .
'\' id=\'joindre_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'domid', null)) .
'\'>

		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'formulaires/methodes_upload/' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))))) . ', array_merge('.var_export($Pile[0],1).',array(\'domid\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'domid', null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins-dist/medias/formulaires/inc-upload_document.html\',\'html_4415463bf95d915b103cc70237dea51d\',\'\',22,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>

		' .
(($t1 = strval(retablir_echappements_modeles((((count(table_valeur($Pile["vars"]??[], (string)'methodes_upload', null)) > '1')) ?' ' :''))))!=='' ?
		($t1 . (	'
		<div class=\'sourceup\'>
			' .
	_T('medias:bouton_download_depuis') .
	'
			' .
	BOUCLE_methodes_lienshtml_4415463bf95d915b103cc70237dea51d($Cache, $Pile, $doublons, $Numrows, $SP) .
	'
		</div>
		')) :
		'') .
'
		<p class=\'boutons\'><input class=\'btn submit\' type="submit" name="joindre_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
'" value="' .
retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'label_bouton')))) .
'"/></p>
	</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_methodes @ plugins-dist/medias/formulaires/inc-upload_document.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins-dist/medias/formulaires/inc-upload_document.html
// Temps de compilation total: 0.468 ms
//

function html_4415463bf95d915b103cc70237dea51d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'domid'] = (	'_' .
	(interdire_scripts(concat(entites_html(table_valeur($Pile[0]??[], (string)'mode', null),true),'_',(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'new'),true))))))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' On récupère la liste des méthodes disponibles ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methodes_upload'] = (medias_lister_methodes_upload(serialize($Pile[0]??[]))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' On ouvre par défaut sur la première méthode de la liste ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode'] = (key(table_valeur($Pile["vars"]??[], (string)'methodes_upload', null))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Veut-on forcer l\'ouverture sur une méthode précise ? ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'joindre_mediatheque', null),true)) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode_focus'] = 'mediatheque'))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'joindre_distant', null),true)) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode_focus'] = 'distant'))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'joindre_ftp', null),true)) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode_focus'] = 'ftp'))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'methode_focus', null),true)) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode_focus'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'methode_focus', null),true)))))) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(((((((((table_valeur($Pile["vars"]??[], (string)'methode_focus', null)) AND ((is_array(table_valeur($Pile["vars"]??[], (string)'methodes_upload', null))))) ?' ' :'')) AND ((array_key_exists(table_valeur($Pile["vars"]??[], (string)'methode_focus', null),(table_valeur($Pile["vars"]??[], (string)'methodes_upload', null)))))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'methode'] = (table_valeur($Pile["vars"]??[], (string)'methode_focus', null))))) :
		'') .
'

<div id="defaultsubmit' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'domid', null)) .
'" class="none"></div>
' .
BOUCLE_methodeshtml_4415463bf95d915b103cc70237dea51d($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Formulaire pour deballer un zip') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'erreurs/lister_contenu_archive', null))))!=='' ?
		('<div class="editer-groupe"><div class=\'fieldset deballer_zip\'>' . $t1 . '</div></div>') :
		'') .
'

<script>
if (window.jQuery){
function change_methode(domid,methode){
	var id = "#joindre_"+methode+domid;
	if (jQuery(id).is(\':hidden\')) {
		jQuery(\'div.joindre_mode\'+domid+\':visible\').slideUp(\'fast\');
		jQuery(id).slideDown(\'fast\');
	}
	// placer en haut du formulaire les boutons submit par defaut correspondant a la methode active
	jQuery("#defaultsubmit"+domid).html(\'\').append(jQuery(id).find(\'.boutons\').eq(-1).find(\'input\').clone(true));
	var joindre = jQuery(id).find(\'.boutons\').eq(-1).find(\'input\').prop(\'name\').replace(\'joindre_\', \'\');
	jQuery("#defaultsubmit"+domid).append($(\'<input>\').attr({type: \'hidden\', id: \'methode_focus\', name: \'methode_focus\', value: joindre}));
}
jQuery(function(){change_methode(\'' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'domid', null)) .
'\',\'' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'methode', null)) .
'\');});
}
</script>
');

	return analyse_resultat_skel('html_4415463bf95d915b103cc70237dea51d', $Cache, $page, 'plugins-dist/medias/formulaires/inc-upload_document.html');
}
