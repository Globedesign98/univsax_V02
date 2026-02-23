<?php

/*
 * Squelette : ../plugins-dist/bigup/javascript/bigup.trads.js.html
 * Date :      Thu, 04 Dec 2025 23:14:28 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:00 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/bigup/javascript/bigup.trads.js.html
// Temps de compilation total: 0.149 ms
//

function html_fc6e158a00bdc459e547410b8d03ca7a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/javascript; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<script>') :
		'') .
'

/**
 * Déclarations d’unités, sert entre autre pour $.taille_en_octets
 */
Trads.set(\'unites\', {
	taille_octets: "' .
texte_script(_T('public|spip|ecrire:taille_octets')) .
'",
	taille_ko: "' .
texte_script(_T('public|spip|ecrire:taille_ko')) .
'",
	taille_mo: "' .
texte_script(_T('public|spip|ecrire:taille_mo')) .
'",
	taille_go: "' .
texte_script(_T('public|spip|ecrire:taille_go')) .
'"
});

/**
 * Chaines de langue de Bigup
 */
Trads.set(\'bigup\', {
	// B
	bouton_annuler: "' .
texte_script(_T('bigup:bouton_annuler')) .
'",
	bouton_enlever: "' .
texte_script(_T('bigup:bouton_enlever')) .
'",

	// C
	choisir: "' .
texte_script(_T('bigup:choisir')) .
'",

	// D
	deposer_vos_fichiers_ici: "' .
texte_script(_T('bigup:deposer_vos_fichiers_ici')) .
'",
	deposer_votre_fichier_ici: "' .
texte_script(_T('bigup:deposer_votre_fichier_ici')) .
'",
	deposer_le_logo_ici: "' .
texte_script(_T('bigup:deposer_le_logo_ici')) .
'",
	deposer_la_vignette_ici: "' .
texte_script(_T('bigup:deposer_la_vignette_ici')) .
'",

	// E
	erreur_de_transfert: "' .
texte_script(_T('bigup:erreur_de_transfert')) .
'",
	erreur_taille_max: "' .
texte_script(_T('bigup:erreur_taille_max')) .
'",
	erreur_type_fichier: "' .
texte_script(_T('bigup:erreur_type_fichier')) .
'",
	erreur_probleme_survenu: "' .
texte_script(_T('bigup:erreur_probleme_survenu')) .
'",

	// O
	ou: "' .
texte_script(_T('bigup:ou')) .
'",

	// S
	succes_fichier_envoye: "' .
texte_script(_T('bigup:succes_fichier_envoye')) .
'",
	succes_logo_envoye: "' .
texte_script(_T('bigup:succes_logo_envoye')) .
'",
	succes_vignette_envoyee: "' .
texte_script(_T('bigup:succes_vignette_envoyee')) .
'",

	// T
	televerser: "' .
texte_script(_T('bigup:televerser')) .
'"
});');

	return analyse_resultat_skel('html_fc6e158a00bdc459e547410b8d03ca7a', $Cache, $page, '../plugins-dist/bigup/javascript/bigup.trads.js.html');
}
