<?php

require_once __DIR__ . '/category.php';


class Products{
    private $category;

    public function __construct(Category $category) {
        $this->category = $category;
    }

}