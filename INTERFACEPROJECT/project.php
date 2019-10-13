<?php 

interface FIleIO{

	// this function have to be implemented

	public function create($filename,$content);
	public function read($filename);
	public function update($filename,$content);
	public function delete($filename);
}


class CRUDOperation{

	protected $ioprovider;

	public function __construct(FIleIO $ioprovider){
		$this->ioprovider = $ioprovider;
	}

	public function create($filename,$content){
		// dependency injection
		return $this->ioprovider->create($filename,$content);


	}
	public function read($filename){
		// dependency injection
		return $this->ioprovider->read($filename);

	}
	public function update($filename,$content){
		// dependency injection
		return $this->ioprovider->update($filename,$content);

	}
	public function delete($filename){
		// dependency injection
		return $this->ioprovider->delete($filename);


	}

}

class Local implements FIleIO{

	public function create($filename,$content){
		// create the file
		$file = fopen($filename, "w") or die("Unable to open file");
		// write the file
		fwrite($file, $content);
		fclose($file);

	}
	public function read($filename){
		$file = fopen($filename,'r') or die("unable to open a file");
		echo fread($file, filesize($filename));
		fclose($file);

		
	}
	public function update($filename,$content){
		// create the file
		$file = fopen($filename, "w") or die("Unable to open file");
		// write the file
		fwrite($file, $content);
		fclose($file);
		
	}
	public function delete($filename){
		if(!unlink($filename)){
			echo "not deleted";
		}else{
			echo "file deleted";
		}
	}

}


class Drive implements FIleIO{

}





$op = new CRUDOperation(new Local);
//$op->create("hello.txt",'my name is tanvir'); 
//$op->read('file.txt');
//$op->delete('file.txt');
	

?>