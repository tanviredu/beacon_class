<?php 
    require_once('student.php');

    class Main{

        public function call(){
            global $student;
            echo $student->get_name();


        }        
    }

    $main = new Main;
    $main->call();
?>