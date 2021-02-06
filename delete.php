<?php
session_start();
?>


<?php

	$host = "localhost";
	$admin="root";
	$pass = "";
	$db="toursite";
	
	$conn = mysqli_connect( $host,$admin, $pass,$db);
	if( $conn->connect_error ) echo "connect error</br>";
	//else echo "connected</br>";
	
	if(isset($_POST['submitbtn'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	if(!empty($id) and !empty($name)){
	
	$sql="DELETE FROM `package` WHERE package_id='$id'";
	$query_run=mysqli_query($conn,$sql);
	if($query_run){
		//echo "success";
		header('Location:admin.php');
	}
	else{
		?>
		
		<script>alert("Something went wrong")</script>
		<?php
	}
	
	/*
	$sql = "INSERT INTO package(`package_id`,`title`,`description`,`cost`,`image`) VALUES  ('$id','$name','$des','$cost','$image' )";
	if($conn->query($sql)===FALSE) echo $conn->error;
	
	
	*/
	
	}
	else{
	?>
	<script>alert("please fill up everything");</script>
	
	<?php
	
	}
	
	
	}
	
?> 




<!DOCTYPE html>
<html lang="en">
<head>

 <title>Delete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px; margin:auto;">
<div class="container-fluid"  style="background-color:white;  padding-left: 190px;">
<div id="head" style="background-image:url('../bootstrap/png/clouds.jpg'); width:85%; height:188px; border: 0px solid gray;padding: 0px 10px 0px 0px;border-radius: 10px;">
<div id="logo" style="height:188px; width:500px; border: 0px solid gray; border-radius: 10px; padding: 100px 10px 10px 10px; "><h1>Admin Panel</h1> </div>
  </div>
</div>
<div style="padding:100px 200px 200px 200px">
<div style="border:5px solid gray; margin:auto; width:50%; height:300px; padding:10px 20px 20px 20px;" >

  <h2>Which package do You want to delete?</h2>
  <form action="" method="POST"  enctype="multipart/form-data">
    
      <label for="pid">package Id</label>
      <input type="text" class="form-control" name="id" id="pid">
    
    <div class="form-group">
      <label for="title">package name:</label>
      <input type="text" class="form-control" name="name" id="title">
    </div>
	<input type="submit" name="submitbtn" value="SUBMIT" />
  </form>
  </div>
  </div>
</body>
</html>



