
<?php include "inc/header.php"; ?>
<?php

interface Teacher {

    public function myTeacher();
}
interface School {

    public function mySchool();
}
interface University {

    public function myUnivercity();
}

class Student implements Teacher{
     
    public function __construct() {
        $this->myTeacher();
    }

    public function myTeacher(){
        echo 'I am a teacher . </br>';
     }
    
}

class Students implements School{
    
  public function __construct() {
        $this->mySchool();
    }

    public function mySchool(){
         echo 'I am a school student . </br>';
     }  
}

$t1 = new Student();
$s1 = new Students();
?>

<?php include "inc/footer.php"; ?>