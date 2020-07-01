<?php

class Person{
    public $first_name = array();
    public $last_name  = array();

    public function save($first_name, $last_name){
        $this->first_name[] = $first_name;
        $this->last_name[] = $last_name;

    }

    public function show(){
        //echo count($this->first_name);
        for($i =0; $i < count($this->first_name); $i ++){
            $this->format($this->first_name[$i], $this->last_name[$i]);
        }
    }

    public function format($first_name, $last_name){
        echo "Name : " . $first_name . ". last name : " . $last_name . "\n";
    }
}

$person = new Person();
$person->save("Juan","Perez");
$person->save("Toño","Montana");
$person->save("John","Travolta");
$person->show();

?>