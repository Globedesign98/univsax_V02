<?php
$GLOBALS['visiteur_session']['prefs'] = array (
  'couleur' => 2,
  'cnx' => '',
);
$GLOBALS['visiteur_session']['id_auteur'] = -1;
$GLOBALS['visiteur_session']['nom'] = 'GD';
$GLOBALS['visiteur_session']['bio'] = '';
$GLOBALS['visiteur_session']['email'] = 'contact@globedesign.org';
$GLOBALS['visiteur_session']['nom_site'] = '';
$GLOBALS['visiteur_session']['url_site'] = '';
$GLOBALS['visiteur_session']['login'] = 'Globy';
$GLOBALS['visiteur_session']['statut'] = '0minirezo';
$GLOBALS['visiteur_session']['webmestre'] = 'oui';
$GLOBALS['visiteur_session']['maj'] = '2026-02-23 10:32:07';
$GLOBALS['visiteur_session']['pgp'] = '';
$GLOBALS['visiteur_session']['en_ligne'] = '2026-02-23 00:32:07';
$GLOBALS['visiteur_session']['source'] = 'spip';
$GLOBALS['visiteur_session']['lang'] = '';
$GLOBALS['visiteur_session']['imessage'] = '';
$GLOBALS['visiteur_session']['auth'] = 'spip';
$GLOBALS['visiteur_session']['hash_env'] = '7db167a3d6dbddea9a31bcc860519efa';
$GLOBALS['visiteur_session']['ip_change'] = false;
$GLOBALS['visiteur_session']['date_session'] = 1771803648;
$GLOBALS['visiteur_session']['restreint'] = array (
);
$GLOBALS['visiteur_session']['quand'] = '2026-02-19 01:42:42';
$GLOBALS['visiteur_session']['constructeur_formulaire_champs_extras_spip_articles_md5_formulaire_initial'] = 'ffcc63ae688c396ec433863700e4628c';
$GLOBALS['visiteur_session']['constructeur_formulaire_champs_extras_spip_articles'] = array (
  0 => 
  array (
    'options' => 
    array (
      'nom' => 'inscription',
      'label' => 'Statut inscription',
      'datas' => 'confirmée|confirmée
en attente|en attente',
      'defaut' => 'en attente',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@6982ca9fd8b07',
    'saisie' => 'selection',
  ),
  1 => 
  array (
    'options' => 
    array (
      'nom' => 'paiementok',
      'label' => 'Paiement',
      'datas' => 'oui|oui
non|non
',
      'defaut' => 'non',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@698ad68dde205',
    'saisie' => 'selection',
  ),
  2 => 
  array (
    'options' => 
    array (
      'nom' => 'prenom',
      'label' => '<:info_prenom:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7:10:11',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d61ddabe93',
    'saisie' => 'input',
  ),
  3 => 
  array (
    'options' => 
    array (
      'nom' => 'sexo',
      'label' => '<:info_sex:>',
      'datas' => 'Féminin|Féminin
Masculin|Masculin',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d644e2a297',
    'saisie' => 'radio',
  ),
  4 => 
  array (
    'options' => 
    array (
      'nom' => 'age',
      'label' => 'Age',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7:10:11',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d629625a66',
    'saisie' => 'input',
  ),
  5 => 
  array (
    'options' => 
    array (
      'nom' => 'adresse',
      'label' => '<:info_ad_plan:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d629cbd96d',
    'saisie' => 'textarea',
  ),
  6 => 
  array (
    'options' => 
    array (
      'nom' => 'postal',
      'label' => '<:info_codepostal:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62a0a3bd7',
    'saisie' => 'input',
  ),
  7 => 
  array (
    'options' => 
    array (
      'nom' => 'ville',
      'label' => '<:info_ville:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62a493a97',
    'saisie' => 'input',
  ),
  8 => 
  array (
    'options' => 
    array (
      'nom' => 'pays',
      'label' => '<:info_pays:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62aaa78c6',
    'saisie' => 'input',
  ),
  9 => 
  array (
    'options' => 
    array (
      'nom' => 'phone',
      'label' => '<:info_tel:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62b0627e0',
    'saisie' => 'input',
  ),
  10 => 
  array (
    'options' => 
    array (
      'nom' => 'sante',
      'label' => '<:info_sante:>',
      'defaut' => '<:info_aucun:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62b665118',
    'saisie' => 'textarea',
  ),
  11 => 
  array (
    'options' => 
    array (
      'nom' => 'contact',
      'label' => '<:info_pers:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62baab52d',
    'saisie' => 'textarea',
  ),
  12 => 
  array (
    'options' => 
    array (
      'nom' => 'contact_nom',
      'label' => '<:info_nom:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62e81ef86',
    'saisie' => 'input',
  ),
  13 => 
  array (
    'options' => 
    array (
      'nom' => 'contact_prenom',
      'label' => '<:info_prenom:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62c83c848',
    'saisie' => 'input',
  ),
  14 => 
  array (
    'options' => 
    array (
      'nom' => 'contact_adresse',
      'label' => '<:info_ad_plan:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62cd79fdf',
    'saisie' => 'textarea',
  ),
  15 => 
  array (
    'options' => 
    array (
      'nom' => 'contact_tel',
      'label' => '<:info_tel:>',
      'rows' => '5',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62d115186',
    'saisie' => 'input',
  ),
  16 => 
  array (
    'options' => 
    array (
      'nom' => 'vegetarien',
      'label' => '<:info_vegetarian:>',
      'datas' => 'oui|oui
non|non',
      'defaut' => 'non',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62d3e9f51',
    'saisie' => 'selection',
  ),
  17 => 
  array (
    'options' => 
    array (
      'nom' => 'hebergement',
      'label' => '<:info_villars:>',
      'datas' => 'oui|oui
non|non',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62d72bc3d',
    'saisie' => 'selection',
  ),
  18 => 
  array (
    'options' => 
    array (
      'nom' => 'auditeur',
      'label' => '<:info_libre:>',
      'datas' => 'oui|oui
non|non',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62db0a007',
    'saisie' => 'selection',
  ),
  19 => 
  array (
    'options' => 
    array (
      'nom' => 'paiement',
      'label' => 'Paiement',
      'datas' => 'Paypal|Paypal
Transfert|Transfert
Cheque|Cheque',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d6301bcd3c',
    'saisie' => 'selection',
  ),
  20 => 
  array (
    'options' => 
    array (
      'nom' => 'ecole',
      'label' => '<:info_ecole:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62df14ba7',
    'saisie' => 'textarea',
  ),
  21 => 
  array (
    'options' => 
    array (
      'nom' => 'prof',
      'label' => '<:info_prof:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62e2da464',
    'saisie' => 'input',
  ),
  22 => 
  array (
    'options' => 
    array (
      'nom' => 'piece',
      'label' => '<:info_music:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62ec22041',
    'saisie' => 'textarea',
  ),
  23 => 
  array (
    'options' => 
    array (
      'nom' => 'saxophone',
      'label' => '<:info_typesax:>',
      'datas' => 'Soprano|Soprano
Alto|Alto
Ténor|Ténor
Baryton|Baryton',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62efd2129',
    'saisie' => 'checkbox',
  ),
  24 => 
  array (
    'options' => 
    array (
      'nom' => 'type_bec',
      'label' => '<:info_typebec:>',
      'datas' => 'Soprano|Soprano
Alto|Alto
Ténor|Ténor
Baryton|Baryton
Basse|Basse',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d631722c63',
    'saisie' => 'checkbox',
  ),
  25 => 
  array (
    'options' => 
    array (
      'nom' => 'choix',
      'label' => '<:info_ensemble:> (préférence)',
      'type' => 'text',
      'autocomplete' => 'defaut',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62f35f79e',
    'saisie' => 'input',
  ),
  26 => 
  array (
    'options' => 
    array (
      'nom' => 'musichambre',
      'label' => '<:info_music_ch:>',
      'datas' => '1|1
2|2
3|3',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62f6f2747',
    'saisie' => 'selection',
  ),
  27 => 
  array (
    'options' => 
    array (
      'nom' => 'ensemble',
      'label' => '<:info_group:>',
      'datas' => '1|1
2|2
3|3',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d62fa817f9',
    'saisie' => 'selection',
  ),
  28 => 
  array (
    'options' => 
    array (
      'nom' => 'tradition',
      'label' => 'Initiation aux musiques traditionnelles de la péninsule balkanique',
      'datas' => '1|1
2|2
3|3',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d630a65d3d',
    'saisie' => 'selection',
  ),
  29 => 
  array (
    'options' => 
    array (
      'nom' => 'oui_non_2',
      'label' => '<:info_compositeur:>',
      'datas' => 'oui|oui
non|non',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d630e68bf3',
    'saisie' => 'selection',
  ),
  30 => 
  array (
    'options' => 
    array (
      'nom' => 'oui_non_1',
      'label' => '<:info_droits_auteur:>',
      'datas' => 'oui|oui
non|non',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d6310dec28',
    'saisie' => 'selection',
  ),
  31 => 
  array (
    'options' => 
    array (
      'nom' => 'remarque',
      'label' => '<:info_remarque:>',
      'rows' => '5',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d631a77a18',
    'saisie' => 'textarea',
  ),
  32 => 
  array (
    'options' => 
    array (
      'nom' => 'reglement',
      'label' => '<:info_reglement:>',
      'label_case' => '<:info_reglement_txt:>',
      'valeur_oui' => 'on',
      'obligatoire' => 'on',
      'info_obligatoire' => '*',
      'restrictions' => 
      array (
        'secteurs' => '5:7',
        'branches' => '',
        'voir' => 
        array (
          'auteur' => '',
        ),
        'modifier' => 
        array (
          'auteur' => '',
        ),
      ),
      'sql' => 'text DEFAULT \'\' NOT NULL',
    ),
    'verifier' => 
    array (
    ),
    'identifiant' => '@697d6307884e2',
    'saisie' => 'case',
  ),
);
$GLOBALS['visiteur_session']['ues_id_article'] = 1434;
$GLOBALS['visiteur_session']['password_reset'] = '';
$GLOBALS['visiteur_session']['trisession_liste_art'] = 'id_article';
?>
