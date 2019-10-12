<?php 
    /// using multiple inheritance
    trait Username{
        
        protected $username;

        public function setusername($username){
            $this->username = $username;

        }

        public function getusername(){
            return $this->username;
        }
    }
    trait password{

        protected $password;

        public function setpassword($password){
            $this->password = $password;
        }
        public function getpassword(){
            return $this->password;
        }

    }


    class inhet{
        use Username; // all the code from username will be copied here 
        use password; // all the name from password will be copied here

        // all the codefrom these two class will be copied here
    }

    $user = new inhet;
    $user->setusername("Tanvir");
    $user->setpassword("1122");
    echo "Username is ".$user->getusername();
    echo "</br>";
    echo "Password is ".$user->getpassword();
    echo "</br>";
    class User{
        public $username;
        public $password;
        function __construct($username,$password){
            $this->username = $username;
            $this->password = $password;
        }

        public function showall(){
            return $this->username.' '.$this->password;
        }

    }

    $in = new inhet;
    $in->setusername("Tanvir");
    $in->setpassword("1122");
    $user1 = new User($in->getusername(),$in->getpassword());
    echo $user1->showall();
    echo "</br>";
    $in->setusername("Tanvir Rahman");
    $in->setpassword("112233");
    $user2 = new User($in->getusername(),$in->getpassword());
    echo $user2->showall();


?>