<?php

use App\Connection;
use App\Table\RecipeTable;
use App\Validator\Validator;

if (isset($_SESSION['auth'])) {
    $id_user=$_SESSION['auth'];
}
$recipes_table = new RecipeTable(Connection::getPDO());
$categories = $recipes_table->getCategory();

$errors = [
    'name' => '',
    'image' => '',
    'instructions' => '',
    'ingredients' => '',
    'category' => '',
];
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
    $name= $_POST['name'];
    $instructions= $_POST['instructions'];
    $category= $_POST['category'];
    $image= $_POST['image'];
    $ingredients= $_POST['ingredients'];

    $validator = new Validator($_POST);
    $validator->required()
        ->validateLengthBetween(['name'], 3, 255)
        ->minLength(['instructions', 'ingredients'], 20)
        ->isValidUrl(['image'])
        ->validateSelectValue(['category'], $categories);
    $errors = $validator->getErrors();
    
    if(empty($errors)){
        $data=[
        'recipe_name'=>$name,
        'recipe_instructions'=>$instructions,
        'recipe_categories'=>$category,
        'recipe_ingredients'=>$ingredients,
        'recipe_img'=>$image,
        'user_id'=>$id_user
        ];
        $recipes_table->create($data);
        header('Location: home?created=1');
        exit();
    }
}

?>
<?php require "../src/views/_form.php"; ?>
