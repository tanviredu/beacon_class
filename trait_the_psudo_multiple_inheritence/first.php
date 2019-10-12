<?php 
    //traint with php
    // in traiit we just copy the whole fucntion to another function
    // you cant instantiate a trait directly
    trait LoggerTrait{

        protected $logger;

        // using set and get in the logger function can be really handy
        public function set_logger($message){
            $this->logger = $message;
        }

        public function get_logger(){
            return $this->logger;
        }
 }

    class LoggerDatabase{
        use LoggerTrait;
    }

    class LoggerFileIO{
        use LoggerTrait;
    }

    //instantiate the logger
    $logdatabase = new LoggerDatabase;
    $logdatabase->set_logger("This is Database logger");
    echo $logdatabase->get_logger();
    echo "</br>";

    //instantiate the logger
    $logFileIO = new LoggerFileIO;
    $logFileIO->set_logger("This is FILEIO logger");
    echo $logFileIO->get_logger();
    


?>