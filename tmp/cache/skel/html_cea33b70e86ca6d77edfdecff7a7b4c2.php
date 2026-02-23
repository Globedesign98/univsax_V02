<?php

/*
 * Squelette : ../prive/formulaires/editer_article.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/editer_article.html
// Temps de compilation total: 2.155 ms
//

function html_cea33b70e86ca6d77edfdecff7a7b4c2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_editer_article formulaire_editer_article-' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id_article', null), 'nouveau'),true))) .
'">
	' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_ok', null))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t1 . '</div>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_erreur', null)))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_erreur" role="alert">' . $t1 . '</div>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'\'><div>
		' .
	retablir_echappements_modeles(	'<span class="form-hidden">' .
	form_hidden(($Pile[0]['action'] ?? '')) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . ($Pile[0]['form'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_args'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_sign\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_sign'] ?? '') . '\'>' .
	($Pile[0]['_hidden'] ?? '') .
	'</span>') .
	'
		<input type=\'hidden\' name=\'id_article\' value=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_article', null),true))) .
	'\'>
		<div class="editer-groupe">
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_surtitre', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_surtitre',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'surtitre', null), ''),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_surtitre' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/surtitre', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="surtitre">' .
		_T('public|spip|ecrire:texte_sur_titre') .
		'<em class="aide">' .
		retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('surtitre'):''))) .
		'</em></label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/surtitre', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<input type=\'text\' class=\'text\' name=\'surtitre\' id=\'surtitre\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		' value="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'surtitre', null),true))) .
		'">
			</div>')) :
			'') .
	'
			<div class="editer editer_titre obligatoire' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/titre', null)) ?' ' :'')))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
				<label for="titre">' .
	label_nettoyer(_T('public|spip|ecrire:info_titre')) .
	'<em class="aide">' .
	retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('titre'):''))) .
	'</em></label>' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/titre', null)))))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'titre\' id=\'titre\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
			(' lang=\'' . $t2 . '\'') :
			'') .
	' value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'titre', null), ''),true))) .
	'"
				placeholder="' .
	attribut_html(_T('public|spip|ecrire:info_nouvel_article')) .
	'">
			</div>
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_soustitre', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_soustitre',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'soustitre', null), ''),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_soustitre' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/soustitre', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="soustitre">' .
		_T('public|spip|ecrire:texte_sous_titre') .
		'<em class="aide">' .
		retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('soustitre'):''))) .
		'</em></label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/soustitre', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<input type=\'text\' class=\'text\' name=\'soustitre\' id=\'soustitre\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		' value="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'soustitre', null),true))) .
		'">
			</div>')) :
			'') .
	'
			' .
	(($t2 = strval(retablir_echappements_modeles(filtre_chercher_rubrique_dist('',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_article', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_parent', null),true))),'article',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_secteur', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'config/restreint', null),true))),'0','form_simple'))))!=='' ?
			((	'<div class="editer editer_parent' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/id_parent', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="id_parent">' .
		_T('public|spip|ecrire:titre_cadre_interieur_rubrique') .
		'<em class="aide">' .
		retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('id_parent'):''))) .
		'</em></label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/id_parent', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				') . $t2 . '
			</div>') :
			'') .
	'

			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_descriptif', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_descriptif',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'descriptif', null), ''),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_descriptif' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/descriptif', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="descriptif">' .
		_T('public|spip|ecrire:texte_descriptif_rapide') .
		'<em class="aide">' .
		retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('descriptif'):''))) .
		'</em></label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/descriptif', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<textarea name=\'descriptif\' id=\'descriptif\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		' rows=\'2\' cols=\'40\'>' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'descriptif', null),true))) .
		'</textarea>
			</div>')) :
			'') .
	'
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_chapeau', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_chapeau',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'chapo', null), ''),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_chapo' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/chapo', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="chapo">' .
		_T('public|spip|ecrire:info_chapeau') .
		'<em class="aide">' .
		retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('chapo'):''))) .
		'</em></label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/chapo', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<textarea name=\'chapo\' id=\'chapo\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'config/lignes', null),true)))))!=='' ?
				(' rows=\'' . $t3 . '\'') :
				'') .
		' cols=\'40\'>' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'chapo', null),true))) .
		'</textarea>
			</div>')) :
			'') .
	'

			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_urlref', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_urlref',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'url_site', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nom_site', null), ''),true)))),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_liens_sites fieldset">
				<fieldset>
					<h3 class="legend">' .
		_T('public|spip|ecrire:entree_liens_sites') .
		'</h3>
					<div class="editer-groupe">
						<div class="editer editer_nom_site' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/nom_site', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
							<label for="nom_site">' .
		_T('public|spip|ecrire:info_titre') .
		'</label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/nom_site', null)))))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<input type=\'text\' class=\'text\' name=\'nom_site\' id=\'nom_site\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		' value="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom_site', null),true))) .
		'">
						</div>
						<div class="editer editer_url_site' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/url_site', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
							<label for="url_site">' .
		_T('public|spip|ecrire:info_url') .
		'</label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/url_site', null)))))!=='' ?
				('
							<span class=\'erreur_message\'>' . $t3 . '</span>
							') :
				'') .
		'<input type=\'text\' class=\'text\' name=\'url_site\' id=\'url_site\' value="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'url_site', null),true))) .
		'">
						</div>
					</div>
				</fieldset>
			</div>')) :
			'') .
	'

			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_texte', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_texte',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'texte', null), ''),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_texte obligatoire' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/texte', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="text_area">' .
		_T('public|spip|ecrire:info_texte') .
		'<em class="aide">' .
		retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('text_area'):''))) .
		'</em></label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/texte', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				<textarea name=\'texte\' id=\'text_area\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		' rows=\'' .
		retablir_echappements_modeles(interdire_scripts(plus(entites_html(table_valeur($Pile[0]??[], (string)'config/lignes', null),true),'2'))) .
		'\' cols=\'40\'>' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'texte', null),true))) .
		'</textarea>
			</div>')) :
			'') .
	'
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((((((($a = entites_html(table_valeur($Pile[0]??[], (string)'config/articles_ps', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts((include_spip('inc/config')?lire_config('articles_ps',null,false):'')))) == 'non') ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'ps', null), ''),true))):' ')) ?' ' :'')))))!=='' ?
			($t2 . (	'
			<div class="editer editer_ps' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/ps', null)) ?' ' :'')))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		'">
				<label for="ps">' .
		_T('public|spip|ecrire:info_post_scriptum') .
		'</label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/ps', null)))))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<textarea name=\'ps\' id=\'ps\'' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(($Pile[0]['langue'] ?? null)))))!=='' ?
				(' lang=\'' . $t3 . '\'') :
				'') .
		' rows=\'5\' cols=\'40\'>' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ps', null),true))) .
		'</textarea>
			</div>')) :
			'') .
	'
		</div>

		' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' ajouter les saisies supplementaires : extra et autre, a cet endroit ') :
			'') .
	'
		<!--extra-->
		<p class=\'boutons\'><input type=\'submit\' name="save" class=\'btn submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\'></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_cea33b70e86ca6d77edfdecff7a7b4c2', $Cache, $page, '../prive/formulaires/editer_article.html');
}
