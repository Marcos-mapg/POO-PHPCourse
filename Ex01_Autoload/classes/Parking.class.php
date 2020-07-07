<?php
    Class Parking {
        public $parking_name;
        public $parking_lots;
        public $parking_location;

        public function __construct($parking_name, $parking_lots,$parking_location){
            $this->parking_name = $parking_name;
            $this->parking_lots = $parking_lots;
            $this->parking_location = $parking_location;
        }

        public function get_parking_name(){
            echo $this->parking_name;
        }

        public function get_parking_lots(){
            echo $this->parking_lots;
        }
        
        public function get_parking_location(){
            echo $this->parking_location;
        }

    }
?>