<?php

class Person {

    public $name;
    public $age;
    public $phone;

    public function personName($name) {

        echo "person name is : " . $this->name = $name . "</br>";
    }

    public function personAge($age) {

        echo "person age is : " . $this->age = $age . "</br>";
    }

    public function personPhone($phone) {

        echo "person Phone is :" . $this->phone = $phone . "</br>";
    }

}

$person = new Person();
//echo $person->name = "Ariful Islam";
$person->personName('Afroza Akter');
$person->personAge(18);
$person->personAge("01786942732");
