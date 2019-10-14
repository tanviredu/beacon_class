<?php
// interface programming
interface DATABASEHANDLER {
    public function connect($host,$user,$password,$database);
    public function query($conn,$sql);
    public function fetch_row($result);
    public function fetch_assoc($result);
    public function fetch_all($result);
    public function num_rows();


}

class OPERATION{
    private $databasehandler;
    function __construct(DATABASEHANDLER $databasehandler){
        $this->databasehandler = $databasehandler;
    }
    public function connect($host,$user,$password,$database){
        return $this->databasehandler->connect($host,$user,$password,$database);
    }
    public function query($conn,$sql){
        return $this->databasehandler->query($conn,$sql);
    }
    public function fetch_row($result){
        return $this->databasehandler->fetch_row($result);
    }

    public function fetch_assoc($result){
        return $this->databasehandler->fetch_assoc($result);
    }
    public function fetch_all($result){
        return $this->databasehandler->fetch_all($result);
    }

    public function num_rows($result){
        return $this->databasehandler->num_rows($result);
    }



    

}

class POSTGRESQL implements DATABASEHANDLER{
    public function connect($host,$user,$password,$database){
        $connection_string = "host={$host} dbname={$database} user={$user} password={$password}";
        $conn = pg_connect($connection_string);
        return $conn;

    }
    public function query($conn,$sql){
        return pg_query($conn,$sql);

    }

    public function fetch_row($result){
        return pg_fetch_row($result);
    }
    public function fetch_assoc($result){
        return pg_fetch_row($result);
    }
    public function fetch_all($result){
        return pg_fetch_all($result);
    }
    public function num_rows($result){
        return pg_num_rows($result);
    }
    
}


class mysql implements DATABASEHANDLER{

    public function connect($host,$user,$password,$database){
        $conn = mysqli_connect($host,$user,$password,$database);
        return $conn;

    }
    public function query($conn,$sql){
        return mysqli_query($conn,$sql);
    }
    public function fetch_row($result){
        return mysqli_fetch_row($result);
    }
    public function fetch_assoc($result){
        return mysqli_fetch_assoc($result);
    }
    public function fetch_all($result){
        return mysqli_fetch_all($result);
    }
    public function num_rows($result){
        return mysqli_num_rows($result);
    }

}
//$ps = new OPERATION(new POSTGRESQL);
//$conn1 = $ps->connect('localhost','postgres','1122','CRUD');
#-------------------------------------------------------------


//$result1 = $ps->query($conn1,"SELECT * FROM patient");
//var_dump($result1);
//$row1 = $ps->fetch_row($result1);
//$row1 = $ps->fetch_assoc($result1);
//$row1 = pg_fetch_all($result1);
//var_dump($row1);
#--------------------------------------------------------------

//$my = new OPERATION(new mysql);
//$conn2 = $my->connect('localhost','root','1122','medical_admin2');
#----------------------------------------------------------------


//$result2 = $my->query($conn2,"SELECT * FROM user");
//$row2 = $my->fetch_row($result2);
//$row2 = $my->fetch_assoc($result2);
//$row2 = mysqli_fetch_all($result2);
//$row2 = $my->fetch_all($result2);
//var_dump($row2);
#------------------------------------------------------------------

?>

