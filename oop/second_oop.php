<?php
    // second class in oop
    class Student{

        //protected $id;
        public $student;
        public $name;

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

    }
    $eeestudent = new EEEstudent('1234');\
    var_dump($eeestudent);
?>