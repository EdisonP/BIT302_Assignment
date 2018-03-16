<?php
session_start();
include 'DBConfig.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST['username'];
$email = $_POST['email'];
$password =  $_POST['password'];

$sql = "INSERT INTO user (`ID`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
	echo "<script>
	alert('Signed up successfully');
	window.location.href='../index.html';
	</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>