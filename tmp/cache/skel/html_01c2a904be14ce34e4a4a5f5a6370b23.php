<?php

/*
 * Squelette : ../prive/modeles/object_jobs_list.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _jobs
 */ 

function BOUCLE_jobshtml_01c2a904be14ce34e4a4a5f5a6370b23(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_jobs']) ? $Pile[0]['debut_jobs'] : null), 5);
	if (!isset($command['table'])) {
		$command['table'] = 'jobs';
		$command['id'] = '_jobs';
		$command['from'] = array('jobs' => 'spip_jobs','L1' => 'spip_jobs_liens');
		$command['type'] = array();
		$command['groupby'] = array("jobs.id_job");
		$command['select'] = array("jobs.date",
		"jobs.id_job",
		"jobs.descriptif");
		$command['orderby'] = array('jobs.date');
		$command['join'] = array('L1' => array('jobs','id_job'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.objet', sql_quote(($Pile[0]['objet'] ?? null), '','varchar(25) NOT NULL DEFAULT \'\'')), 
			array('=', 'L1.id_objet', sql_quote(($Pile[0]['id_objet'] ?? null), '','bigint(20) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/modeles/object_jobs_list.html','html_01c2a904be14ce34e4a4a5f5a6370b23','_jobs',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_jobs']['compteur_boucle'] = 0;
	$Numrows['_jobs']['command'] = $command;
	$Numrows['_jobs']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_jobs']) ? $Pile[0]['debut_jobs'] : _request('debut_jobs');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_jobs'] = quete_debut_pagination('id_job',$Pile[0]['@id_job'] = substr($debut_boucle,1),5,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_jobs']['total']-1)/(5))*(5)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_jobs']['total'] : $debut_boucle + 4), $Numrows['_jobs']['total'] - 1);
	$Numrows['_jobs']['grand_total'] = $Numrows['_jobs']['total'];
	$Numrows['_jobs']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_jobs']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_jobs']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:queue_executer_maintenant');
	$l2 = _T('public|spip|ecrire:queue_executer_maintenant');
	$l3 = _T('public|spip|ecrire:annuler');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_jobs']['compteur_boucle']++;
		if ($Numrows['_jobs']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_jobs']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
			<li class="item">
				<div class="content">
					<abbr class="date" title="' .
retablir_echappements_modeles(interdire_scripts(attribut_html(affdate_heure(normaliser_date($Pile[$SP]['date']))))) .
'">' .
retablir_echappements_modeles(interdire_scripts(spip_ucfirst(date_relative(normaliser_date($Pile[$SP]['date']))))) .
'</abbr>
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(PtoBR(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))))!=='' ?
		('<div class="description">' . $t1 . '</div>') :
		'') .
'
				</div>
				' .
(($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('annuler', 'job', (invalideur_session($Cache, $Pile[$SP]['id_job'])))?" ":"")) ?' ' :'')))))!=='' ?
		($t1 . (	'
					<div class="actions">
						' .
	retablir_echappements_modeles(bouton_action((	(filtre_balise_svg_dist(chemin_image((string)'symbol-play-16.svg'))) .
		'<span class="visually-hidden">' .
		$l1 .
		'</span>'),(invalideur_session($Cache, generer_action_auteur('forcer_job',(invalideur_session($Cache, $Pile[$SP]['id_job'])),(invalideur_session($Cache, self()))))),'btn btn_link btn_icone btn_executer','',$l1)) .
	'
						' .
	retablir_echappements_modeles(bouton_action($l3,(invalideur_session($Cache, generer_action_auteur('annuler_job',(invalideur_session($Cache, $Pile[$SP]['id_job'])),(invalideur_session($Cache, self()))))),'ajax btn btn_icone btn_mini btn_annuler btn_danger')) .
	'
					</div>
				')) :
		'') .
'
			</li>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_jobs @ ../prive/modeles/object_jobs_list.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/modeles/object_jobs_list.html
// Temps de compilation total: 5.206 ms
//

function html_01c2a904be14ce34e4a4a5f5a6370b23($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_jobshtml_01c2a904be14ce34e4a4a5f5a6370b23($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	' .
		retablir_echappements_modeles(message_alerte_ouvrir(_T('public|spip|ecrire:queue_titre'), 'msg-alert info', null, null)) .
		'
	<div class="jobs_liste jobs_liste_' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
		'">
	' .
		retablir_echappements_modeles(filtre_pagination_dist($Numrows["_jobs"]["grand_total"],
 		'_jobs',
		isset($Pile[0]['debut_jobs'])?$Pile[0]['debut_jobs']:intval(_request('debut_jobs')),
		5, false, '', '', array())) .
		'
	<ul class="liste_items jobs mini">
		') . $t1 . (	'
	</ul>
	' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_jobs"]["grand_total"],
 		'_jobs',
		isset($Pile[0]['debut_jobs'])?$Pile[0]['debut_jobs']:intval(_request('debut_jobs')),
		5, true, '', '', array()))))!=='' ?
				('<nav class="pagination">' . $t3 . '</nav>') :
				'') .
		'
	</div>
	' .
		retablir_echappements_modeles(message_alerte_fermer()) .
		'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_01c2a904be14ce34e4a4a5f5a6370b23', $Cache, $page, '../prive/modeles/object_jobs_list.html');
}
