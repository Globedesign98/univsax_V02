<?php

/*
 * Squelette : ../prive/objets/liste/articles-memerubrique.html
 * Date :      Thu, 04 Dec 2025 22:57:20 GMT
 * Compile :   Thu, 19 Feb 2026 01:05:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/liste/articles-memerubrique.html
// Temps de compilation total: 0.072 ms
//

function html_22bb87ef3a7e46d47aa6e70bf72830ca($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Liste d\'articles situés dans la même rubrique qu\'un article de référence.

') :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'id_article\' => ' . argumenter_squelette('') . ',
	\'pagination\' => ' . argumenter_squelette('prive') . ',
	\'chaine_titre_singulier\' => ' . argumenter_squelette('info_1_article_meme_rubrique') . ',
	\'chaine_titre_pluriel\' => ' . argumenter_squelette('info_nb_articles_meme_rubrique') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/objets/liste/articles-memerubrique.html\',\'html_22bb87ef3a7e46d47aa6e70bf72830ca\',\'\',2,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>');

	return analyse_resultat_skel('html_22bb87ef3a7e46d47aa6e70bf72830ca', $Cache, $page, '../prive/objets/liste/articles-memerubrique.html');
}
