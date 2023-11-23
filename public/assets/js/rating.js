 $(document).ready(function() {

        $('input[name="rating"]').click(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally
            // Get the average rating from the server-side variable
            

             // Get form data
             var formData = $("#ratingForm").serialize();

            // Add the CSRF token to your AJAX request
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Perform an AJAX request to submit the rating data
            $.ajax({
                type: 'POST',
                url: '/ratings',
                data: formData,
                success: function(response) {
                  
                    toastr.success(response.message);
                    // Clear the form 
                    $('#ratingForm')[0].reset();
                    setTimeout(function() {
                        location.reload();
                    }, 3000); // 3000 milliseconds = 3 seconds
                },
                error: function(error) {
                    toastr.error('Error submitting rating. Please try again.');
                    console.error('Error submitting rating:', error);
                }
            });
        });
    });