<?php

use Data\AnimalFood;
use Data\CatShelter;
use Data\DogShelter;
use Data\Food;

require_once 'data/Animal.php';
require_once 'data/AnimalShelter.php';
require_once 'data/Food.php';


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("sasa");
$cat->eat(new \Data\AnimalFood());


$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Jaja");
$dog->eat(new \Data\Food());