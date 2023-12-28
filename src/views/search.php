<?php
use App\Table\RecipeTable;
use App\Connection;

$recipes_table = new RecipeTable(Connection::getPDO());
if(isset($_GET['search'])){
    $recipes = $recipes_table->searchByRecipeName($search);

}
?>

<h1>Blog de Cuisine</h1>

<div class="container d-flex flex-wrap justify-content-center">
    <?php if(empty($recipes)): ?>
        <p class="alert alert-danger">Aucune recette trouvée pour la recherche</p>
    <?php else : ?>
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
    <?php endif ?>
</div>