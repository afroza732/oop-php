<?php include "inc/header.php"; ?>
<?php

class Add {
   
   static $number = 5;
   public static function setNumber(){
       self::$number++; 
   }
    
}

Add::setNumber(5);
echo"First Number is : ". Add::$number;
echo '</br>';
Add::setNumber(6);
echo"First Second is : ". Add::$number;
echo '</br>';
Add::setNumber(7);
echo"Last Number is : ". Add::$number;

?>
<?php include "inc/footer.php"; ?>