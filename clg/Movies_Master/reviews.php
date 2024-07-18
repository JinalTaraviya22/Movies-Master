<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movies | Reviews</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding" class="pull-left">
						<!--<i class="icon-cupcake logo"></i>-->
						<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="100px" width="100px"></figure>
						<h1 class="site-title">Movies Master</h1>
					</a>
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="about_me.php">About me</a></li>
							<li class="menu-item"><a href="categories.php">Categories</a></li>
							<!--<li class="menu-item"><a href="recipe.php">Recipes</a></li>-->
							<li class="menu-item"><a href="reviews.php">Reviews</a></li>
							<li class="menu-item"><a href="logout.php">log out</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="content">
					<div class="container">
						
						<h2 class="entry-title">Tell us what you think about our website.</h2>
						<p>😄Don't waste your time, give us feedback in few words and share your thoughts.😄  </p>
						
						<div class="contact-detail">
							<span class="location"><img src="images/icon-map-marker-alt.png">Earth</span>
							<span class="email"><img src="images/icon-envelope.png"> <a href="mailto:office@MoviesAddict.com">office@MoviesAddict.com</a></span>
							<!--<span class="phone"><img src="images/icon-phone.png"> <a href="tel:(942)321490234">(942) 321 490 234</a></span>-->
						</div>
						
						<!--<div class="map"></div>-->
						<!--bgcolor="#48172d" color:white;-->
						
						<?php
		
								include 'conn.php';
								$sql="select * from reviews";
								$data=mysqli_query($con,$sql);
								$total=mysqli_num_rows($data);
								
								if($total=mysqli_num_rows($data))
								{
						?>
						<table  style="border-radius:30px" align="center" cellpadding='50px' cellspacing='5spx'>
						<tr align='center'>
								<th>Name</th>
								<th>Email</th>
								<th>Favorite</th>
								<th>Message</th>
						</tr>
						
						<?php
							while($result=mysqli_fetch_array($data))
									{
										echo "
												<tr align='center'>
													<td>".$result['Name']."</td>
													<td>".$result['Email']."</td>
													<td>".$result['Favorite']."</td>
													<td>".$result['Messages']."</td>
												</tr>";
									}
									
								}
								else
								{
									echo "No Reviews yet...<br><br>";
								}
						?>
						</table><br><br>
						
						<form method="get" action="reviews.php">
						<div class="contact-form">
							<div class="row">
								<div class="col-md-5">
									<input type="text" placeholder="Your name..." name="name" required="">
									<input type="text" placeholder="Email..." name="mail" required="">
									<input type="text" placeholder="Your Favorits..." name="fav" required="">
								</div>
								<div class="col-md-7">
									<textarea placeholder="Message..." name="msg"></textarea>
									<input type="submit" value="Send message" name="submit" href="index.php">
																			
										<?php
											
											include "conn.php";
											if(isset($_GET['submit']))
											{
												$nm=$_GET['name'];
												$mail=$_GET['mail'];
												$fav=$_GET['fav'];
												$msg=$_GET['msg'];

												$sql="insert into reviews values ('id','$nm','$mail','$fav','$msg')";
												$data=mysqli_query($con,$sql);
												if($data)
												{ 
													echo "Message sent.";
												}
												else
												{
													echo "Error sending mssage.";
												}
											}
										?>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<footer class="site-footer">
				<div class="container">
					<!--<i class="icon-cupcake logo"></i>-->
						<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="100px" width="100px"></figure>
					<nav class="footer-navigation">
						<a href="about_me.php">About me</a>
						<a href="categories.php">Categories</a>
						<!--<a href="recipe.html">Recipes</a>-->
						<a href="reviews.php">Reviews</a>
						<a href="logout.php">log out</a>
					</nav>
					<!--<div class="subscribe">
						<form action="#">
							<input type="text" placeholder="Enter your email to join newsletter...">
							<input type="submit" value="Subscribe">
						</form>
					</div>-->
					<div class="social-links">
						<a href="facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="google-plus.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="pinterest.com" class="pinterest"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="colophon">
						<p>Copyright 2014 MoviesAddict. Designed by Themezy. All right reserved</p>
					</div>
				</div>
			</footer>

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>
</html>