<?php

use App\Connection;
use App\Table\RecipeTable;
use App\Auth;
use App\Table\UserTable;

Auth::requireAdmin();
require "../vendor/autoload.php";

$pdo= Connection::getPDO();
$recipes_table = new RecipeTable($pdo);
$recipes = $recipes_table->getAll();

$users_table= new UserTable($pdo);
?>

<?php if ($delete === "1") : ?>
    <div class="alert alert-danger">
        Votre recette a bien été supprimer
    </div>
<?php endif ?>

<?php if ($success === "1") : ?>
    <div class="alert alert-success">
        Votre recette a bien été modifié
    </div>
<?php endif ?>

<?php if ($created === "1") : ?>
    <div class="alert alert-success">
        Votre recette a bien été ajouter
    </div>
<?php endif ?>

<h1>Espace Admin</h1>

<div class="container d-flex flex-wrap">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Recette</th>
                <th scope="col">Auteur</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php foreach ($recipes as $recipe) : ?>
            <tbody>
                <tr>
                    <th scope="row" class="align-middle"><?= $recipe['recipe_id'] ?></th>
                    <td class="align-middle"><?= ucfirst($recipe['recipe_name']) ?></td>
                    <td class="align-middle"><?= $users_table->getNameAuthor($recipe['user_id'])?></td>
                    <td class="align-middle">
                        <a href="edit/<?= $recipe['recipe_id'] ?>" class="mt-2 btn btn-primary">Modifier</a>
                        <a href="delete/<?= $recipe['recipe_id'] ?>" class="mt-2 btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</div>