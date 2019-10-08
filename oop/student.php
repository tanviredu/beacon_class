<?php 
    class Student{

        function __construct($id,$name,$mobile,$dept){
            $this->id = $id;
            $this->name = $name;
            $this->mobile = $mobile;
            $this->dept = $dept;
        }
        

        function get_name(){
            return $this->name;
        }
    }

    $student = new Student(1,'tanvir rahman','01554313265','EEE');
    //echo $student->get_name();

?>