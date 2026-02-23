<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/input.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   _selection
 */ 

function BOUCLE_selectionhtml_ec1673e17cb5cc21a992b98e863b5cb5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'data', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_selection';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../plugins/auto/saisies/v6.2.0/saisies/input.html','html_ec1673e17cb5cc21a992b98e863b5cb5','_selection',54,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(retablir_echappements_modeles(attribut_html((table_valeur($Pile["vars"]??[], (string)'data_is_sequential', null) ? (interdire_scripts(safehtml($Pile[$SP]['valeur']))):(interdire_scripts(safehtml($Pile[$SP]['cle']))))))))!=='' ?
		('<option value="' . $t1 . (	'">' .
	retablir_echappements_modeles(interdire_scripts(attribut_html(safehtml($Pile[$SP]['valeur'])))) .
	'</option>')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_selection @ ../plugins/auto/saisies/v6.2.0/saisies/input.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/input.html
// Temps de compilation total: 2.276 ms
//

function html_ec1673e17cb5cc21a992b98e863b5cb5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 2678400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Parametres supplementaire :
  - ** data : tableau de donnees indice=>valeur
  - defaut : valeur par defaut du parametre
  - type : type de l\'input (defaut: text)
  - class : classe(s) css ajoutes a l\'input
  - size : taille du champ
  - minlength : nombre de caracteres minimal
  - maxlength : nombre de caracteres maximum
  - disable : champ insaisissable ? \'oui\' (defaut : \'\')
  - valeur_forcee : valeur utilisee meme si une valeur est dans l\'environnement
  - autofocus : indique si le champ prend le focus a l\'affichage (HTML5 requis)
  - placeholder : texte du placeholder
  - cle_secrete : l\'input est une cle secrete. On n\'affiche pas la valeur mais simplement un placeholder indiquant éventuellement quelque morceaux de la clé (s\'appuie sur fonction native de SPIP)


  Exemple d\'appel :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'input' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'couleur_foncee', null))) ,
	'nom' => 'couleur_foncee' ,
	'label' => _T('spa:couleur_foncee') ,
	'size' => '7' ,
	'data' => (array('0' => 'valeur0', '1' => 'valeur1', '2' => 'valeur2')) ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/input.html','html_ec1673e17cb5cc21a992b98e863b5cb5','',20,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'type'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type', null), 'text'),true))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'data', null), (interdire_scripts(table_valeur($Pile[0]??[], (string)'datas', null)))))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '  l\'attribut autocomplete ne peut avoir pour valeur que on ou off ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'val_autocomplete'] = (array()))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'val_autocomplete'] = (filtre_push(table_valeur($Pile["vars"]??[], (string)'val_autocomplete', null),'on')))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'val_autocomplete'] = (filtre_push(table_valeur($Pile["vars"]??[], (string)'val_autocomplete', null),'off')))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' cle secrete > on modifie le place holder') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'placeholder'] = '')) .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'cle_secrete', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'placeholder'] = (interdire_scripts(spip_affiche_mot_de_passe_masque(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true)))),true),'true'))))))) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'cle_secrete', null),true)) ?'' :' ')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'placeholder'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'placeholder', null),true))))))) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' permettre de donner un identifiant de list specifique en option de la saisie
') :
		'') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'list_id'] = (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'list', null),true))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Détecter si le tableau est séquentiel ou associatif, pour choisir s\'il faut prendre la clé en valeur
') :
		'') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'data_is_sequential'] = ((is_array(table_valeur($Pile["vars"]??[], (string)'data', null)) ? ((array_keys(table_valeur($Pile["vars"]??[], (string)'data', null)) == (range('0',(moins(count(table_valeur($Pile["vars"]??[], (string)'data', null)),'1')))))):'')))) .
(($t1 = BOUCLE_selectionhtml_ec1673e17cb5cc21a992b98e863b5cb5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'list_id'] = (sinon(table_valeur($Pile["vars"]??[], (string)'list_id', null), (($t5 = strval((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true)))))!=='' ?
						($t5 . '_data') :
						''))))) .
		'
<datalist id="' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'list_id', null)) .
		'">
') . $t1 . '
</datalist>
') :
		'') .
'
<input type="' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'type', null)) .
'" name="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
'" class="text' .
(($t1 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'type', null) == 'text')) ?'' :' '))))!=='' ?
		(' ' . $t1 . (	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'type', null)) .
	(($t2 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'type', null))))!=='' ?
			(' text_' . $t2) :
			''))) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
		(' ' . $t1) :
		'') .
'" id="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
'"' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'list_id', null))))!=='' ?
		(' list="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(saisies_utf8_restaurer_planes((entites_html(table_valeur($Pile[0]??[], (string)'cle_secrete', null),true) ? '':(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true)))),true)))))))))!=='' ?
		(' value="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'size', null),true)))))!=='' ?
		(' size="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'minlength', null),true)))))!=='' ?
		(' minlength="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'maxlength', null),true)))))!=='' ?
		(' maxlength="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'readonly', null),true)))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'placeholder', null))))!=='' ?
		(' placeholder="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'obligatoire', null), 'non'),true) != 'non')) ?' ' :'')))))!=='' ?
		($t1 . (	' ' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'cle_secrete', null),true)) AND ((table_valeur($Pile["vars"]??[], (string)'placeholder', null)))) ?' ' :'')) ?'' :' ')))))!=='' ?
			($t2 . 'required="required"') :
			''))) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'min', null),true)))))!=='' ?
		(' min="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'max', null),true)))))!=='' ?
		(' max="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'step', null),true)))))!=='' ?
		(' step="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(table_valeur($Pile[0]??[], (string)'autofocus', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'autofocus', null),true) != 'non'))))) ?' ' :'')) ?' ' :'')))))!=='' ?
		($t1 . ' autofocus="autofocus"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(((filtre_find(table_valeur($Pile["vars"]??[], (string)'val_autocomplete', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'autocomplete', null),true))))) ?' ' :''))))!=='' ?
		($t1 . (	' autocomplete="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'autocomplete', null),true))) .
	'"')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'describedby', null),true)))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
		(' ' . $t1) :
		'') .
' />
');

	return analyse_resultat_skel('html_ec1673e17cb5cc21a992b98e863b5cb5', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/input.html');
}
