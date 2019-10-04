<?php 
    // different storage adapter will be added here
    // with abastract function

     class Product{

        public $name;
        public $shop;
        public $year;
        public $count;
    }
    
    abstract class FileReader{
        private $filename;
        
        // init with the file name and check if the file is readable
        public function __construct($filename){
            $this->filename = $filename;            
        }
        public function getFilename(){
            return $this->filename;

        }

        public function getData(){
            if(!is_readable($this->getFilename())){
                echo "File is not readable";
            }else{
                // thsi read data function is inside the get data
                return $this->readData($this->getFilename());
            }
        }



        // this is the abstract function
        abstract function readData($filename);
    }

   

    class FileReaderCSV extends FileReader{
        public function readData($filename){
            $fp = fopen($filename,'r');
            $return_type = array();
            while($data = fgetcsv($fp,4096,',')){
            $p = new Product();
            $p->name = $data[0];
            $p->shop = $data[1];
            $p->year = $data[2];
            $p->count = $data[3];
            $return_type[] = $p;    
            }

            return $return_type;
        }
    }



   
   
   
    class FileReaderXML extends FileReader{
               

        public function readData($filename){
            $return_value = array();
            $xml = simplexml_load_file($filename);
            // create the object here for the onle full element 
            // there will be one objetc
            foreach($xml->item as $item){
            $p = new Product();
            $p->name = $item->name;
            $p->shop = $item->shop;
            $p->year = $item->year;
            $p->count = $item->count;

            // assign this object to the return array
            $return_value[] = $p;
            }
            // when all the object is loaded return the whole array
            return $return_value;

            
        }
    }

    $xmlfile = new FileReaderXML('file.xml');
    $array = $xmlfile->getData();
    print_r($array);

    $csvfile = new FileReaderCSV('file.csv');
    $array = $csvfile->getData();
    print_r($array);

?>
