$(document).ready(function() {
    // Make an AJAX request to fetch courses from your API
    $.ajax({
        url: '/api/courses', 
        method: 'GET',
        dataType: 'json',
        success: function(courses) {
            // Populate the course container with fetched courses
            displayCourses(courses);
        },
        error: function(error) {
            console.error('Error fetching courses:', error);
        }
    });

    function displayCourses(courses) {
        var courseContainer = $('#courseContainer');
        // Loop through courses and append HTML for each course to the container
        $.each(courses, function(index, course) {
            // Check if image is empty or not equal to "image1.jpg"
            // var imageUrl = (course.image && course.image !== "image1.jpg") ? course.image : 'assets/img/course/banner.png';

            var courseHtml = `
                <div class="col-md-4">
                    <div class="best-course-pic-text relative-position">
                        <!-- Your existing HTML structure for each course -->
                        <div class="best-course-pic relative-position">
                            <img src="${course.image}" alt="">
                            <!-- Other course details -->
                            <div class="course-details-btn">
                                <a href="/course/${course.id}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                            </div>
                            
                        </div>
                        <div class="best-course-text">
                            <div class="course-title mb20 headline relative-position">
                                <h3><a href="/course/${course.id}">${course.title}</a></h3>
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
    }
});