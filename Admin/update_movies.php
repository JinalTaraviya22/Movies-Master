<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movies | Horror,Thriller,Mystery</title>
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
						
						<h2 class="entry-title">Update Movies</h2>
						<p><br>Update Movies Here.</p>

						<div class="recipes-list">
							
						<form method="get" action="" enctype="multipart/form-data">
						<div class="contact-form">
							<div class="row">
								<div class="col-md-5">
									<input type="text"  name="ID" value="<?php echo$_GET['ID'];?>" >
									<input type="text"  name="mname" value="<?php echo $_GET['mname']; ?>">
									<input type="text"  name="dura" value="<?php echo $_GET['dura']; ?>">
									<input type="text"  name="rd" value="<?php echo $_GET['rd']; ?>">
									<input type="text"  name="cat" value="<?php echo $_GET['cat']; ?>">
									<!--<input type="file" name="file" value="<?php echo $_GET['file']; ?>">-->
								</div>
								<div class="col-md-7">
									<textarea  name="des" placeholder="<?php echo $_GET['des']; ?>"></textarea>		
									<input type="link"  name="link" value="<?php echo $_GET['link']; ?>">
									<input type="submit" value="update" name="submit">
																			
										<?php
											
											include "conn.php";
											//$loc="dummy/";
											if(isset($_GET['submit']))
											{
												$ID=rtrim($_GET['ID']," ");
												$mname=	$_GET['mname'];
												$des=$_GET['des'];
												$dura=$_GET['dura'];
												$rd=$_GET['rd'];
												$cat=$_GET['cat'];
												$link=$_GET['link'];
												
													$sql="update `movies` set `mname`='$mname',`dura`='$dura',`rd`='$rd',cat='$cat',`des`='$des',link='$link'  where ID='$ID'";
													
													$data=mysqli_query($con,$sql);
													
													if($data)
													{ 
														header ('location:movies_reviews.php');
													}
													else
													{
														echo "💀Error in updating movie.💀";
													}
													
												
											}
										?>
								</div>
							</div>
						</div>
						</form>
							
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