<?php

use App\Router;

require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router();

$router->addRoute('~^/search$~', function () {
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $content = "../src/views/search.php";
    include "../src/views/layout.php";
});

$router->addRoute('~^/dashboard$~', function () {
    $content = "../src/views/dashboard.php";
    $delete = isset($_GET['delete']) ? $_GET['delete'] : null;
    $success = isset($_GET['success']) ? $_GET['success'] : null;
    $created = isset($_GET['created']) ? $_GET['created'] : null;

    include "../src/views/layout.php";
});
$router->addRoute('~^/logout$~', function () {
    $content = "../src/views/logout.php";
    include "../src/views/layout.php";
});

$router->addRoute('~^/register$~', function () {
    $content = "../src/views/register.php";
    include "../src/views/layout.php";
});

$router->addRoute('~^/login$~', function () {
    $content = "../src/views/login.php";
    include "../src/views/layout.php";
});

$router->addRoute('~^/delete/(\d+)$~', function ($recipe_id) {
    $content = "../src/views/delete.php";
    include "../src/views/layout.php";
});

$router->addRoute('~^/edit/(\d+)$~', function ($recipe_id) {
    $content = "../src/views/edit.php";
    include "../src/views/layout.php";
});
$router->addRoute('~^/new-recipe$~', function () {
    $content = "../src/views/new.php";
    include "../src/views/layout.php";
});
$router->addRoute('~^/categories/([a-zA-Z]+)$~', function ($category) {
    $content = "../src/views/category.php";
    include "../src/views/layout.php";
});
// Ajouter une route avec un argument dynamique
$router->addRoute('~^/card/(\d+)$~', function ($recipe_id) {
    $content = "../src/views/card.php";
    include "../src/views/layout.php";
});

// Ajouter une route sans argument dynamique
$router->addRoute('~^/home$~', function () {
    // Traitez la logique de la page home
    $content = "../src/views/home.php";
    $unauthorized = isset($_GET['unauthorized']) ? $_GET['unauthorized'] : null;
    include "../src/views/layout.php";
});

$router->addRoute('~^/e404$~', function () {
    $content = "../src/views/e404.php";
    include "../src/views/layout.php";
});

$router->addRoute('~^/$~', function () {
    header('Location: /home');
    exit();
});
// Récupérez l'URL demandée (peut provenir de la variable $_SERVER['REQUEST_URI'], par exemple)
$url = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';

// Manipuler la requête
$router->handleRequest($url);
