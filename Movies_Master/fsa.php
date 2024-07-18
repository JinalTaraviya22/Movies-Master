<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movies | Fantasy,Sci-fi,Adventure</title>
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
						
						<h2 class="entry-title">Fantasy | Sci-fi | Adventure</h2>
						<p>These movies are beyond your imagination.<br>Click on the movie's title to watch..</p>

						<div class="recipes-list">
							
							<?php
							
							include 'conn.php';
							$sql="select * from movies where cat='FSA' ";
							$data=mysqli_query($con,$sql);
							$total=mysqli_num_rows($data);
							
							if($total=mysqli_num_rows($data))
							{
								while($result=mysqli_fetch_array($data))
								{
									echo "
												<article class='recipe'>
													<figure class='recipe-image'><img src=".$result['file']." alt='movie'></figure>
													<div class='recipe-detail'>
														<h2 class='recipe-title'><a href=".$result['link']." target='_blank'>".$result['mname']."</a></h2>
														<p>".$result['des']."</p>
														<div class='recipe-meta'>
															<span class='time'><img src='images/icon-time.png'>".$result['rd']."</span>
															<span class='calorie'><img src='images/icon-pie-chart.png'>".$result['dura']."</span> &emsp; &emsp;
															<a href='reviews.php'>REVIEWS</a>
														</div>
													</div>
												</article>";
					
								}
							}
							else
							{
								echo "💀NO MOVIES💀";
							}
						?>
							
						</div>
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
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>
</html>