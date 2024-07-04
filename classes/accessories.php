<?php

require_once __DIR__ . '/products.php';
require_once __DIR__ . '/category.php';

class Accessories extends Products{

    private $size;
    private $material;

    public function __construct($name, $price, $image, $is_available, Category $category, $size, $material) {
        parent:: __construct($name, $price, $image, $is_available, $category);
        $this->size = $size;
        $this->material = $material;
    }

    public function getSize(){
        return $this->size;
    }

    public function getMaterial(){
        return $this->material;
    }
}