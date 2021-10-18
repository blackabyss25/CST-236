<?php
require_once 'Animal.php';

class Cat extends Animal
{

    public function __construct($n, $c)
    {
        parent::__construct($n, $c);
    }

    public function talk()
    {
        echo "Meow!<br>";
    }
    public function doTrick()
    {
        echo "Fat chance, cats don't do tricks!<br>";
    }
}

