<?php 

    class Student{
        protected $id;

    }
    // this will  inherit everything from the 
    // Student 
    class EEEstudent extends Student{

        function __construct($id){
            $this->id = $id;

        }

    }
    $eee = new EEEstudent(1);
    var_dump($eee);
?>