<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movies | Categories</title>
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
						<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="80px" width="80px"></figure>
						<h1 class="site-title">Movies Master</h1>
					</a>
					<!-- Default snippet for navigation -->
					<div class="main-navigation pull-right">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="about_me.php">About me</a></li>
							<li class="menu-item current-menu-item"><a href="categories.php">Categories</a></li>
							<!--<li class="menu-item"><a href="recipe.html">Recipes</a></li>-->
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
						
						<h2 class="entry-title">Categories</h2>
						<p>Horror | Thriller | Mystery | Action | Sports | Romance | Comedy | Drama | Fantasy | Sci-fi | Adventure</p>

						<hr>

						<div class="row">
							<a href="htm.php" >
								<div class="col-md-3">
								<div class="feature color-purple">
								<div class="feature-icon"><!--<i class="icon-bowl"></i>-->
									<img src="dummy/horror-iconbg.png" width="165px" height="150px">
								</div>
									<h3 class="feature-title">Horror,Thriller,Mystery</h3>
									<p>If you think you are brave enough then watch these movies.</p>
								</div>
								</div>
							</a>
							<a href="as.php" >
								<div class="col-md-3">
								<div class="feature color-green">
								<div class="feature-icon"><!--<i class="icon-oil"></i>-->
									<img src="dummy/action-iconbg.png" width="170px" height="170px">
								</div>
									<h3 class="feature-title">Action,Sports</h3>
									<p>Big fan of action and spors then check these out.</p>
								</div>
								</div>
							</a>
							<a href="rcd.php">
								<div class="col-md-3">
								<div class="feature color-pink">
								<div class="feature-icon"><!--<i class="icon-honey"></i>-->
									<img src="dummy/romance-iconbg.png" width="170px" height="150px">
								</div>
									<h3 class="feature-title">Romance,Comedy,Drama</h3>
									<p>Want to chill then these are the perfect for you.</p>
								</div>
								</div>
							</a>
							<a href="fsa.php">
								<div class="col-md-3">
								<div class="feature color-orange">
								<div class="feature-icon"><!--<i class="icon-chocolate"></i>-->
									<img src="dummy/adventure-iconbg.png" width="170px" height="150px">
								</div>
									<h3 class="feature-title">Fantasy,Sci-fi,Adventure</h3>
									<p></p>
								</div>
								</div>
							</a>
						</div>

						<hr>

						<p>Find best movies based on your mood. here we have movies categorised in four parts.</p>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<footer class="site-footer">
				<div class="container">
					<!--<i class="icon-cupcake logo"></i>-->
					<figure><img src="dummy/icon-movies_logo.png" alt="logo" height="80px" width="80px"></figure>
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