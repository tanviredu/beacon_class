<?php
require_once('config.php');
require_once('database.php');

abstract class User{
    public function create_user(){}
    public function remove_user(){}
    public function get_all_user(){}

}

class student extends User{

    protected $name;
    protected $mobile;
    protected $table_name = "Student";
    protected $uid;
    protected $image_name;

    public function __construct($name,$mobile,$uid,$image_name){
        $this->name = $name;
        $this->mobile = $mobile;
        $this->uid = $uid;
        $this->$image_name = $image_name;
    }

    public function create_user(){
        global $connection;
        // prepare the sql
        $sql = "INSERT INTO {$this->table_name} (name,mobile,uid,image_name) VALUES ('$this->name','$this->mobile',{$this->uid},'$this->image_name')";
        var_dump($sql);
        $result = $connection->query($connection,$sql);
        if($result){
            return true;

        }else{
            return false;
        }

    }

    public function remove_user($uid){
        global $connection;
        $sql = "DELETE * FROM '$this->table_name' WHERE uid={$uid}";
        $result = $connection->query($connection,$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function get_all_user(){
        global $connection;
        $sql = "SELECT * FROM '$this->table_name'";
        $result = $connection->query($connection,$sql);
    }


}

$student = new student('Tanvir','01554313265',100,'my_image');
$student->create_user();