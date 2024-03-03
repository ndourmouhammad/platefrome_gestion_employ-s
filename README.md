# platefrome de gestion des employés

## Description

Cette plateforme est une application web développée en PHP 8.2 suivant l'architecture MVC. Elle permet la gestion des employés d'une entreprise en utilisant une base de données MySQL avec le pilote PDO pour les interactions avec la base de données.

## Fonctionnalités

### CRUD

- **Create**: Permet d'ajouter de nouveaux employés dans la base de données.
- **Read**: Affiche la liste des employés existants avec leurs détails.
- **Update**: Permet de modifier les informations des employés existants.
- **Delete** : Permet de supprimer des employés de la base de données.

## Prérequis

- PHP 8.2
- Serveur Apache
- MySQL

## Installation

1. Clonez ce dépôt sur votre machine.
2. Importer la base de données fournies dans le dossier `model` .
3. Configurez les informations de connexion à la base de données dans le fichier `model/config.php`.

## Utilisation

1. Assurez-vous que votre serveur apache est en cours d'exécution.
2. Accéder au répertoire de l'application via votre navigateur web.
3. Vous serez dirigé vers la page d'accueil de la plateforme de gestion des employés.
4. A partir de là, vous pouvez utiliser les fonctionnalités CRUD pour gérer les employés.

## Structure du projet

- `controller/create.php`
- `controller/delete.php`
- `controller/read.php`
- `controller/update.php`
- `model/create.php`
- `model/delete.php`
- `model/read.php`
- `model/update.php`
- `model/config.php`
- `view/create.php`
- `view/delete.php`
- `view/read.php`
- `view/update.php`
- `.htaccess` : Pour la réécriture des urls.
- `index.php` : contrôleur frontal.
- `README.md`

## Auteur

Mouhammad NDOUR

## Licence

Ce projet est sous licence MIT.
