<?php
include 'DBConfig.php';
$jobID = $_POST['jobID'];


$sqlCheck = "SELECT * FROM `jobs` WHERE `jobID`=$jobID";
$check = mysqli_query($conn, $sqlCheck);
if ($check->num_rows > 0) {
	$sql = "DELETE FROM jobs WHERE `jobID`=$jobID";
	mysqli_query($conn, $sql);
	header( "refresh:0.5;url=../jobs.html" );
	echo ("<script>alert('Removed job successfully!')</script>");
} else {
	header( "refresh:0.5;url=../deleteJobs.html" );
	echo ("<script>alert('Invalid job ID!')</script>");
} 

$conn->close();
?>