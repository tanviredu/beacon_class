<?php 
// whe you make a class you have to make assure that
// 1) generic class wil not get instaltiate
// 2) abs tract class will only created for extendens
// 3)abstract class have only one abstact method
// 4) and that method has no body
// 5) and of course the other class will override the method

abstract class Shape{

    public static $id;

    public function __construct(){
        self::$id++;
    }

    abstract public function getArea();
}

class Circle extends Shape{

    public function __construct($redius){
        parent::__construct();
        $this->redius = $redius;
    }
    public function getArea(){ // overriting the function
        $area = 3.14*$this->redius*$this->redius;
        echo "id = ".self::$id." area = ".$area;
    }
}

// making a ractengular class with the abstract class
class Rect extends Shape{
    public $width;
    public $height;


    function __construct($width,$height){
        parent::__construct();
        $this->width = $width;
        $this->height = $height;

    }

    public function getArea(){
        $area = $this->height*$this->width;
        echo "id = ".self::$id." area = ".$area;

    }
    
}

$circle = new Circle(10);
$circle->getArea();

$rect = new RECT(10,10);
$rect->getArea();


// you cant make the objeect of the parent abstract class
// this will show an error


?>