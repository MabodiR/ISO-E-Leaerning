$(document).ready(function() {
    $("#registerUser").on("click", function() {
      var formData = $("#form-register").serialize();
      var form = $('#form-register')[0];
      var secureURL = "/register";
      var registerButton = $(this);
      registerButton.prop("disabled", true); // Disable the button
      registerButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');

      $.ajax({
        url: secureURL,
        method: "POST",
        data: formData,
        success: function(response) {
            $('#regModal').modal('hide');
            form.reset();
            form.classList.remove('was-validated');
            $('.invalid-feedback').empty();
            // Once the response is received, revert the button to its original state
            registerButton.prop("disabled", false); // Enable the button
            registerButton.text("Register");
            window.history.back();
        },
        error: function(xhr, status, error) {
          // Handle validation errors
          if (xhr.status === 422) {
            var errors = xhr.responseJSON.errors;
            // Clear previous error messages
            $('.invalid-feedback').empty();
            // Display error messages for each field
            $.each(errors, function (field, messages) {
              var inputField = $('#r_' + field);
              inputField.addClass('is-invalid');
              var errorContainer = inputField.next('.invalid-feedback');
              errorContainer.html(messages.join('<br>'));
            });
          // Once the response is received, revert the button to its original state
          registerButton.prop("disabled", false); // Enable the button
          registerButton.text("Register");
          }
        }
      });
    });
  });