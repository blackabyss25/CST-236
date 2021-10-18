<?php

class CarEngine
{

    private int $engineSpeed;
    private $engineIsOn;
    
    public function __construct()
    {
       echo "bought an engine.<br>"; 
       $this->engineIsOn = false;
       $this->engineSpeed = 0;
       echo "engine has been installed.<br>";
    }
    
    public function startEngine() {
        $this->engineIsOn = true;
        echo "The engine has started.<br>";
    }
    public function stopEngine() {
        $this->engineIsOn = false;
        echo "The engine has stopped.<br>";
    }
    public function isEngineOn() {
        return $this->engineIsOn;
    }
    
    
    
}

