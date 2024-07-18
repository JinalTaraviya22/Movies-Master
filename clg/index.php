<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movies Master | Login</title>
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
					<div id="branding" class="pull-left" >
						<!--<i class="icon-cupcake logo"></i>-->
						<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="100px" width="100px"></figure>
						<h1 class="site-title"><a href="#">Movies Master</a></h1>
					</div>
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<!--<ul class="menu">
							<li class="menu-item"><a href="about.html">About me</a></li>
							<li class="menu-item"><a href="offer.html">My offer</a></li>
							<li class="menu-item"><a href="recipe.html">Recipes</a></li>
							<li class="menu-item current-menu-item"><a href="contact.html">Contact</a></li>
						</ul>--> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="content">
					<div class="container">
						
						<h2 class="entry-title">LOG IN OR SIGN UP TO WATCH FREE MOVIES.</h2>
						<p>Enter username and password.If you are new here then click on sign up or else click on log in.</p>
						
						<!--<div class="contact-detail">
							<span class="location"><img src="images/icon-map-marker-alt.png"> 559 Avenue Street, New York</span>
							<span class="email"><img src="images/icon-envelope.png"> <a href="mailto:office@companyname.com">office@companyname.com</a></span>
							<span class="phone"><img src="images/icon-phone.png"> <a href="tel:(942)321490234">(942) 321 490 234</a></span>
						</div>-->
						
						<!--<div class="map"></div>-->
					<form method="post" action="">
						<div class="contact-form">
							<div class="row">
								<div class="col-md-7">
								</div>
								<div class="col-md-5">
									<input type="text" name="uname" placeholder="Enter username" required=""><br>
									<input type="password" name="pass" placeholder="Enter password" required=""><br>
									<input type="submit" name="login" value="login" >
									<input type="submit" name="signup" value="signup">
								<?php
			
									session_start();
									include 'conn.php';
									
									if(isset($_POST['login']))
									{
										$User_name=$_POST['uname'];
										$Password=$_POST['pass'];
										
										$sql="select * from login where User_name='$User_name' and Password='$Password' ";
										$data=mysqli_query($con,$sql);
										$total=mysqli_num_rows($data);
										
										if($total=mysqli_num_rows($data)==1)
										{
											while($result=mysqli_fetch_array($data))
											{
												if($result['User_name']=='Admin_2211' && $result['Password']=='1234568')
												{
													header('location:Admin/index.php');
												}
												else
												{
													header('location:Movies_Master/index.php');
												}
											}
										}
										else
										{
											echo "Enter valid username or password...";
										}
									}
									
									if(isset($_POST['signup']))
									{
										$User_name=$_POST['uname'];
										$Password=$_POST['pass'];
										
										$sql="insert into login values(ID,'$User_name','$Password')";
										$data=mysqli_query($con,$sql);
												
										if($data)
										{
											header('location:Movies_Master/index.php');
										}
										else
										{
											echo "Error in signing up...";
										}
									}					
								?>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>

			</main> <!-- .main-content -->
			
			<footer class="site-footer">
				<div class="container">
						<!--<i class="icon-cupcake logo"></i>-->
						<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="100px" width="100px"></figure>					
					<!--<nav class="footer-navigation">
						<a href="about_me.php">About me</a>
						<a href="categories.php">Categories</a>
						<a href="recipe.html">Recipes</a>
						<a href="reviews.php">Reviews</a>
					</nav>-->
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