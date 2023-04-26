function initializeEditor() {
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ]
    });
}


$(document).ready(function () {
    $('textarea').on('input', function () {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });


    // To get the title of a website
    $('a').each(function () {
        var link = $(this).attr('href');
        if (link && link.startsWith('http')) {
            $.ajax({
                url: link,
                type: 'GET',
                success: function (response) {
                    var title = $(response).filter('title').text();
                    $('#website-title').append('<p>' + title + '</p>');
                }
            });
        }
    });


    function saveContent() {
        var content = tinymce.activeEditor.getContent();
        $.ajax({
          type: "POST",
          url: "save.php",
          data: { content: content }
        }).done(function( msg ) {
          alert( msg );
        });
      }
    


});
