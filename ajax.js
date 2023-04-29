$(document).ready(function() {
    // Attach a submit event listener to all forms on the page
    $('form').submit(function(event) {
      // Prevent the default form submission behavior
      event.preventDefault();
  
      // Get the form data
      var formData = $(this).serialize();
  
      // Send an AJAX request to the form's action URL
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: formData,
        success: function(response) {
          // Reset the form after successful submission
          $(this)[0].reset();
          // Reload the page
          location.reload();
        }
      });
    });
  });
  