<?php 

// anon function is called lambda function
// and this function has no name



$adder = function($x,$y): int{
    return $x+$y;
};

    $ans=$adder(1,2);
    echo $ans;
?>

<?php 
    // make a total mysql database operation with anon function

    $connect = function($host,$user,$password,$database): object{
        return mysqli_connect($host,$user,$password,$database);
    };

    $query = function($conn,$query): object{
        return mysqli_query($conn,$query);
    };

    $get_all = function($query_obj): array{
        return mysqli_fetch_all($query_obj);
    };

    $print_all = function($data_array){
        foreach($data_array as $data){
            print_r($data);
        }
    };

    $conn = $connect('localhost','root','1122','medical_admin2');
    //var_dump($conn);
    $query_obj = $query($conn,"SELECT * FROM doctor");
    //var_dump($query_obj);
    $data  = $get_all($query_obj);
    $print_all($data);
    

    // this is how anon function works
    
?>