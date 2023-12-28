<?php

use App\Connection;
use App\Table\RecipeTable;

switch ($category) {
    case "starter":
        $category = "Entrée";
        break;
    case "plate":
        $category = "Plat";
        break;
    case "dessert":
        $category = "Dessert";
        break;
    default:
        $category = "recette";
}
$recipesTable = new RecipeTable(Connection::getPDO());
$recipes = $recipesTable->getRecipesByCategory($category);
?>
<h1>Toutes les <?= $category ?>s </h1>

<div class="container mt-2 d-flex flex-wrap">
    <?php foreach ($recipes as $recipe) : ?>
        <div class="card m-2" style="width: 18rem">
            <div class="card-body">
                <a href="/card/<?= $recipe['recipe_id'] ?>" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                    <h3 class="card-title">
                        <?= ucfirst($recipe['recipe_name']) ?>
                    </h3>
                    <img class="card-img-top img-fluid" src="<?= $recipe['recipe_img'] ?>" alt="photo nourriture">
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>