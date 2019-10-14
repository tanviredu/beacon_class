<?php
    require_once ('config.php');
    require_once ('database.php');
    require_once ('user.php');

    class Input{

        public function input_data(){
            if(isset($_POST['submit'])){
                // fetch all the data
                // define the upload flder
                $upload_folder = "img/";
                $name = $_POST['name'];
                $mobile = $_POST['mobile'];
                $uid = $_POST['id'];


                // image have one tmp name and one real name
                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $destination =$upload_folder.$img_name;

                //echo $name." ".$mobile." ".$uid." ".$img_name." ".$tmp_name." ".$destination;
                move_uploaded_file($tmp_name,$destination);

                // create a user object and add to the record
                $student = new student($name,$mobile,$uid,$img_name);
                $student->create_user();
                echo "<script>alert('Data added successfully');</script>";


            }

        }
    }
    $inp= new Input();

?>