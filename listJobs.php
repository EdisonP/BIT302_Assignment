<!DOCTYPE html>
<html>
<head>
	<title>List of jobs</title>
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
	<section id="main">
		<div class="inner">
			<header>
				<h1>List of jobs</h1>
			</header>
			<button id="myBtn">Apply Job</button>
			<div id="myModal" class="modal">

				<div class="modal-content">
					<span class="close">&times;</span>
					<form action="php/applyJobF.php" method="POST">
						<label class = "col-md-3">Enter job's job ID</label>
						<input class = "inp col-md-8" type = "text" name = "jobID" placeholder = "Enter job ID" required>
						<br>
						<input type = "submit" name = "submit" value = "Sign up for this job" />
					</form>
				</div>
			</div>
			<script>
				var modal = document.getElementById('myModal');
				var btn = document.getElementById("myBtn");
				var span = document.getElementsByClassName("close")[0];
				btn.onclick = function() {
					modal.style.display = "block";
				}
				span.onclick = function() {
					modal.style.display = "none";
				}
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>
			<?php include 'php/listJobF.php';?>
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
