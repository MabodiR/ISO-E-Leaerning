$(document).ready(function() {
    // Load user's courses on page load
    
 if( $('#userCoursesTable').length){
    loadUserCourses();
 }
    // Function to load user's courses
    function loadUserCourses() {
        $.ajax({
            url: '/mycourses',
            type: 'GET',
            success: function(response) {
                // Clear existing table rows
                $('#userCoursesTable tbody').empty();

                // Append new rows with course data
                $.each(response, function(index, course) {
                    appendCourseRow(course);
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    // Function to append a new course row to the table
    function appendCourseRow(course) {
        var ratings = course.ratings;

        // Calculate the average rating
        var averageRating = ratings.length;

        // Round the average rating to the nearest integer
        var roundedAverage = Math.round(averageRating);
 
        var row = '<tr>' +
            '<td>' +
            '<div class="course-list-img-text">' +
            '<div class="course-list-img">' +
            '<img src="' + course.image + '" alt="">' +
            '</div>' +
            '<div class="course-list-text">' +
            '<h3><a target="_blank" href="/course/' + course.id + '">' + course.title + '</a></h3>' +
            '<div class="course-meta">' +
            '<span class="course-category bold-font"><a href="#">R' + course.price + '</a></span>' +
            '<div class="course-rate ul-li">' +
            '<ul>';

        // Assuming the course has a rating property
        for (var i = 0; i < roundedAverage; i++) {
            row += '<li><i class="fas fa-star"></i></li>';
        }

        row += '</ul>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="course-type-list">' +
            '<span>' + course.category.name + '</span>' +
            '</div>' +
            '</td>' +
            '<td>' + course.topics + '</td>' +
            '<td>' + course.duration + ' days </td>' +
            '<td><a href="/course/edit/' + course.id + '" class="edit-course" data-course-id="' + course.id + '"><i  class="fas fa-edit"></i></a></td>' +
            '<td><a href="#" class="delete-course" data-course-id="' + course.id + '"><i style="color:red;" class="fas fa-times"></i></a></td>' +
            '</tr>';

        $('#userCoursesTable tbody').append(row);
    }

    // Handle delete course click
    $('#userCoursesTable').on('click', '.delete-course', function(e) {
        e.preventDefault();
        var courseId = $(this).data('course-id');

        // Confirm delete
        var confirmDelete = confirm('Are you sure you want to delete this course?');
        if (confirmDelete) {
            // Perform delete operation
            $.ajax({
                url: '/delete-course/' + courseId,
                type: 'DELETE',
                success: function(response) {
                    // Reload courses after successful delete
                    loadUserCourses();
                    alert('Course deleted successfully.');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('Error deleting course.');
                }
            });
        }
    });
});