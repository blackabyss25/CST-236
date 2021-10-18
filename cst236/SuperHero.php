<?php

class SuperHero 
{

    private $name;
    private $health;
    private $isDead;
    
    //Constructor
    public function __construct($heroName)
    {
        
        $this->setName($heroName);
        $this->setHealth(100);
        $this->setDeadStatus(FALSE);
        echo "superhero";
        //echo $this->name . " has entered the battle.<br>";
        //echo "They have " . $this->health . " health.<br>";
    }
    
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return number
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param number $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }


    
    public function isDead(){
        if($this->isDead == TRUE){
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function setDeadStatus($TrueFalse){
        $this->isDead = $TrueFalse;
    }
    
    
    public function attack($opponent) {
        //Determine random amount of damage
        $damage = rand(0,10);
        //Deal that damage to opponent
        echo $this->getName() . " has attacked " . $opponent->getName() . " for a total of " . $damage . "damage.<br>";
        $opponent->takeDamage($damage);
    }
    
    public function takeDamage(int $damage) {
        if($this->getHealth() <= 0){
            $this->setDeadStatus(TRUE);
        }
        else {
            $this->setHealth($this->getHealth() - $damage);
            echo $this->getName() . " has " . $this->getHealth() . " health remaining.<br>";
        }
    }
    
    


    
    
    
}

