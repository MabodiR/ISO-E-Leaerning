{{-- Include Header Component --}}
    <x-header />


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">My <span>Course/s</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item active">Courses</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


<!-- Start of my course content
		============================================= -->
		<section id="checkout" class="checkout-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Manage Courses</span>
					
				</div>
				<div class="checkout-content">
					<div class="row">
						<div class="col-md-12">
							<div class="order-item mb65 course-page-section">
								<div class="section-title-2  headline text-left">
									<h2><span>I</span>SO</h2>
								</div>

								<div class="course-list-view table-responsive">
									<table class="table" id="userCoursesTable">
										
										<thead>
											<tr class="list-head">
												<th>COURSE NAME</th>
												<th>COURSE TYPE</th>
												<th>TOPICS</th>
												<th>DURATION</th>
												<th>EDIT</th>
												<th>DELETE</th>
											</tr>
										</thead>
										<tbody>
											
											
										</tbody>
									</table>
								</div>
							</div>

						</div>

						
					</div>
				</div>
			</div>
		</section>
	<!-- End  of my courses content
		============================================= -->



    {{-- Include Footer Component --}}
    <x-footer />