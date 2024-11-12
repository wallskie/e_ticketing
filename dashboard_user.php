<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stuff Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="user/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="user/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="user/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="user/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="user/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="user/css/owl.carousel.min.css">
	<link rel="stylesheet" href="user/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="user/css/style.css">

	<!-- Modernizr JS -->
	<script src="user/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo Section -->
                        <div class="col-md-2">
                            <div id="colorlib-logo">
                                <a href="dashboard_user.php">
                                    <strong>OPW Train</strong>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Menu Section -->
                        <div class="col-md-10 text-right menu-1">
                            <ul class="nav-list">
                            <li><a href="dashboard_user.php" class="active"><i class="fas fa-home"></i> Home</a></li>
                                <li><a href="user/view_schedule.php"><i class="fas fa-calendar-alt"></i> Schedule</a></li>
                                <li><a href="user/view_trains.php"><i class="fas fa-train"></i> Available Trains</a></li>
                                <li><a href="user/view_destinations.php"><i class="fas fa-map-marked-alt"></i> Destination List</a></li>
                                <li><a href="user/booking.php"><i class="fas fa-ticket-alt"></i> Booking</a></li>
                                <li><a href="view_orders.php"><i class="fas fa-exchange-alt"></i> Transaction</a></li>
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li> <!-- Logout Item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(user/images/background.jpg);">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<p class="meta">
													<span class="cat"><a href="#">Train</a></span>
													<span class="date">07 November 2024</span>
													<span class="pos">By <a href="#">waLL</a></span>
												</p>
											<h1>Welcome To OP Woushh Train</h1>
                                            <h4>We saves your time both while purchasing, the chek-in and during the travel</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="user/images/blog-1.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<h2><a href="user/view_schedule.php">Schedule Train <i class="fa-solid fa-hand-point-left"></i></a></h2>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="user/images/blog-5.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<h2><a href="user/booking.php">Booking Seats <i class="fa-solid fa-hand-point-left"></i></a></h2>
							</div>
						</div>
					</div>
					<div class="col-md-4">
                    <div class="blog-entry">
							<div class="blog-img">
								<a href="user/view_trains.php"><img src="user/images/blog-4.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<h2><a href="user/view_trains.php">Available Trains <i class="fa-solid fa-hand-point-left"></i></a></h2>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3">
						<h2>Navigational</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Home</a></li>
								<li><a href="#"><i class="icon-check"></i> Schedule</a></li>
								<li><a href="#"><i class="icon-check"></i> Trains Available</a></li>
								<li><a href="#"><i class="icon-check"></i> Destination List</a></li>
								<li><a href="#"><i class="icon-check"></i> Booking</a></li>
								<li><a href="#"><i class="icon-check"></i> Transaction</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Recent Post</h2>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(user/images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">Be a designer</a></h3>
								<p class="admin"><span>25 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(user/images/blog-5.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">How to build website</a></h3>
								<p class="admin"><span>24 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(user/images/blog-4.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">Create website</a></h3>
								<p class="admin"><span>23 March 2018</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h2>Archive</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> February 2018</a></li>
								<li><a href="#"><i class="icon-check"></i> January 2018</a></li>
								<li><a href="#"><i class="icon-check"></i> December 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> November 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> October 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> September 2017</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Tags</h2>
						<p class="tags">
							<span><a href="#"><i class="icon-tag"></i> Modeling</a></span>
							<span><a href="#"><i class="icon-tag"></i> Fashion</a></span>
							<span><a href="#"><i class="icon-tag"></i> Life</a></span>
							<span><a href="#"><i class="icon-tag"></i> Blog</a></span>
							<span><a href="#"><i class="icon-tag"></i> Workout</a></span>
							<span><a href="#"><i class="icon-tag"></i> Vacation</a></span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>
							<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="user/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="user/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="user/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="user/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="user/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="user/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="user/js/jquery.magnific-popup.min.js"></script>
	<script src="user/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="user/js/main.js"></script>

	</body>
</html>
<!-- CSS Styles -->
<style>
.colorlib-nav {
    background-color: #ffffff; /* Ganti background menjadi putih */
}

#colorlib-logo a {
    color: #343a40; /* Ganti warna teks logo menjadi gelap agar terlihat di background putih */
}

.menu-1 .nav-list li a {
    color: #343a40; /* Ganti warna teks menu menjadi gelap agar kontras dengan background putih */
}

.menu-1 .nav-list li a:hover {
    color: #ffffff; /* Ganti warna teks menjadi putih saat dihover */
    background-color: #343a40; /* Ganti background hover menjadi gelap */
}

.menu-1 .nav-list li a.active {
    color: #ffffff; /* Warna teks putih untuk link aktif */
    background-color: #343a40; /* Background gelap untuk link aktif */
}

</style>

