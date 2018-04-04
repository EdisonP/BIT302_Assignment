<!DOCTYPE PHP>
<html>
<head>
	<title>Jinjang Utara Community</title>
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
	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<img src="images/juPics/pic00.png" alt="" data-position="center" />
			<h1>This is the Jinjang Utara Community website</h1>
			<ul class="actions">
				<li><a href="#one" class="button alt scrolly big">Continue</a></li>
			</ul>
		</div>
	</section>

	<!-- One -->
	<article id="one" class="post style1">
		<div class="image">
			<img src="images/juPics/pic01.jpg" alt="" data-position="75% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="information.html">Information</a></h2>
				</header>
				<p>Information about the Jinjang Utara Community</p>
				<ul class="actions">
					<li><a href="information.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#two" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Two -->
	<article id="two" class="post invert style1 alt">
		<div class="image">
			<img src="images/juPics/pic02.jpg" alt="" data-position="80% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="events.html">News/Past Events</a></h2>
				</header>
				<p>Photo gallery, newspaper write ups on the events</p>
				<ul class="actions">
					<li><a href="events.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#one" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#three" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Three -->
	<article id="three" class="post style2">
		<div class="image">
			<img src="images/juPics/pic03.jpg" alt="" data-position="80% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="help.html">How you can help</a></h2>
				</header>
				<p>Volunteers, Learning materials, Children school supplies sponsor a child, E-business</p>
				<ul class="actions">
					<li><a href="help.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#two" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#four" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Four -->
	<article id="four" class="post invert style2 alt">
		<div class="image">
			<img src="images/juPics/pic04.jpg" alt="" data-position="60% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="donations.html">Donations</a></h2>
				</header>
				<p>Donate now and make a pledge</p>
				<ul class="actions">
					<li><a href="donations.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#three" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#five" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Five -->
	<article id="five" class="post style3">
		<div class="image">
			<img src="images/pic13.jpg" alt="" data-position="10% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="contact.html">About us</a></h2>
				</header>
				<p>About AGN, Our work and programme</p>
				<ul class="actions">
					<li><a href="contact.html" class="button alt">Read More</a></li>
				</ul>
			</div>

			<div class="postnav">
				<a href="#four" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#six" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Six -->
	<article id="six" class="post invert style3 alt">
		<div class="image">
			<img src="images/pic14.jpg" alt="" data-position="10% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="contact.html">Jobs</a></h2>
				</header>
				<p>Job offers in the community that you can help with</p>
				<ul class="actions">
					<li><a href="jobs.html" class="button alt">Read More</a></li>
				</ul>
			</div>

			<div class="postnav">
				<a href="#five" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
			</div>
		</div>
	</article>

	<!-- Footer -->
<!--
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
-->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
