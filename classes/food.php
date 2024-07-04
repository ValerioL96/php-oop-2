<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/category.php';

class Food extends Products{

    private $weight;
    private $ingredients;

    public function __construct($name, $price, $image, $is_available, Category $category, $weight, $ingredients) {
        parent:: __construct($name, $price, $image, $is_available, $category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getIngredients(){
        return $this->ingredients;
    }
}