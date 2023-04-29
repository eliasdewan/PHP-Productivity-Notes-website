function addClassEditorButton() {
    if ($(this).siblings('.html').is(':visible')) {
        $(this).siblings('.html').toggle();
      }
      else if($(this).siblings('input[name="isDocument"]').val() == 1){
        $(this).siblings('.html').toggle();
      }


    var textarea = $(this).siblings('textarea');
    //textarea.toggleClass('editor');
    if (textarea.hasClass('editor')) {
        textarea.removeClass('editor');
        tinymce.remove('textarea:not(.editor)');
        textarea.removeClass('editor');
        textarea.siblings('input[name="isDocument"]').val(0);

    } else {
        textarea.addClass('editor');
        textarea.siblings('input[name="isDocument"]').val(1);
        initializeEditor(textarea);
        
    }




}
function initializeEditor() {
    tinymce.init({
        selector: 'textarea.editor',
        plugins: ' autoresize anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        autoresize_min_height: 30,
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ]
    });
}


function changeIsDocumentValue(button) {
 //   if($(button).siblings('input[name="isDocument"]').val() == 1){
//        $(button).siblings('input[name="isDocument"]').val(0);
//    }
//    else{
 //       $(button).siblings('input[name="isDocument"]').val(1);
 //   }
}

function redirect(event) {
    event.preventDefault(); // Prevent the link from opening normally
    var targetUrl = event.currentTarget.getAttribute("href"); // Get the target URL from the href attribute of the link
    window.location.href = targetUrl; // Redirect the page to the target URL
}


// Get the button and popup elements


// For the j query
$(document).ready(function () {

    //$(this).val = $(this).val

    $('input[name="isDocument"]').each(function () {
        if ($(this).val() == 1) {
            //$(this).siblings('textarea').addClass('editor');
            $(this).siblings('textarea').toggle();
            $(this).siblings('.html').toggle();

            //initializeEditor();
        }
    })

    $("#disableEditorsButton").click(function() {
        console.log("Trigger");
        tinymce.remove("textarea.editor");
    });

    $("#openEditorsButton").click(function() {
        console.log("open trigger");
        initializeEditor();
    });



    // For ifram loding
    $('button.load-iframe').click(function() {
        var inputVal = $(this).next('input').val();
        $(this).replaceWith(inputVal)
      });


    $(document).ready(function () {
        $('.auto-height').each(function () {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });
    });


    // For css

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
        }).done(function (msg) {
            alert(msg);
        });
    }

    // For timer ----- ####
    (function autoPomodoroTimer() {
        const popupTrigger = document.getElementById('popup-trigger');
        const popup = document.getElementById('popup');
        const closeBtn = document.querySelector('.close-btn');
        const startBtn = document.getElementById('start-btn');
        const stopBtn = document.getElementById('stop-btn');

        popupTrigger.addEventListener('click', () => {
            popup.classList.toggle('show');
        });

        closeBtn.addEventListener('click', () => {
            popup.classList.toggle('show');
        });

        startBtn.addEventListener('click', startTimer);
        stopBtn.addEventListener('click', stopTimer);

        let timerInterval;
        let endTime;
        let timeRemaining;

        function startTimer() {
            const timerLength = document.getElementById('timer-length').value;
            endTime = Date.now() + timerLength * 60 * 1000;
            timeRemaining = endTime - Date.now();
            updateTimer();
            timerInterval = setInterval(updateTimer, 1000);
        }

        function updateTimer() {
            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                startBreak();
                return;
            }

            timeRemaining = endTime - Date.now();
            const secondsRemaining = Math.floor(timeRemaining / 1000) % 60;
            const minutesRemaining = Math.floor(timeRemaining / 1000 / 60) % 60;
            //const hoursRemaining = Math.floor(timeRemaining / 1000 / 60 / 60);

            const timerDiv = document.getElementById('timer');
            timerDiv.innerHTML = `${minutesRemaining
                .toString()
                .padStart(2, '0')}:${secondsRemaining.toString().padStart(2, '0')}<br>End time: ${new Date(endTime)
                    .getMinutes()
                    .toString()
                    .padStart(2, '0')}:${new Date(endTime).getSeconds().toString().padStart(2, '0')}`;
        }


        function startBreak() {
            const breakLength = document.getElementById('break-length').value;

            endTime = Date.now() + breakLength * 60 * 1000;
            timeRemaining = endTime - Date.now();
            updateTimer();
            timerInterval = setInterval(updateTimer, 1000);
        }

        function stopTimer() {
            clearInterval(timerInterval);
        }
    })();





});
