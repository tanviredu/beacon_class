<?php
    

    class DBJSON{

        private $filename = ""; // this is the file name only the inside function can access it
        private $separetor = ","; // json separetor
        protected $records = array(); // this is where we store information

        // constructor

        function __construct($filename){
            // this is where we set the information
            $this->filename = $filename;

        }

        public function loadRecords(){
            //check if the file exists with file exists command
            if(file_exists($this->filename)){
                // read the file content
                $json_data = file_get_contents($this->filename);

                // convert the json into array
                $this->records = json_encode($json_data);
            }
        }

        public function getRecords(){
            return $this->records;

        }

        public function addRecords($record){
            // first check if it is a valid record
            
            
        }



    
    }
?>