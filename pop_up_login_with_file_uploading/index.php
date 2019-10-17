<html>
<head>
    <title>
        form with image uploading
    </title>
    <!-- bootstrap goes here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<style>
    img {width:100%;}
</style>
<center>
    <div class='jumbotron jumbotron-fluid'>
        <h1 class="display-3">Student Database Form </h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
</center>
<div class="colorlib">
    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-primary text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                            <h2 class="py-3">Student Database</h2>
                            <p>Enter your information</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4">Please fill with your details</h4>
                    <form mathod="POST" action="" enctype="multipart/form-data"" >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Full Name" name="name" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name='email' id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="mobile" placeholder="Mobile No." class="form-control"  type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="dname" placeholder="Department name." class="form-control"  type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="id" placeholder="student id " class="form-control"  type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="Mobile No."  placeholder="Upload image" name='image'   type="file">
                            <label><b>Upload your image</b></label>
                        </div>

                    </div>


                    <div class="form-row" >
                        <input type="submit" style="margin-left:200px; width:300px" name='submit' value='submit' class="btn btn-danger">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <center>
        <button class="btn">
            <a href="second.php">Go To Database </a><span class="badge badge-primary"></span>
        </button>

    </center>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
<?php
 //first make a whole form
require_once('input.php');
//require_once('function.php');
?>
<?php
$inp->input_data();
?>