<?php
session_start();
include "../koneksi.php"; // Koneksi ke database

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: ../index.php");
    exit();
}

// Mengambil data tujuan
$destinations = $conn->query("SELECT * FROM destinations");
?>

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
	
	<!-- Custom Stylesheet -->
	<link href="../css/style.css" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div id="page" class="colorlib-loader"></div>

	<div>
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row align-items-center">
						<!-- Logo Section -->
						<div class="col-md-2">
							<div id="colorlib-logo">
								<a href="../dashboard_user.php">
									<strong>OPW Train</strong>
								</a>
							</div>
						</div>
						
						<!-- Menu Section -->
						<div class="col-md-10 text-right menu-1">
							<ul class="nav-list">
								<li><a href="../dashboard_user.php"><i class="fas fa-home"></i> Home</a></li>
								<li><a href="view_schedule.php"><i class="fas fa-calendar-alt"></i> Schedule</a></li>
								<li><a href="view_trains.php"><i class="fas fa-train"></i> Available Trains</a></li>
								<li><a href="view_destinations.php" class="active"><i class="fas fa-map-marked-alt"></i> Destination List</a></li>
								<li><a href="booking.php"><i class="fas fa-ticket-alt"></i> Booking</a></li>
								<li><a href="view_orders.php"><i class="fas fa-exchange-alt"></i> Transaction</a></li>
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li> <!-- Logout Item -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
						<h1>Destinations</h1>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th scope="col"><center>No</center></th>
												<th scope="col"><center>Destinations</center></th>
											</tr>
										</thead>
										<tbody>
                                            <?php 
                                            $no = 0;
                                            while ($destination = $destinations->fetch_assoc()):
                                            $no++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><center><?= $no; ?></center></th>
                                                    <td><center><?php echo $destination['destination_name']; ?></center></td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
									</table>
								</div>
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
								<li><a href="#"><i class="icon-check"></i> About Me</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Travel</a></li>
								<li><a href="#"><i class="icon-check"></i> Lifestyle</a></li>
								<li><a href="#"><i class="icon-check"></i> Fashion</a></li>
								<li><a href="#"><i class="icon-check"></i> Health</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Recent Post</h2>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">Be a designer</a></h3>
								<p class="admin"><span>25 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">How to build website</a></h3>
								<p class="admin"><span>24 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
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
							<span><a href="#"><i class="icon-tag"></i> Travel</a></span>
							<span><a href="#"><i class="icon-tag"></i> Exercise</a></span>
							<span><a href="#"><i class="icon-tag"></i> Health</a></span>
							<span><a href="#"><i class="icon-tag"></i> News</a></span>
							<span><a href="#"><i class="icon-tag"></i> Model</a></span>
							<span><a href="#"><i class="icon-tag"></i> Women</a></span>
							<span><a href="#"><i class="icon-tag"></i> Animals</a></span>
							<span><a href="#"><i class="icon-tag"></i> Nature</a></span>
							<span><a href="#"><i class="icon-tag"></i> Art</a></span>
							<span><a href="#"><i class="icon-tag"></i> Sea</a></span>
							<span><a href="#"><i class="icon-tag"></i> Ocean</a></span>
							<span><a href="#"><i class="icon-tag"></i> Office</a></span>
							<span><a href="#"><i class="icon-tag"></i> Home</a></span>
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
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	
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
