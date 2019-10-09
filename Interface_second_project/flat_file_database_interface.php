<?php 
	// interface application for diffeent 
	// file operation

	interface FileReader{
		public function read($filename);
	}


	class Read{

		protected $filehandler;

		function __construct(FileReader $filereader){
			$this->filereader = $filereader;
		}

		public function read($filename){
			return $this->filereader->read($filename);
		}
	}

	class XML_Reader implements FileReader{

		public function read($filename){

				$return_value = array();
				$xml = simplexml_load_file($filename);
				//loop through it	
				foreach($xml->item as $item){
					print_r($item);
				}
			
		}
	}

	class CSV_Reader implements FileReader{
		public function read($filename){
			$fp = fopen($filename, 'r');
			$return_value = array();
			while($data = fgetcsv($fp)){
				print_r($data);
			}

		}
	}


$r = new Read(new XML_Reader);
$r->read('file.xml');

$rc = new Read(new CSV_Reader);
$rc->read('file.csv');


?>