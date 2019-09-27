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
            if(!is_array($record)){
                echo "[-] Failed unsoupported";
                return;
            }else{
                $this->records = $record;
            }

            
        }

        
            public function findkey($value){
                foreach($this->records as $key=>$data){
                    if(in_array($value,$data)){
                        return $key;
                    }
                }
            }

            public function searchRecord($value){
                foreach($this->records as $key=>$data){
                    if(in_array($value,$data)){
                        return $this->records[$key];
                    }
                }
            }

            public function getRecord($index){
                // if the index is between the total count
                
                if($index <$this->records){
                    return $this->records[$index];
                }else{
                    echo "[-] invalid index";
                }
            }

            public function recordCount(){
                return count($this->records);
            }

            public function saveRecords(){
                // first we have to format the data
                $json_data = json_encode($this->records);

                //open a file
                $fp = fopen($this->filename,'w');
                //write the data into the file
                fwrite($fp,$json_data);
                fflush($fp);
                fclose($fp);

            }

        public function deleteRecord($key){
            // find if the data is actually exists
            if(count($this->searchRecord($key))==0){
                echo "[-] Record not found to edit";
                return;
            }else{
                // find the actual key of the database
                $key2 = $this->findkey($key);
                // then unset this from the array
                unset($this->records[key2]);
            }
        }

        public function editRecord($key,$data){

            // first check if it is an array
            if(!is_array($data)){
                echo "[-] type mismatch";
                return;
            }
            // check if the data is acually exists which you try to edit
            if(count($this->searchRecord($key))==0){
                echo "[-] Record not found";
            }
            // find the actual key beacause the
            //previous key is the value usinf that we are searching
            $key2 = $this->findkey($key);
            foreach($this->records[$key2] as $i=>$r){
                $this->records[$key2][$i] = $data[$i];
            }

            return $this->records[$key2];
        }

    
    }

    $product = new DBJSON('test.json');
    $product->loadRecords();
    var_dump($product->getRecords());
    $record = array('mango','small','yellow');
    $product->addRecords($record);
    
    // save record have to added after all the addition 
    // beacuse it will replace the whole file
    
    $product->saveRecords();

?>

