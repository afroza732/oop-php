<?php include "inc/header.php"; ?>
<?php

class UserData {
    public $user;
    public $userId;
    
    const NAME ="Afroza Nisha";


    public function __construct($username,$userId){  
        $this->user = $username;
        $this->userId = $userId;
        
        echo "User Name is :{$this->user} and User id is {$this->userId};";
    }
    
    public function display(){
        echo "Full name is :".UserData::NAME;
    }
        public function __destruct() {
        unset( $this->user);
        unset( $this->userId);
    }
}

$user ="Afroza Akter";
$userId = 123;
$obj_user = new UserData($user,$userId);
echo '</br>';

$obj_user->display();

?>

