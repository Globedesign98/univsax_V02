<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies-vues/checkbox.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _choix
 */ 

function BOUCLE_choixhtml_7a22b15ac8ab7173077e0b67c8dbabb0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_choix';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../plugins/auto/saisies/v6.2.0/saisies-vues/checkbox.html','html_7a22b15ac8ab7173077e0b67c8dbabb0','_choix',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'cle_ou_valeur', null), 'valeur'),true) == 'cle') ? (($t2 = strval((interdire_scripts(safehtml($Pile[$SP]['valeur'])))))!=='' ?
			('<li class="choix">' . $t2 . '</li>') :
			''):(	(($t2 = strval((table_valeur($Pile["vars"]??[], (string)(	'data/' .
		(interdire_scripts(safehtml($Pile[$SP]['valeur'])))), null))))!=='' ?
			('<li class="choix">' . $t2 . '</li>') :
			'') .
	'
	')))) .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_choix @ ../plugins/auto/saisies/v6.2.0/saisies-vues/checkbox.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies-vues/checkbox.html
// Temps de compilation total: 0.214 ms
//

function html_7a22b15ac8ab7173077e0b67c8dbabb0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (interdire_scripts(saisies_valeur2tableau(entites_html(table_valeur($Pile[0]??[], (string)'valeur', null),true),(table_valeur($Pile["vars"]??[], (string)'data', null))))))) .
(($t1 = BOUCLE_choixhtml_7a22b15ac8ab7173077e0b67c8dbabb0($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul class="spip">
	' . $t1 . (	'

	' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur/choix_alternatif', null))))!=='' ?
				((	'<li class="choix">' .
			retablir_echappements_modeles(label_ponctuer((	'<em>' .
				(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'choix_alternatif_label', null),true))) .
				'</em>'))) .
			' ') . $t3 . '</li>') :
				'') .
		'
</ul>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_7a22b15ac8ab7173077e0b67c8dbabb0', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies-vues/checkbox.html');
}
