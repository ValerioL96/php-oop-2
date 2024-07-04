<?php

require_once __DIR__ . '/products.php';


class Games extends Products{

    private $characteristics;
    private $size;

    public function __construct($name, $price, $image, $is_available, Category $category, $characteristics, $size) {
        parent:: __construct($name, $price, $image, $is_available, $category);
        $this->characteristics = $characteristics;
        $this->size = $size;
    }

    public function getCharacteristics(){
        return $this->characteristics;
    }

    public function getSize(){
        return $this->size;
    }

}