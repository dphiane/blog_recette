<?php

use App\Connection;
use App\Model\User;
use App\Table\RecipeTable;
use App\Table\UserTable;

require "../vendor/autoload.php";

$pdo = Connection::getPDO();
$recipe_table = new RecipeTable($pdo);
$recipe = $recipe_table->getOneRecipeById($recipe_id);
$userTable=new UserTable($pdo);
$author=$userTable->getNameAuthor($recipe['user_id']);

?>
<h1 class="text-center"><?= htmlspecialchars($recipe['recipe_name']) ?></h1>
<div class="card m-2 p-2 d-flex justify-content-center align-center">
    <img class="img-fluid rounded mx-auto d-block" style="max-width:800px" src="<?= $recipe['recipe_img'] ?>" alt="photo nourriture">
    <h3>Les instructions</h3>
    <p>
        <pre>
            <?= $recipe['recipe_instructions'] ?>
        </pre>
    </p>
    <h3>La liste des ingredients</h3>
    <p>
        <pre>
            <?= $recipe['recipe_ingredients'] ?>
        </pre>
    </p>
    <span class="ms-auto"><strong>Auteur:</strong> <?= htmlspecialchars($author) ?></span>
</div>