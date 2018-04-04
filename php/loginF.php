<?php
session_start();
include 'DBConfig.php';
$email = $_POST['email'];
$password =  $_POST['password'];

$sql = "SELECT * FROM `user` WHERE email='$email' and password ='$password'";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
	$loginrow = mysqli_fetch_assoc($result);
	$_SESSION['SESS_LOGGEDIN'] = 1;
	$_SESSION['SESS_USER'] = $loginrow['userID'];
	$_SESSION['SESS_USERNAME'] = $loginrow['username'];
	$_SESSION['SESS_USEREMAIL'] = $loginrow['email'];

	header( "refresh:0.5;url=../index.php" );
	echo ("<script>alert('Logged in successfully!')</script>");
} else {
	header( "refresh:0.5;url=../login.html" );
	echo ("<script>alert('Invalid email or password!')</script>");
}
$conn->close();
?>