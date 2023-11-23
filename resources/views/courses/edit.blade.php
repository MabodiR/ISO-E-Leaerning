{{-- Include Header Component --}}
    <x-header />


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Update <span>Course</span></h2>
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


	<!-- Start of create course form
		============================================= -->
		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Shape excellence with ISO standards</span>
					<h2>Update<span> Course</span></h2>
				</div>
				
				<div class="contact_third_form">
				<form id="CreateCourse" class="contact_form" action="/update/{{$course->id}}" method="Post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<input class="title" name="title" type="text" placeholder="Course title." value="{{ $course->title }}" required>
								@error('title')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<select id="categoryDropdown" name="category" required>
									<option value="{{$course->category->id}}">{{$course->category->name}}</option>
									<!-- Add your category options here -->
								</select>
								@error('category')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<select id="languageDropdown" name="language" required>
									<option value="{{ $course->langauge }}">{{ $course->langauge }}</option>
									<option value="English">English</option>
									<option value="French">French</option>
									<option value="Afrikaans">Afrikaans</option>
								</select>
								@error('language')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<input class="duration" name="duration" type="number" placeholder="Duration (in days)" value="{{ $course->duration }}" required>
								@error('duration')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="topics" name="topics" type="number" placeholder="Number of Topics" value="{{ $course->topics }}" required>
								@error('topics')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="price" name="price" type="text" placeholder="Price" value="{{ $course->price }}" required>
								@error('price')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
					</div><br/><br/>
					<!-- <div class="row">
						<div class="col-md-12 mb-5">
							<div class="contact-info">
								<label for="image">Course Image</label>
								<input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
								@error('image')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
					</div> -->
					<textarea style="padding-top:1000px!;" id="editor" name="description" placeholder="Course Description." >{{ $course->description }}</textarea>
				
					@error('description')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
					<div class="nws-button text-center gradient-bg text-uppercase">
						<button type="submit" value="Submit">Create Course <i class="fas fa-caret-right"></i></button>
					</div>
				</form>
				</div>
			</div>
		</section>
	<!-- End of create course area form
		============================================= -->
		<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.catch( error => {
					console.error( error );
				} );
         </script>

    {{-- Include Footer Component --}}
    <x-footer />