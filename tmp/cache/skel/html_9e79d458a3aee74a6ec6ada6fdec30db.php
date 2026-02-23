<?php

/*
 * Squelette : ../prive/objets/liste/auteurs_lies.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   _liste_aut, _lettre
 */ 

function BOUCLE_liste_authtml_9e79d458a3aee74a6ec6ada6fdec30db(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'selection', null))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('sens'.'_liste_aut'))?session_get('sens'.'_liste_aut'):(is_array($s=retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debutautl']) ? $Pile[0]['debutautl'] : null), (($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_liste_aut';
		$command['from'] = array('auteurs' => 'spip_auteurs','LAA' => 'spip_auteurs_liens','articles' => 'spip_articles');
		$command['type'] = array('LAA' => 'left','articles' => 'left');
		$command['groupby'] = array("auteurs.id_auteur");
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("".tri_champ_select($tri)."",
		"auteurs.id_auteur",
		"COUNT(articles.id_article) AS compteur_articles",
		"auteurs.nom",
		"auteurs.statut",
		"auteurs.bio",
		"auteurs.nom AS titre_rang",
		"auteurs.email");
	$command['orderby'] = array(tri_champ_order($tri,$command['from'],$senstri));
	$command['where'] = 
			array(sql_in('auteurs.id_auteur', $in), (($zzw = spip_sanitize_from_request(@$Pile[0]["where"],"where","vide")) ? $zzw : ''), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('auteurs.statut', $in1) : 
			array('=', 'auteurs.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(255) NOT NULL DEFAULT \'0\'')))));
	$command['join'] = array('LAA' => array('auteurs','id_auteur','id_auteur','LAA.objet=\'article\''), 'articles' => array('LAA','id_article','id_objet','(articles.statut IS NULL OR '.sql_in_quote('articles.statut',[retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'filtre_statut_articles', null), 'poubelle')))], 'NOT').')'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/auteurs_lies.html','html_9e79d458a3aee74a6ec6ada6fdec30db','_liste_aut',46,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_aut']['compteur_boucle'] = 0;
	$Numrows['_liste_aut']['command'] = $command;
	$Numrows['_liste_aut']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debutautl']) ? $Pile[0]['debutautl'] : _request('debutautl');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debutautl'] = quete_debut_pagination('id_auteur',$Pile[0]['@id_auteur'] = substr($debut_boucle,1),(($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_aut']['total']-1)/((($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10)))*((($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_liste_aut']['total'] : $debut_boucle+(($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10) - 1), $Numrows['_liste_aut']['total'] - 1);
	$Numrows['_liste_aut']['grand_total'] = $Numrows['_liste_aut']['total'];
	$Numrows['_liste_aut']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_aut']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_aut']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:texte_vide');
	$l2 = _T('public|spip|ecrire:lien_retirer_auteur');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_aut']['compteur_boucle']++;
		if ($Numrows['_liste_aut']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_aut']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
retablir_echappements_modeles(alterner(($Numrows['_liste_aut']['compteur_boucle'] ?? 0),'row_odd','row_even')) .
(($t1 = strval(retablir_echappements_modeles(unique((calcul_exposer($Pile[$SP]['id_auteur'], 'id_auteur', $Pile[0], '', 'id_auteur', '') ? 'on' : '')))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(unique(((filtre_initiale($Pile[$SP]['nom']) == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'i', null),true)))) ? 'on':'')))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(((($Pile[$SP]['id_auteur'] == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_lien_ajoute', null),true))))) ?' ' :''))))!=='' ?
		($t1 . 'append') :
		'') .
'">
			<td class=\'statut\'>' .
retablir_echappements_modeles(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'auteur'))) .
'</td>
			<td class=\'nom' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((safehtml(supprimer_numero(typo($Pile[$SP]['nom'], "TYPO", $connect, $Pile[0])))) ?'' :' ')))))!=='' ?
		(' ' . $t1 . 'vide') :
		'') .
'\'' .
(($t1 = strval(retablir_echappements_modeles(((quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', '')) ?'' :' '))))!=='' ?
		($t1 . 'colspan=\'2\'') :
		'') .
'><a href="' .
retablir_echappements_modeles(generer_objet_url($Pile[$SP]['id_auteur'],'auteur')) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(couper($Pile[$SP]['bio'],'200'))))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
'>' .
(($t1 = strval(retablir_echappements_modeles(calculer_rang_smart($Pile[$SP]['titre_rang'], 'auteur', $Pile[$SP]['id_auteur'], $Pile[0]))))!=='' ?
		('<span class=\'rang\'>' . $t1 . '.</span> ') :
		'') .
retablir_echappements_modeles(interdire_scripts(((($a = safehtml(supprimer_numero(typo($Pile[$SP]['nom'], "TYPO", $connect, $Pile[0])))) OR (is_string($a) AND strlen($a))) ? $a : $l1))) .
'</a></td>
			' .
(($t1 = strval(retablir_echappements_modeles(extraire_attribut(filtrer('image_graver', filtrer('image_recadre_avec_fallback',quete_html_logo(quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'], ''), '', ''),'40','40')),'src'))))!=='' ?
		((	'<td class=\'logo\'><a href="' .
	retablir_echappements_modeles(generer_objet_url($Pile[$SP]['id_auteur'],'auteur')) .
	'" style="background-image:url(') . $t1 . ')"></a></td>') :
		'') .
'
			' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'auteurs_voiremails', null))))!=='' ?
		($t1 . (	'<td class=\'email\'>' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts($Pile[$SP]['email']))))!=='' ?
			('<a href=\'mailto:' . $t2 . (	'\'>' .
		retablir_echappements_modeles(interdire_scripts(couper($Pile[$SP]['email'],'30'))) .
		'</a>')) :
			'') .
	'</td>')) :
		'') .
'
			<td class=\'nombre\'>' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (array('article' => (singulier_ou_pluriel($Pile[$SP]['compteur_articles'],'info_1_article','info_nb_articles')))))) .
(($t1 = strval(retablir_echappements_modeles(filtre_implode_dist(pipeline( 'compter_contributions_auteur' , (array('args' => (array('id_auteur' => ($Pile[$SP]['id_auteur']))), 'data' => (table_valeur($Pile["vars"]??[], (string)'data', null)))) ),'<br>'))))!=='' ?
		('<span>' . $t1 . '</span>') :
		'') .
'</td>
			<td class=\'action\'>
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
				<button type="submit" class="supprimer btn_link btn_mini" name="supprimer_lien[auteur-' .
	retablir_echappements_modeles($Pile[$SP]['id_auteur']) .
	'-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
	'-' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))) .
	']" value="X">' .
	$l2 .
	(($t2 = strval(retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'supprimer-12.svg')))))!=='' ?
			(' ' . $t2) :
			'') .
	'</button>
				')) :
		'') .
'
			</td>
		</tr>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_aut @ ../prive/objets/liste/auteurs_lies.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_lettrehtml_9e79d458a3aee74a6ec6ada6fdec30db(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'selection', null))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_lettre']))?$Pile[0]['tri'.'_lettre']:((strncmp('_lettre','session',7)==0 AND session_get('tri'.'_lettre'))?session_get('tri'.'_lettre'):retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_lettre']))?$Pile[0]['sens'.'_lettre']:((strncmp('_lettre','session',7)==0 AND session_get('sens'.'_lettre'))?session_get('sens'.'_lettre'):(is_array($s=retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lettre']))?$Pile[0]['tri'.'_lettre']:((strncmp('_lettre','session',7)==0 AND session_get('tri'.'_lettre'))?session_get('tri'.'_lettre'):retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_lettre';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("".tri_champ_select($tri)."",
		"auteurs.nom",
		"auteurs.id_auteur");
	$command['orderby'] = array(tri_champ_order($tri,$command['from'],$senstri));
	$command['where'] = 
			array(sql_in('auteurs.id_auteur', $in), (($zzw = spip_sanitize_from_request(@$Pile[0]["where"],"where","vide")) ? $zzw : ''), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('auteurs.statut', $in1) : 
			array('=', 'auteurs.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(255) NOT NULL DEFAULT \'0\'')))), 
			array('REGEXP', 'auteurs.id_auteur', sql_quote(retablir_echappements_modeles((table_valeur($Pile["vars"]??[], (string)'afficher_lettres', null) ? '.*':'A')), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/auteurs_lies.html','html_9e79d458a3aee74a6ec6ada6fdec30db','_lettre',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_lettre']['compteur_boucle'] = 0;
	$Numrows['_lettre']['command'] = $command;
	$Numrows['_lettre']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_lettre']['compteur_boucle']++;
		$t0 .= (
(($t1 = strval(retablir_echappements_modeles(((unique(filtre_initiale($Pile[$SP]['nom']))) ?' ' :''))))!=='' ?
		('
		' . $t1 . (	'
		' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'p'] = (concat(table_valeur($Pile["vars"]??[], (string)'p', null),(afficher_initiale(ancre_url(parametre_url(self(),'debutautl',(	'@' .
				($Pile[$SP]['id_auteur']))),'paginationautl'),(filtre_initiale($Pile[$SP]['nom'])),(($Numrows['_lettre']['compteur_boucle'] ?? 0)),(table_valeur($Pile["vars"]??[], (string)'debut', null)),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))))))) .
	'
		')) :
		'') .
retablir_echappements_modeles(vide($Numrows['_lettre']['compteur_boucle']=$iter->skip((interdire_scripts(moins(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true),(((($Numrows['_lettre']['compteur_boucle'] ?? 0) == '1') ? '2':'1'))))),($Numrows['_lettre']['total'] ?? null)))));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_lettre @ ../prive/objets/liste/auteurs_lies.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/liste/auteurs_lies.html
// Temps de compilation total: 4.018 ms
//

function html_9e79d458a3aee74a6ec6ada6fdec30db($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = (array('statut' => '1', 'multi nom' => '1', 'site' => '1', 'compteur_articles' => '-1
'))))))!=='' ?
		($t1 . '
') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'auteurs_voiremails'] = (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('auteurs_voiremails')?" ":""))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'selection'] = (interdire_scripts(lister_objets_lies(entites_html(table_valeur($Pile[0]??[], (string)'objet_source', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_objet_lien', null),true)))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'debut'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'debutautl', null), (interdire_scripts(eval('return '.'_request("debutautl");'.';')))),true))))) .
'<input type="hidden" name="debutautl" value="' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'debut', null)) .
'">
' .
(($t1 = BOUCLE_liste_authtml_9e79d458a3aee74a6ec6ada6fdec30db($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . ' En cas de pagination indirecte @32, il faut refaire le set car la boucle
a mis a jour la valeur avec la page reelle') :
				'') .
		'
' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'debut'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'debutautl', null), (interdire_scripts(eval('return '.'_request("debutautl");'.';')))),true))))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'afficher_lettres'] = (interdire_scripts(((((($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'') == 'multi nom')) ?' ' :''))))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'auteurs_voiremails'] = (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('auteurs_voiremails')?" ":""))))) .
		retablir_echappements_modeles(filtre_pagination_dist($Numrows["_liste_aut"]["grand_total"],
 		'autl',
		isset($Pile[0]['debutautl'])?$Pile[0]['debutautl']:intval(_request('debutautl')),
		(($a = intval((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10), false, '', '', array())) .
		'
<div class="liste-objets liste-objets-lies auteurs">
<table class=\'spip liste\'>
' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'titre', null), (singulier_ou_pluriel(($Numrows['_liste_aut']['grand_total'] ?? $Numrows['_liste_aut']['total'] ?? 0),'info_1_auteur','info_nb_auteurs')))))))!=='' ?
				('<caption><strong class="caption">' . $t3 . (	' ' .
			retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('artauteurs'):''))) .
			'</strong></caption>')) :
				'') .
		'
	<thead>
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'p'] = '')) .
		(($t3 = BOUCLE_lettrehtml_9e79d458a3aee74a6ec6ada6fdec30db($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
				($t3 . (($t5 = strval(retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'p'] = (concat(table_valeur($Pile["vars"]??[], (string)'p', null),(afficher_initiale('',(''),(($Numrows['_lettre']['total'] ?? 0)),(table_valeur($Pile["vars"]??[], (string)'debut', null)),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true)))))))))))!=='' ?
						('
		' . $t5) :
						'')) :
				'') .
		'
		' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'p', null))))!=='' ?
				('<tr><td colspan="5"><nav role=\'navigation\' class=\'pagination\'>' . $t3 . '</nav></td></tr>') :
				'') .
		'

		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		retablir_echappements_modeles(calculer_balise_tri('statut', (filtre_balise_img_dist(chemin_image((string)'auteur-0minirezo-16.png'),attribut_html(_T('public|spip|ecrire:lien_trier_statut')))), 'ajax', '_liste_aut', (($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('sens'.'_liste_aut'))?session_get('sens'.'_liste_aut'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), 'autl')) .
		'</th>
			<th class=\'nom\' scope=\'col\' colspan=\'2\'>' .
		retablir_echappements_modeles(calculer_balise_tri('multi nom', _T('public|spip|ecrire:info_nom'), 'ajax', '_liste_aut', (($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('sens'.'_liste_aut'))?session_get('sens'.'_liste_aut'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), 'autl')) .
		'</th>
			' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'auteurs_voiremails', null))))!=='' ?
				($t3 . (	'<th class=\'email\' scope=\'col\'>' .
			retablir_echappements_modeles(calculer_balise_tri('email', _T('public|spip|ecrire:email'), 'ajax', '_liste_aut', (($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('sens'.'_liste_aut'))?session_get('sens'.'_liste_aut'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), 'autl')) .
			'</th>')) :
				'') .
		'
			<th class=\'nombre\' scope=\'col\'>' .
		retablir_echappements_modeles(calculer_balise_tri('compteur_articles', _T('public|spip|ecrire:info_articles'), 'ajax', '_liste_aut', (($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'_liste_aut']))?$Pile[0]['sens'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('sens'.'_liste_aut'))?session_get('sens'.'_liste_aut'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_aut']))?$Pile[0]['tri'.'_liste_aut']:((strncmp('_liste_aut','session',7)==0 AND session_get('tri'.'_liste_aut'))?session_get('tri'.'_liste_aut'):(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'multi nom'),true)))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), 'autl')) .
		'</th>
			<th class=\'action\' scope=\'col\'>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_liste_aut"]["grand_total"],
 		'autl',
		isset($Pile[0]['debutautl'])?$Pile[0]['debutautl']:intval(_request('debutautl')),
		(($a = intval((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10), true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
' .
		(($t3 = strval(retablir_echappements_modeles((((($Numrows['_liste_aut']['grand_total'] ?? $Numrows['_liste_aut']['total'] ?? 0) > '3')) ?' ' :''))))!=='' ?
				($t3 . (	'<div class="action"><button type="submit" class="supprimer btn_link btn_mini" name="supprimer_lien[auteur-*-' .
			retablir_echappements_modeles(interdire_scripts(($Pile[0]['objet'] ?? null))) .
			'-' .
			retablir_echappements_modeles(($Pile[0]['id_objet'] ?? null)) .
			']" value="X">' .
			_T('public|spip|ecrire:lien_retirer_tous_auteurs') .
			(($t4 = strval(retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'supprimer-12.svg')))))!=='' ?
					(' ' . $t4) :
					'') .
			'</button></div>')) :
				'') .
		'
</div>
')) :
		((	'
<div class="liste-objets liste-objets-lies auteurs caption-wrap">
<strong class="caption">' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'titre', null), _T('public|spip|ecrire:info_aucun_auteur'))))))!=='' ?
			($t2 . ' ') :
			'') .
	retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('artauteurs'):''))) .
	'</strong>
</div>
'))) .
'
');

	return analyse_resultat_skel('html_9e79d458a3aee74a6ec6ada6fdec30db', $Cache, $page, '../prive/objets/liste/auteurs_lies.html');
}
