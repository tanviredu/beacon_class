<?php
require_once('config.php');
require_once('database.php');
require_once('user.php');
require_once('input.php');
?>
<html>
<head>
    <title>
        form with image uploading
    </title>
    <!-- bootstrap goes here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<center>
    <div class='jumbotron jumbotron-fluid'>
        <h1 class="display-3">Student Database </h1>
    </div>
</center>

<table class="table table-bordered">
    <thead>
    <tr>

        <th scope="col">Name</th>
        <th scope="col">Mobile</th>
        <th scope="col">Uid</th>
        <th scope="col">Image</th>

    </tr>
    </thead>
    <tbody>
    <tr>



        <?php
        $result_set=Student::get_all_user();
        while ($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
        {


            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td>".$row['uid']."</td>";
            echo "<td>"."<img src='img/".$row['image_name']."'>"."</td>";
            echo"</tr>";
        }
        ?>


    </tbody>
</table>










</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>