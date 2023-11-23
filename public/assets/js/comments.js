$(document).ready(function() {
// Submit the form using AJAX
    $('form[data-lead="Comments"]').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Get the form data
        var formData = $(this).serialize();

        // Add the CSRF token to your AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Perform an AJAX request to submit the form data
        $.ajax({
            type: 'POST',
            url: '/comments', // Replace with your actual submit URL
            data: formData,
            success: function(response) {
                // Handle the success response
                toastr.success(response.message);
                // Clear the form
                $('form[data-lead="Comments"]')[0].reset();
                setTimeout(function() {
                    location.reload();
                }, 3000); // 3000 milliseconds = 3 seconds
            },
            error: function(error) {
                // Handle the error response
                console.error('Error submitting review:', error);
                toastr.error('Error submitting review');
            }
        });
    });
});