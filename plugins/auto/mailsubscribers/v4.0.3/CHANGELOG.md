# Changelog

## 4.0.1 - 2025-07-30

### Fixed

- !51 Remplacer `_IS_CLI` par `PHP_SAPI` directement.
- !50 La fonction `generer_url_entite` est remplacée par `generer_objet_url`

## 4.0.0 - 2025-02-27

### Changed

- Compatible SPIP 4.2 minimum

### Fixed

- Chaînes de langue au format SPIP 4.1+
- Calculer une vue par defaut si pas de plugin saisies dispo non plus, et eviter une indefine sur out dans ce cas
- #46 Ne pas déclencher de fatal lorsqu'un champ extra est associé à une inscription contient des virgules

## 3.7.0 - 2024-10-09

### Added

- #25 La saisie peut prendre une option `type_choix` pour choisir entre `radio`, `selection` et `checkbox` (par défaut)
- #26 Fournir un outil d'analyse de la saisie

### Fixed

- #41 Erreur en PHP 8 à la création de segment

## 3.2.0 - 2022-09-08

### Fixed

- Limiter la sélection de la langu de l'internaute à la liste des langues du public
- Utiliser la langue de l'internaute lorsque l'on prépare un mail de notification

## 3.1.0 - 2022-05-31

### Added

- Constructeur de saisie : documentation des options de dev
- Saisie : afficher par défaut le titre public de la saisie, si absent le titre privé; option pour déroger
- Saisie : option `proposer_aucune`

### Changed

- Constructeur de saisie : `afficher_si` dans onglet à part (cf. Saisies v4.4.0)

