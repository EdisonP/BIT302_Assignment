<?php
session_start();
if (isset($_POST['register'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registernlogin";
	$con = new mysqli($servername, $username, $password, $dbname);
	
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];

	if($name != '' && $pwd != ''){
		$select = "SELECT * FROM registernlogin WHERE username='$name'";
		$selectR = mysqli_query($con,$select);
		
		if (mysqli_num_rows($selectR) == 0){
			$_SESSION['name2'] = $name;
			$sql = "INSERT INTO registernlogin(username,password) VALUES ('$name','$pwd')";
			mysqli_query($con,$sql);
			header('location:registerNlogin2.php');
		}
		else{
			echo "You entered username '$name' is already existed.";			
		}
	}
	else{
		echo "Enter both username and password";
	}
}

if (isset($_POST['login'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registernlogin";
	$con = new mysqli($servername, $username, $password, $dbname);
	
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	
	if($name != '' && $pwd != ''){
		$sql = "SELECT * FROM registernlogin WHERE username='$name' and password='$pwd'";
		$result = mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result) > 0){
			$_SESSION['name'] = $name;
			header('location:registerNlogin2.php');
		}
		else{
			echo 'You entered username or password is incorrect';		
		}
	}
	else{
		echo "Enter both username and password";
	}
}
?>