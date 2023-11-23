<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Discover a world of knowledge with our ISO E-Learning platform. Access a diverse range of courses designed to elevate your skills. Engage in interactive learning experiences, benefit from expert instructors, and achieve certification at your own pace. Start your educational journey today!">
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
    <meta property="og:url" content="https://wwise.imaginativetech.co.za">
    <meta property="og:title" content="ISO E-Learning Platform">
    <meta property="og:description" content="Discover a world of knowledge with our ISO E-Learning platform. Access a diverse range of courses designed to elevate your skills.">
    <meta property="og:image" content="https://wwise.imaginativetech.co.za/assets/img/favicon.jpeg">

    <!-- Twitter -->
    <meta property="twitter:url" content="https://wwise.imaginativetech.co.za">
    <meta property="twitter:title" content="ISO E-Learning Platform">
    <meta property="twitter:description" content="Discover a world of knowledge with our ISO E-Learning platform. Access a diverse range of courses designed to elevate your skills.">
    <meta property="twitter:image" content="https://wwise.imaginativetech.co.za/assets/img/favicon.jpeg">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/favicon.jpeg')}}" type="image/x-icon">
	<title>E-Learning</title>

	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/meanmenu.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/video.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/progess.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

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
								<a class="navbar-brand text-uppercase" href="#"><img src="{{asset('assets/img/logo/logo.png')}}" alt="logo"></a>
							</div><!-- /.navbar-header -->
							
							  <div class="log-in float-right mobile-menu">
								<p style="margin-top:7px; padding-left:5px!;color:#ffff;font-family:'Brush Script MT', cursive; font-size:17px">Get Certified</p>
                               </div>
								<!-- The Register Modal -->
								<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="{{asset('assets/img/logo/p-logo.jpg')}}" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Register</span> Your Account.</h2>
												</div>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
											<form id="form-register">
												@csrf
												<div class="form-group">
													<label for="r_first_name">First Name</label>
													<input type="text" class="form-control" id="r_first_name" name="first_name" placeholder="John" value="{{ old('first_name') }}">
													<div class="invalid-feedback"></div>
												</div>
												<!--end form-group-->
												<div class="form-group">
													<label for="r_last_name">Last Name</label>
													<input type="text" class="form-control" id="r_last_name" name="last_name" placeholder="Doe" value="{{ old('last_name') }}">
													<div class="invalid-feedback"></div>
												</div>
												<!--end form-group-->
												<div class="form-group">
													<label for="r_email">E-mail</label>
													<input type="text" class="form-control" id="r_email" name="email" placeholder="Login E-mail" value="{{ old('email') }}">
													<div class="invalid-feedback"></div>
												</div>
												<!--end form-group-->
												<div class="form-group">
													<label for="studentRole" class="mr-2">Registering as?</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="studentRole" name="role" value="student">
														<label class="form-check-label" for="studentRole">Student</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="instructorRole" name="role" value="instructor">
														<label class="form-check-label" for="instructorRole">Instructor</label>
													</div>
												</div>
												<!--end form-group-->
												<div class="form-group">
													<label for="r_password">Password</label>
													<input type="password" class="form-control @error('password') is-invalid @enderror" id="r_password" name="password" placeholder="*****">
													<div class="invalid-feedback"></div>
												</div>
												<!--end form-group-->
												<div class="form-group">
													<label for="r_confirm_password">Confirm password</label>
													<input type="password" class="form-control" id="r_password_confirmation" name="password_confirmation" placeholder="*****">
													<div class="invalid-feedback"></div>
												</div>
												<!--end form-group-->
												<div class="clearfix action">
													<div class="form-group pull-right">
														<button type="button" class="btn btn-dark d-none" id="loadingButton" disabled>
															<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
														</button>
														<button type="button" id="registerUser" class="btn btn-primary btn-rounded">Register</button>
													</div>
												</div>
											</form>
											</div>
										</div>
									</div>
								</div>
						
								<!-- The Login Modal -->
								<div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="{{asset('assets/img/logo/p-logo.')}}" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Login</span> To Your Account.</h2>
													
												</div>
											</div>

											<!-- Modal body -->
											<div class="modal-body">

												<form id="form-login">
													@csrf
													<div class="form-group">
														<label for="l_email">E-mail</label>
														<input type="text" class="form-control" id="l_email" name="email" placeholder="Login E-mail" value="{{ old('email') }}">
														<div class="invalid-feedback"></div>
													</div>
													<!--end form-group-->
													<div class="form-group">
														<label for="l_password">Password</label>
														<input type="password" class="form-control" id="l_password" name="password" placeholder="*****">
														<div class="invalid-feedback"></div>
													</div>
													<!--end form-group-->
													<div class="clearfix action">
														<div class="form-group pull-right">
															<button type="button" id="loginUser" class="btn btn-primary btn-rounded">Sign In</button>
														</div>
														<div class="form-group pull-left">
														<div class="pretty p-svg p-square p-plain p-bigger">
																<input type="checkbox" name="1" />
																<div class="state">
																	<span class="svg">
																		<i data-feather="check-circle"></i>
																	</span>
																	<label>Login Automatically</label>
																</div>
															</div>
														</div>
													</div>
													<!--end action-->
												</form>
											</div>
										</div>
									</div>
								</div>
						
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="/">Home</a>
										</li>
										<li><a href="/about">About Us</a></li>
										<li><a href="/courses">Courses</a></li>
										@guest
										<li><a  data-toggle="modal" data-target="#logModal" href="#">Login</a></li>
										<li><a  data-toggle="modal" data-target="#regModal" href="#">Register</a></li>
										@else
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">{{ Auth::user()->name }}</a>
											<ul class="sub-menu">
												@if(Auth::user()->role=="instructor")
												<li><a href="/course/create">Add Course</a></li>
												<li><a href="/my-courses">Manage Course</a></li>
												@else
												<li><a href="/courses">Course</a></li>
												@endif
												<li> 
													<form method="POST" action="{{ route('logout') }}">
													@csrf
													<button type="submit" class="btn btn-link nav-link">Logout</button>
												    </form>
											    </li>
											</ul>
										</li>
										@endguest
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="/"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a></div>
								<nav>
									<ul>
										<li><a href="/">Home</a>
										</li>
										<li><a href="/about">About</a>
										</li>
										<li><a href="/courses">Courses</a></li>
										@guest
										<li><a  data-toggle="modal" data-target="#logModal" href="#">Login</a></li>
										<li><a  data-toggle="modal" data-target="#regModal" href="#">Register</a></li>
										@else
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">{{ Auth::user()->name }}</a>
											<ul class="sub-menu">
											  @if(Auth::user()->role=="instructor")
											    <li><a href="/course/create">Add Course</a></li>
												<li><a href="/my-courses">Manage Course</a></li>
												@else
												<li><a href="/courses">Course</a></li>
												@endif
												<li> 
													<form method="POST" action="{{ route('logout') }}">
													@csrf
													<button type="submit" class="btn btn-link nav-link">Logout</button>
												    </form>
											    </li>
											</ul>
										</li>
										@endguest
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
