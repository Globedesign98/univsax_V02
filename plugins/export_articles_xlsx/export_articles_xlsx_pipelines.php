<?php
if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 * Ajoute une entrée de menu dans l'espace privé (menu Édition)
 */
function export_articles_xlsx_ajouter_menus($flux) {
	$flux['menu_edition']['export_articles_xlsx'] = [
		'titre' => 'export_articles_xlsx:titre_menu',
		'url'   => generer_url_ecrire('export_articles_xlsx'),
		'icone' => 'images/export_articles_xlsx-24.png',
	];
	return $flux;
}