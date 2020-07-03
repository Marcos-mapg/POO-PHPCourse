<?php
        /**
        * Check each combination of static functions and static attributes.
        */
    Class Thing{

        public $normal_attribute ="This is a normal attribute";
        public static $static_attribute="This is static attribute";


        
        public static function static_method(){
            //$message = "Normal attribute: " .  $this->normal_attribute . "\n";
            //$message = "Static attribute: " . $this->static_attribute . "\n";
            //$message = "Normal attribute: " . Self::$normal_attribute . "\n";//
            $message =  "Static attribute: " . Self::$static_attribute . "\n";
            return $message;
        }

        public function non_static_method(){
            //$message = "Normal attribute: " .  $this->normal_attribute . "\n";//can not be used because is an static method
            //$message = "Static attribute: " . $this->static_attribute . "\n";
            //$message = Self::$normal_attribute . "\n";//
            $message = Self::$static_attribute . "\n";
            return $message;
        }

    }

    Class Thing2 extends Thing{

    }

    $thing = new Thing();
    //echo $thing->static_method();//OK ->only static attribute
    //echo Thing::static_method();//OK ->only static attribute
    
    //echo $thing->non_static_method();//OK -> normal attribute -> static attribute via  scope resolution operator
    //echo $thing::non_static_method(); //OK -> static attribute via  scope resolution operator

    echo Thing2::static_method();//Also applies to extended classes
?>