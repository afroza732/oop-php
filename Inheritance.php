<?php

class Greeting {

    public $name;
    public $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getHello() {
        echo "Name is " . $this->name;
        echo '</br>';
        echo "Age is " . $this->age;
    }

}

class Hello extends Greeting {
    
}

$hello = new Hello("Tamjid",23);
$hello->getHello();
?>