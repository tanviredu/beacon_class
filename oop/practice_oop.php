<?php 

    class Student{
        protected $id;
        protected $department;
        protected $name;
        protected $section;

        public function get_id(){
            return $this->id;
        }

        public function set_id($id){
            $this->id = $id;
        }

        public function get_name(){
            return $this->name;
        }

        public function set_name($name){
            $this->name = $name;
        }




    }
    // this will  inherit everything from the 
    // Student 
    class EEEstudent extends Student{

        function __construct($id){
            $this->id = $id;

        }

    }
    $eee = new EEEstudent(1);
    echo $eee->get_id();
    $eee->set_name("Tanvir Rahman");
    echo $eee->get_name();
    //var_dump($eee);

?>