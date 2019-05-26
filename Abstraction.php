
<?php include "inc/header.php"; ?>
<?php

abstract class truck {
   
    public $tankvalue;
    
    public function setTankValue($value){
        $this->tankvalue = $value; 
    }
    
    public abstract function calMiles();
}


class Toyota extends truck{
    
   public  function calMiles(){
       return $this->tankvalue*10;
   }  
}
class Motor extends truck{
    
   public  function calMiles(){
       return $this->tankvalue*15;
   }  
}

$t1 = new Toyota();
$t1->setTankValue(10);

echo "Toyota is :". $t1->calMiles();
$t2 = new Motor();
$t2->setTankValue(10);
echo '</br>';
echo "Motor is :". $t2->calMiles();
?>

<?php include "inc/footer.php"; ?>