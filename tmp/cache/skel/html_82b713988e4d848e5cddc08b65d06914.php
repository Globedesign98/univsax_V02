<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies-vues/case.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies-vues/case.html
// Temps de compilation total: 0.065 ms
//

function html_82b713988e4d848e5cddc08b65d06914($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'valeur', null) == (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'valeur_oui', null), 'on')))) ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'label_oui', null), _T('public|spip|ecrire:item_oui')),true))):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'label_non', null), _T('public|spip|ecrire:item_non')),true))))))))!=='' ?
		('<p>' . $t1 . '
</p>') :
		'') .
'

');

	return analyse_resultat_skel('html_82b713988e4d848e5cddc08b65d06914', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies-vues/case.html');
}
