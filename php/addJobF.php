<?php
include 'DBConfig.php';
$jobClientID = $_POST['userID'];
$clientName = $_POST['clientName'];
$jobName = $_POST['jobName'];
$jobDetails =  $_POST['jobDetails'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$jobStatus = FALSE;

$sql = "INSERT INTO `jobs` (`jobID`,`jobClientName`, `jobClientID`, `jobName`, `jobDetails`, `address`, `salary`, `jobStatus`)  VALUES (NULL, '$clientName', '$jobClientID', '$jobName', '$jobDetails', '$address', '$salary', '$jobStatus')";
mysqli_query($conn, $sql);
header( "refresh:0.5;url=../jobs.html" );
echo ("<script>alert('Added new job successfully!')</script>");
?>