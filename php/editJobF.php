<?php
include 'DBConfig.php';
$jobID = $_POST['jobID'];
$jobClientID = $_POST['userID'];
$jobName = $_POST['jobName'];
$jobDetails =  $_POST['jobDetails'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$sql = "UPDATE jobs SET `jobName` = '$jobName', `jobDetails` = '$jobDetails', `address` = '$address', `salary` = '$salary' WHERE `jobClientID` = '$jobClientID' AND `jobID` = '$jobID'";
mysqli_query($conn, $sql);
header( "refresh:0.5;url=../editUserJobs.php" );
echo ("<script>alert('Edited job successfully!')</script>");
?>