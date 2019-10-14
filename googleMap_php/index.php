<?php 
    // single page app for php to find localtion


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <center>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        
            <h1 class="display-3">Location Finder </h1>
        </div>
    </div>

    <div class="card" style="width: 70rem;">

  <div class="card-body">
    <div class="card-title">
    
    <h1 class="display-3">Emter your Location </h1>
    </div>
    
  </div>
    <form action="" method="POST">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label>Enter Location </label>
                <input type="text" class="form-control" name="location" id="location" placeholder="Enter any area number" >
            </li>
            <li class="list-group-item">
                <label>Enter City </label>
                <input type="text" class="form-control" name="city" id="city"  placeholder="Enter city">
            </li>
            <li class="list-group-item">
                
                <input class="btn btn-primary btn-lg btn-block"  type="submit" name="submit" value="find" >
            </li>
    
        </ul>
    </form>

<?php $data = $_POST['location'];
   $data= explode(' ',$data);
   $city = $_POST['city'];
?>

</div>
<div class="card-img-top" alt="map" style="">
    <div class="mapouter"><div class="gmap_canvas">
        <iframe width="600" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $data[0];?>%20<?php echo $data[1];?>%20<?php echo $city;?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor discount code</a>
</div>
    <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
</style>

</div>
  </div>
    
    
  
  
</div>
</center>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  </body>


</html>



