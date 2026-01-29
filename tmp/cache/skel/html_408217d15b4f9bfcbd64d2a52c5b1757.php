<?php

/*
 * Squelette : squelettes/formulaires/administration.html
 * Date :      Sat, 18 Jan 2025 14:25:52 GMT
 * Compile :   Thu, 29 Jan 2026 23:13:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/formulaires/administration.html
// Temps de compilation total: 0.230 ms
//

function html_408217d15b4f9bfcbd64d2a52c5b1757($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
' <div' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'divclass', null), 'spip-admin-bloc'),true)))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
' dir="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
'">' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'analyser', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="analyser">' .
	_T('public|spip|ecrire:analyse_xml') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'xhtml_error', null),true)))))!=='' ?
			(' (' . $t2 . ')') :
			'') .
	'</a>')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_article', null),true)))))!=='' ?
		((	'
	<a href="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir_article', null),true))) .
	'" class="spip-admin-boutons"
		id="voir_article">' .
	_T('public|spip|ecrire:admin_modifier_article') .
	'
			(') . $t1 . ')</a>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_breve', null),true)))))!=='' ?
		((	'
	<a href="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir_breve', null),true))) .
	'" class="spip-admin-boutons"
		id="voir_breve">' .
	_T('public|spip|ecrire:admin_modifier_breve') .
	'
			(') . $t1 . ')</a>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_rubrique', null),true)))))!=='' ?
		((	'
	<a href="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir_rubrique', null),true))) .
	'" class="spip-admin-boutons"
		id="voir_rubrique">' .
	_T('public|spip|ecrire:admin_modifier_rubrique') .
	'
			(') . $t1 . ')</a>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_mot', null),true)))))!=='' ?
		((	'
	<a href="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir_mot', null),true))) .
	'" class="spip-admin-boutons"
		id="voir_mot">' .
	_T('public|spip|ecrire:admin_modifier_mot') .
	'
			(') . $t1 . ')</a>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_syndic', null),true)))))!=='' ?
		((	'
	<a href="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir_site', null),true))) .
	'" class="spip-admin-boutons"
		id="voir_site">' .
	_T('public|spip|ecrire:icone_modifier_site') .
	'
			(') . $t1 . ')</a>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_auteur', null),true)))))!=='' ?
		((	'
	<a href="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir_auteur', null),true))) .
	'" class="spip-admin-boutons"
		id="voir_auteur">' .
	_T('public|spip|ecrire:admin_modifier_auteur') .
	'
			(') . $t1 . ')</a>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ecrire', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="ecrire">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
'
	<a href="' .
retablir_echappements_modeles(parametre_url(self(),'var_mode',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'calcul', null),true))))) .
'" class="spip-admin-boutons"
		id="var_mode">' .
_T('public|spip|ecrire:admin_recalculer') .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'use_cache', null),true))) .
'</a>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'statistiques', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="statistiques">' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'visites', null),true)))))!=='' ?
			((	_T('public|spip|ecrire:info_visites') .
		'&nbsp;') . $t2) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'popularite', null),true)))))!=='' ?
			((	';&nbsp;' .
		_T('public|spip|ecrire:info_popularite_5') .
		'&nbsp;') . $t2) :
			'') .
	'</a>')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'preview', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="preview">' .
	_T('public|spip|ecrire:previsualisation') .
	'</a>')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debug', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="debug">' .
	_T('public|spip|ecrire:admin_debug') .
	'</a>')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_408217d15b4f9bfcbd64d2a52c5b1757', $Cache, $page, 'squelettes/formulaires/administration.html');
}
