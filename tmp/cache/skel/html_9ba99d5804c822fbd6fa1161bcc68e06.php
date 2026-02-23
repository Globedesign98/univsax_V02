<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/hidden.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/hidden.html
// Temps de compilation total: 0.332 ms
//

function html_9ba99d5804c822fbd6fa1161bcc68e06($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 2678400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
'<div class="editer editer_' .
retablir_echappements_modeles(interdire_scripts(saisie_nom2classe(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'conteneur_class', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'li_class', null),true)))),true)))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(saisie_type2classe(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true))))))!=='' ?
		(' ' . $t1) :
		'') .
' afficher_si_sans_visuel" ' .
retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'tout_afficher', null),true) != 'oui') ? 'style="display:none;"':''))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_saisie', null),true)))))!=='' ?
		(' data-id="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(saisies_afficher_si_js(table_valeur($Pile[0]??[], (string)'afficher_si', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_saisies', null),true))))))))!=='' ?
		(' data-afficher_si="' . $t1 . '"') :
		'') .
'>
	' .
retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'inserer_debut', null))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'tout_afficher', null),true) != 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(	'erreurs/' .
		(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))), null),true)))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
	<input type="hidden"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	' name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" id="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'" value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true)))),true))) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
			(' ' . $t2) :
			'') .
	' />
	')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'tout_afficher', null),true) != 'oui')) ?'' :' ')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'label', null)))))!=='' ?
			((	'<label for="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
		'">') . $t2 . (	(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true)) ?' ' :'')))))!=='' ?
				('<span class=\'obligatoire\'>' . $t3 . (	retablir_echappements_modeles(interdire_scripts((is_null(table_valeur($Pile[0]??[], (string)'info_obligatoire', null)) ? _T('public|spip|ecrire:info_obligatoire_02'):(interdire_scripts(table_valeur($Pile[0]??[], (string)'info_obligatoire', null)))))) .
			'</span>')) :
				'') .
		'</label>')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(	'erreurs/' .
		(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))), null),true)))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
	<input type="text"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	' name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" id="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'" value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true)))),true))) .
	'" readonly="readonly" />
	')) :
		'') .
'
	' .
retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'inserer_fin', null))) .
'</div>
');

	return analyse_resultat_skel('html_9ba99d5804c822fbd6fa1161bcc68e06', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/hidden.html');
}
