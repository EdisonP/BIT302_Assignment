<!DOCTYPE HTML>
<html>
<head>
	<title>Edit Job</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

	<!-- Header -->
	<header id="header">
		<a href="index.php" class="logo"><strong>Jinjang Utara</strong> Community</a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>

	<!-- Nav -->
	<?php
	session_start();
	if (isset($_SESSION['SESS_USER'])) {
		?>
		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="php/logoutF.php">Logout</a></li>
				<li><a href="information.html">Information</a></li>
				<li><a href="news.html">News/Past Events</a></li>
				<li><a href="help.html">Help Us</a></li>
				<li><a href="donations.html">Donation</a></li>
				<li><a href="jobs.html">Jobs</a></li>
				<li><a href="contact.html">About Us</a></li>
			</ul>
		</nav>
		<?php

	} else {
		?>
		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Registration</a></li>
				<li><a href="information.html">Information</a></li>
				<li><a href="news.html">News/Past Events</a></li>
				<li><a href="help.html">Help Us</a></li>
				<li><a href="donations.html">Donation</a></li>
				<li><a href="contact.html">About Us</a></li>
			</ul>
		</nav>
		<?php
	}
	?>

	<!-- Main -->
	<?php

	?>
	<section id="main">
		<div class="inner">
			<h1>Edit Job</h1>
			<p>Please fill in this form to edit the job.</p>
			<br>
			<form action = "php/editJobF.php" method = "POST">
				<?php
				include 'php/DBConfig.php';
				$jobID = $_POST['jobID'];
				?>
				<b>Enter the name of the job</b>
				<input type = "text" value = " " name="jobName" required>
			</br>
			<b>Enter the details of the job </b>
			<input type = "text" placeholder ="Enter job details" name="jobDetails" required>
		</br>
		<b>Enter address for the job</b>
		<input type = "text" placeholder ="Enter address" name="address" required>
	</br>
	<b>Enter salary to pay for this job</b>
	<input type = "text" placeholder ="Enter Salary"  name = "salary" required>
</br>
<input type = "hidden" name = "userID" value = <?php echo $_SESSION['SESS_USER']; ?>>
<input type = "hidden" name = "jobID" value = <?php echo $jobID ?>>
<input type="submit" class="pure-button pure-button-primary" value="Edit job">
</form>
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
