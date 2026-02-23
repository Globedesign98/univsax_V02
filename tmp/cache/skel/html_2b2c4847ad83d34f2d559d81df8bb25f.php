<?php

/*
 * Squelette : ../plugins-dist/medias/modeles/document_desc.html
 * Date :      Thu, 04 Dec 2025 23:14:32 GMT
 * Compile :   Thu, 19 Feb 2026 01:04:27 GMT
 * Boucles :   _compte, _docslies
 */ 

function BOUCLE_comptehtml_2b2c4847ad83d34f2d559d81df8bb25f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents_liens';
		$command['id'] = '_compte';
		$command['from'] = array('documents_liens' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,2';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'documents_liens.id_document', sql_quote($Pile[$SP]['id_document'], '','bigint(20) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/modeles/document_desc.html','html_2b2c4847ad83d34f2d559d81df8bb25f','_compte',92,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_compte']['command'] = $command;
	$Numrows['_compte']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_compte @ ../plugins-dist/medias/modeles/document_desc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_docslieshtml_2b2c4847ad83d34f2d559d81df8bb25f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_docslies';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("documents.id_document",
		"documents.mode",
		"L1.vu",
		"documents.statut",
		"documents.distant",
		"documents.fichier",
		"documents.titre",
		"documents.descriptif",
		"documents.extension",
		"documents.largeur",
		"documents.hauteur",
		"documents.media",
		"documents.duree",
		"documents.credits",
		"documents.alt",
		"documents.taille",
		"documents.date",
		"L2.inclus",
		"L1.objet",
		"L1.id_objet",
		"L1.rang_lien");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(($Pile[0]['id_document'] ?? null), '','bigint(20) NOT NULL AUTO_INCREMENT')), 
			array('=', 'L1.id_objet', sql_quote(($Pile[0]['id_objet'] ?? null), '','bigint(20) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote(($Pile[0]['objet'] ?? null), '','varchar(25) NOT NULL DEFAULT \'\'')), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('documents.statut', $in) : 
			array('=', 'documents.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/modeles/document_desc.html','html_2b2c4847ad83d34f2d559d81df8bb25f','_docslies',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('medias:document_vu');
	$l2 = _T('medias:document_vu');
	$l3 = _T('public|spip|ecrire:info_sans_titre');
	$l4 = _T('medias:fichier_distant');
	$l5 = _T('medias:fichier_distant');
	$l6 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l7 = _T('medias:details_document_afficher_masquer');
	$l8 = _T('medias:details_document');
	$l9 = _T('medias:label_credits');
	$l10 = _T('medias:label_alt');
	$l11 = _T('medias:info_dimensions_image');
	$l12 = _T('medias:info_resolution_image');
	$l13 = _T('medias:info_duree');
	$l14 = _T('medias:info_taille');
	$l15 = _T('public|spip|ecrire:date');
	$l16 = _T('medias:label_fichier');
	$l17 = _T('medias:upload_info_mode_document');
	$l18 = _T('medias:upload_info_mode_image');
	$l19 = _T('medias:bouton_enlever_supprimer_document');
	$l20 = _T('medias:bouton_enlever_supprimer_document_confirmation');
	$l21 = _T('medias:bouton_enlever_document');
	$l22 = _T('medias:ordonner_ce_document');
	$l23 = _T('medias:ordonner_ce_document');
	$l24 = _T('medias:bouton_modifier_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="item ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['mode'])) .
' vu_' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['vu'])) .
' statut_' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['statut'])) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['distant'] == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . 'distant') :
		'') .
'" id="doc' .
retablir_echappements_modeles($Pile[$SP]['id_document']) .
'" data-id="' .
retablir_echappements_modeles($Pile[$SP]['id_document']) .
'" onclick="jQuery(this).toggleClass(\'hover\');">
	<div class="presentation">
		' .
(($t1 = strval(retablir_echappements_modeles(filtrer('image_graver',filtrer('image_reduire',quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), (vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_document'], 'document_fichier', '', '', true)))), '', '', 150, 150, ''), '150', '150')))))!=='' ?
		('<div class=\'vignette\'>' . $t1 . '</div>') :
		'') .
'

		<div class="descriptions wysiwyg">
			<h4 class="titrem">
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['vu'] == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (	'<span class="vu"><img src=\'' .
	retablir_echappements_modeles(chemin_image((string)'vu-16-10.svg')) .
	'\' width=\'16\' height=\'10\' alt=\'' .
	attribut_html($l1) .
	'\' title=\'' .
	$l1 .
	'\'/></span> ')) :
		'') .
'
				<span class="' .
retablir_echappements_modeles('') .
'titre" title="' .
retablir_echappements_modeles(interdire_scripts(attribut_html(basename($Pile[$SP]['fichier'])))) .
'">
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0]))) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0]))))) :
		'') .
'
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0]))) ?'' :' ')))))!=='' ?
		($t1 . (	'
						<i class="sanstitre">' .
	$l3 .
	'</i>
						<span class="fichier">' .
	retablir_echappements_modeles(interdire_scripts(basename($Pile[$SP]['fichier']))) .
	'</span>
					')) :
		'') .
'
					</span>
				<span class="image_loading"></span>
			</h4>

			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(couper(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]),'100')))))!=='' ?
		((	'<div class="descriptif ' .
	retablir_echappements_modeles('') .
	'">') . $t1 . '</div>') :
		'') .
'

			<div class="infos">
				<div class="permanentes">
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['distant'] == 'oui')) ?' ' :'')))))!=='' ?
		($t1 . (($t2 = strval(retablir_echappements_modeles(inserer_attribut(filtre_balise_img_dist(chemin_image((string)'distant-16.png'),$l4),'title',$l4))))!=='' ?
			($t2 . ' ') :
			'')) :
		'') .
$l6 .
retablir_echappements_modeles($Pile[$SP]['id_document']) .
' - ' .
retablir_echappements_modeles(interdire_scripts($Pile[$SP]['extension'])) .
'
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((($Pile[$SP]['largeur']) OR ((interdire_scripts($Pile[$SP]['hauteur'])))) ?' ' :'')) AND ((interdire_scripts(($Pile[$SP]['media'] == 'image'))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
						' .
	(($t2 = strval(retablir_echappements_modeles(_T('info_largeur_vignette',(array('largeur_vignette' => (interdire_scripts($Pile[$SP]['largeur'])), 'hauteur_vignette' => (interdire_scripts($Pile[$SP]['hauteur']))))))))!=='' ?
			('- ' . $t2) :
			'') .
	'
					')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((in_array($Pile[$SP]['media'],(array('audio', 'video')))) AND ((interdire_scripts(intval($Pile[$SP]['duree']))))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . (	'
					 - ' .
	retablir_echappements_modeles(interdire_scripts(duree_en_secondes($Pile[$SP]['duree']))) .
	'
					')) :
		'') .
'
					<button class="lien_details btn btn_mini btn_link"
						onClick="$(this).parent().next(\'.detaillees\').toggle(); return true;"
						title="' .
attribut_html($l7) .
'"><span class="icone-image">+</span> ' .
$l8 .
'</button>
				</div>
				<div class="detaillees">
					' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = ((	'<table class="compact">
						<tr class="credits">
							<th>' .
		$l9 .
		'</th>
							<td class="' .
		('') .
		'">' .
		(interdire_scripts(((($a = typo($Pile[$SP]['credits'], "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : '<span class="vide">...</span>'))) .
		'</td>
						</tr>
						' .
		(($t3 = strval((interdire_scripts(((($Pile[$SP]['media'] == 'image')) ?' ' :'')))))!=='' ?
				($t3 . (	'
						<tr class="alt">
							<th>' .
			$l10 .
			'</th>
							<td class="' .
			('') .
			'">' .
			(interdire_scripts(((($a = $Pile[$SP]['alt']) OR (is_string($a) AND strlen($a))) ? $a : '<span class="vide">...</span>'))) .
			'</td>
						</tr>')) :
				'') .
		'
						' .
		(($t3 = strval((interdire_scripts(((((($Pile[$SP]['largeur']) OR ((interdire_scripts($Pile[$SP]['hauteur'])))) ?' ' :'')) ?' ' :'')))))!=='' ?
				($t3 . (	'
						<tr>
							<th>' .
			$l11 .
			'</th>
							<td>' .
			(_T('info_largeur_vignette',(array('largeur_vignette' => (interdire_scripts($Pile[$SP]['largeur'])), 'hauteur_vignette' => (interdire_scripts($Pile[$SP]['hauteur'])))))) .
			'</td>
						</tr>
						<tr>
							<th>' .
			$l12 .
			'</th>
							<td>' .
			(_T('medias:info_resolution_mpx',(array('resolution' => (interdire_scripts(number_format(round(div(mult($Pile[$SP]['largeur'],(interdire_scripts($Pile[$SP]['hauteur']))),'1000000'),'1'),'1'))))))) .
			'</td>
						</tr>
						')) :
				'') .
		(($t3 = strval((interdire_scripts(((intval($Pile[$SP]['duree'])) ?' ' :'')))))!=='' ?
				($t3 . (	'
						<tr>
							<th>' .
			$l13 .
			'</th>
							<td>' .
			(interdire_scripts(duree_en_secondes($Pile[$SP]['duree'],'precis'))) .
			'</td>
						</tr>')) :
				'') .
		'
						<tr>
							<th>' .
		$l14 .
		'</th>
							<td>' .
		(interdire_scripts(taille_en_octets($Pile[$SP]['taille']))) .
		'</td>
						</tr>
						<tr>
							<th>' .
		$l15 .
		'</th>
							<td>' .
		(interdire_scripts(affdate(normaliser_date($Pile[$SP]['date'])))) .
		'</td>
						</tr>
						<tr>
							<th>' .
		$l16 .
		'</th>
							<td>' .
		(interdire_scripts(basename(get_spip_doc($Pile[$SP]['fichier'])))) .
		'</td>
						</tr>
					</table>
					')))) .
'
					' .
retablir_echappements_modeles(pipeline( 'afficher_metas_document' , (array('args' => (array('quoi' => 'document_desc', 'id_document' => ($Pile[$SP]['id_document']))), 'data' => (table_valeur($Pile["vars"]??[], (string)'data', null)))) )) .
'
				</div>
			</div>

			<div class="actions">
				<div class="groupe-btns groupe-btns_mini">
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(affiche_bouton_mode_image_portfolio($Pile[$SP]['inclus'])))))!=='' ?
		($t1 . (	'
						<div class="mode">
							' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['mode'] == 'image')) ?' ' :'')))))!=='' ?
			($t2 . (	retablir_echappements_modeles(bouton_action($l17,(invalideur_session($Cache, generer_action_auteur('changer_mode_document',(	(invalideur_session($Cache, $Pile[$SP]['id_document'])) .
				'-document'),(invalideur_session($Cache, self()))))),'ajax')) .
		'
							')) :
			'') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['mode'] == 'image')) ?'' :' ')))))!=='' ?
			($t2 . retablir_echappements_modeles(bouton_action($l18,(invalideur_session($Cache, generer_action_auteur('changer_mode_document',(	(invalideur_session($Cache, $Pile[$SP]['id_document'])) .
				'-image'),(invalideur_session($Cache, self()))))),'ajax'))) :
			'') .
	'
						</div>
					')) :
		'') .
'
					' .
BOUCLE_comptehtml_2b2c4847ad83d34f2d559d81df8bb25f($Cache, $Pile, $doublons, $Numrows, $SP)
. (	'
					' .
	(($t2 = strval(retablir_echappements_modeles((((((((($Numrows['_compte']['total'] ?? 0) == '1')) AND ((interdire_scripts(($Pile[$SP]['vu'] == 'non'))))) ?' ' :'')) AND ((invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', (interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet']))), (invalideur_session($Cache, $Pile[$SP]['id_objet'])))?" ":""))))) ?' ' :''))))!=='' ?
			($t2 . retablir_echappements_modeles(bouton_action($l19,(invalideur_session($Cache, generer_action_auteur('dissocier_document',(	(invalideur_session($Cache, $Pile[$SP]['id_objet'])) .
				'-' .
				(interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet']))) .
				'-' .
				(invalideur_session($Cache, $Pile[$SP]['id_document'])) .
				'-suppr-safe'),(invalideur_session($Cache, self()))))),'ajax noscroll btn_secondaire',$l20,'',(($t4 = strval(($Pile[$SP]['id_document'])))!=='' ?
					('(function(){jQuery("#doc' . $t4 . '").animateRemove();return true;})()') :
					'')))) :
			'') .
	'
					') .
'
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((($Pile[$SP]['vu'] == 'non')) AND ((invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', (interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet']))), (invalideur_session($Cache, $Pile[$SP]['id_objet'])))?" ":""))))) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(bouton_action($l21,(invalideur_session($Cache, generer_action_auteur('dissocier_document',(	(invalideur_session($Cache, $Pile[$SP]['id_objet'])) .
			'-' .
			(interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet']))) .
			'-' .
			(invalideur_session($Cache, $Pile[$SP]['id_document'])) .
			'--safe'),(invalideur_session($Cache, self()))))),'ajax noscroll btn_secondaire','','',(($t3 = strval(($Pile[$SP]['id_document'])))!=='' ?
				('(function(){jQuery("#doc' . $t3 . '").animateRemove();return true;})()') :
				'')))) :
		'') .
'
				</div>
				' .
(($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'document', (invalideur_session($Cache, $Pile[$SP]['id_document'])))?" ":"")) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<div class="deplacer-modifier">
						<span class="deplacer-document" data-rang="' .
	retablir_echappements_modeles(interdire_scripts($Pile[$SP]['rang_lien'])) .
	'"><img src=\'' .
	retablir_echappements_modeles(chemin_image((string)'deplacer-16.png')) .
	'\' width=\'16\' height=\'16\' alt=\'' .
	attribut_html($l22) .
	'\' title=\'' .
	attribut_html($l22) .
	'\' /></span>
						<a href="' .
	retablir_echappements_modeles(attribut_url(generer_url_ecrire('document_edit',(	'id_document=' .
		($Pile[$SP]['id_document']))))) .
	'" target="_blank" class="editbox btn btn_mini" tabindex="0" role="button">' .
	$l24 .
	'</a>
					</div>
				')) :
		'') .
'
				' .
retablir_echappements_modeles(pipeline( 'document_desc_actions' , (array('args' => (array('id_document' => ($Pile[$SP]['id_document']), 'position' => 'document_desc', 'objet' => (interdire_scripts($Pile[$SP]['objet'])), 'id_objet' => ($Pile[$SP]['id_objet']))), 'data' => '')) )) .
'
			</div>
		</div>
	</div>

	<div class="nettoyeur"></div>
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_docslies @ ../plugins-dist/medias/modeles/document_desc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/modeles/document_desc.html
// Temps de compilation total: 12.304 ms
//

function html_2b2c4847ad83d34f2d559d81df8bb25f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

Squelette
(c) xxx
Distribue sous licence GPL

') :
		'') .
'
' .
BOUCLE_docslieshtml_2b2c4847ad83d34f2d559d81df8bb25f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_2b2c4847ad83d34f2d559d81df8bb25f', $Cache, $page, '../plugins-dist/medias/modeles/document_desc.html');
}
