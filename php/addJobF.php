<?php
include 'DBConfig.php';
$jobClientName = $_POST['clientName'];
$jobName = $_POST['jobName'];
$jobDetails =  $_POST['jobDetails'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$sql = "INSERT INTO `jobs` (`jobID`, `jobClientName`, `jobName`, `jobDetails`, `address`, `salary`, `jobStatus`)  VALUES (NULL, '$jobClientName', '$jobName', '$jobDetails', '$address', '$salary', "Not taken")";
mysqli_query($conn, $sql);
header( "refresh:0.5;url=../jobs.html" );
echo ("<script>alert('Added new job successfully!')</script>");
?>