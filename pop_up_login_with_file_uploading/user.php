<?php
require_once('config.php');
require_once('database.php');

abstract class User{
    public function create_user(){}


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
        $this->image_name = $image_name;
    }

    public function create_user(){
        global $database;
        global $connection;
        // prepare the sql
        $sql = "INSERT INTO {$this->table_name} (name,mobile,uid,image_name) VALUES ('$this->name','$this->mobile',{$this->uid},'$this->image_name')";
        echo $sql;
        $result = $database->query($connection,$sql);
        if($result){
            return true;

        }else{
            return false;
        }

    }
    // this is a static function
    public static function remove_user($uid){
        global $database;
        global $connection;
        $table_name = 'Student';
        $sql = "DELETE FROM Student WHERE `Student`.`uid` = {$uid}";
        var_dump($sql);
        $result = $database->query($connection,$sql);
        var_dump($result);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public static function get_all_user(){
        global $database;
        global $connection;

        $sql = "SELECT * FROM Student";

        $result = $database->query($connection,$sql);
        return $result;
    }


}

//$student = new student('Tanvir','01554313265',100,'my_image');
#$student->create_user();
#Student::remove_user(100);
#$student->get_all_user();

?>