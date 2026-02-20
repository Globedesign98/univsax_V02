# univsax_V02

Site web de l'Université du Saxophone, basé sur [SPIP](https://www.spip.net/) (Système de Publication pour Internet).

## 🚀 Mettre son dossier local sur GitHub

### Première fois (nouveau dépôt local)

Si vous avez un dossier local et que vous voulez l'envoyer sur ce dépôt GitHub :

```bash
# 1. Installez Git si ce n'est pas déjà fait : https://git-scm.com/downloads

# 2. Ouvrez un terminal dans votre dossier de projet, puis initialisez Git :
git init

# 3. Reliez votre dossier local à ce dépôt GitHub :
git remote add origin https://github.com/Globedesign98/univsax_V02.git

# 4. Récupérez la branche principale existante :
git fetch origin
git checkout -b main origin/main

# 5. Ajoutez tous vos fichiers :
git add .

# 6. Créez un commit avec vos modifications :
git commit -m "Mise à jour depuis local"

# 7. Envoyez vers GitHub :
git push origin main
```

### Mise à jour régulière (dépôt déjà cloné)

Si vous avez déjà cloné ce dépôt et que vous voulez envoyer vos modifications :

```bash
# 1. Vérifiez les fichiers modifiés :
git status

# 2. Ajoutez les fichiers à envoyer (tous les fichiers modifiés) :
git add .
# — ou un fichier précis :
git add squelettes/mon-fichier.html

# 3. Créez un commit :
git commit -m "Description de vos modifications"

# 4. Envoyez vers GitHub :
git push origin main
```

### Cloner ce dépôt sur un nouvel ordinateur

```bash
git clone https://github.com/Globedesign98/univsax_V02.git
cd univsax_V02
```

> **Conseil :** Avant d'envoyer vos modifications, pensez à faire un `git pull` pour récupérer les derniers changements :
> ```bash
> git pull origin main
> ```

---

## Pour démarrer (SPIP)

- [Configuration requise](https://www.spip.net/fr_article4351.html)
- [Versions maintenues](https://www.spip.net/fr_article6500.html)
- [Téléchargement](https://www.spip.net/fr_download)
- [Installation](https://www.spip.net/fr_rubrique151.html)

## Communauté & contributions

- [Charte](https://www.spip.net/fr_article6431.html)
- [Entraide et discussions](https://discuter.spip.net)
- [Forge Git](https://git.spip.net) (tickets, pull requests)
- [Règles de contribution](https://www.spip.net/fr_article825.html#Regles-de-contribution)
- [Espace de traduction](https://trad.spip.net)

## Politique de sécurité

- [Signaler une faille de sécurité](https://www.spip.net/fr_article6688.html)
- [SECURITY.md](SECURITY.md)
