<?php

class frog extends animal{

public $jump = 'hop hop';
public $legs ;

public function set_legs($kaki){
    $this->legs = $kaki;
}

public function get_legs($kaki){
   return $this->legs;
}


public function jump(){
    echo $this->jump;
    
}

// public function get_jump(){

// }


    
}


?>