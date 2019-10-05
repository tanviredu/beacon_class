<?php 


    interface Student{
        public function dept();
    }

    class EEEstudent implements Student{
        public function dept(){
            return "EEE";
        }
    }
        class  CSEstudent implements Student{
            public function dept(){
                return "CSE";
            }
        }

    $eee  = new EEEstudent;
    $cse = new CSEstudent;

?>