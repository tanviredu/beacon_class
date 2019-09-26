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
    	
		<form method="GET" action="" >
			<label>Student name</label>
			<input type="text" name="student_name"></br>
			<label>Student id</label>
			<input type="text" name="student_id">
			<label>Student password</label>
			<input type="password" name="student_password">


		


    </p>
    <input type="submit" class="btn btn-danger" name="submit" value="submit">
    </form>
  </div>









</div>



<?php 

	var_dump($_GET);

?>






		
	</div>
</center>

</body>
</html>