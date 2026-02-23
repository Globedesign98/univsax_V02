<?php

/*
 * Squelette : ../plugins-dist/dump/formulaires/inc-lister-sauvegardes.html
 * Date :      Thu, 04 Dec 2025 23:14:30 GMT
 * Compile :   Thu, 19 Feb 2026 02:23:52 GMT
 * Boucles :   _dump
 */ 

function BOUCLE_dumphtml_6cacdebac717684af36bc84aa4bbef2f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(dump_lister_sauvegardes(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_dir_dump', null), (dump_repertoire(''))),true),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'tri', null), 'nom'),true)))))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_dump';
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
		array('../plugins-dist/dump/formulaires/inc-lister-sauvegardes.html','html_6cacdebac717684af36bc84aa4bbef2f','_dump',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_dump']['compteur_boucle'] = 0;
	
	$l1 = _T('public|spip|ecrire:bouton_download');
	$l2 = _T('public|spip|ecrire:bouton_download');
	$l3 = _T('public|spip|ecrire:lien_supprimer');
	$l4 = _T('dump:confirmer_supprimer_sauvegarde');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_dump']['compteur_boucle']++;
		$t0 .= (
'
				<tr class="' .
retablir_echappements_modeles(alterner(($Numrows['_dump']['compteur_boucle'] ?? 0),'row_odd','row_even')) .
'">
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'name', null), ''),true)))))!=='' ?
		('<td><input type=\'radio\' name="' . $t1 . (	'" value="' .
	retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'fichier')))) .
	'" id="dump_' .
	retablir_echappements_modeles(($Numrows['_dump']['compteur_boucle'] ?? 0)) .
	'"
								' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'name', null),true))), null),true) == (interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'fichier')))))) ?' ' :'')))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	'
								/></td>')) :
		'') .
'
					<td class="fichier principale">
						<label for="dump_' .
retablir_echappements_modeles(($Numrows['_dump']['compteur_boucle'] ?? 0)) .
'" title="' .
retablir_echappements_modeles(interdire_scripts(attribut_html(basename(safehtml(table_valeur($Pile[$SP]['valeur'], 'fichier')),'.sqlite')))) .
'">' .
retablir_echappements_modeles(interdire_scripts(basename(safehtml(table_valeur($Pile[$SP]['valeur'], 'fichier')),'.sqlite'))) .
'</label>
					</td>
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'download', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<td>
						<a href="' .
	retablir_echappements_modeles(invalideur_session($Cache, generer_action_auteur('telecharger_dump',(interdire_scripts(invalideur_session($Cache, safehtml(table_valeur($Pile[$SP]['valeur'], 'fichier')))))))) .
	'" title="' .
	attribut_html($l1) .
	'">' .
	retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'telecharger-16.png'),$l1)) .
	'</a>
					</td>
					')) :
		'') .
'
					<td class="taille">
						' .
retablir_echappements_modeles(interdire_scripts(taille_en_octets(safehtml(table_valeur($Pile[$SP]['valeur'], 'taille'))))) .
'
					</td>
					<td>
						' .
retablir_echappements_modeles(affdate_heure(date('Y-m-d H:i:s',(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'date'))))))) .
'
					</td>
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'delete', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<td>
						' .
	retablir_echappements_modeles(bouton_action((filtre_balise_img_dist(chemin_image((string)'supprimer-12.png'),$l3)),(invalideur_session($Cache, generer_action_auteur('supprimer_dump',(interdire_scripts(invalideur_session($Cache, safehtml(table_valeur($Pile[$SP]['valeur'], 'fichier'))))),(invalideur_session($Cache, self()))))),'ajax',$l4)) .
	'
					</td>
					')) :
		'') .
'
				</tr>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_dump @ ../plugins-dist/dump/formulaires/inc-lister-sauvegardes.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/dump/formulaires/inc-lister-sauvegardes.html
// Temps de compilation total: 3.133 ms
//

function html_6cacdebac717684af36bc84aa4bbef2f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Tableau affichant la liste des fichiers de saugardes avec quelques infos annexes
') :
		'') .
(($t1 = BOUCLE_dumphtml_6cacdebac717684af36bc84aa4bbef2f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class=\'liste-objets dump\' id=\'' .
		retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'sauvegardes'),true))) .
		'\'>
	<table class=\'spip liste\'>
		<thead>
		' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'titre', null), ''),true)))))!=='' ?
				('<caption><strong class=\'caption\'>' . $t3 . '</strong></caption>') :
				'') .
		'
		<tr class="first_row">
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'name', null), ''),true)) ?' ' :'')))))!=='' ?
				($t3 . '<th></th>') :
				'') .
		'
			<th scope=\'col\'>' .
		retablir_echappements_modeles(lien_ou_expose(ancre_url(parametre_url(self(),'tri','nom'),(	'#' .
			(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'sauvegardes'),true))))),_T('public|spip|ecrire:info_nom'),(interdire_scripts((entites_html(sinon(table_valeur($Pile[0]??[], (string)'tri', null), 'nom'),true) == 'nom'))),'ajax')) .
		'</th>
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'download', null), ''),true)) ?' ' :'')))))!=='' ?
				($t3 . '
			<th scope=\'col\'></th>
			') :
				'') .
		'
			<th scope=\'col\'>' .
		retablir_echappements_modeles(lien_ou_expose(ancre_url(parametre_url(self(),'tri','taille'),(	'#' .
			(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'sauvegardes'),true))))),_T('public|spip|ecrire:label_poids_fichier'),(interdire_scripts((entites_html(sinon(table_valeur($Pile[0]??[], (string)'tri', null), 'nom'),true) == 'taille'))),'ajax')) .
		'</th>
			<th scope=\'col\'>' .
		retablir_echappements_modeles(lien_ou_expose(ancre_url(parametre_url(self(),'tri','date'),(	'#' .
			(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'id', null), 'sauvegardes'),true))))),_T('public:date'),(interdire_scripts((entites_html(sinon(table_valeur($Pile[0]??[], (string)'tri', null), 'nom'),true) == 'date'))),'ajax')) .
		'</th>
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'delete', null), ''),true)) ?' ' :'')))))!=='' ?
				($t3 . '
			<th scope=\'col\'></th>
			') :
				'') .
		'
		</tr>
		</thead>
		<tbody>
			') . $t1 . '
		</tbody>
	</table>
</div>
') :
		''));

	return analyse_resultat_skel('html_6cacdebac717684af36bc84aa4bbef2f', $Cache, $page, '../plugins-dist/dump/formulaires/inc-lister-sauvegardes.html');
}
