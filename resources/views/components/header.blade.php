<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>E-Learning</title>

	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">
	<link rel="stylesheet" href="assets/css/progess.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

	<div id="preloader"></div>

	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu"  class="main-menu-container">
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase" href="#"><img src="assets/img/logo/logo.png" alt="logo"></a>
							</div><!-- /.navbar-header -->
							
							<div class="log-in float-right">
								<a  data-toggle="modal" data-target="#myModal" href="#">log in</a>
								<!-- The Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="assets/img/logo/p-logo.jpg" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Login</span> Your Account.</h2>
													<p>Login to our website, or <span>REGISTER</span></p>
												</div>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
													<div class="contact-info">
														<input class="name" name="Email" type="email" placeholder="Your@email.com*">
													</div>
													<div class="contact-info">
														<input class="pass" name="name" type="password" placeholder="Your password*">
													</div>
													<div class="nws-button text-center white text-capitalize">
														<button type="submit" value="Submit">LOg in Now</button> 
													</div> 
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="#">Home</a>
										</li>
										<li><a href="/about">About Us</a></li>
										<li><a href="/shop">shop</a></li>
										<li><a href="/contact">Contact Us</a></li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">Pages</a>
											<ul class="sub-menu">
												<li><a href="/teacher">Teacher</a></li>
												<li><a href="/teacher-details">Teacher Details</a></li>
												<li><a href="/blog">Blog</a></li>
												<li><a href="/blog-single">Blog Single</a></li>
												<li><a href="/course">Course</a></li>
												<li><a href="/course-details">Course Details</a></li>
												<li><a href="/faq">FAQ</a></li>
												<li><a href="/check-out">Check Out</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="/"><img src="assets/img/logo/logo.png" alt="Logo"></a></div>
								<nav>
									<ul>
										<li><a href="/">Home</a>
										</li>
										<li><a href="/about">About</a></li>
										<li><a href="/blog">Blog</a>
											<ul>
												<li><a href="/blog">Blog</a></li>
												<li><a href="/blog-single">Blog sinlge</a></li>
											</ul>
										</li>
										<li><a href="/shop">Shop</a>
										</li>
										<li><a href="/contact">Contact</a></li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="/course">Course</a></li>
												<li><a href="/course-details">course sinlge</a></li>
												<li><a href="/teacher">teacher</a></li>
												<li><a href="/teacher-details">teacher details</a></li>
												<li><a href="/faq">FAQ</a></li>
												<li><a href="/check-out">Check Out</a></li>
											</ul>
										</li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<!-- Start of Header section
	============================================= -->
