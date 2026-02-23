<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/inc-plugins_filtres.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/inc-plugins_filtres.html
// Temps de compilation total: 0.056 ms
//

function html_5259b3239b415a3be1834043aaa3913b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="svp_plugins_toolbar">

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-plugins_cocher') . ', array(\'constante\' => ' . argumenter_squelette(($Pile[0]['constante'] ?? null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/svp/formulaires/inc-plugins_filtres.html\',\'html_5259b3239b415a3be1834043aaa3913b\',\'\',3,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>

	<div class="svp_plugins_toolbar_filters">
		<input type="input" id="filter_text" placeholder="' .
attribut_html(_T('svp:filtrer')) .
'">

		<div class="dropdown" id="dropdown_filter_type">
			<a role="button" href="#" class="dropdown-toggle btn btn_secondaire" data-toggle="dropdown">' .
_T('svp:bouton_afficher') .
'</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown_filtrer_type">
				<button type="button" name="" class="dropdown-item btn_link" value="all">' .
_T('svp:bouton_afficher_plugins_tout') .
'</button>
				<button type="button" name="" class="dropdown-item btn_link none" value="checked">' .
_T('svp:bouton_afficher_plugins_coches') .
'</button>
				<button type="button" name="" class="dropdown-item btn_link none" value="update">' .
_T('svp:bouton_afficher_plugins_maj') .
'</button>
				<button type="button" name="" class="dropdown-item btn_link none" value="forced">' .
_T('svp:bouton_afficher_plugins_forces') .
'</button>
				<button type="button" name="" class="dropdown-item btn_link none" value="incompatible">' .
_T('svp:bouton_afficher_plugins_incompatibles') .
'</button>
			</div>
		</div>
	</div>
</div>
');

	return analyse_resultat_skel('html_5259b3239b415a3be1834043aaa3913b', $Cache, $page, '../plugins-dist/svp/formulaires/inc-plugins_filtres.html');
}
