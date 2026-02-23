<?php

/*
 * Squelette : ../prive/formulaires/editer_liens.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/editer_liens.html
// Temps de compilation total: 0.888 ms
//

function html_70abd6f36ecc90cbe3007cb32e042345($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
' ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'table_source', null),true)))))!=='' ?
		((	'formulaire_' .
	retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
	'-') . $t1) :
		'') .
' formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
'-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) ?'' :' ')))))!=='' ?
		($t1 . 'non_editable') :
		'') .
'"
	data-objet="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
'"
	data-id-objet="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))) .
'"
	data-objet-source="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true))) .
'"
>
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'message_ok', null)))))!=='' ?
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
		<input type="hidden" name="visible" value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'visible', null), '0'),true))) .
	'" id="visible-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'"/>
		<div class="over"><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'btn submit\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\'></div>
	')) :
		'') .
'

		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/objets/liste/' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_vue_liee', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'action\' => ' . argumenter_squelette('') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/formulaires/editer_liens.html\',\'html_70abd6f36ecc90cbe3007cb32e042345\',\'\',10,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_oups', null),true)))))!=='' ?
		('<div class="action"><input type="hidden" name="_oups" value=\'' . $t1 . '\'><input type="submit" class="submit btn_mini btn_secondaire" name="annuler_oups" value="Ooops"></div>') :
		'') .
'

		' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'visible', null), '0'),true)) AND ((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true))))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . (	'
			<div class="selecteur' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'recherche', null),true)) ?' ' :'')))))!=='' ?
			($t2 . 'filtre') :
			'') .
	'">
				<h3 class="titrem">' .
	retablir_echappements_modeles(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true),'texte_ajouter')))) .
	'</h3>
				' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/objets/liste/' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_vue_ajout', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'action\' => ' . argumenter_squelette('') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/formulaires/editer_liens.html\',\'html_70abd6f36ecc90cbe3007cb32e042345\',\'\',16,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
				' .
	(($t2 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', (interdire_scripts(invalideur_session($Cache, entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true)))))?" ":"")) ?' ' :'')))))!=='' ?
			($t2 . (	'
				' .
		retablir_echappements_modeles(filtre_icone_horizontale_dist(parametre_url(parametre_url(generer_url_ecrire_entite_edit('',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true)))),'associer_objet',(interdire_scripts(concat(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true),'|',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))))))),'redirect',(parametre_url(self(),'dummy','','&'))),(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true),'texte_creer_associer')))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true))),'new','right')) .
		'
				')) :
			'') .
	'
				<div class="toggle_box_link">
					<a class="fermer btn btn_mini" href="#"
						onclick="jQuery(this).parents(\'div.selecteur\').hide(\'fast\').siblings(\'.toggle_box_link\').show();jQuery(\'#visible-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'\').attr(\'value\',0);return false;"
						>' .
	_T('public|spip|ecrire:bouton_fermer') .
	'</a>
				</div>
				<p class="boutons">
					<input type="submit" class="btn btn_mini submit fermer" name="fermer" value="' .
	_T('public|spip|ecrire:bouton_fermer') .
	'"	onclick="jQuery(this).parents(\'div.selecteur\').hide(\'fast\').siblings(\'.toggle_box_link\').show();jQuery(\'#visible-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'\').attr(\'value\',0);return false;">
				</p>
			</div>
			<div class="toggle_box_link" style="display:none;">
					<a class="ajouter btn btn_mini" href="#"
						onclick="jQuery(this).parents(\'div.toggle_box_link\').hide(\'fast\').siblings(\'.selecteur\').show(\'fast\');jQuery(\'#visible-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
	'\').attr(\'value\',1);return false;"
						>' .
	retablir_echappements_modeles(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true),'texte_ajouter')))) .
	'</a>
			</div>
		')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'visible', null), '0'),true)) ?'' :' ')))))!=='' ?
			($t2 . (	'
		<div class="toggle_box_link">
			<button type="submit" class="ajouter btn_mini" name="visible" value="1">' .
		retablir_echappements_modeles(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true),'texte_ajouter')))) .
		'</button>
		</div>
		')) :
			'') .
	'
	  ' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' ajouter les saisies supplementaires : extra et autre, a cet endroit ') :
			'') .
	'
	  <!--extra-->
	</div></form>
	')) :
		'') .
'
</div>
<script>
jQuery(\'.formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
' .action .delete\').click(function(){jQuery(this).parents(\'tr\').eq(0).animateRemove();});
jQuery(\'.formulaire_' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['form'] ?? null))) .
' .append\').animateAppend();
</script>
');

	return analyse_resultat_skel('html_70abd6f36ecc90cbe3007cb32e042345', $Cache, $page, '../prive/formulaires/editer_liens.html');
}
