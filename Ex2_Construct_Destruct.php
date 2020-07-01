<?php

class Lottery{
    
    public $number;
    public $attempts;
    public $result = false;
    public $n_attempt =0;

    public function __construct($number, $attempts){
        $this->number = $number;
        $this->attempts = $attempts;

    }

    public function raffle(){
        $minimum = 0 ;
        $maximum = $this->number*2 ;
        for($i =0; $i<$this->attempts; $i++){
            $attempt = rand($minimum,$maximum);  
            $this->attempt($attempt, $this->n_attempt);
            
        }
    }

    public function attempt($attempt, $n_attempt){
        if($attempt == $this->number){
           echo $attempt . " == " . $this->number; 
            $this->result = true;
        }else{
            echo $attempt . " != " . $this->number;
            $this->result = false;
        }
        echo "\n";
    }

    public function __destruct(){
        if($this->result){
            echo "Congratulations you have win: " ;
        }else{
            echo "Sorry you have lose ";
        }
    }
    
}
    $lottery = new Lottery(10,10);
    $lottery->raffle();

?>