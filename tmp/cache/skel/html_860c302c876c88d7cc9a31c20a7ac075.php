<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/case.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/case.html
// Temps de compilation total: 0.473 ms
//

function html_860c302c876c88d7cc9a31c20a7ac075($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 2678400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Action :
    - Rempli "on" si oui, "" si non.

  Parametres :
    - label_case : pour un label a cote de la case (defaut:"")
	- defaut : valeur par defaut si pas présente dans l\'environnement
    - valeur_forcee : valeur utilisee meme si une valeur est dans l\'environnement

  Exemple d\'appel :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'case' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'afficher_liste', null))) ,
	'nom' => 'afficher_liste' ,
	'label' => _T('plugin:afficher_liste') ,
	'label_case' => _T('plugin:activer') ,
	'explication' => _T('plugin:explication_afficher_liste') ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/case.html','html_860c302c876c88d7cc9a31c20a7ac075','',13,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (interdire_scripts((is_null(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true)))),true)) ? (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true))):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true)))),true)))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obligatoire'] = (interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true) != 'non'))))) ?' ' :'') ? 'obligatoire':''))))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'valeur_oui', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = ((in_array(table_valeur($Pile["vars"]??[], (string)'valeur', null),(array('on', (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur_oui', null),true)))))) ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_oui', null), 'on'),true))):(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur_non', null),true))))))))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'valeur_oui', null),true)) ?'' :' ')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (((table_valeur($Pile["vars"]??[], (string)'valeur', null) == 'on') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_oui', null), 'on'),true))):(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur_non', null),true))))))))) :
		'') .
'
<div class="choix' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)) ?'' :' ')))))!=='' ?
		($t1 . (	'<input type="hidden" name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_non', null), ''),true))) .
	'" />')) :
		'') .
'
	<input type="checkbox" name="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
'" class="checkbox" id="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
'"' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'valeur', null) == (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_oui', null), 'on'),true))))) ?' ' :''))))!=='' ?
		($t1 . ' checked="checked"') :
		'') .
' value="' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_oui', null), 'on'),true))) .
'" ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'readonly', null),true)))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'describedby', null),true)))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'obligatoire', null), 'non'),true) != 'non')) ?' ' :'')))))!=='' ?
		($t1 . ' required="required"') :
		'') .
'/>
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'label_case', null)))))!=='' ?
		((	'<label for="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'"' .
	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'valeur', null) == (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_oui', null), 'on'),true))))) ?' ' :''))))!=='' ?
			($t2 . 'class="on"') :
			'') .
	'>') . $t1 . (	(($t2 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'obligatoire', null)) AND ((interdire_scripts(((table_valeur($Pile[0]??[], (string)'label', null)) ?'' :' '))))) ?' ' :''))))!=='' ?
			('<span class=\'obligatoire\'>' . $t2 . (	retablir_echappements_modeles(interdire_scripts((is_null(table_valeur($Pile[0]??[], (string)'info_obligatoire', null)) ? _T('public|spip|ecrire:info_obligatoire_02'):(interdire_scripts(table_valeur($Pile[0]??[], (string)'info_obligatoire', null)))))) .
		'</span>')) :
			'') .
	'</label>')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true) != 'non'))))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . (	'
		<input type="hidden" name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" value="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur', null)) .
	'" />
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_860c302c876c88d7cc9a31c20a7ac075', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/case.html');
}
