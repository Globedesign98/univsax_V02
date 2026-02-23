<?php

/*
 * Squelette : prive/formulaires/menu_lang.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Sun, 22 Feb 2026 23:40:43 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/menu_lang.html
// Temps de compilation total: 0.284 ms
//

function html_b0fcd2b0dc3e953fecfe55e5788ef8f6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-options-langues' , array('name' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'name', null))) ,
	'default' => (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'default', null), ''))) ), array('compil'=>array('prive/formulaires/menu_lang.html','html_b0fcd2b0dc3e953fecfe55e5788ef8f6','',0,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))!=='' ?
		((	'<div class="formulaire_spip formulaire_menu_lang" id="formulaire_menu_lang">
<form method="post" action="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true))) .
	'"><div>
	' .
	retablir_echappements_modeles(interdire_scripts(form_hidden(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true)))) .
	'
	<label for="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'">' .
	_T('public|spip|ecrire:info_langues') .
	'</label>
	<select name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" id="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" onchange="this.parentNode.parentNode.submit()">
		') . $t1 . '
	</select>
	<noscript><p class="boutons"><input type="submit" class="btn submit" value="&gt;&gt;"></p></noscript>
</div></form>
</div>') :
		'');

	return analyse_resultat_skel('html_b0fcd2b0dc3e953fecfe55e5788ef8f6', $Cache, $page, 'prive/formulaires/menu_lang.html');
}
