<?php
    class Vehicle {
        public $engine_status = false;
        public $color  = "NONE";
        public $doors = 0;

        public function __construct( $engine_status, $color, $doors){
            $this->engine_status = $engine_status;
            $this->color = $color;
            $this->doors = $doors;
        }

        public function set_engine_status_on(){
            if($this->engine_status){
                echo "\n Danger the engine is alredy ON";
            }else {
                 $this->engine_status = true;
                echo " \n The engine has turned ON";
            }
        }

        public function set_engine_estatus_off(){
            if($this->engine_status){
                $this->engine_status = false;
                echo " \n The engine has turned OFF";
            }else{
                echo " \n The is alredy turned OFF";
            }
        }

        public function set_color($color){
            $this->color = $color;
        }

        public function set_doors($color){
            $this->color = $color;
        }

        public function get_vehicle_data(){
            return $this->format_vehicle_info();
        }

        private function format_vehicle_info(){
            $message = "The vehicle color is: " . 
            $this->color . " \nDoors the vehicle has: " .
            $this->doors . "\nThe vehicle engine is " .
            ($this->engine_status ? " ON " : " OFF ") ; //
            return $message;
        }


    }

    class Truck extends Vehicle{
        public $model = 0;
        public $brand = "NONE";

        public function __construct($engine_status,$color,$doors, $model, $brand){
            $this->engine_status = $engine_status;
            $this->color = $color;
            $this->doors = $doors;
            $this->model = $model;
            $this->brand = $brand;
        }

        public function set_model($model){
            $this->model = $model;
        }

        public function set_brand($brand){
            $this->brand = $brand;
        }

        public function get_truck_data(){
            $message = $this->get_vehicle_data() . $this->format_truck_info() ;
            return $message;
        }

        private function format_truck_info(){
            $message = " \nTRUCK MODEL IS: " .$this->model.
            "\nTRUCK BRAND IS " . $this->brand ;
            return $message;
        }

    }

    /** 
    $vehicle  = new Vehicle(false, "RED", 4);
    $vehicle->set_engine_status_on();
    echo $vehicle->get_vehicle_data();
    $vehicle->set_engine_estatus_off();
    echo $vehicle->get_vehicle_data();
    */

    
    $truck = new Truck(false, "RED", 4, 1995, "VOLVO");
    echo $truck->get_truck_data();
    $truck->set_engine_status_on();
    $truck->get_truck_data();
    
    
?>