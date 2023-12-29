# Blog de Recettes

Bienvenue sur le blog de recettes ! Ce projet est développé en PHP et vous permet de partager et de découvrir une variété de délicieuses recettes.

## Installation

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/dphiane/blog_recette.git
   cd blog-recettes

    Pour se connecter à la base de données vous devrez modifier dans le dossier /src le fichier Connection.php, les variables $dns ,$user et $pwd.

    Importer la structure de la base de données :
        Le fichier food_blog.sql doit être importé dans votre base de données.

    Démarrer le serveur de développement :

    bash

    php -S localhost:8080 -t public

    Accéder au site dans votre navigateur :
    Ouvrez votre navigateur et visitez http://localhost:8080.

    Un compte admin est disponible :
    dphiane@yahoo.fr
    pwd: Azerty123?

Fonctionnalités

    Inscription :
        Inscription avec vérification d'email unique.
        Mot de passe doit contenir :
            Au moins 8 caractères.
            Au moins une majuscule.
            Au moins une minuscule.
        Hash du mot de passe.

    Connexion :
        Vérification de l'existence de l'utilisateur dans la base de données.
        Vérification du mot de passe entré avec celui hashé.

    Panneau de contrôle :
        Un tableau de bord administrateur pour gérer toutes les recettes : suppression, modification.

    Ajouter une recette :
        Connectez-vous en tant qu'utilisateur.
        Accédez à la page pour ajouter une nouvelle recette.
        Gérer ses recettes : suppression, modification.

    Afficher les recettes :
        Parcourez les différentes catégories et découvrez une variété de recettes.
        Utilisez la fonction de recherche pour trouver des recettes spécifiques.