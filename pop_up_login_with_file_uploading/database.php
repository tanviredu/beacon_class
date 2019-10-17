<?php
require_once('config.php');
interface db_adapter{

    public function open_connection($server,$user,$pass,$name);
    public function close_connection($connection);
    public function confirm_query($result);
    public function query($connection,$sql);
    public function fetch_array($result_set);
}

class Database{
    protected $adapter;
    function __construct(db_adapter $adapter){
        $this->adapter = $adapter;

    }
    public function open_connection($server,$user,$pass,$name){
        return $this->adapter->open_connection($server,$user,$pass,$name);
    }
    public function close_connection($connection){
        return $this->adapter->close_connection($connection);
    }
    public function confirm_query($result){
        return $this->adapter->confirm_query($result);
    }
    public function query($connection,$sql){
        return $this->adapter->query($connection,$sql);
    }
    public function fetch_array($result_set){
        return $this->adapter->fetch_array($result_set);
    }

}

class Mysql implements db_adapter{
    public function open_connection($server,$user,$pass,$name){
        return mysqli_connect($server,$user,$pass,$name);
    }
    public function close_connection($connection){
        if(isset($connection)){
            mysqli_close($connection);
            unset($connection);
        }
    }
    public function confirm_query($result){
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    public function query($connection,$sql){
        return mysqli_query($connection,$sql);
    }
    public function fetch_array($result_set){
        return mysqli_fetch_array($result_set);
    }
}
$database = new Database(new Mysql);
$connection = $database->open_connection('localhost','root','','beacon_project_file_upload');

?>