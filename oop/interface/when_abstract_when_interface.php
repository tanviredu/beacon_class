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

    suppose there is a company and that company has Employee
    for every employee there are attendance calculation and payroll calculation
    1) there are management lavel employee and their work is contract sign and investment
    2) there are  project magement level employee and their work is contract sign and client management
    3) there are software developer lavel employee and their work is fixing Bug
    4)there are quality assurance employee and their work is Bug report 
    
    
    so the total class and interfae definition will be like this

    
*/

// base class

abstract class Employee{
    abstract public function calculateAttendence();
    abstract public function generatePayrool();
}

class Management extends Employee implements Signcontract,Makeinvestment{

}

class projectManager extends Employee implements Signcontract,ManageClient{
    
}

class SoftwareDeveloper extends Employee implements FixBug{
    
}

class QualityAssurance extends Employee implements ReportBug{
    
}


?>