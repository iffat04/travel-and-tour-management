<!DOCTYPE html>
<html lang="en">
<head>
  <title>old home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body style="height:1500px">

<div class="container-fluid">
  <br>
  <h3>Sticky Navbar</h3>
  <p>A sticky navigation bar stays fixed at the top of the page when you scroll past it.</p>
  <p>Scroll this page to see the effect. <strong>Note:</strong> sticky-top does not work in IE11 and earlier.</p>
</div>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">Logo</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
</nav>

<div class="container-fluid"><br>
 
 <?php
	
	$host = "localhost";
	$admin="root";
	$pass = "";
	$db="toursite";
	
	$conn = mysqli_connect( $host,$admin, $pass,$db);
	if( $conn->connect_error ) echo "connect error</br>";
	else echo "connected</br>";
	
	$sql = " SELECT * FROM blog";
	$result = $conn->query($sql);
	while( $row = $result->fetch_assoc() ){
		echo $row['name']."</br>";
		echo $row['date']."</br>";
	}
 
 ?>
 
 
</div>

</body>
</html>


