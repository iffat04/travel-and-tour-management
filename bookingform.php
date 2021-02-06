<?php
include('config.php');
session_start();
if(isset($_POST['submitbtn'])){
$name=$_POST['name'];
$pid=$_POST['pid'];
$tid=$_POST['tid'];
$password=$_POST['password'];
$password=md5($password);
$sql="SELECT * FROM `registration` where name='$name' and password='$password'";
$query_run=mysqli_query($conn,$sql);
if(mysqli_num_rows($query_run)==1){
	$sql = "INSERT INTO booking (`name`,`pid`,`tid`,`approve`) VALUES  ('$name','$pid','$tid','0')";
	$query_run=mysqli_query($conn,$sql);
	?>
	<script>alert("Online booking has been successfully done");</script>
	
	<?php

}
else{

	?>
		<script>alert("Wrong id or password");</script>
	<?php

}



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>bookingform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> -->
  
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link href="home.css" rel = "stylesheet" type="text/css" />
 
</head>

<body>
<div class="container-fluid"  style="padding-left: 90px;">
<div id="head" style="background-image:url('../bootstrap/png/trv4.png');background-size:cover;background-repeat:no-repeat;  width:600px; height:188px; border: 3px solid #0c253d;border-radius: 10px;">
</div>
</div>












<nav class="navbar navbar-expand-sm   sticky-top" style="background-color:#0c253d;" >
  <a class="navbar-brand" href="nav.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item" style="margin-left:230px">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Travel Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg.html">Registration</a>
      </li> 
	   <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tours
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="local.php">local</a>
        <a class="dropdown-item" href="#">abroad</a>
      </div>
    </li>
	 <li class="nav-item">
        <a class="nav-link" href="bookingform.php">Online Booking</a>
      </li> 
	   <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item" style="float:right"><a class="nav-link" href="login1.html">Login</a>
    </li>
	</ul>
  </div>  
</nav>

 <div style="background-color:#3b4e6d; padding:20px 5px 5px 20px; width:800px; height:500px; margin-left:300px; margin-bottom:100px; margin-top:100px;">
  <h3>Online Booking</h3>
  <p>Fill this form for online booking </p>
  <form action="" method="POST">
	 <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name">
    </div>
	 <div class="form-group">
        <label for="package_id">package Id</label>
        <input type="text" class="form-control" name="pid" id="pid" placeholder="Package Id">
    </div>
	
	
	 <div class="form-group">
        <label for="tid">TrxId</label>
        <input type="text" class="form-control" name="tid" id="tid" placeholder="TrxId">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
    </div>
	 
    <button type="submit" name="submitbtn"  value="SUBMIT" class="btn btn-primary" >SUBMIT</button>
</form>
</div>
<div>

</body>
</html>


