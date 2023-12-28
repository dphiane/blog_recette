<?php 
namespace App\Table;

use App\Model\Recipe;
use PDO;
use App\Exceptions\DeleteRecordException;
use App\Exceptions\UpdateException;

class RecipeTable extends Table{
    protected $table = 'recipes';
    protected $class = Recipe::class;


    public function getOneRecipeById($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM $this->table WHERE recipe_id= :id");
        $query->execute(['id' => $id]);
        return $query->fetch();
    }
    public function getRecipesByCategory($category)
    {
        $query = $this->pdo->prepare("SELECT * FROM $this->table WHERE recipe_categories = :category");
        $query->execute(['category' => $category]);
        return $query->fetchAll();
    }
    private function removeDuplicateCategories($array)
    {
        // Utilisez array_column pour extraire la colonne "recipe_categories"
        $categories = array_column($array, 'recipe_categories');

        // Utilisez array_unique pour supprimer les doublons
        $uniqueCategories = array_unique($categories);

        return $uniqueCategories;
    }
    public function getCategory()
    {
        $query = $this->pdo->prepare("SELECT recipe_categories FROM recipes");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $this->removeDuplicateCategories($categories);
    }

    public function updateRecipe(Recipe $recipe)
    {
        $query=$this->pdo->prepare("UPDATE recipes SET recipe_name = :name , recipe_instructions = :instructions, recipe_ingredients= :ingredients, recipe_img= :image, recipe_categories = :categories WHERE recipe_id= :id");
        $ok = $query->execute([
            'name'=>$recipe->getRecipe_name(),
            'instructions'=>$recipe->getRecipe_instructions(),
            'ingredients'=>$recipe->getRecipe_ingredients(),
            'categories'=>$recipe->getRecipe_categories(),
            'image'=>$recipe->getRecipe_img(),
            'id'=>$recipe->getRecipe_id()
        ]);
        if ($ok === false) {
            throw new UpdateException("Impossible de modifier l'enregistrement dans la table {$this->table}");
        }
    }

    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE recipe_id = :id");
        $ok = $query->execute(['id' => $id]);

        if ($ok === false) {
            throw new DeleteRecordException("Impossible de supprimer l'enregistrement $id dans la table $this->table");
        }
    }

    public function searchByRecipeName(string $params)
    {
        $query = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE recipe_name LIKE :params');
        $query->execute(['params' => '%' . $params . '%']);
        $results = $query->fetchAll();

        if (empty($results)) {
            // Gérer les erreurs de recherche
            return [];
        }

        return $results;
    }
}