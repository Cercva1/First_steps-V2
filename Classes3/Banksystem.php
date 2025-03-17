<?php 

class Banksystem{

    private $balance;
    
    public function __construct($initialbalance){
        if($initialbalance > 0){
            $this->balance = $initialbalance;
        } 
    }

    public function getBalance(){
        return $this->balance;
    }

    public function deposit($amount){
        if($amount >= 0){
            $this -> balance += $amount;
        }else{
            echo "Amount should be more than 0 EUR";
        }
    }

    public function withdraw($amount){
        if($amount <= $this->balance){
            $this -> balance -= $amount;
    }else{
        echo "In order to withdraw from account you need to enter less amount";
    }
}

}


?>