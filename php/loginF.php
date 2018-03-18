<?php
include 'DBConfig.php';
$email = $_POST['email'];
$password =  $_POST['password'];

$sql = "SELECT * FROM `user` WHERE email='$email' and password ='$password'";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
	header( "refresh:0.5;url=../index.html" );
	echo ("<script>alert('Logged in successfully!')</script>");
} else {
	header( "refresh:0.5;url=../login.html" );
	echo ("<script>alert('Invalid email or password!')</script>");
}
$conn->close();
?>