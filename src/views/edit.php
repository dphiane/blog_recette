<?php

use App\Connection;
use App\Table\RecipeTable;
use App\Validator\Validator;
use App\Auth;

Auth::requireAdmin();
$pdo= Connection::getPDO();
$recipes_table = new RecipeTable($pdo);
$categories = $recipes_table->getCategory();
$recipe=$recipes_table->findById(intval($recipe_id));

$name=$recipe->getRecipe_name();
$image=$recipe->getRecipe_img();
$category=$recipe->getRecipe_categories();
$ingredients=$recipe->getRecipe_ingredients();
$instructions=$recipe->getRecipe_instructions();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $_POST = filter_input_array(INPUT_POST, [
        'name' => FILTER_SANITIZE_SPECIAL_CHARS,
        'image' => FILTER_SANITIZE_URL,
        'category' => FILTER_SANITIZE_SPECIAL_CHARS,
        'instructions' => [
            'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
        ],
        'ingredients' => [
            'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES
        ]
    ]);

$validator = new Validator($_POST);

$validator->required()
    ->validateLengthBetween(['name'], 3, 255)
    ->minLength(['instructions', 'ingredients'], 20)
    ->isValidUrl(['image'])
    ->validateSelectValue(['category'], $categories);
$errors = $validator->getErrors();
 
if (empty($errors)) {
    $pdo->beginTransaction();
    $recipe->setRecipe_name($_POST['name']);
    $recipe->setRecipe_categories($_POST['category']);
    $recipe->setRecipe_img($_POST['image']);
    $recipe->setRecipe_ingredients($_POST['ingredients']);
    $recipe->setRecipe_instructions($_POST['instructions']);
    $recipes_table->updateRecipe($recipe);
    $pdo->commit();

    header('Location: /dashboard?success=1');
    exit(); 
}
}
?>

<?php require "_form.php" ?>