# Louvakou : Mini TP PHP

## Contexte

Le site **Louvakou** est une boutique en ligne fictive spécialisée dans la vente de nounours en peluche.

Lorsqu'un client achète un nounours, le site enregistre sa commande dans une base de données MySQL et affiche un message de confirmation. Un script PHP traite les données du formulaire d'achat, les valide et les enregistre dans la base de données.

Ce projet a été réalisé dans le cadre d'un TP du cours de PHP en 2e année de Licence (Analyse et Programmation) à l'ESGAE, en novembre 2024.

## À propos de ce dépôt

Ce dépôt constitue à la fois une sauvegarde en ligne du projet Louvakou et une archive de mon parcours académique. Il permet de conserver une trace de ce mini-projet réalisé en deuxième année à l'ESGAE, en novembre 2024, dans le cadre du cours de PHP.

L'objectif est de préserver ce travail dans son état d'origine et de rendre accessible un aperçu concret de mes premières réalisations en développement web. Il s'inscrit dans une démarche de documentation et de valorisation progressive des projets réalisés au cours de ma formation.

### À propos de la démo en ligne

La [démo hébergée sur GitHub Pages](https://kazeholloway.github.io/louvakou-TP-PHP/) permet de découvrir les premières pages du site et de naviguer dans son interface. Toutefois, GitHub Pages est un service d'hébergement de sites statiques : il ne dispose pas d'un serveur PHP capable d'exécuter les scripts du projet.

Par conséquent, les pages reposant sur PHP, notamment `connexion.php` et `script.php`, ne peuvent pas fonctionner normalement dans cette démo et peuvent renvoyer une erreur **`405 Not Allowed`**. Ce comportement est attendu dans cet environnement et ne signifie pas nécessairement que le code PHP est défectueux.

Pour tester le fonctionnement complet du projet, notamment le traitement des commandes, l'authentification et les interactions avec la base de données MySQL, il est nécessaire de cloner le dépôt et de suivre le guide d'installation ci-dessous dans un environnement local compatible, tel que XAMPP.

**En résumé :** la démo en ligne sert à découvrir le projet, tandis que l'installation locale permet d'en tester les fonctionnalités PHP et MySQL.

## Objectifs du projet

- Concevoir un formulaire d'achat de nounours.
- Créer et exploiter une base de données MySQL.
- Traiter et valider les données d'un formulaire avec PHP.
- Enregistrer les commandes à l'aide de requêtes SQL préparées.
- Afficher une page de confirmation après une commande.
- Proposer une authentification pour accéder à la liste des commandes.

## Stack technique

- **HTML5** : structure des pages web et formulaires.
- **CSS3** : mise en forme et présentation du site.
- **PHP** : traitement des formulaires et interactions avec la base de données.
- **MySQL / MariaDB** : stockage des commandes.
- **XAMPP** : environnement de développement local.
- **phpMyAdmin** : administration et importation de la base de données.

## Fonctionnalités

- **Accueil** : présentation des nounours disponibles.
- **Achat** : formulaire de commande avec les informations du client et du produit.
- **Traitement des commandes** : validation et enregistrement des données.
- **Confirmation** : affichage des informations relatives à la commande.
- **Authentification** : accès à l'espace de consultation des commandes.
- **Liste des commandes** : affichage des commandes enregistrées dans la base de données.

## Architecture du projet

```text
louvakou-TP-PHP/
├── img/
│   ├── teddy1.jpg
│   ├── teddy2.jpg
│   ├── teddy3.jpg
│   ├── teddy4.jpg
│   ├── teddy5.jpg
│   └── teddy6.jpg
├── achat.html
├── commandes.php
├── connexion.html
├── connexion.php
├── error.html
├── index.html
├── nounours_db.sql
├── README.md
├── script.php
├── style.css
└── valider.html
```

### Rôle des principaux fichiers

- `index.html` : page d'accueil du site.
- `achat.html` : formulaire d'achat des nounours.
- `script.php` : traitement des données de commande.
- `connexion.html` et `connexion.php` : interface et traitement de l'authentification.
- `commandes.php` : consultation de la liste des commandes.
- `valider.html` : page de confirmation.
- `error.html` : page d'erreur.
- `style.css` : feuille de styles du site.
- `img/` : images des nounours.
- `nounours_db.sql` : script SQL de création et de peuplement de la base de données.

## Base de données

La base de données s'appelle `nounours_db` et contient la table `commandes`.

| Champ | Type | Description |
|---|---|---|
| `id` | INT | Identifiant unique de la commande, clé primaire auto-incrémentée |
| `nom` | VARCHAR(60) | Nom du client |
| `prenom` | VARCHAR(60) | Prénom du client |
| `email` | TEXT | Adresse e-mail du client |
| `adresse_livraison` | TEXT | Adresse de livraison |
| `quantite` | INT | Quantité de nounours commandés |
| `couleur` | VARCHAR(30) | Couleur du nounours |
| `prix_unitaire` | DOUBLE | Prix unitaire du nounours |

Le fichier `nounours_db.sql` contient la structure de la table ainsi que des données de démonstration.

## DIDACTICIEL D'INSTALATION ET D'UTILISATION

### Installation

1. Placez le dossier `louvakou-TP-PHP` dans le sous-dossier `htdocs` de XAMPP ;

2. Ouvrez le logiciel XAMPP, démarrez Apache et MySQL ;

3. Cliquez sur **Admin** au niveau de MySQL. Vous entrerez dans phpMyAdmin par le biais de votre navigateur ;

4. Créez une nouvelle base de données, nommez-la `nounours_db` ;

5. Dans cette base de données, importez le fichier `nounours_db.sql` contenu dans le dossier livré ;

6. Revenez alors sur XAMPP et cette fois-ci, cliquez sur **Admin** au niveau d'Apache. Vous serez redirigé vers la page d'accueil de XAMPP ;

7. Dans la barre d'adresse de votre navigateur, saisissez :

   `http://localhost/louvakou-TP-PHP/index.html`

### Utilisation

Vous voilà dans le site d'achat de nounours. Vous pouvez naviguer entre la page d'Accueil, où vous pourrez voir les différents nounours disponibles dans notre stock, et la page d'Achat, où vous pourrez passer votre commande.

Cependant, si vous souhaitez accéder à la liste de toutes les commandes, il va falloir passer par une page d'authentification.

Entrez le nom d'utilisateur et le mot de passe.

**NB :** Les identifiants de démonstration sont les suivants :

- **Nom d'utilisateur :** `admin`
- **Mot de passe :** `naruto`

Ces identifiants sont ceux du mini-projet pédagogique.

### Prérequis

- XAMPP installé sur votre ordinateur.
- Apache et MySQL/MariaDB démarrés.
- PHP et phpMyAdmin disponibles via XAMPP.
- Base de données `nounours_db` importée avant l'utilisation du site.

Merci d'avoir utilisé nos services !!

## Auteurs

**Réalisé par :**

- MASSAMBA BOUESSO Christophe Darly
- BATA Grâce Deo

**Sous la supervision de :** M. KIGOMA Ornel, Ingénieur Informaticien

**Classe :** AnaPro1 - Betterave (ESGAE, novembre 2024)

## Liens

- [Démo du site (GitHub Pages)](https://kazeholloway.github.io/louvakou-TP-PHP/)
- [GitHub de Christophe Darly](https://github.com/KazeHolloway)
- [GitHub de Grâce Deo](https://github.com/jiramaru)