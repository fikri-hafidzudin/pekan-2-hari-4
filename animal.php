<?php

class animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = 'false';
  

    function __construct($name){
        $this->name = $name;

    }
    function get_name(){
        return $this->name;
    }

}





?>