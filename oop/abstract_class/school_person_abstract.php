<?php 

    abstract class Person{
        // teacher 
        // student
        // Headmaster
        // librarian
        
        public  $name;
        public  $gender;
        public  $position;
        

        public function __construct($name,$gender,$position){
            $this->name = $name;
            $this->gender = $gender;
            $this->position = $position;
        }
        abstract function display_information();


    }

    class Teacher extends Person{
        function __construct($name,$gender,$position){
            
            parent::__construct($name,$gender,$position);

        }
        public function display_information(){
            if($this->gender=="male" && $this->position="teacher"){
                echo "Mr. ".$this->name." is  teacher";

            }else{
                echo "Mrs. ".$this->name." is  teacher";
            }
            
        }

    }
  


    class Student extends Person{
        function __construct($name,$gender,$position){
            
            parent::__construct($name,$gender,$position);

        }
        public function display_information(){
            if($this->gender=="male" && $this->position="student"){
                echo "Mr. ".$this->name." is  student";

            }else{
                echo "Mrs. ".$this->name." is  student";
            }
            
        }

    }




    class Headmaster extends Person{
        function __construct($name,$gender,$position){
            
            parent::__construct($name,$gender,$position);

        }
        public function display_information(){
            if($this->gender=="male" && $this->position="headmaster"){
                echo "Mr. ".$this->name." is  headmaster";

            }else{
                echo "Mrs. ".$this->name." is  headmistress";
            }
            
        }

    }
    $student = new Student("tanvir",'male','student');
    $student->display_information();


    $teacher = new Teacher('abdul alim','male','teacher');
    $teacher->display_information();

    $head = new Headmaster('suchitra sen','female','headmaster');
    $head->display_information();
?>