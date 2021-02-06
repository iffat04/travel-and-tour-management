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
	else echo "connected</br>";
	
	
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	
	$sql = " SELECT * FROM registration WHERE `name`='$name' AND `password`='$password' ";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ($row = $result->fetch_assoc());
	$name=$row['name']; 	
	$usertype=$row['usertype']; 
	$_SESSION["name"] = "$name";
	$_SESSION["usertype"] = "$usertype";
	
	
	if ($_SESSION["usertype"]=="admin"){
header('Location:/bootstrap/admin.php');

}

else {
header('Location:/bootstrap/profile.php');
}
	}
	
	
	else{
	header('Location:/bootstrap/reg.html');
	
	}
	
	/*if( $conn->query($sql) == TRUE ){
		
	}
	else echo "sorry!".$conn->error;;
	
	$result=$conn->query($sql);
	if ($result->num_rows > 0) {
	$_SESSION["name"] = "$name";
	$_SESSION["usertype"] = "$usertype";
		echo "successful";
	} 
else {
    echo "0 results";
}*/
$conn->close();
	
	
	

?>