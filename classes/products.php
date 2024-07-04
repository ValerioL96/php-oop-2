<?php

require_once __DIR__ . '/category.php';

class Products{
    private $name;
    private $brand;
    private $price;
    private $image;
    private $is_available;
    private $category;

    public function __construct($name, $brand, $price, $image, $is_available, Category $category) {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->image = $image;
        $this->is_available = $is_available;
        $this->category = $category;
    }

    public function getName(){
        return $this->name;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getIs_available(){
        return $this->is_available;
    }
    
    public function getCategory(){
        return $this->category;
    }

}