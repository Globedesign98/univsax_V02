<?php

/*
 * Squelette : ../plugins/auto/inscription3/v3.7.1/prive/style_prive_plugin_inscription3.html
 * Date :      Mon, 04 Aug 2025 12:57:18 GMT
 * Compile :   Sun, 22 Feb 2026 23:42:32 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/inscription3/v3.7.1/prive/style_prive_plugin_inscription3.html
// Temps de compilation total: 0.296 ms
//

function html_4c6a5d2f8a7ee40a3ed7f288a072f0eb($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).

	ATTENTION: il faut absolument le charset sinon Firefox croit que
	c\'est du text/html !
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_claire', null), 'edf3fe'),true))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_foncee', null), '3874b0'),true))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
'.raccourcis ul,.legend ul{
	list-style-type:none;
	padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':30px;
}
.raccourcis li{
	margin-top:5px
}

#principal {
	margin:0%;
}

sup {font-size:60%}

.search_field{
	width:100px
}

#case{
	width:120px
}

.cadre-info {margin-bottom:10px}

td.label,th.label{
	position:relative;
	text-align:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';
	vertical-align:top;
	width:120px;
	display:block;
}

td.label label{
	margin-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':0;
	float:none;
	width:auto;
}

table.spip th{
	vertical-align:middle;
}

table.spip th.both{
	background:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null)))))!=='' ?
		('#' . $t1 . ' ') :
		'') .
'url(' .
retablir_echappements_modeles(find_in_path((string)'images/fle_both.gif')) .
')' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null))))!=='' ?
		(' ' . $t1) :
		'') .
' center no-repeat;
	padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':20px;

}

table.spip th.on{
	background-color:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null))))))!=='' ?
		('#' . $t1) :
		'') .
';
}

table.spip th.asc{
	background:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null))))))!=='' ?
		('#' . $t1 . ' ') :
		'') .
'url(' .
retablir_echappements_modeles(find_in_path((string)'images/fle_asc.gif')) .
')' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null))))!=='' ?
		(' ' . $t1) :
		'') .
' center no-repeat;
	padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':20px;
}

table.spip th.desc{
	background:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null))))))!=='' ?
		('#' . $t1 . ' ') :
		'') .
'url(' .
retablir_echappements_modeles(find_in_path((string)'images/fle_desc.gif')) .
')' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null))))!=='' ?
		(' ' . $t1) :
		'') .
' center no-repeat;
	padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':20px;
}

table.spip tr.erreur td{
	background-color:#FFD0BF;
}

table.inscription3 th.label{
	width:auto;
}
.formulaire_configurer li.sans_padding{
	padding-left:0;
}

#page .formulaire_spip li.editer_reglement_article > label{
	float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';
	margin-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':30px;
}
');

	return analyse_resultat_skel('html_4c6a5d2f8a7ee40a3ed7f288a072f0eb', $Cache, $page, '../plugins/auto/inscription3/v3.7.1/prive/style_prive_plugin_inscription3.html');
}
