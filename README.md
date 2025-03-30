# Portfolio avec WordPress et Roots/Bedrock

## ⚠️ Problème d'URL

Toutes les réalisations et l'archive des réalisations ne sont pas accessibles via `127.0.0.1/portfolio/web/portfolio` mais via `localhost/porfolio/web/portfolio`. Le seul moyen d'y accéder est de changer l'URL manuellement.

## Étapes Réalisées

1. **Installation et Configuration**
    - (Roots/Bedrock, Composer, Thème parent/enfant)

2. **Création du Custom Post Type (CPT)**
    - (Fichier `cpt-portfolio.php`, CPT `portfolio`, options, images, `functions.php`)

3. **Ajout des Champs Personnalisés avec ACF**
    - (Plugin ACF, groupe de champs, configuration ACF)

4. **Affichage des Réalisations**
    - (Fichiers `single-portfolio.php` et `archive-portfolio.php`, champs ACF, `style.css`)

5. **Création de la Homepage**
    - (Présentation, réalisations, personnalisation, responsive)

6. **Gestion et Livraison du Projet**
    - (Repository GitHub, export complet, `README.md`)

## Difficultés Rencontrées

- Problèmes d'installation de WordPress et de création du projet.
- Difficultés de connexion à la base de données avec WordPress.
- Problèmes au lancement du serveur PHP.
- Le plus gros problème rencontré est que toutes les réalisations et l'archive des réalisations ne sont pas accessibles via `127.0.0.1/portfolio/web/portfolio` mais via `localhost/web/portfolio`. Le seul moyen d'y accéder est de changer l'URL manuellement. J'ai essayé plusieurs méthodes, y compris des modifications dans le fichier `.env` et directement dans la base de données, mais rien n'a fonctionné. J'espère que cela fonctionnera sur la machine de l'utilisateur, mais en local, je n'ai pas réussi à résoudre ce problème.

## Installation et Lancement du Projet

1. **Cloner le Repository**
   ```sh
   git clone https://github.com/Logtimal/portfolio
   cd portfolio

2. **Installer les Dépendances**
   ```sh
   composer install

3. **Configurer les Variables d'Environnement**
Copier le fichier .env.example en .env et modifier les valeurs selon votre configuration.

4. **Importer la Base de Données**
Importer le fichier SQL fourni dans votre base de données MySQL (portfolio.sql).

5. **Lancer le Serveur PHP**
    ```sh
    php -S localhost:8888 -t web

6. **Accéder au Site**
Ouvrir votre navigateur et aller à http://localhost:8888/portfolio/web.