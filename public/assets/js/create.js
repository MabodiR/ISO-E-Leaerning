$(document).ready(function() {
    // Submit form using AJAX
    $("#CreateCourse").submit(function(e) {
      e.preventDefault(); // Prevent the form from submitting the traditional way

      // Get form data
      var formData = $("#CreateCourse").serialize();
      // Make an AJAX request
      console.log(formData)
      $.ajax({
        url: "/courses",
        type: "POST",
        data: formData,
        success: function(response) {
          // Clear the form
          $(".contact_form")[0].reset();
          $('.invalid-feedback').empty();
        },
        error: function(xhr, status, error) {
          // Handle error
          console.error(status);
      
          // Handle validation errors
          if (xhr.status === 422) {
            var errors = xhr.responseJSON.errors;
            // Clear previous error messages
            $('.invalid-feedback').empty();
            // Display error messages for each field
            $.each(errors, function (field, messages) {
              var inputField = $('[name="' + field + '"]');
              inputField.addClass('is-invalid');
              var errorContainer = inputField.next('.invalid-feedback');
              errorContainer.html(messages.join('<br>'));
            });
          }
        }
      });
      
    });
  });