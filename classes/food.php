<?php
require_once __DIR__ . '/products.php';

class Food extends Products{

    private $weight;
    private $calories;
    private $ingredients;

    public function __construct($name, $brand, $price, $image, $is_available, Category $category, $weight, $calories, $ingredients) {
        parent:: __construct($name, $brand, $price, $image, $is_available, $category);
        $this->weight = $weight;
        $this->calories = $calories;
        $this->ingredients = $ingredients;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getCalories(){
        return $this->calories;
    }

    public function getIngredients(){
        return $this->ingredients;
    }
}