{{-- Include Header Component --}}
    <x-header />

   	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-3">
								<h2><span>Empowering Excellence,<br/> Ensuring Compliance</span></h2>
							</div>
						</div>
						<div class="layer-1-4">
							<div id="course-btn">
								<div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
									<a href="/courses">Our Courses <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
	<!-- End of slider section
		============================================= -->
			<!-- Start of Search Courses
		============================================= -->
		<section id="search-course" class="search-course-section search-course-third">
			<div class="container">
				<div class="search-counter-up">
					<div class="version-four">
						<div class="row">
							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-graduation-hat"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">{{$totalStudents}}</span><span>+</span>
										<p>Students Enrolled</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-book"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">{{$totalCourses}}</span><span>+</span>
										<p>Online Available Courses</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-favorites-button"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">15</span><span>+</span>
										<p>ISO Certificates Awarded</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-group"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">{{$totalInstructors}}</span><span>+</span>
										<p>Teachers Registered</p>
									</div>
								</div>
							</div>
							<!-- /counter -->
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
		============================================= -->



    {{-- Include Footer Component --}}
    <x-footer />