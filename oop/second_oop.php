<?php
    // second class in oop
    class Student{

        //public $id;
        //public $name;

        public function __construct($id,$name){
            $this->id = $id;
            $this->name = $name;
        }
    }

    $student = new Student('143000410','tanvir');
    var_dump($student);

?>