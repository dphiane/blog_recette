<?php

namespace App\Model;

class Recipe{
    private $recipe_name;
    private $recipe_id;
    private $recipe_instructions;
    private $recipe_categories;
    private $recipe_ingredients;
    private $recipe_img;


    /**
     * Get the value of recipe_name
     */ 
    public function getRecipe_name()
    {
        return $this->recipe_name;
    }

    /**
     * Set the value of recipe_name
     *
     * @return  self
     */ 
    public function setRecipe_name($recipe_name)
    {
        $this->recipe_name = $recipe_name;

        return $this;
    }

    /**
     * Get the value of recipe_id
     */ 
    public function getRecipe_id()
    {
        return $this->recipe_id;
    }

    /**
     * Set the value of recipe_id
     *
     * @return  self
     */ 
    public function setRecipe_id($recipe_id)
    {
        $this->recipe_id = $recipe_id;

        return $this;
    }

    /**
     * Get the value of recipe_instructions
     */ 
    public function getRecipe_instructions()
    {
        return $this->recipe_instructions;
    }

    /**
     * Set the value of recipe_instructions
     *
     * @return  self
     */ 
    public function setRecipe_instructions($recipe_instructions)
    {
        $this->recipe_instructions = $recipe_instructions;

        return $this;
    }

    /**
     * Get the value of recipe_categories
     */ 
    public function getRecipe_categories()
    {
        return $this->recipe_categories;
    }

    /**
     * Set the value of recipe_categories
     *
     * @return  self
     */ 
    public function setRecipe_categories($recipe_categories)
    {
        $this->recipe_categories = $recipe_categories;

        return $this;
    }

    /**
     * Get the value of recipe_ingredients
     */ 
    public function getRecipe_ingredients()
    {
        return $this->recipe_ingredients;
    }

    /**
     * Set the value of recipe_ingredients
     *
     * @return  self
     */ 
    public function setRecipe_ingredients($recipe_ingredients)
    {
        $this->recipe_ingredients = $recipe_ingredients;

        return $this;
    }


    /**
     * Get the value of recipe_img
     */ 
    public function getRecipe_img()
    {
        return $this->recipe_img;
    }

    /**
     * Set the value of recipe_img
     *
     * @return  self
     */ 
    public function setRecipe_img($recipe_img)
    {
        $this->recipe_img = $recipe_img;

        return $this;
    }
}