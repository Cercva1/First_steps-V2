<?php 

class ChildUser extends User{

    const DefaultRole = "User";

    private $role;

    public function __construct($name, $email, $id, $role = self::DefaultRole){
        parent::__construct($name, $email, $id);
        $this->role = $role;
    }

    public function getrole(){
        return $this->role;
    }

    public static function getDefaultRole(){
        return self::DefaultRole;
    }

    public function Introduction(){
        parent::Introduction(); 
        echo "Status { ". $this -> role . " }" ;
    }

}


?>