<?php
    abstract class Card{
        public  $code;
        public  $name;

        
        public abstract function validate();
        public abstract function accept();
        public function show_card_data(){
            if($this->code && $this->name){
                echo " The code is " . $this->code . " the name is " .$this->name . "\n";
            }else {
                echo " The card data is undefined \n";
            }
            
        }

    }
    /**
    *Must define abstract methods in 
     */
    class Pay extends Card{
        public $payment_status = false;
        public function __construct($code,$name){
            $this->code = $code;
            $this->name = $name;
        }
        
        public function validate(){
            if($this->code && $this->name){
                $this->payment_status = true;
            }else {
                echo "Payment method declined";
            }
        }
        
        public function accept(){
            echo "Succesful payment";
        }
    }

    $Pay = new Pay("019283","John");
    $Pay->validate();
    $Pay->show_card_data();
    $Pay->accept();
    
?>