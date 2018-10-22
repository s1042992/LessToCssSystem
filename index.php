<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Telemetry by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="alt">

				<!-- Logo -->
					<div class="logo">
						<a href="index.html">Telemetry</a><span> By Pixelarity</span>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<?php
								if(isset($_SESSION["user_name"])==null)
								{
									echo '<li><a href="login.html">登入</a></li>';
								
								}
							
								if(isset($_SESSION["user_name"])!=null)
								{
									echo '<li><a href="logout.php">登出</a></li>';
									echo '<li><a href="member.php" class="icon fa-user" >';
									echo $_SESSION["user_name"];
									echo '</a></li>';
								}
							?>
								
		
							<li>
								<a href="#" class="icon fa-angle-down">Dropdown</a>
								<ul>
									<li><a href="#">Option One</a></li>
									<li><a href="#">Option Two</a></li>
									<li><a href="#">Option Three</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
											
										</ul>
									</li>
									
								</ul>
							</li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<span class="icon fa-laptop"></span>
					<h1>Ipsum dolor sit amet feugiat et veroeros adipiscing</h1>
					<ul class="actions">
						<li><a href="./select_project.php" class="button wide scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="split style1 centered reversed">
						<section>
							<span class="image fit portrait"><img src="images/pic02.jpg" alt="" /></span>
						</section>
						<section>
							<h2>Adipiscing ornare risus morbi est est blandi magna vel euismod tempus</h2>
							<div class="features">
								<article class="icon fa-diamond">
									<h3>Sed veroeros</h3>
									<p>Lorem ipsum dolor sit amet nulla etiam feugiat sed adipiscing.</p>
								</article>
								<article class="icon fa-file-o">
									<h3>Magna etiam</h3>
									<p>Lorem ipsum dolor sit amet nulla etiam feugiat sed adipiscing.</p>
								</article>
								<article class="icon fa-clone">
									<h3>Nulla consequat</h3>
									<p>Lorem ipsum dolor sit amet nulla etiam feugiat sed adipiscing.</p>
								</article>
								<article class="icon fa-envelope-o">
									<h3>Euismod morbi</h3>
									<p>Lorem ipsum dolor sit amet nulla etiam feugiat sed adipiscing.</p>
								</article>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<div class="stats">
						<article>
							<h3><span>128</span> Sed magna</h3>
							<p>Lorem ipsum dolor nulla feugiat adipiscing.</p>
						</article>
						<article>
							<h3><span>640</span> Etiam dolor</h3>
							<p>Lorem ipsum dolor nulla feugiat adipiscing.</p>
						</article>
						<article>
							<h3><span>256</span> Nullam amet</h3>
							<p>Lorem ipsum dolor nulla feugiat adipiscing.</p>
						</article>
						<article>
							<h3><span>768</span> Sit euismod</h3>
							<p>Lorem ipsum dolor nulla feugiat adipiscing.</p>
						</article>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<ul class="tabs">
						<li>
							<h3>Aliquam</h3>
							<div class="split reversed">
								<div class="content">
									<h2>Lorem ipsum dolor sit magna feugiat etiam sed dolor</h2>
									<p>Maecenas id feugiat nunc. Integer gravida augue libero, quis pellentesque amet pharetra a. Ut sagittis ipsum nec velit porttitor, sed convallis ligula pellentesque. Mauris et dignissim sem lacinia lorem ipsum dolor.</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn More</a></li>
									</ul>
								</div>
								<div class="image"><img src="images/pic05.jpg" alt="" /></div>
							</div>
						</li>
						<li>
							<h3>Consequat</h3>
							<div class="split reversed">
								<div class="content">
									<h2>Ipsum lorem accumsan sed nullam feugiat veroeros</h2>
									<p>Veritatis, accusantium, nemo. Officia neque explicabo nihil! Sunt vero reprehenderit, necessitatibus atque, enim autem animi illum quaerat at, corporis dolore ipsam. Voluptatem culpa sapiente sed veroeros.</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn More</a></li>
									</ul>
								</div>
								<div class="image"><img src="images/pic05.jpg" alt="" /></div>
							</div>
						</li>
						<li>
							<h3>Feugiat</h3>
							<div class="split reversed">
								<div class="content">
									<h2>Adipiscing sed impedit volutpat magna cursus lorem</h2>
									<p>Perspiciatis saepe, mollitia itaque magna etiam dolor sit amet. Sed rerum porro sint iure illo accusantium in amet totam, est. Ipsa nobis ad optio impedit quidem inventore libero, aperiam, nesciunt dolor sit amet.</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn More</a></li>
									</ul>
								</div>
								<div class="image"><img src="images/pic05.jpg" alt="" /></div>
							</div>
						</li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="quotes">
				<article class="icon fa-quote-left">
					<span class="image"><img src="images/pic03.jpg" alt="" data-position="center" /></span>
					<h2>"Sed ultrices consequat dolor nulla fringilla dignissim"</h2>
					<div class="author">
						<span class="name">Jane Doe</span>
						<span class="title">Ipsum dolor nullam</span>
					</div>
				</article>
				<article class="icon fa-quote-left">
					<span class="image"><img src="images/pic04.jpg" alt="" data-position="left" /></span>
					<h2>"Nam velit et lorem porta quis at pulvinar tellus nibh"</h2>
					<div class="author">
						<span class="name">John Doe</span>
						<span class="title">Ipsum dolor nullam</span>
					</div>
				</article>
			</section>

		<!-- Five -->
			<section id="five" class="wrapper">
				<div class="inner">
					<div class="split">
						<section>
							<h2>Feugiat lorem ipsum dolor velit amet dolor dignissim pharetra</h2>
							<span class="image fit"><img src="images/pic06.jpg" alt="" /></span>
							<p>Maecenas id feugiat nunc. Integer gravida augue libero, quis pellentesque amet pharetra a. Ut sagittis ipsum nec velit porttitor, sed convallis ligula pellentesque. Mauris et dignissim sem lacinia lorem ipsum dolor.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</section>
						<section>
							<div class="ratings">
								<article>
									<h3>Ipsum amet</h3>
									<div class="progress" data-progress="60">60%</div>
								</article>
								<article>
									<h3>Adipiscing feugiat</h3>
									<div class="progress" data-progress="90">90%</div>
								</article>
								<article>
									<h3>Dolor ligula</h3>
									<div class="progress" data-progress="75">75%</div>
								</article>
								<article>
									<h3>Libero magna</h3>
									<div class="progress" data-progress="45">45%</div>
								</article>
								<article>
									<h3>Nec lacinia</h3>
									<div class="progress" data-progress="55">55%</div>
								</article>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="split style1">
						<div class="contact">
							<h2>Contact</h2>
							<ul class="contact-icons">
								<li class="icon fa-home"><a href="#">1234 Fictional Street #5432<br>Nashville, TN 00000-0000</a></li>
								<li class="icon fa-phone"><a href="#">(000) 000-0000</a></li>
								<li class="icon fa-envelope-o"><a href="#">info@untitled.tld</a></li>
							</ul>
							<ul class="icons-bordered">
								<li><a class="icon fa-facebook" href="#">
									<span class="label">Facebook</span>
								</a></li>
								<li><a class="icon fa-twitter" href="#">
									<span class="label">Twitter</span>
								</a></li>
								<li><a class="icon fa-instagram" href="#">
									<span class="label">Instagram</span>
								</a></li>
								<li><a class="icon fa-github" href="#">
									<span class="label">GitHub</span>
								</a></li>
								<li><a class="icon fa-linkedin" href="#">
									<span class="label">LinkedIn</span>
								</a></li>
							</ul>
						</div>
						<form action="#" method="post">
							<h2>Email Us</h2>
							<div class="field half first">
								<input name="name" id="name" placeholder="Name" type="text" />
							</div>
							<div class="field half">
								<input name="email" id="email" placeholder="Email" type="email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
							</div>
							<ul class="actions">
								<li><input value="Send Message" class="button" type="submit" /></li>
							</ul>
						</form>
					</div>
					<div class="copyright">
						<p>&copy; Untitled. All rights reserved.</p>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.selectorr.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>