<?php 

    interface LoggerInterface{

    }

    interface Databaseinteface{

    }

    // how to add member to the interafce (member means the propertise and the
    //method)
    /*
    every method will be public
    const cant be chnaged in any implementation
    and the method will not have any body

    */

    interface Mathinterafce{
        const MSG = "this is the math interface";
        const PI = 3.14;
    }

    echo Mathinterafce::MSG;
    echo Mathinterafce::PI;
    // if you want to change the thing this will happen



    interface Mathinterafce2{
        const MSG = "this is the math interface";
        const PI = 3.14;
        public function calculate();
    }

    echo Mathinterafce2::MSG;
    echo Mathinterafce2::PI;

    class testclass implements Mathinterafce2{
        //const MSG = "hello"; // this will through an error
        // you  cant  change this 
    }

?>