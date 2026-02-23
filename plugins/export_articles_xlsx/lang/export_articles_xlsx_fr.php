<?php
if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = [
	'titre_menu' => 'Export Excel (articles)',
	'titre_page' => 'Export Excel des articles',
	'btn_export' => 'Télécharger le fichier Excel (.xlsx)',
	'explication' => 'Exporte les articles publiés des rubriques 5 et 7, avec le premier auteur, le titre et tous les champs extra (colonnes ajoutées dans spip_articles).',
	'erreur_spout_absent' => 'La librairie Spout est introuvable. Place-la dans plugins/export_articles_xlsx/lib/spout/.',
];