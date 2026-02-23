<?php

/*
 * Squelette : ../prive/formulaires/traduire.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/traduire.html
// Temps de compilation total: 1.507 ms
//

function html_5b0ad460fb85ef33e18866aa3f4a6c22($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
'" id="formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
'-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true))) .
'-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true))) .
'">
	<span class="image_loading"></span>
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
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) OR ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_traduisible', null),true))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'\'><div>
		' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' declarer les hidden qui declencheront le service du formulaire
		parametre : url d\'action ') :
			'') .
	'
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
		')) :
		'') .
'
		<div class="editer-groupe">
			<div class="editer editer_changer_lang long_label obligatoire' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/changer_lang', null)) ?' ' :'')))))!=='' ?
		($t1 . 'erreur') :
		'') .
'">
				<label for="changer_lang">' .
retablir_echappements_modeles(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'texte_langue_objet')))) .
'</label>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/changer_lang', null)))))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
			') :
		'') .
'<span class="affiche"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?' ' :'')))))!=='' ?
		($t1 . 'style="display:none;"') :
		'') .
'>
				' .
retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'langue', null),true) ? (interdire_scripts(traduire_nom_langue(entites_html(table_valeur($Pile[0]??[], (string)'langue', null),true)))):(($t2 = strval((interdire_scripts(traduire_nom_langue(entites_html(table_valeur($Pile[0]??[], (string)'langue_parent', null),true))))))!=='' ?
			('(' . $t2 . ')') :
			'')))) .
'
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'langue_choisie', null),true) == 'oui')) ?'' :' ')))))!=='' ?
		($t1 . (	'(' .
	retablir_echappements_modeles(interdire_scripts(objet_T(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'info_multi_herit'))) .
	')')) :
		'') .
'
				</span>
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'_langue', null),true)) OR ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_traduire', null),true))))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<span class="toggle_box_link"' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?' ' :'')))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'><a class="btn btn_mini btn_secondaire" href="#"
						onclick="var f=jQuery(this).parents(\'form\').eq(0);
							f.find(\'.editer-groupe .input\').removeClass(\'none-js\').show(\'fast\');
							f.find(\'span.toggle_box_link' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_langue', null),true)) ?' ' :'')))))!=='' ?
			($t2 . ',span.affiche') :
			'') .
	'\').hide(\'fast\');
							f.find(\'.boutons,.new_trad,.editer_id_trad\').show(\'fast\');
							f.find(\'#changer_lang\').eq(0).focus();return false;"
						>' .
	_T('public|spip|ecrire:bouton_changer') .
	'<i class="over"> (' .
	retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'_langue', null),true) ? (interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'texte_langue_objet')))):(interdire_scripts(objet_T(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'info_traductions')))))) .
	')</i></a></span>
					' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
					' .
		(($t3 = strval(retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-options-langues' , array('name' => 'changer_lang' ,
	'default' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_langue', null),true))) ,
	'herit' => (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'langue_parent', null),true))) ), array('compil'=>array('../prive/formulaires/traduire.html','html_5b0ad460fb85ef33e18866aa3f4a6c22','',0,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))!=='' ?
				((	'<span class="input' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?'' :' ')))))!=='' ?
					($t4 . 'none-js') :
					'') .
			'">
					<select name="changer_lang" id="changer_lang">') . $t3 . '</select>
					</span>') :
				''))) :
			''))) :
		'') .
'
			</div>

			' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_traduire', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
				' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_lister_id_trad', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
				<div class="fieldset voir_traductions">
					' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'_vue_traductions', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'id_trad\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_lister_id_trad', null),true)))) . ',
	\'titre\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(objet_T(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'info_traductions')))) . ',
	\'objet\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/formulaires/traduire.html\',\'html_5b0ad460fb85ef33e18866aa3f4a6c22\',\'\',26,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
					' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) OR ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_traduisible', null),true))))) ?' ' :'')))))!=='' ?
				($t3 . (	'
					<span class="input' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?'' :' ')))))!=='' ?
					($t4 . 'none-js') :
					'') .
			'">
						<input type="submit" class="btn btn_mini btn_secondaire submit supprimer_trad" name="supprimer_trad" value="' .
			retablir_echappements_modeles(interdire_scripts(attribut_html(objet_T(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'trad_delier')))) .
			'">
					</span>
					')) :
				'') .
		'
				</div>
				')) :
			'') .
	'
				' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_lister_id_trad', null),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
				<div class="editer editer_id_trad long_label' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/id_trad', null)) ?' ' :'')))))!=='' ?
				($t3 . 'erreur') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?'' :' ')))))!=='' ?
				($t3 . 'none-js') :
				'') .
		'">
					<label for="id_trad">' .
		retablir_echappements_modeles(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'texte_definir_comme_traduction_objet')))) .
		'</label>' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'erreurs/id_trad', null)))))!=='' ?
				('
					<span class=\'erreur_message\'>' . $t3 . '</span>
					') :
				'') .
		'<input type="text" class="text" name="id_trad" id="id_trad" value="' .
		retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'id_trad', null),true) ? (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_trad', null),true))):''))) .
		'"
						onkeypress="$(this).parents(\'form\').find(\'.boutons\').slideDown();"/>
				</div>
				')) :
			'') .
	'
			')) :
		'') .
'
		</div>
		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_traduire', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
			' .
	(($t2 = strval(retablir_echappements_modeles(filtre_icone_horizontale_dist(parametre_url(generer_url_ecrire((interdire_scripts(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'url_edit'))),(	'new=oui&lier_trad=' .
		(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_objet', null),true))))),(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true) == 'rubrique') ? 'id_parent':'id_rubrique'))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_id_parent', null),true)))),(interdire_scripts(objet_T(entites_html(table_valeur($Pile[0]??[], (string)'_objet', null),true),'trad_new'))),'traduction','new','right'))))!=='' ?
			((	'<div class="new_trad' .
		retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?'' :' '))) .
		'">
			') . $t2 . '
			</div>') :
			'') .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) OR ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_traduisible', null),true))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
		<div class="boutons' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisie_en_cours', null),true)) ?'' :' ')))))!=='' ?
			($t2 . 'none-js') :
			'') .
	'">
			<input type=\'submit\' class=\'over\' name=\'changer\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\'>
			<div class="groupe-btns">
				<input type=\'submit\' class=\'btn btn_secondaire submit\' name=\'annuler\' value=\'' .
	_T('public|spip|ecrire:bouton_fermer') .
	'\'>
				<input type="submit" class="btn submit" value="' .
	_T('public|spip|ecrire:bouton_changer') .
	'">
			</div>
		</div>
	</div></form>')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_5b0ad460fb85ef33e18866aa3f4a6c22', $Cache, $page, '../prive/formulaires/traduire.html');
}
