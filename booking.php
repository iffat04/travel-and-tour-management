<?php
session_start();
?>


<?php
	include('config.php');
	if( $conn->connect_error ) echo "connect error</br>";
	else echo "connected</br>";
	
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	
	
	$sql = " SELECT * FROM registration WHERE `name`='$name' AND `password`='$password' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
	
	
	$name=$_POST['name'];
	$pid=$_POST['pid'];
	$tid=$_POST['tid'];
	
	
	$sql = "INSERT INTO booking(`name`,`pid`,`tid`) VALUES  ('$name','$pid','$tid')";
	if($conn->query($sql)===FALSE) echo $conn->error;
	}
	
	else{
	?>
	<script>alert("NOT sub");</script>
	<?php
	}
	
	
	
	
	
	
	
?>