<?php

use App\Auth;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de cuisine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark-subtle">
            <div class="container-fluid">
                <span class="navbar-brand">La Cuisine de Dom</span>

                <!-- Collapse button -->
                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" href="/">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catégories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/categories/starter">Entrée</a></li>
                                <li><a class="dropdown-item" href="/categories/plate">Plat</a></li>
                                <li><a class="dropdown-item" href="/categories/dessert">Dessert</a></li>
                            </ul>
                        </li>

                        <?php
                        if (Auth::isLoggedIn()) {
                            // L'utilisateur est connecté
                            echo "<li class='nav-item'>
                            <a class='nav-link active' href='/new-recipe'>Ajouter une recette</a>
                        </li>";
                        }
                        ?>
                        <form class="d-flex" action="/search" method="get">
                            <input class="form-control me-2" type="text" name="search" id="search" placeholder="Trouver une recette" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Rechercher</button>
                        </form>
                    </ul>

                    <div class="me-5 d-flex">
                        <?php
                        // Affichage conditionnel du bouton de connexion ou de déconnexion
                        if (Auth::isLoggedIn()) {
                            // L'utilisateur est connecté
                            echo "<a class='btn btn-outline-danger m-2' href='/logout'>Se déconnecter</a>";
                        } else {
                            // L'utilisateur n'est pas connecté
                            echo "<a class='btn btn-outline-primary' href='/login'>Se connecter</a>";
                        }
                        if (Auth::isAdmin()) {
                            echo "<a class='btn btn-outline-danger m-2' href='/dashboard'>Menu admin<a>";
                        }
                        ?>
                    </div>
                </div>
            </div>

        </nav>
    </header>

    <div class="container">

        <?php include $content ?>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>