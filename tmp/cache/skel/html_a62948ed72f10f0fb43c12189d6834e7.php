<?php

/*
 * Squelette : prive/formulaires/inc-apercu-logo.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:08:58 GMT
 * Boucles :   _DocLogo
 */ 

function BOUCLE_DocLogohtml_a62948ed72f10f0fb43c12189d6834e7(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_DocLogo';
		$command['from'] = array('documents' => 'spip_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_logo', null),true))), '', 'bigint(20) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('prive/formulaires/inc-apercu-logo.html','html_a62948ed72f10f0fb43c12189d6834e7','_DocLogo',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0]))))))!=='' ?
		((	'<div class="titre ' .
	retablir_echappements_modeles('') .
	'">') . $t1 . '</div>') :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_DocLogo @ prive/formulaires/inc-apercu-logo.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette prive/formulaires/inc-apercu-logo.html
// Temps de compilation total: 0.389 ms
//

function html_a62948ed72f10f0fb43c12189d6834e7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="apercu">
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(inserer_attribut(filtrer('image_graver', filtrer('image_reduire',entites_html(table_valeur($Pile[0]??[], (string)'logo', null),true),(interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'_options/image_reduire', null),true)) OR (is_string($a) AND strlen($a))) ? $a : '320'))))),'alt',(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'quoi', null), 'logo_on'),true))))))))!=='' ?
		((	'<div class="spip_logo"><a href="' .
	retablir_echappements_modeles(interdire_scripts(timestamp(entites_html(table_valeur($Pile[0]??[], (string)'logo', null),true)))) .
	'" class="mediabox">') . $t1 . '</a></div>') :
		'') .
'
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'largeur'] = (interdire_scripts(largeur(entites_html(table_valeur($Pile[0]??[], (string)'logo', null),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'hauteur'] = (interdire_scripts(hauteur(entites_html(table_valeur($Pile[0]??[], (string)'logo', null),true)))))) .
BOUCLE_DocLogohtml_a62948ed72f10f0fb43c12189d6834e7($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	<div class="taille">' .
_T('public|spip|ecrire:info_largeur_vignette', array('largeur_vignette' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'largeur', null)),
'hauteur_vignette' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'hauteur', null)))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(taille_en_octets(poids_image(entites_html(table_valeur($Pile[0]??[], (string)'logo', null),true)))))))!=='' ?
		(' - ' . $t1) :
		'') .
'</div>
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'autoriser_modifier_document'] = (invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'document', (interdire_scripts(invalideur_session($Cache, entites_html(table_valeur($Pile[0]??[], (string)'id_logo', null),true)))))?" ":"")) ?' ' :''))))) .
'
	' .
(($t1 = strval(retablir_echappements_modeles((((((table_valeur($Pile["vars"]??[], (string)'autoriser_modifier_document', null)) OR ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true))))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
		<div class="groupe-btns groupe-btns_mini">
			' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'autoriser_modifier_document', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
				<a href="' .
		retablir_echappements_modeles(generer_url_ecrire('document_edit',(	'id_document=' .
			(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_logo', null),true)))))) .
		'" target="_blank" class="editbox btn" tabindex="0" role="button">' .
		_T('medias:bouton_modifier_document') .
		'</a>
			')) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
				<input type="submit" class="btn btn_secondaire submit supprimer" id="supprimer_' .
		retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'quoi', null), 'logo_on'),true))) .
		'_' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
		'_' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))) .
		'" name="supprimer_' .
		retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'quoi', null), 'logo_on'),true))) .
		'" value="' .
		attribut_html(ucfirst(_T('public|spip|ecrire:lien_supprimer'))) .
		'">
			')) :
			'') .
	'
		</div>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_a62948ed72f10f0fb43c12189d6834e7', $Cache, $page, 'prive/formulaires/inc-apercu-logo.html');
}
