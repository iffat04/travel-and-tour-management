<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
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



<div class="container">
<div>

<h2 style="margin-bottom:50px;">Available packages</h2>
<?php
$host = "localhost";
	$admin="root";
	$pass = "";
	$db="toursite";
	
	$conn = mysqli_connect( $host,$admin, $pass,$db);
	if( $conn->connect_error ) echo "connect error</br>";
	else //echo "connected</br>";
	$sql="SELECT * FROM `package`";
	$query_run=mysqli_query($conn,$sql);
	if(mysqli_num_rows($query_run) > 0){
		while($row=mysqli_fetch_assoc($query_run)){
		$packagenm=$row['title'];
		$id=$row['package_id'];
		//$image=$row['image'];
		$des=$row['description'];
		$cost=$row['cost']; 
		?>
		
		
		<div style="width:1000px ; height:454px; margin:auto; border:2px solid black;">
		<div style="width:450px ; height:450px;margin:auto; padding:15px; 
		float:left; color:#1b1b1c;font-weight:bold;background-color:#8eb3e2">
		<table >
		<tr><td></td>
		<td><label style=" font-size:18px;">Pacakage Name:</label></td>
		</tr>
		
		
		<tr><td> <a href="bookingform.php"> Online booking </a> </td></tr>
		
		
		
		<tr><td></td>
		<td><?php echo "<p style=\"font-size:20px; font-style: italic;text-transform:capitalize;
		text-shadow:2px 3px 3px #333;\">  ".$packagenm."</p>"; ?></td>
		</tr>
		<tr height="25px";><td>                  </td></tr>
		
		
		<tr>
		<td><label style=" font-size:18px;">ID</label></td>
		<td><?php echo $id; ?></td>
		</tr>
		<tr><td>                  </td></tr>
		<tr><td>                  </td></tr>
		<tr>
		<td><label style=" font-size:18px;">Cost</label></td>
		<td><?php echo $cost; ?></td>
		</tr>
		<tr><td>                  </td></tr>
		<tr><td>                  </td></tr>
		<tr>
		<td><label style=" font-size:18px;">Description:</label></td>
		<td><?php echo $des; ?></td></tr>
		</table>
		</div>
		
		<div style="width:390px ; height:450px; margin:auto; float:right; margin-left:85px;">
		<?php echo '<embed src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="450" width="390" class="img-thumnail">';?>
		</div>
		
		
		</div>
		<div style="width:1000px ; height:200px;margin:auto;">
		
		</div>
		<?php
		
		}
	
	}






?>

</div>  

  </div>
  
  


</body>
</html>


