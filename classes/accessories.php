<?php

require_once __DIR__ . '/products.php';

class Accessories extends Products{

    private $size;
    private $function;

    public function __construct($name, $brand, $price, $image, $is_available, Category $category, $size, $function) {
        parent:: __construct($name, $brand, $price, $image, $is_available, $category);
        $this->size = $size;
        $this->function = $function;
    }

    public function getSize(){
        return $this->size;
    }

    public function getFunction(){
        return $this->function;
    }

}