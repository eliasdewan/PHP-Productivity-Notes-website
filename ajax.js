//$('form:not(.no-ajax)').submit(function (event) {
$('form.create').submit(function (event) {
    event.preventDefault();
    var form = this;
    var formData = $(this).serialize();
    $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: formData,
        success: function (response) {
            $(form)[0].reset();
            location.reload();
        }
    });
});