<?php

class Person {

    public $name;
    public $age;
    public $email;

    public function __construct($name, $age, $email) {

        echo "person Constructor";

        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    // public function getAllInfosPerson(){
    //     echo $this->age;
    // }

}

// $newPerson = new Person("aymen",21,"aymen@gmail.com");

// echo $newPerson->getAllInfosPerson();

?>
