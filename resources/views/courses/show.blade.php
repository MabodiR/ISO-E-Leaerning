{{-- Include Header Component --}}
    <x-header />


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold"><span>{{$course->title}}</span></h2>
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


	<!-- Start of course details section
		============================================= -->
		<section id="course-details" class="course-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="course-details-item">
							<div class="course-single-pic mb30">
								<img src="{{asset('assets/img/course/bg.jpeg')}}" alt="">
							</div>
							<div class="course-single-text">
								<div class="course-title mt10 headline relative-position">
									<h3><a href="/course/{{$course->id}}"><b>{{$course->title}}.</b></a> </h3>
								</div>
								<div class="course-details-content">
									<p>{!!$course->description!!}</p>
								</div>

							</div>
						</div>
						<!-- /course-details -->

						<div class="course-review">
							<div class="section-title-2 mb20 headline text-left">
								<h2>Course <span>Reviews:</span></h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="ratting-preview">
										
										<div class="row">
											<div class="col-md-4">
												<div class="avrg-rating ul-li">
													<b>Average Rating</b>
													<span class="avrg-rate">{{ $course->ratings->avg('rating') ?? 'N/A' }}</span>
													<ul>
														@for ($i = 1; $i <= $course->ratings->avg('rating'); $i++)
															<li><i class="fas fa-star"></i></li>
														@endfor
													</ul>
													<b>{{ $course->ratings->count() }} Ratings</b>
												</div>
											</div>
											<div class="col-md-8">
												<div class="avrg-rating ul-li">
													<span>Details</span>
													@foreach([5, 4, 3, 2, 1] as $star)
														<div class="rating-overview">
															<span class="start-item">{{ $star }} Stars</span>
															<span class="start-bar"></span>
															<span class="start-count">{{ $course->ratings->where('rating', $star)->count() }}</span>
														</div>
													@endforeach
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- /review overview -->
						<div class="couse-comment">
							<div class="blog-comment-area ul-li about-teacher-2">
								<ul class="comment-list">
								@foreach ($course->comments as $comment)
									<li>
										<div class=" comment-avater">
										<img src="{{ asset('assets/img/course/default-avatar.png') }}" alt="">
										</div>

										<div class="author-name-rate">
											<div class="author-name float-left">
												BY: <span>{{ $comment->user->name ?? 'Anonymous' }} {{ $comment->user->surname ?? '' }}</span> 
											</div>
											<div class="comment-ratting float-right ul-li">
												<ul>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="time-comment float-right">{{ $comment->created_at->diffForHumans() }}</div>
										</div>
										<div class="author-designation-comment">
											<h3>{{ $comment->title }}</h3>
											<p>
											{{ $comment->comment }}
											</p>
										</div>
									</li>
								@endforeach	
								</ul>

								<div class="reply-comment-box">
									<div class="review-option">
										<div class="section-title-2  headline text-left float-left">
											<h2>Add  <span>Reviews.</span></h2>
										</div>
										<div class="review-stars-item float-right mt15">
											<span>Your Rating: </span>
											<form class="rating" id="ratingForm">
												@csrf
												<input type="text" name="course_id" hidden value="{{$course->id}}"/>
												<label>
													<input type="radio" name="rating" value="1" />
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="rating" value="2" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="rating" value="3" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>   
												</label>
												<label>
													<input type="radio" name="rating" value="4" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="rating" value="5" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
											</form>
										</div>
									</div>
									<div class="teacher-faq-form">
										<form method="POST"  data-lead="Comments">
										@csrf	
										 <input type="text" name="course_id" hidden value="{{$course->id}}"/>
											<div class="row">
												<div class="col-md-12">
													<label for="title">Title</label>
													<input type="text" name="title" id="title" required="required">
												</div>
											</div>
											<label for="comments">Write Review Here</label>
											<textarea name="comment" id="comments" rows="2" cols="20" required="required"></textarea>
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" value="Submit">Send Review</button> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="side-bar">
							<div class="course-side-bar-widget">
								<h3>Price <span>R{{$course->price}}</span></h3>
								<div class="genius-btn gradient-bg text-center text-uppercase  bold-font" style="width:100%!">
									<a href="#">Buy THis course <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
							<div class="enrolled-student">
								<div class="comment-ratting float-left ul-li">
								<ul>
									@for ($i = 1; $i <= $course->ratings->avg('rating'); $i++)
										<li><i class="fas fa-star"></i></li>
									@endfor
								</ul>
								</div>
								<div class="student-number bold-font">
									{{$course->students->count()}} Enrolled
								</div>
							</div>
							<div class="couse-feature ul-li-block">
								<ul>
									<li>Instructor <span>{{$course->user->name}}</span></li>
									<li>Language  <span>{{$course->language}}</span></li>
									<li>Topic Covered  <span>{{$course->topics}}</span></li>
									<li>Duration <span>{{$course->duration}} Days</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of course details section
		============================================= -->	


    {{-- Include Footer Component --}}
    <x-footer />