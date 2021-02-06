<?php
	$name=$_POST['name'];
	$user='user';
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	
	function simplify( $str ){
	$str=trim($str);
	$str=stripslashes($str);
	$str=htmlspecialchars($str);
	return $str;
	}
	
	$name=simplify($name);
	$email=simplify($email);
	$phone=simplify($phone);
	$password=simplify($password);
	$cpassword=simplify($cpassword);
	
	//validatin
	$namek=0;
	$emailk=0;
	$phonek=0;
	$passk=0;
	//email validation
	if(empty($email))echo "empty field</br>";
	else{
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) echo "invalid email"; else $emailk=1;
	}
	// name validation
	if(empty($name)) echo "name required</br>";
	else
	{
	if(preg_match("/[^a-zA-Z ]/",$name)) echo"</br>wrng";
	else $namek=1;
	echo "</br>";
	}
	
	// phoneno validation
	if(empty($phone)) echo "number required</br>";
	else
	{
	if(preg_match("/[^0-9 ]/",$phone)) echo"</br>wrong";
	else $phonek=1;
	echo "</br>";
	}
	
	
	//pass valid
	if(empty($password)|| empty($cpassword)) echo "empty passwrd</br>";
	else{
	if($password!=$cpassword) echo"passwrd mismatch</br>";
	else
	$passk=1;
	}
	if($namek==1 && $emailk==1 && $phonek==1 && $passk==1)
	{
	//cnnect sql
	$userid="root";
	$sqlpass="";
	$server="localhost";
	$db="toursite";
	
	$conn= new mysqli($server,$userid,$sqlpass,$db);
	}
	if($conn->connect_error) die("conn failed:".$conn->connect_error);
	else echo "connected</br>";
	$password=md5($cpassword);
	$sql_cmnd="INSERT INTO registration VALUES ('$name', '$email', '$phone', '$password', '$user')";
	if($conn->query($sql_cmnd)=== TRUE){
	header('Location:/bootstrap/nav.php');
	?>
	<script>alert("Successfully created acount");  </script>
	<?php
	}
	else echo "not inserted</br>".$conn->error;
	
	
	
	
	
	
	
	
	?>
	