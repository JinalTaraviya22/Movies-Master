<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movies</title>
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


	<body class="homepage">
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding" class="pull-left">
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

			<div class="hero">
				<div class="container">
					<!--<i class="icon-cupcake logo"></i>-->
					<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="100px" width="100px"></figure>
					<h1 class="site-title">Movies Master</h1>
					<small class="site-description">Entertainment</small>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block cooking-section category-block">
					<div class="container">
						<figure><img src="dummy/paperplane.png" alt="new" height="300px" width="300px"></figure>
						<div class="category-content">
							<h1 class="category-title">Newly Released</h1>
							<p>Check out these amazing movies that are recently released.</p>
							<a href="https://www.imdb.com/list/ls020810230/" target="_blank" class="button">Watch now</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .cooking-section -->
				<div class="fullwidth-block restaurant-section category-block">
					<div class="container">
						<figure><img src="dummy/horror.png" alt="horror" height="300px" width="300px"></figure>
						<div class="category-content">
							<h1 class="category-title">Horror Movies</h1>
							<p>These are some of the best horror movies. Personal favourite of movies master.</p>
							<a href="htm.php" class="button">Watch now</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .restaurant-section -->
				<div class="fullwidth-block fruits-section category-block">
					<div class="container">
						<figure><img src="dummy/anime.png" alt="anime" height="300px" width="300px"></figure>
						<div class="category-content">
							<h1 class="category-title">Anime</h1>
							<p>Big fan of anime? Here's what you might like.</p>
							<a href="https://www2.theshit.me/genre/animation" target="_blank" class="button">Watch now</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .fruits-section -->
				<div class="fullwidth-block vegetables-section category-block">
					<div class="container">
						<figure><img src="dummy/action.png" alt="action" height="300px" width="300px"></figure>
						<div class="category-content">
							<h1 class="category-title">Action Movies</h1>
							<p>Want to watch an action movies then click here to fing most amazing movies of all time.</p>
							<a href="as.php" class="button">Watch now</a>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .vegetables-section -->

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