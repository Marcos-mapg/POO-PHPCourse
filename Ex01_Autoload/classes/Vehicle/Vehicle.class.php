<?php

    namespace  Vehicle;
    
    Class Vehicle {
        
        public $vehicle_model;
        public $vehicle_brand;

        public function __construct($vehicle_model, $vehicle_brand){
            $this->vehicle_model = $vehicle_model;
            $this->vehicle_brand = $vehicle_brand;
        }

        public function get_vehicle_model(){
            echo $this->vehicle_model;
        }
        
        public function get_vehicle_brand(){
            echo $this->vehicle_brand;
        }

    }
?>