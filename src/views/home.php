<?php

use App\Connection;
use App\Table\RecipeTable;

require "../vendor/autoload.php";

$recipes_table = new RecipeTable(Connection::getPDO());
$recipes = $recipes_table->getAll();

?>

<h1>Blog de Cuisine</h1>

<?php if ($unauthorized === "1") : ?>
    <div class="alert alert-danger">
        Vous n'avez pas l'autorisation !
    </div>
<?php endif ?>

<div class="container d-flex flex-wrap justify-content-center">
    <?php foreach ($recipes as $recipe) : ?>
        <a href="/card/<?= $recipe['recipe_id'] ?>" class="m-1 link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
            <div class="card m-2 h-100" style="width:350px;">
                <div class="card-body d-flex justify-content-between flex-column">
                    <h3 class="card-title">
                        <?= ucfirst($recipe['recipe_name']) ?>
                    </h3>
                    <img class="img-fluid rounded mx-auto d-block" src="<?= $recipe['recipe_img'] ?>" alt="photo nourriture">
                </div>
            </div>
        </a>
    <?php endforeach ?>
</div>