<?php
    /** 
    * Interfaces implementation example
    * SportCar class only work if methods defined in interface Gas are implemented
    * Methods defined in Gas Interface also extends from Vehicle Interface and needs to be
    * implemented.
     */

    interface Vehicle{
        public function turn_on();
        public function turn_off();
    }
    interface Gas extends Vehicle{
        public function consume_gas($distance);
        public function full_tank($fuel_quantity);
    }

    class SportCar implements Gas{
        private $status = false ;
        private $tank = 0 ;

        public function status(){
            echo "This is a Sports Car- ";
            if($this->status){
                echo "The car is turned on \n";
            }else {
                echo "The car is turned off \n";
            }
        }

        public function turn_on(){
            if($this->tank<=0){
                echo "the gas tank is empty, can't be turned on \n";
            } else {
                if($this->status){
                    echo "the car is alredy turned on \n";
                }else{
                    echo "the car has turned on \n";
                    $this->status = true;
                }
            }
        }
        public function turn_off(){
            if($this->status){
                echo "the car has turned off \n";
                $this->status = false;
            }else {
                echo "the car is alredy turned off \n";
            }

        }
        public function consume_gas($distance){
            if($this->status){
                $this->tank -= $distance*5;
                if($this->tank <=0 ){
                    echo "There is no more gas, the vehicle will stop \n";
                    $this->turn_off();
                }else {
                    echo "The vehicle works, the fuel status is: " . $this->tank . "\n";
                }
            }else {
                echo "The vehicle is turned off, it can't use gas \n";
            }
            
        }
        public function full_tank($fuel_quantity){
            echo "the gas level is " .$fuel_quantity . "\n";
            $this->tank = $fuel_quantity;
        }

    }

    /**
    * Creating an error to explain Interfaces
    * SportCar Class can't be used if Gas interface methods are implemented
    */
    $sport_car = new SportCar();
    $sport_car->status();
    $sport_car->full_tank(100);
    $sport_car->status();
    $sport_car->turn_off();
    $sport_car->status();
    $sport_car->turn_on();
    $sport_car->consume_gas(10);
    $sport_car->status();
    $sport_car->turn_on();
    $sport_car->consume_gas(10);
    $sport_car->status();
    $sport_car->turn_off();

?>