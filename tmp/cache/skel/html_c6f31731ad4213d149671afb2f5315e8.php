<?php

/*
 * Squelette : ../plugins/auto/saisies/v6.2.0/saisies/_base.html
 * Date :      Thu, 12 Feb 2026 02:06:02 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/v6.2.0/saisies/_base.html
// Temps de compilation total: 1.535 ms
//

function html_c6f31731ad4213d149671afb2f5315e8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

  Fond HTML d\'une saisie.

  Nb : certaines valeurs sont normalisées en amont dans saisies_generer_html()

  Parametres :
  ** : obligatoire
  * : fortement conseille

  - ** nom : nom du parametre
  - * label : nom joli
  (- * erreurs : tableau des erreurs) (transmis par defaut avec SAISIE)
  (- * valeur : valeur actuelle du parametre) (transmis par defaut avec SAISIE : valeur=' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom du parametre', null),true))) .
	')
  - defaut : valeur par defaut du parametre
  - obligatoire : est-ce un parametre obligatoire ? (defaut: non, valeurs : null/"non"/autre=oui )
  - info_obligatoire : si obligatoire, ajoute ce contenu apres le label (defaut : "")
  - explication : texte d\'explication suppplementaire
  - explication_apres : une explication après la saisie
  - attention : texte pour les cas graves !
  - disable : est-ce que le champ est desactive ? (pas de saisie possible, selection impossible, contenus non postes)
              (defaut: non, valeurs : null/"non"/autre=oui ) n\'est peut etre pas valable pour toutes les saisies.
  - disable_avec_post : idem disable, mais en envoyant en hidden le champ tout de meme.
  - readonly : est-ce que le champ est non modifiable ? (pas de saisie possible, selection possible, contenus postes)
              (defaut: non, valeurs : null/"non"/autre=oui ) n\'est peut etre pas valable pour toutes les saisies.
  - conteneur_class : Classe CSS à ajouter au conteneur
  - li_class : pour compatibilité. Voir conteneur_class
  - label_class : pour mettre des styles sur les labels


  Exemples d\'appels :
	' .
	retablir_echappements_modeles(recuperer_fond( 'saisies/_base' , array('erreurs' => ($Pile[0]['erreurs'] ?? null) ,
	'type_saisie' => 'input' ,
	'valeur' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'couleur_foncee', null))) ,
	'nom' => 'couleur_foncee' ,
	'label' => _T('spa:couleur_foncee') ,
	'obligatoire' => 'oui' ), array('compil'=>array('../plugins/auto/saisies/v6.2.0/saisies/_base.html','html_c6f31731ad4213d149671afb2f5315e8','',32,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'

')) :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'saisie'] = (saisies_saisie_from_env(unserialize(serialize($Pile[0]??[])))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<!-- on ne génère une saisie que si elle a un nom -->') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'

	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . (	'<!-- Plusieurs formatage possible pour les noms tabulaires passé à ' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
		'1. Syntaxe SPIP avec slash
		2. Syntaxe HTML avec crochets
		On stock 1. dans nom et 2 dans name. -->
	')) :
			'') .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'name'] = (interdire_scripts(saisie_nom2name(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))))) .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'nom'] = (interdire_scripts(saisie_name2nom(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))))) .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . '<!-- caractère obligatoire (facultatif), désactivé ou readonly de la saisie-->') :
			'') .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'obligatoire'] = (interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'obligatoire', null),true) != 'non'))))) ?' ' :'') ? 'obligatoire':''))))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'facultatif'] = '')) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisies/options/obligatoire_defaut', null),true)) ?' ' :'')))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'facultatif', null),true)) ?' ' :'')))))!=='' ?
				($t3 . (	'
			' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'facultatif'] = 'facultatif')))) :
				'') .
		'
	')) :
			'') .
	'

	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'disable'] = (interdire_scripts(((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'disable', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true)))),true)) AND ((interdire_scripts((entites_html(sinon(table_valeur($Pile[0]??[], (string)'disable', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true)))),true) != 'non'))))) ?' ' :'') ? (interdire_scripts((is_array(entites_html(table_valeur($Pile[0]??[], (string)'disable', null),true)) ? (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'disable', null), (array())),true))):'disabled'))):''))))) .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'readonly'] = (interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'readonly', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'readonly', null),true) != 'non'))))) ?' ' :'') ? 'readonly':''))))) .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . '<!-- Un id html (différent de l\'identifiant de la saisie en data-id!) soit explicite, soit calculé à partir du name-->') :
			'') .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'id'] = (interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'id', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (	'champ_' .
			(saisie_nom2classe(table_valeur($Pile["vars"]??[], (string)'nom', null))))))))) .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . '<!-- Si la saisie est autonome, ne pas l\'encapusler-->') :
			'') .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'saisies_autonomes'] = (saisies_autonomes('')))) .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true),(table_valeur($Pile["vars"]??[], (string)'saisies_autonomes', null)))) ?' ' :'')))))!=='' ?
			($t2 . (	'
	' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'saisies/' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'nom\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null))) . ',
	\'obligatoire\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'obligatoire', null))) . ',
	\'disable\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'disable', null))) . ',
	\'readonly\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'readonly', null))) . ',
	\'id\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies/_base.html\',\'html_c6f31731ad4213d149671afb2f5315e8\',\'\',27,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	')) :
			'') .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((in_array(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true),(table_valeur($Pile["vars"]??[], (string)'saisies_autonomes', null)))) ?'' :' ')))))!=='' ?
			($t2 . (	'

		' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- définir l\'encapsulation de la saisie et du label (problèmatique d\'accessibilité)-->') :
				'') .
		'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'markup'] = (saisies_saisie_get_markup(table_valeur($Pile["vars"]??[], (string)'saisie', null))))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'conteneur_tag'] = (table_valeur($Pile["vars"]??[], (string)'markup/conteneur_tag', null)))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'conteneur_label'] = (table_valeur($Pile["vars"]??[], (string)'markup/conteneur_label', null)))) .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'attribut_for'] = (table_valeur($Pile["vars"]??[], (string)'id', null)))) .
		(($t3 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'conteneur_label', null) != 'label')) ?' ' :''))))!=='' ?
				($t3 . (	'
			' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'attribut_for'] = '')))) :
				'') .
		'

		' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- affichage des erreur -->') :
				'') .
		'

		' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- Plusieurs formatage possible pour les noms tabulaires
			1. Syntaxe SPIP avec slash
			2. Syntaxe HTML avec crochets

			De même pour erreurs on peut avoir
			1. Syntaxe SPIP avec slash (ex. form de config où le nomme avev slash)
			2. Syntaxe PHP array(entre=> array(sous-entre=>array())) (ex. formidable)
			3. Syntaxe HTML avec crochets (ex. form de config où l\'on nomme avec crochet)

			On utilise la fonction dédié pour cela
		-->
		') :
				'') .
		'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'erreur'] = (interdire_scripts(saisies_trouver_erreur(entites_html(table_valeur($Pile[0]??[], (string)'erreurs', null),true),(table_valeur($Pile["vars"]??[], (string)'nom', null))))))) .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- gestion des describedby -->') :
				'') .
		'
		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'describedby'] = '')) .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'explication', null)) ?' ' :'')))))!=='' ?
				($t3 . (	' ' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'describedby'] = (concat(table_valeur($Pile["vars"]??[], (string)'describedby', null),' ',(	'explication_' .
					(table_valeur($Pile["vars"]??[], (string)'id', null))))))))) :
				'') .
		'

		' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- et maintenant début de la saisie -->') :
				'') .
		'
		<!--!inserer_saisie_editer-->
		<' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'conteneur_tag', null)) .
		' class="editer editer_' .
		retablir_echappements_modeles(interdire_scripts(saisie_nom2classe(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true)))) .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'obligatoire', null))))!=='' ?
				(' ' . $t3) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'facultatif', null))))!=='' ?
				(' ' . $t3) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'erreur', null)) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'erreur') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'disable', null)) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'disabled') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'conteneur_class', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'li_class', null),true)))),true)))))!=='' ?
				(' ' . $t3) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(saisie_type2classe(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true))))))!=='' ?
				(' ' . $t3) :
				'') .
		'"' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_saisie', null),true)))))!=='' ?
				(' data-id="' . $t3 . '"') :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(saisies_afficher_si_js(table_valeur($Pile[0]??[], (string)'afficher_si', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'_saisies', null),true))))))))!=='' ?
				(' data-afficher_si="' . $t3 . '"') :
				'') .
		'>
			' .
		retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'inserer_debut', null)) .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- tout ce qui se trouve avant les champs de form au sens html -->') :
				'') .
		'
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'label', null)))))!=='' ?
				((	'
				<' .
			retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'conteneur_label', null)) .
			'  class="editer-label' .
			(($t4 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'conteneur_label', null) == 'legend')) ?' ' :''))))!=='' ?
					(' ' . $t4 . 'label') :
					'') .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'label_class', null),true)))))!=='' ?
					(' ' . $t4) :
					'') .
			'"' .
			(($t4 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'attribut_for', null))))!=='' ?
					(' for="' . $t4 . '"') :
					'') .
			'>') . $t3 . (	(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'aide', null),true)) ?' ' :'')))))!=='' ?
					($t4 . retablir_echappements_modeles(interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'aide', null),true)))):'')))) :
					'') .
			'
				' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'_saisies/options/obligatoire_defaut', null),true)) ?'' :' ')))))!=='' ?
					($t4 . (	'
					' .
				(($t5 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'obligatoire', null)) ?' ' :''))))!=='' ?
						('<span class=\'obligatoire\'>' . $t5 . (	retablir_echappements_modeles(interdire_scripts((is_null(table_valeur($Pile[0]??[], (string)'info_obligatoire', null)) ? _T('public|spip|ecrire:info_obligatoire_02'):(interdire_scripts(table_valeur($Pile[0]??[], (string)'info_obligatoire', null)))))) .
					'</span>')) :
						'') .
				'
				')) :
					'') .
			'
				' .
			(($t4 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'facultatif', null)) ?' ' :''))))!=='' ?
					($t4 . (	'
					<span
						class=\'facultatif\'>' .
				retablir_echappements_modeles(interdire_scripts((is_null(table_valeur($Pile[0]??[], (string)'info_facultatif', null)) ? _T('saisies:info_facultatif'):(interdire_scripts(table_valeur($Pile[0]??[], (string)'info_facultatif', null)))))) .
				'</span>
				')) :
					'') .
			'
				</' .
			retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'conteneur_label', null)) .
			'>
			')) :
				'') .
		'

			' .
		(($t3 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'erreur', null))))!=='' ?
				((	'<span class=\'erreur_message\' id="' .
			(($t4 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null))))!=='' ?
					('erreur_' . $t4) :
					'') .
			'">') . $t3 . (	'</span> ' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'describedby'] = (concat(table_valeur($Pile["vars"]??[], (string)'describedby', null),' ',(	'erreur_' .
					(table_valeur($Pile["vars"]??[], (string)'id', null))))))))) :
				'') .
		'
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'explication', null)))))!=='' ?
				((	'<p class="explication" id="explication_' .
			retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null)) .
			'">') . $t3 . '</p>') :
				'') .
		'

			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'attention', null)))))!=='' ?
				('<em class=\'attention\'>' . $t3 . '</em>') :
				'') .
		'

			' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- appeler la saisie proprement dite -->') :
				'') .
		'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'saisies/' .
			retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'nom\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null))) . ',
	\'id\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null))) . ',
	\'disable\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'disable', null))) . ',
	\'readonly\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'readonly', null))) . ',
	\'describedby\' => ' . argumenter_squelette(retablir_echappements_modeles(trim(table_valeur($Pile["vars"]??[], (string)'describedby', null)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/saisies/v6.2.0/saisies/_base.html\',\'html_c6f31731ad4213d149671afb2f5315e8\',\'\',59,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>

			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'explication_apres', null)))))!=='' ?
				((	'<p class="explication explication_apres" id="explication_apres_' .
			retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'id', null)) .
			'">') . $t3 . '</p>') :
				'') .
		'

			' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- gerer le disable avec post -->') :
				'') .
		'
			' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(((((((((entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true)) AND ((interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'disable_avec_post', null),true) != 'non'))))) ?' ' :'')) AND ((interdire_scripts(((in_array(entites_html(table_valeur($Pile[0]??[], (string)'type_saisie', null),true),(array('case', 'checkbox')))) ?'' :' '))))) ?' ' :'')) ?' ' :'')))))!=='' ?
				($t3 . (	'<input type=\'hidden\' name=\'' .
			retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'name', null)) .
			'\' value="' .
			retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'valeur', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'defaut', null),true)))),true))) .
			'" />')) :
				'') .
		'

			' .
		(($t3 = strval(retablir_echappements_modeles('')))!=='' ?
				($t3 . '<!-- finir la saisie -->') :
				'') .
		'
			' .
		retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'inserer_fin', null)) .
		'</' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'conteneur_tag', null)) .
		'>
	')) :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_c6f31731ad4213d149671afb2f5315e8', $Cache, $page, '../plugins/auto/saisies/v6.2.0/saisies/_base.html');
}
