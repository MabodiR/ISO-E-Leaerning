$('#categoryDropdown').change(function() {

    var selectedCategory = $(this).val();
    var courseContainer = $('#courseContainer');
    courseContainer.empty();

    // Make an AJAX request to fetch courses for the selected category
    $.ajax({
        url: '/getcourses/' + selectedCategory,
        method: 'GET',
        dataType: 'json',
        success: function(courses) {
            // Loop through courses and append HTML for each course to the container
            $.each(courses, function(index, course) {
                // Check if image is empty or not equal to "image1.jpg"
                var imageUrl = (course.image && course.image !== "image1.jpg") ? course.image : 'banner.png';

                var courseHtml = `
                    <div class="col-md-4">
                        <div class="best-course-pic-text relative-position">
                            <!-- Your existing HTML structure for each course -->
                            <div class="best-course-pic relative-position">
                                <img src="${imageUrl}" alt="">
                                <!-- Other course details -->
                                <div class="course-details-btn">
                                    <a href="/course/${course.id}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    <h3><a href="#">${course.title}</a></h3>
                                </div>
                                <div class="course-meta">
                                    <span class="course-category">${course.category.name}</span>
                                    <span class="course-author">${course.students.length} Students</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                `;

                courseContainer.append(courseHtml);
            });
        },
        error: function(error) {
            console.error('Error fetching courses:', error);
        }
    });
});
