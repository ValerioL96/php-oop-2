<?php

class Category{
    private $dog;
    private $cat;
    private $fish;
    private $bird;

    public function __construct(string $dog, string $cat, string $fish, string $bird) {
        $this->dog = $dog;
        $this->cat = $cat;
        $this->fish = $fish;
        $this->bird = $bird;
    }
}
