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


        // the function have to be public if you want to
        // acccess this propertise outside the class 
        public function getID(){
            return $this->id;
        }

        public function setID($id){
            $this->id = $id;
        }
    }

    $eee = new EEEstudent(1);
    //$eee->id = 2; // this will show an error in for the protected
    // you can do enything with the protected value outside the class
    // you can do it with a function
    echo $eee->getID();
    // if you use the private class you cant do anyhting with the
    // other class not even inheritance 

?>