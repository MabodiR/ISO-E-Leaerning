{{-- Include Header Component --}}
    <x-header />


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">ISO <span>Courses</span></h2>
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


	<!-- Start of course section
		============================================= -->
		<section id="course-page" class="course-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="short-filter-tab">
							<div class="shorting-filter  float-left">
								<span><b>Category</b></span>
								<select id="categoryDropdown">
									<option value="all" selected>All</option>
								</select>
							</div>
							
							<div class="shorting-filter float-right">
								<span><b>Visibility</b></span> 
								<select id="toggleDropdown">
									<option value="hide" >Hide All</option>
									<option value="show" selected>Show All</option>
								</select>
							</div>
						</div>

						<div class="genius-post-item">
							<div class="tab-container">
								<div id="tab1" class="tab-content-1 pt35">
									<div class="best-course-area best-course-v2">
										<div id="courseContainer" class="row"></div>
                                    </div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</section>
	<!-- End of course section
		============================================= -->


    {{-- Include Footer Component --}}
    <x-footer />