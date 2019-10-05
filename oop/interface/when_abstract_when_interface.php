<?php 

    // in iterface there is no body of the method just like the abstract class
    // so the implements method is actually abstract method
    // even in the implementation you dont call the method abstract but still the method 
    // is abstract
    // in the interface there is no  static member but abstract class have static method
    //lets see a program

    interface Mathinterface{
        public function calculate();
    }

    abstract class AbstractMath{
        abstract public function calculate();
    }

    class Someclass implements Mathinterface{
        public function calculate(){
           echo "Someclass::calculate() </br>"; 
            
        }
    }

    class Someotherclass extends AbstractMath{
        public function calculate(){
           echo "Someanotherclassclass::calculate() </br>"; 
            
        }
    }


    $sc = new Someclass();
    $sc->calculate();
    $sc1 = new Someotherclass();
    $sc1->calculate();


/* 
    well thats sound like exaxtly the same but not exactly
    in the abstract class you will not aget a full abstraction
    so when the abstract class and when the interface

    you need to understand two different work
    1) is kind of (kar moto dekhte) [extends]
    2) is capable of (ki kaj kore)  [implements]




*/




?>