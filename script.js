$(document).ready(function() {
    $('textarea').on('input', function() {
      this.style.height = 'auto';
      this.style.height = this.scrollHeight + 'px';
    });



    $('a').each(function() {
        var link = $(this).attr('href');
        if (link && link.startsWith('http')) {
          $.ajax({
            url: link,
            type: 'GET',
            success: function(response) {
              var title = $(response).filter('title').text();
              $('#website-title').append('<p>' + title + '</p>');
            }
          });
        }
      });



  });