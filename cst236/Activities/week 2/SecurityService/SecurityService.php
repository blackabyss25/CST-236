<?php

class SecurityService
{
    private $username = "";
    private $password = "";
    
    
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    
    function authenticateLogin($username, $password){
        
        if($this->username == ""  || $this->password == ""){
            return false;
        }
        if($this->username == "Kurt" && $this->password == "QWER"){
            return true;
        }
        else {
            return false;
        }
    }
}

