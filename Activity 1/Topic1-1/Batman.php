<?php
require_once 'SuperHero.php';

class Batman extends SuperHero
{

    public function __construct()
    {
        parent::__construct();
        $this->setName("Batman");
        $this->setHealth(mt_rand(1,1000));
        echo $this->name . " has entered the battle.<br>";
        echo "They have " . $this->health . " health.<br>";
    }
}

