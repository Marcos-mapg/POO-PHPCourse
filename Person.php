<?php 
    class Person{
        public static $name ="TOÑO";
        public $age;
        public $gender;

        public function speak( $greetings){
            echo "\n" . $greetings . " My name is " . $this->name;
        }
        
        public static function getName(){
            return self::$name;
        }
    }

    $person = new Person();
    $person->name = "John";
    echo $person->name;
    echo $person->speak(' HI! ');
    echo "\n" . Person::getName();
    


?>