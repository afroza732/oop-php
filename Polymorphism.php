<?php include "inc/header.php"; ?>
<?php

//base class
interface Shape {
    public function calcArea();
}
// Circle 
class Circle implements Shape{
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calcArea() {
      echo 'The circle is :'.$this->radius * $this->radius * pi();
    }

}

class Regtangle implements Shape{
    public $base;
    public $height;
    
    public function __construct($base,$height) {
      $this->base = $base;
      $this->height = $height;
    }

    public function calcArea() {
        echo 'The regtangle value is : '. 0.5 * $this->base * $this->height; 
    }

}

$s = new Circle(5);
$s->calcArea();
echo '</br>';

$r = new Regtangle(5, 10);
$r->calcArea()
?>
<?php include "inc/footer.php"; ?>