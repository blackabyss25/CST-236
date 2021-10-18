<?php
echo "test<br>";

use week1\activity1\Person;

require_once 'week1/activity1/Person.php';

$p = new Person("kurt");
$p2 = new Person("kate");
echo "user 1 login attempt.<br>";
$p->login($p->getUsername(), "qwer");
echo"<br>";
echo "user 2 login attempt.<br>";
$p2->login($p->getUsername(), "qwer");

