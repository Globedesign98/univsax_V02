<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies-vues/radio.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies-vues/radio.html
// Temps de compilation total: 0.390 ms
//

function html_50a8cc8b8640c813c112756407012bc1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' data peut être une chaine qu\'on sait décomposer ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts(saisies_aplatir_tableau(sinon(table_valeur($Pile[0]??[], (string)'data', null), (interdire_scripts(table_valeur($Pile[0]??[], (string)'datas', null)))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'vue_masquer_sous_groupe', null),true)))))))) .
retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'cle_ou_valeur', null), 'valeur'),true) == 'cle') ? (($t2 = strval((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true)))))!=='' ?
			('<p>' . $t2 . '</p>') :
			''):(	(($t2 = strval((((($a = table_valeur($Pile["vars"]??[], (string)(	'data/' .
		(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true)))), null)) OR (is_string($a) AND strlen($a))) ? $a : (($t3 = strval((interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	(label_ponctuer((	'<em>' .
				(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif_label', null),true))) .
				'</em>'))) .
			' ' .
			(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true))))) :
				'')))))!=='' ?
			('<p>' . $t2 . '</p>') :
			'') .
	'
')))) .
'
');

	return analyse_resultat_skel('html_50a8cc8b8640c813c112756407012bc1', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies-vues/radio.html');
}
