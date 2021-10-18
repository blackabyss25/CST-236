<?php

final class Person
{
    public $name;
    public $age;
    
    public function growOlderBy($years){
        $this->age = $this->age + $years;
    }
}

