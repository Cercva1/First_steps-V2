<?php 

class Car {

    private $brand;
    private $color;
    private $type;
    public $condidition = "Registered";

    public function __construct($brand, $color, $type = "SUV") {

        $this->brand = $brand;
        $this->color = $color;
        $this->type = $type;

    }

    public function setCar($brand){
        $this->brand = $brand;
    }

    public function getCar(){
        return $this->brand;
    }

    public function Car(){

        return "Your car has been ordered: Brand ( ". $this->brand ." )". "color ( ". $this->color ." )".
        "type ( ". $this->type ." )";

    }




}




?>