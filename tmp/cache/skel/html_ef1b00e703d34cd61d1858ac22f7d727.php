<?php

/*
 * Squelette : ../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html
 * Date :      Thu, 04 Dec 2025 23:14:30 GMT
 * Compile :   Thu, 19 Feb 2026 02:23:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html
// Temps de compilation total: 2.465 ms
//

function html_ef1b00e703d34cd61d1858ac22f7d727($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('sauvegarder')?" ":"")))) .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fin'] = (interdire_scripts(dump_verifie_sauvegarde_finie(entites_html(table_valeur($Pile[0]??[], (string)'status', null),true)))))) .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'fin', null)) ?'' :' '))))!=='' ?
		($t1 . (	'
	<h1 class="grostitre">' .
	_T('dump:texte_sauvegarde') .
	'</h1>

	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'dir_dump'] = (concat('<i>',(joli_repertoire(dump_repertoire(''))),'</i>')))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'dir_img'] = (concat('<i>',(joli_repertoire((defined('_DIR_IMG')?constant('_DIR_IMG'):''))),'</i>')))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'spipnet'] = (interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])),'_article1489.html'))))) .
	retablir_echappements_modeles(message_alerte_ouvrir('', 'info', null, null)) .
	'<p>' .
	_T('dump:texte_admin_tech_01', array('dossier' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'dir_dump', null)),
'img' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'dir_img', null)))) .
	'</p>
	<p>' .
	_T('dump:texte_admin_tech_02', array('spipnet' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'spipnet', null)))) .
	'</p>
	' .
	retablir_echappements_modeles(message_alerte_fermer()) .
	'

	<div class="ajax">
		' .
	retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_SAUVEGARDER',
	array(),
	array('../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html','html_ef1b00e703d34cd61d1858ac22f7d727','',16,$GLOBALS['spip_lang']))) .
	'
	</div>

	' .
	(($t2 = strval(retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-lister-sauvegardes' , array_merge($Pile[0],array('name' => '' ,
	'id' => 'sauvegarde' ,
	'titre' => _T('dump:sauvegardes_existantes') ,
	'download' => (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":""))) ,
	'delete' => (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":""))) )), array('ajax' => ($v=( ($Pile[0]['ajax'] ?? null) ))?$v:true,'compil'=>array('../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html','html_ef1b00e703d34cd61d1858ac22f7d727','',19,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))!=='' ?
			('
		' . $t2 . '
	') :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'fin', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
	<h1>' .
	_T('dump:info_sauvegarde') .
	'</h1>

	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = '')) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'taille'] = (interdire_scripts(dump_taille_sauvegarde(entites_html(table_valeur($Pile[0]??[], (string)'status', null),true)))))) .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'taille', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
	' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'archive'] = (concat(concat('<b>',(interdire_scripts(joli_repertoire(dump_nom_sauvegarde(entites_html(table_valeur($Pile[0]??[], (string)'status', null),true)))))),'</b>')))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = ' ')) .
		retablir_echappements_modeles(message_alerte_ouvrir('', 'error', null, null)) .
		_T('dump:erreur_taille_sauvegarde', array('fichier' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'archive', null)))) .
		'
	' .
		retablir_echappements_modeles(message_alerte_fermer()) .
		'
	')) :
			'') .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(dump_afficher_erreurs(entites_html(table_valeur($Pile[0]??[], (string)'status', null),true))))))!=='' ?
			((	'
	' .
		retablir_echappements_modeles(message_alerte_ouvrir('', 'error', null, null)) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreurs'] = ' '))) . $t2 . (	'
	' .
		retablir_echappements_modeles(message_alerte_fermer()) .
		'
	')) :
			'') .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'erreurs', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
	' .
		retablir_echappements_modeles(message_alerte_ouvrir('', 'success', null, null)) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'archive'] = (concat(concat(concat(concat('<b>',(interdire_scripts(joli_repertoire(dump_nom_sauvegarde(entites_html(table_valeur($Pile[0]??[], (string)'status', null),true)))))),'</b> ('),(taille_en_octets(table_valeur($Pile["vars"]??[], (string)'taille', null)))),')')))) .
		'

	<p>
	' .
		_T('dump:info_sauvegarde_reussi_02', array('archive' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'archive', null)))) .
		' ' .
		_T('dump:info_sauvegarde_reussi_03') .
		' ' .
		_T('dump:info_sauvegarde_reussi_04') .
		'
	</p>

	' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(dump_afficher_tables_sauvegardees(entites_html(table_valeur($Pile[0]??[], (string)'status', null),true))))))!=='' ?
				((	'<h4>' .
			_T('dump:details_sauvegarde') .
			'</h4>
	') . $t3) :
				'') .
		'
	')) :
			'') .
	'
	
	' .
	retablir_echappements_modeles(message_alerte_fermer()) .
	'
')) :
		''));

	return analyse_resultat_skel('html_ef1b00e703d34cd61d1858ac22f7d727', $Cache, $page, '../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html');
}
