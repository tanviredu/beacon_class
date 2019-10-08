<?php
    
        interface LoggerInterface{

            public function log($messgae);

        }

        class Filelogger implements LoggerInterface{

            public function log($messgae){
                echo "File logger ".$messgae;
            }
        }

        class Databaselogger implements LoggerInterface{

            public function log($messgae){
                echo "Database logger ".$messgae;
            }
        }


        $logger1 = new Filelogger();
        $logger1->log('File object is created');

        $logger2 = new Databaselogger();
        $logger2->log('File object is created');


 ?>