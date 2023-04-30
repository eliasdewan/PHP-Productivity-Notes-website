
// USe ajax from the controller url
$(document).ready(function () {

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