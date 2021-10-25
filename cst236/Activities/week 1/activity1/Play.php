<?php
require_once 'SuperHero.php';
require_once 'Batman.php';
require_once 'Superman.php';

$quicksilver = new SuperHero("Quicksilver");
$theFlash = new SuperHero("The Flash");
//$batman = new Batman();
//$superman = new Superman();



while ($theFlash->isDead() == FALSE && $quicksilver->isDead() == FALSE){
    
    $theFlash->attack($quicksilver);
    $quicksilver->attack($theFlash);
    
}
echo "The battle is over!";
if($theFlash->isDead() == TRUE && $quicksilver->isDead() == FALSE){
    echo "Quicksilver Wins!";
}
if($theFlash->isDead() == FALSE && $quicksilver->isDead() == TRUE){
    echo "The Flash Wins!";
}
