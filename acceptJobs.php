<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Search Results</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"></link>
</head>
<body>

	<!-- Header -->
	<header id="header">
		<a href="index.html" class="logo"><strong>Jinjang Utara</strong> Community</a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>

	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.html">Home</a></li>
			<li><a href="login.html">Login</a></li>
			<li><a href="register.html">Registration</a></li>
			<li><a href="information.html">Information</a></li>
			<li><a href="news.html">News/Past Events</a></li>
			<li><a href="help.html">Help Us</a></li>
			<li><a href="donations.html">Donation</a></li>
			<li><a href="jobs.html">Jobs</a></li>
			<li><a href="contact.html">About Us</a></li>
		</ul>
	</nav>

	<!-- Main -->
	<section id="main">
		<div class="inner">
			<h1>Requested Jobs</h1>
			
			<?php 
			$con = mysqli_connect("localhost","root","","jucommunity");
			$result = mysqli_query($con,"SELECT * FROM jobapplication");
			echo "<table border='1'>
				<tr>
				<th>Job App ID</th>
				<th>User ID</th>
				<th>Job ID</th>
				<th>Date Applied</th>
				</tr>";

			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['jobAppID'] . "</td>";
			echo "<td>" . $row['userID'] . "</td>";
			echo "<td>" . $row['jobID'] . "</td>";
			echo "<td>" . $row['date'] . "</td>";
			echo "</tr>";
			}
			?>
			<form action="accept.php" method="post">
			<?php
			echo "<td><input type='radio' name=\"a$uname\" value='decline'/>Decline</td>";
			echo "<td><input type='radio' name=\"a$uname\" value='approved'/>Approved</td>";
			echo "</tr>";
			}
			echo '<input style="float:right;" type="submit" name="ApproveSelected" value="Approve Selected" />';
			echo "</table>";
			?>
			</form>
			<?php
			mysqli_close($con);
			?>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
	<ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	</ul>
	<div class="copyright">
		&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
	</div>
	</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
