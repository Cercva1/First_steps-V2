<?php 

class User{
    

    private $name;
    private $email;
    private $id;
    
    public function __construct($name, $email, $id ){
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getId(){
        return $this->id;
    }

    public function Introduction(){
        echo "This is our new user with their own components: Name: [". $this -> name . "],  Email: [" . $this ->email
        ."],  ID: [" . $this-> id. "]. "; 
    }



}
