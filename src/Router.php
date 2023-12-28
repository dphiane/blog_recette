<?php
namespace App;

class Router {
private $routes = [];

public function addRoute($pattern, $callback) {
$this->routes[$pattern] = $callback;
}

public function handleRequest($url) {
foreach ($this->routes as $pattern => $callback) {
if (preg_match($pattern, $url, $matches)) {
// Correspondance trouvée, appeler la fonction associée avec les arguments
array_shift($matches); // Supprimer le premier élément (correspond à l'URL complète)
call_user_func_array($callback, $matches);
return;
}
}

// Aucune correspondance trouvée
echo "page non trouvé";
//header('Location: /e404');
}

}