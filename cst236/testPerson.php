<?php
echo "test<br>";


require_once 'Person.php';

$p = new Person("kurt");
$p2 = new Person("kate");
echo "user 1 login attempt.<br>";
$p->login($p->getUsername(), "qwer");
echo"<br>";
echo "user 2 login attempt.<br>";
$p2->login($p->getUsername(), "qwer");

echo "test over<br>";