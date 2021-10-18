<?php
namespace week1\activity1;

class Person
{
    private $name;
    private $username;
    private $password;
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function __function($name){
        echo "Hello my name is " . $name . "<br>";
        $this->name = $name;
        $this->username = "kurt";
        $this->password = "qwer";
    }
    
    public function walk(){
        echo "walked...";
    }
    
    public function formalGreeting(){
        echo "Good day to you sir!<br>";
    }
    
    public function login($username, $password){
        if($username == $this->username && $password == $this->password){
            echo $this->name . " has logged in successfully.<br>";
        }
        else {
            echo "login failed.<br>";
        }
    }
}

