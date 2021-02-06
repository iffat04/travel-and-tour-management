<?php

	$host = "localhost";
	$admin="root";
	$pass = "";
	$db="toursite";
	
	$conn = mysqli_connect( $host,$admin, $pass,$db);
	if( $conn->connect_error ) echo "connect error</br>";
	else echo "connected</br>";
	
	$name=$_POST['name'];
	$date=$_POST['date'];
	$title=$_POST['title'];
	$des=$_POST['des'];
	echo $des;
	
	$sql = "INSERT INTO blog(`name`,`date`,`title`,`description`) VALUES  ('$name','$date','$title','$des' )";
	if($conn->query($sql)===FALSE) echo $conn->error;
	

?>