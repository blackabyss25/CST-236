<?php
require_once 'Person.php';


//Create an instance of a Person
$person = new Person("Kurt");
$person->walk();

$person2 = new Person("Kate");
$person2->formalGreeting();

$person3 = new Person("Kathy");
$person3->spanishGreeting();


$person->login("username", "asdf");
$person->login("username", "password");
