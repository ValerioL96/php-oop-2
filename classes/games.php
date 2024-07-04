<?php

require_once __DIR__ . '/products.php';

class Games extends Products{

    private $material;
    private $color;

    public function __construct($name, $brand, $price, $image, $is_available, Category $category, $material, $color) {
        parent:: __construct($name, $brand, $price, $image, $is_available, $category);
        $this->material = $material;
        $this->color = $color;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function getColor(){
        return $this->color;
    }

}