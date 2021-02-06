
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
	$des=$_POST['des'];
	$cost=$_POST['cost'];
	$imagename=$_FILES["myimage"]["tmp_name"];
    $imagename=addslashes(file_get_contents($imagename));
	//$image=$_POST[''];
	if(!empty($id) and !empty($name) and !empty($des) and !empty($cost)){
	
	$sql="INSERT INTO `package`(`package_id`, `title`, `description`, `cost`, `image`) VALUES ('$id','$name','$des','$cost','$imagename')";
	$query_run=mysqli_query($conn,$sql);
	if($query_run){
		//echo "success";
		header('Location:packform1.php');
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

 <title>package form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>packages</h2>
  <form action="" method="POST"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="pid">package Id</label>
      <input type="text" class="form-control" name="id" id="pid">
    </div>
    <div class="form-group">
      <label for="title">package name:</label>
      <input type="text" class="form-control" name="name" id="title">
    </div>
	
	<div class="form-group">
  <label for="des">Description</label>
  <textarea class="form-control" rows="5" id="des" name="des"></textarea>
</div>

	<div class="form-group">
      <label for="cost">Package cost:</label>
      <input type="text" class="form-control" name="cost" id="cost">
    </div>
		<div class="form-group">
      <label for="image">Image</label>
      <input type="file"  name="myimage">
    </div>
	<input type="submit" name="submitbtn" value="SUBMIT" />
  </form>
</div>
<div style="background-color:white; padding:5px 5px 5px 5px; width:800px; height:100px; margin-left:200px; margin-bottom:100px; margin-top:15px;">
<a href="admin.php"> back to admin page</a>
</div>

</body>
</html>
