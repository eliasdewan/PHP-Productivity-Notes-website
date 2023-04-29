


// USe ajax from the controller url
$(document).ready(function () {
/*
    $('form:not(.no-ajax)').submit(function (event) {
        event.preventDefault();
        var form = this;
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr('action').split('/').pop(),
            type: $(this).attr('method'),
            data: formData,
            success: function (response) {
                $(form)[0].reset();
                location.reload();
            }
        });
    });*/




    $('.createTask').submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: 'mainPageController.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                $('.createTask')[0].reset(); // reset form
                location.reload(); // reload page

            },
            error: function (xhr, status, error) {
            }
        });
    }); 

})