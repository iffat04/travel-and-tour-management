<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>profile</title>
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
  <link href="home2.css" rel = "stylesheet" type="text/css" />
 
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
      <li class="nav-item" style="float:right"><a class="nav-link" href="logout.php">Log-out</a>
    </li>
	</ul>
  </div>  
</nav>


 <div style="background-image:url('../bootstrap/png/cover.jpeg');  background-color:#ce9cca; border:0px solid gray; border-radius:10px; padding:20px 5px 20px 20px; width:1100px; height:700px; margin-left:110px; margin-bottom:100px; margin-top:100px;">
  <?php
  include('config.php');
  $name=$_SESSION['name'];
  $sql="SELECT * FROM booking where name='$name' and approve='1'";
  $query_run=mysqli_query($conn,$sql);
  
   echo "<div class=\"container\">";
    echo "<div id = \"dvprofile\" style=\"background-color:#ce9e94; width:500px; border: 1px solid gray; padding:15px;border-radius: 10px;\" >";
  echo "<h1>Welcome</h1>";
  echo "<h2>".($_SESSION['name'])."</h2>";
  while($result=mysqli_fetch_assoc($query_run)){
  $pid=$result['pid'];
  $sql1="SELECT * FROM `package` where package_id='$pid'";
  $query_run1=mysqli_query($conn,$sql1);
  while($row=mysqli_fetch_assoc($query_run1)){
	?>
	<br>
	<br>
	<h5>Your current pacakage is:<h5><p> <?php echo $row['title']."<br>"; ?></p>
	<?php
  }
  
  }
  
 echo "</div>";
  echo "</div>";
?>






  
</div>
</body>
</html>


