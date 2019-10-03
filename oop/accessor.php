<?php
    // second class in oop
    class Student{

        protected $id;
        
    }

    
    class EEEstudent extends Student{

        public function __construct($id){
            $this->id = $id; // but make sure you dont add any $id in the child class
                            // if you dont add any id in the chield you can access the 
                            // parent by using this
        }
    }

    $eee = new EEEstudent(1);
    //$eee->id = 2; // this will show an error in for the protected
?>