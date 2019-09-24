<!DOCTYPE html>
<html>
<head>
	<title>form class</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<center>
	<div class="jumbotron">
		

<div class="card" style="width: 18rem;">
  <img src="" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Basic form GET method</h5>
    <p class="card-text">
    	
		<form method="POST" action="" >
			<label>furst number</label>
			<input type="text" name="fnum"></br>
			<label>Second number</label>
			<input type="text" name="snum">
			<label>operation</label>
			<input type="text" name="operator">


		


    </p>
    <input type="submit" class="btn btn-danger" name="submit" value="submit">
    </form>
  </div>




<script type="text/javascript">
        function show_alert() {
            var msg = "No solution found.";
            alert(msg);
        }
</script>





</div>

		
	</div>
</center>

</body>
</html>

<?php 
	

	// //getting the value

	// // this is how validation work
	// // !empty() is used for checking if there is other value in it

	// if(filter_var($_POST['fnum'],FILTER_VALIDATE_INT) && filter_var($_POST['snum'],FILTER_VALIDATE_INT)){
	
	// 	$value1 = $_POST['fnum'];
	// 	$value2 = $_POST['snum'];
	// 	$value3 = $_POST['operator'];

	// 	if($value3=='+'){
	// 		echo $value1+$value2;
	// 	}
	// }else{
	// 	echo "enter integer value";
//	}
?>

<?php 
	 $number1 = $_POST['value1'];
	 $number2 = $_POST['value2'];
	 $number3 = $_POST['value3'];

	 if(!filter_var($number1,FILTER_VALIDATE_INT) && !filter_var($number2,FILTER_VALIDATE_INT)){

	 	echo "not integet";

	 }


	 // in array function hw
	 // array function
	 // all the function 
	 // scientific calculator
	 // user input validate
	 // test all the value
	 // form validation
	 // registration
	 //login
	 //filter var
	 // !empty();
	 //in_array();


	 



?>






