<?php

include 'inc/Person.inc.php';

class User extends Person {
    public $role;

    public function __construct($name, $age, $email, $role){
         $this->name = $name;
         $this->age = $age;
         $this->email = $email;
         $this->role = $role;

        // Parent::__construct();
    }

    public function getInfos(){
        return $this->name."is the new User";
    }

    public function PostData($con){
        $sql = "INSERT INTO users (name, age, email, role) VALUES ('$this->name', '$this->age', '$this->email', '$this->role')";

        if(mysqli_query($con,$sql)){
             echo "data sent";
        }
        
        // $response = $this->PostData($sql);
        // return $response;
    }
}

// $newUser = new User("aymen",21,"email","admin");
// echo $newUser->getInfos();

?>
