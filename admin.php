<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<<!--<link href="home.css" rel = "stylesheet" type="text/css" />-->
 
</head>

<body style="height:1500px; margin:auto;">
<div class="container-fluid"  style="background-color:white;  padding-left: 190px;">
<div id="head" style="background-image:url('../bootstrap/png/clouds.jpg'); width:85%; height:188px; border: 0px solid gray;padding: 0px 10px 0px 0px;border-radius: 10px;">
<div id="logo" style="height:188px; width:500px; border: 0px solid gray; border-radius: 10px; padding: 100px 10px 10px 10px; "><h1>Admin Panel</h1> </div>
  </div>
</div>










<nav class="navbar navbar-expand-sm   navbar-dark sticky-top" style="background-color:gray;" >
  <a class="navbar-brand" href="nav.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
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
        <a class="nav-link" href="bookingform.html">Online Booking</a>
      </li> 
	   <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item" style="float:right"><a class="nav-link" href="logout.php">Log-out</a>
    </li>
	</ul>
  </div>  
</nav>
<br>



  
</div>

<div class="jumbotron">
  <h1>Add new package</h1> 
  <a href="packform1.php"  class="btn btn-primary">Add</a>
</div>
<div class="jumbotron">
  <h1>Delete existing  offer??</h1> 
  <a href="delete.php"  class="btn btn-primary">Delete</a>
</div>

<div style="padding:100px 400px 10px 100px">
<div style="border:2px solid gray; padding:5px 0px 5px 10px; margin-left:10px";>
<?php
echo "<h1>Approval option</h1>"; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toursite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 if(isset($_POST['appr'])){
		
		$name =$_POST['name'];
		$pid =$_POST['pid'];
		$tid = $_POST['tid'];
		$sql = "UPDATE booking SET approve=1 WHERE name = '$name' AND pid ='$pid' AND tid = '$tid'"; 
		$conn->query($sql);
  }

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
		$name=$row['name'];
		$pid=$row['pid'];
		$tid=$row['tid']; 
		$approve=$row['approve'];
  
echo "<form class=\"form-inline\" action=\"admin.php\" method=\"POST\">";
	 
        echo "<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"".$name."\" >";
		 echo "<input type=\"text\" class=\"form-control\" name=\"pid\" id=\"pid\" value=\"".$pid."\" >";
		  echo "<input type=\"text\" class=\"form-control\" name=\"tid\" id=\"tid\" value=\"".$tid."\" >";
		  if($approve == 1)
		   echo "<button type=\"submit\" class=\"btn btn-success\">Approved</button>";
			else
			
		   echo "<button type=\"submit\" class=\"btn btn-warning\" name=\"appr\" value=\"yoyo\">Approve</button>";
			
 echo "</form>";
  
  }
  }
  
  
 
  
?>
</div>
</div>
</body>
</html>


