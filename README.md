# Installation du projet en local
## Télécharger le projet
Une fois sur le répository de votre choix,
cliquez en haut à droite sur clone ou download puis sur Download ZIP.
Le chargement du fichier devrait être lancé.
Dézipper ensuite le fichier et installer le sur votre ordinateur.

Ouvrez ensuite le projet dans un editeur de texte et ouvrez un nouveau terminal.
vérifier bien que vous soyez sur votre projet puis lancer la première commande :
```
composer install
```
Cela permettra d'installer les fichiers vendors manquant nécessaire au projet.

## Créer la base de données
Il faut ensuite récupérer les données pour afficher les informations sur votre projet.
Pour récupérer les informations de la base de données, il faut commencer par créer une base de données qui est normalement déjà définis dans le fichier .env de votre arborescence Symfony, à la ligne 32:

```
DATABASE_URL=mysql://root@127.0.0.1:3306/WebMag-Agency?serverVersion=5.7
```
Si ce nom de base de donnée existe déjà pour vous, vous pouvez le changer
Puis entrer la commande suivante pour lancer la création de la base de données :

```
php bin/console doctrine:database:create
```

## Importer la base de données SQL
