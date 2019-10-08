<?php 

    // the normal class can have abstract method
    // normal class are called the concrete class
    // if any concrete class ha any abstract method 
    // php will consiider the whole class as  an abstract class
    // abstract method has no body and after any function is declared
    // as abstract this whole class will be considered as a abstract class
    
   abstract class Shape{ // class is not abstract but there is a 
                // abstract function there so the class will be considered as 
                // an abstract class
            
        protected static $id;
        public function __construct(){
            self::$id++;
        }

        abstract public function getArea();

        public function display(){
            echo "displaying the shape information";
        }

    }


    class Circle extends Shape{
        // first we need to make a construct

        public function __construct($redius){
            parent::__construct();
            $this->redius = $redius;
        }

        public function getArea(){ // this function will overwrite the anstract method
            parent::display();
            $area = 3.14*$this->redius*$this->redius;
            echo "</br>The value of the area ".$area;

        }
    }
    $circle = new Circle(100);
    $circle->getArea();
?>