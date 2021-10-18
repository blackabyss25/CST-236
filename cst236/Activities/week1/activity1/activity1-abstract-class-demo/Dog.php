<?php
require_once 'Animal.php';

class Dog extends Animal
{

    public function __construct()
    {
        parent::__construct($n, $c);
    }
    public function talk()
    {
        echo "Bark! Bark! Bark!<br>";
    }
    public function doTrick()
    {
        echo "Jumps and catches the tennis ball you just threw!<br>";
    }

    

}

