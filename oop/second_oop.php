<?php
    // second class in oop
    class Student{

        //protected $id;
        public $student;
        //public $name;

        public function __construct($id){
            $this->id = $id;
        }


        // accessor
        //public
        // protected
        // private
    }

     $student = new Student('143000410');
    // $student->id=2;  // this will show an ERROR !!!  
     var_dump($student);

    class EEEstudent extends Student{

        // create  additional properties
        // you can add default value here
        //public $dept="EEE";
        // you can overwrite the whole thing if you add the same function
        // if php found that you have a constructor in here it will no longer search 
        // for parent class constructor
        // so if you use the constructor here the parent constructor will no longer asked
        // this is called method overwritng
        
        public function __construct(){
            $this->dept ="EEE";
        }

    }
    $eeestudent = new EEEstudent('1234');
    $eeestudent->dept = "EEE";

    
    
    var_dump($eeestudent);
?>