<?php
include 'DBConfig.php';
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
?>
