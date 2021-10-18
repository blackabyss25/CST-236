<?php
require_once 'Person.php';
require_once 'Student.php';


$guy1 = new Person;
$guy2 = new Student;

$guy1->growOlderBy(2);
$guy2->growOlderBy(2);

echo "age of guy 1: " . $guy1->age . "<br>";
echo "age of guy 2: " . $guy2->age . "<br>";