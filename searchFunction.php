<?php
	if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
	if(preg_match("^/[A-Z | a-z]+/", $_POST['name'])){
	$name=$_POST['name'];
	//connect to the database
	$db=mysql_connect("localhost", "root", "");
	//select database
	$mydb=mysql_select_db("jucommunity");
	//query the database table
	$sql="SELECT * FROM jobs WHERE jobName LIKE '%" . $name . "%'";
	//run the query against the mysql query function
	$result=mysql_query($sql);
	//create while loop and loop through result set
	while($row=mysql_fetch_array($result)){
		$jobName = $row['jobName'];
	//display the result of the array
	echo "<ul>\n";
	echo "<li>" . "<a href=\"searchFunction.php?id=$jobID\">" .$jobName . "" . $jobDetails . "" . $jobClientName . "" . $address . "" . $salary . "</a></li>\n";
	echo "</ul>";
	}
	}
	else{
	echo "<p>Please enter a search query</p>";
	}
	}
	}
?>