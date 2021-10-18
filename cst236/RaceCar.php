<?php

require_once 'CarTire.php';
require_once 'CarEngine.php';

class RaceCar
{

    
    private CarEngine $engine;
    private CarTire $frontRight;
    private CarTire $frontLeft;
    private CarTire $rearRight;
    private CarTire $rearLeft;
    
    
    public function __construct()
    {
        $this->engine = new CarEngine();
        $this->frontRight = new CarTire("frontRight", 32);
        $this->frontLeft = new CarTire("frontLeft", 32);
        $this->rearRight = new CarTire("rearRight",32);
        $this->rearLeft = new CarTire("rearLeft", 32);
    }
    
    
    public function startCar() {
        if($this->engine->isEngineOn() == true){
            echo "The car is already on!<br>";
        }
        else {
            //Check all tires psi first
            $goodToGo = false;
            if($this->frontRight->checkForMinimumNecessaryPsiToStart() == true &&
                $this->frontLeft->checkForMinimumNecessaryPsiToStart() == true &&
                $this->rearRight->checkForMinimumNecessaryPsiToStart() == true &&
                $this->rearLeft->checkForMinimumNecessaryPsiToStart() == true 
                ){
                $goodToGo = true;
            } else {
                $goodToGo = false;
                echo "Top off your tire pressure!<br>";
            }
            
            if($goodToGo == true){
                $this->engine->startEngine();
            }
        }
        
    }
    
    
    public function driveCar($speed){
        echo "You are going " . $speed . "mph...<br>";
        echo "is the engine on? " . $this->engine->isEngineOn() . "<br>";
        //Make sure engine is on
        if($this->engine->isEngineOn()){
            if($speed >=1 && $speed <= 15){
                $this->frontRight->deflate(1);
                $this->frontLeft->deflate(1);
                $this->rearRight->deflate(1);
                $this->rearLeft->deflate(1);
            }
            if($speed >=16 && $speed <= 30){
                $this->frontRight->deflate(2);
                $this->frontLeft->deflate(2);
                $this->rearRight->deflate(2);
                $this->rearLeft->deflate(2);
            }
            if($speed >=31 && $speed <= 45){
                $this->frontRight->deflate(3);
                $this->frontLeft->deflate(3);
                $this->rearRight->deflate(3);
                $this->rearLeft->deflate(3);
            }
            if($speed >=46 && $speed <= 60){
                $this->frontRight->deflate(4);
                $this->frontLeft->deflate(4);
                $this->rearRight->deflate(4);
                $this->rearLeft->deflate(4);
            }
            //Now the car has been driven
            echo "The car has been driven! and the tires have deflated a little bit.<br>";
        }
        else {
            //Car isn't on, so tell the user
            echo "The car isn't on genius!<br>";
        }
    }
    
    public function inflateTires($inflateToPsi){
        $this->frontRight->inflate($inflateToPsi);
        $this->frontLeft->inflate($inflateToPsi);
        $this->rearRight->inflate($inflateToPsi);
        $this->rearLeft->inflate($inflateToPsi);
        echo "all tires have been inflated to ".$inflateToPsi ."psi.<br>";
        
    }
    
    public function stopCar() {
        $this->engine->stopEngine();
        echo "The engine has been stopped.<br>";
    }
    public function checkTires(){
        echo $this->frontRight->getPosition() . " psi is ". $this->frontRight->getCurrentPsi() ."<br>";
        echo $this->frontLeft->getPosition() . " psi is ". $this->frontLeft->getCurrentPsi() ."<br>";
        echo $this->rearRight->getPosition() . " psi is ". $this->rearRight->getCurrentPsi() ."<br>";
        echo $this->rearLeft->getPosition() . " psi is ". $this->rearLeft->getCurrentPsi()."<br>";
    }
    
    
    
    
}

