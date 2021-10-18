<?php

class CarTire
{
    
    private $tirePosition;
    private $psi;
    
    public function __construct($tirePosition, $startingPsi)
    {
        $this->tirePosition = $tirePosition;
        $this->psi = $startingPsi;
        echo "you're new " . $tirePosition . " tire has been installed and pumped up to " . $startingPsi . "<br>"; 
    }
    
    public function inflate($psiToInflateTo){
        $this->psi = $psiToInflateTo;
        echo $this->tirePosition . " was pumped up to " . $psiToInflateTo . " psi.<br>";
    }
    public function deflate($deflateHowMuchPsi){
        $this->psi = $this->psi - $deflateHowMuchPsi;
    }
    
    public function getCurrentPsi() {
        return $this->psi;
    }
    public function checkForMinimumNecessaryPsiToStart(){
        if( $this->psi >= 32){
           return true;
        }
        else {
            return false;
        }
    }
    
    public function getPosition() {
        return $this->tirePosition;
    }
    
}

