<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/textarea.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/textarea.html
// Temps de compilation total: 0.587 ms
//

function html_be322f840edbde83278d74f7562dc85c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 2678400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Parametres :
  - class : classe(s) css ajoutes au textarea
  - rows : nombre de ligne, par defaut : 20
  - cols : nombre de caracteres en largeur (aucune valeur par defaut)
  - inserer_barre : barre d\'outils du porte plume à insérer (forum ou edition par défaut)
  - previsualisation : si égale à \'oui\', ajoute l\'onglet de prévisualisation
  - defaut : valeur par defaut si pas présente dans l\'environnement
  - valeur_forcee : valeur utilisee meme si une valeur est dans l\'environnement

  Exemple d\'appel :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'textarea' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'couleur_foncee', null))) ,
	'nom' => 'couleur_foncee' ,
	'label' => _T('spa:couleur_foncee') ,
	'obligatoire' => 'non' ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/textarea.html','html_be322f840edbde83278d74f7562dc85c','',14,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Si la valeur est un tableau, le plugin sait le transformer en chaine, plutôt que d\'afficher "Array" ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur_forcee', null), (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true)))),true))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = ((is_array(table_valeur($Pile["vars"]??[], (string)'valeur', null)) ? (saisies_tableau2chaine(table_valeur($Pile["vars"]??[], (string)'valeur', null))):(table_valeur($Pile["vars"]??[], (string)'valeur', null)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'valeur'] = (saisies_utf8_restaurer_planes(table_valeur($Pile["vars"]??[], (string)'valeur', null))))) .
'<textarea name="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
'" class="' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'class', null),true)))))!=='' ?
		($t1 . ' ') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'inserer_barre', null),true)))))!=='' ?
		('inserer_barre_' . $t1 . ' ') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'previsualisation', null),true)) ?' ' :'')))))!=='' ?
		($t1 . 'inserer_previsualisation') :
		'') .
'" id="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id', null),true))) .
'" rows="' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'rows', null), '20'),true))) .
'" ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'cols', null),true)))))!=='' ?
		('cols="' . $t1 . '"') :
		'') .
' ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)))))!=='' ?
		(' disabled="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'readonly', null),true)))))!=='' ?
		(' readonly="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'placeholder', null),true)))))!=='' ?
		(' placeholder="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'obligatoire', null), 'non'),true) != 'non')) ?' ' :'')))))!=='' ?
		($t1 . ' required="required"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'describedby', null),true)))))!=='' ?
		(' aria-describedby="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'longueur_max', null),true)))))!=='' ?
		('  maxlength="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attributs', null)))))!=='' ?
		(' ' . $t1) :
		'') .
'>
' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'valeur', null)) .
'</textarea>
');

	return analyse_resultat_skel('html_be322f840edbde83278d74f7562dc85c', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/textarea.html');
}
