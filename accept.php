<?php
if(isset($_POST['ApproveSelected'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "jucommunity";
	$con = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "SELECT * FROM jobapplication";
	$cincai = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($cincai)){
		$appid = $row['jobAppID'];
		$newS = $_POST['a'.$appid];
		$sql2 = "UPDATE jobapplication SET status = '$newS' WHERE jobAppID = '$appid'";
		mysqli_query($con,$sql2);
		header("location:acceptJobs.php");
	}
	
}
?>