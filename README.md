# Projet de Opinion - réseau social

Dans le cadre d'un projet universitaire, nous avons travaillé sur une application Web d'un réseau social nommé Opinion

## \[Temporaire\] Petits rappels pour Git (push/pull/commit) etc.

### Avant toute chose

Pour des questions de simplicité, entrez la commande suivante dans la console git :

`git remote add origin https://github.com/Em-ilien/Opinion.git`

En résumé, cela permet, à chaque fois que l'on souhaite interagir avec ce repository, de ne plus entrer dans la console son lien.

L'interface graphique de Visual Studio Code appelle "origin" le repository distant par défaut.

### Se rendre sur votre branche

`git checkout <nom_de_votre_branche>`

Sur l'interface graphique de VSCode, cela s'effectue en cliquant sur le nom de la branche puis en sélectionnant une autre.

### Mettre à jour une branche sur votre machine

`git pull origin <nom_de_votre_branche>`

Sur l'interface graphique de VSCode, cela s'effectue avec un "... > Pull".

### Mettre à jour vos modifications sur le repository distant (ici quoi)

Il y a plusieurs étapes à suivre :

- Mettre vos fichiers dans le "stage changes" : `git add --all` (cela va tout faire à votre place)
- Préparer le commit : `git commit -m "votre_message"`
- Envoyer le commit sur le repository distant : `git push origin <nom_de_la_branche>`
