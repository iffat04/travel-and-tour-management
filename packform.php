<?php

	$host = "localhost";
	$admin="root";
	$pass = "";
	$db="toursite";
	
	$conn = mysqli_connect( $host,$admin, $pass,$db);
	if( $conn->connect_error ) echo "connect error</br>";
	else echo "connected</br>";
	
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
		echo "success";
	}
	else{
		echo "failed";
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