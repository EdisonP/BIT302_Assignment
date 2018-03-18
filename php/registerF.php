<?php
include 'DBConfig.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password =  $_POST['password'];
$cspassword = $_POST['cspassword'];

if ($password == $cspassword){
	$sql = "INSERT INTO `user` (`userID`, `username`, `email`, `password`)  VALUES (NULL, '$username', '$email', '$password')";
	mysqli_query($conn, $sql);
	header( "refresh:0.5;url=../index.html" );
	echo ("<script>alert('Signed up successfully!')</script>");
} else {
	header( "refresh:0.5;url=../register.html" );
	echo ("<script>alert('Password does not match with Confirm Password!')</script>");
}
?>
