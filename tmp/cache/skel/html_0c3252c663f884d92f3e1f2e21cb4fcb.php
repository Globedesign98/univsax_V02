<?php

/*
 * Squelette : ../plugins-dist/svp/prive/squelettes/contenu/svp_admin_plugin.html
 * Date :      Thu, 04 Dec 2025 23:14:34 GMT
 * Compile :   Sun, 22 Feb 2026 23:41:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/prive/squelettes/contenu/svp_admin_plugin.html
// Temps de compilation total: 1.960 ms
//

function html_0c3252c663f884d92f3e1f2e21cb4fcb($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_plugins')?" ":"")))) .
'

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/svp_onglets') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/svp/prive/squelettes/contenu/svp_admin_plugin.html\',\'html_0c3252c663f884d92f3e1f2e21cb4fcb\',\'\',3,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>

<div class="ajax noscroll">
	' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_ADMIN_PLUGIN',
	array((interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'voir', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'verrouille', null),true))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_paquet', null),true)))),
	array('../plugins-dist/svp/prive/squelettes/contenu/svp_admin_plugin.html','html_0c3252c663f884d92f3e1f2e21cb4fcb','',6,$GLOBALS['spip_lang']))) .
'</div>
<script>
	jQuery(function(){
		jQuery(\'#contenu .svp_retour\').each(function(){
			if (jQuery(\'.msg-alert__close\', this).length == 0) {
				jQuery(\'.msg-alert__text\', this)
					.append("' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'fermer-16.png'),'','msg-alert__close')) .
'")
					.on(\'click\',function(){
						jQuery(this).parents(\'.msg-alert\').fadeOut(\'fast\', function() { $(this).remove(); });
					});
			}
		});
	});
</script>');

	return analyse_resultat_skel('html_0c3252c663f884d92f3e1f2e21cb4fcb', $Cache, $page, '../plugins-dist/svp/prive/squelettes/contenu/svp_admin_plugin.html');
}
