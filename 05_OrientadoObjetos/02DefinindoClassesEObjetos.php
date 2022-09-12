<?php

//Isso é uma classe (uma idéia de algo):
class Cat {
    public $color;
    public $size;
    public $breed;
}

//Isso é um objeto (uma instância de uma classe):
$cat = new Cat(); //$cat é um objeto
$cat->color = "orange";

echo "The cat's color is ".$cat->color;
