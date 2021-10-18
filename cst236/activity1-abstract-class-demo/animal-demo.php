<?php
require_once 'Dog.php';
require_once 'Cat.php';

$cat = new Cat("Kitty", "Brown");
$dog = new Dog("Clifford", "Red");

$dog->talk();
$cat->talk();


$dog->doTrick();
$cat->doTrick();
