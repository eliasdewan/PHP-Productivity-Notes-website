$(document).ready(function() {
    //reload on submit
    $('form:not(.no-ajax)').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: formData,
        success: function(response) {
          $(this)[0].reset();
          location.reload();
        }
      });
    });
  });
  