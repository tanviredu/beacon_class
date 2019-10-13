<?php 
// interface implementation of the database adapter

interface DatabaseAdapter{
    
    // this 5 connection have to be implemented
    // in mysql and postgresql
    public function connect($host,$user,$password,$database);
    public function query($conn,$sql);


}

class CRUD{

    private $database_handler;

    function __construct(DatabaseAdapter $database_handler){
        $this->database_handler = $database_handler;
    }

    public function connect($host,$user,$password,$database){
        return $this->database_handler->connect($host,$user,$password,$database);
    }

    public function query($conn,$sql){
        return $this->database_handler->query($conn,$sql);
    }
}



class Mysqlhandler implements DatabaseAdapter{

    public function connect($host,$user,$password,$database){
        $conn = mysqli_connect($host,$user,$password,$database);
        if(!$conn){
            return false;
        }else{
            return $conn;
        }
    }
    
    public function query($conn,$sql){

        $result = mysqli_query($conn,$sql);
        if(!$result){
            return false;
        }else{
            return $result;
        }
    }


}


class Postgreshandler implements DatabaseAdapter{

    public function connect($host,$user,$password,$database){
        $connection_string = "host={$host} dbname={$database} user={$user} password={$password}";
        $conn = pg_connect($connection_string);
        return $conn;

        }
    
    public function query($conn,$sql){

        $result = pg_query($conn,$sql);
        if(!$result){
            return false;
        }else{
            return $result;
        }
    }


}












$my = new CRUD(new Mysqlhandler);
$conn= $my->connect('localhost','root','1122','medical_admin2');
var_dump($conn);
$ans1 = $my->query($conn,'SELECT * FROM user;');
var_dump($ans1);
$my = new CRUD(new Postgreshandler);
$conn= $my->connect('localhost','postgres','1122','CRUD');
var_dump($conn);
$ans2 = $my->query($conn,"SELECT * FROM patient");
var_dump($ans2);



// AIzaSyAXrLgmBTjyNnztTDSVN4RICz4VNvy6DRA
?>