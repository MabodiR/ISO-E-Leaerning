
	<!-- Start of footer section
		============================================= -->
		<footer>
			<section id="footer-area" class="footer-area-section">
				<div class="container">

					<div class="copy-right-menu">
						<div class="row">
							<div class="col-md-6">
								<div class="copy-right-text">
									<p>© {{ date('Y') }} - E-Learning Platform. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="copy-right-menu-item float-right ul-li">
									<ul>
										<li><a href="#">License</a></li>
										<li><a href="#">Privacy & Policy</a></li>
										<li><a href="#">Term Of Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>
	<!-- End of footer section
		============================================= -->

		<!-- For Js Library -->
		<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/jarallax.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/lightbox.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
		<script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

		<script src="{{ asset('assets/js/auth/login.js') }}"></script>
		<script src="{{ asset('assets/js/categories.js') }}"></script>
		<script src="{{ asset('assets/js/courses.js') }}"></script>
		<script src="{{ asset('assets/js/filterByCategory.js') }}"></script>
		<script src="{{ asset('assets/js/toggle.js') }}"></script>
		<script src="{{ asset('assets/js/mycourses.js') }}"></script>
		<script src="{{ asset('assets/js/rating.js') }}"></script>
		<script src="{{ asset('assets/js/comments.js') }}"></script>
		<script src="{{ asset('assets/js/auth/register.js') }}"></script>
		<script src="{{ asset('assets/js/script.js') }}"></script>
	
		<script>
			// Check if a success message exists in the session
			@if(session('success'))
				// Display the success toast message
				toastr.success('{{ session('success') }}');
			@endif
		</script>
		<script>
			// Check if a error message exists in the session
			@if(session('error'))
				// Display the success toast message
				toastr.error('{{ session('error') }}');
			@endif
		</script>
	</body>
	</html>