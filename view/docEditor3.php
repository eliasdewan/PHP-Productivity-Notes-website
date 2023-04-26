<!DOCTYPE html>
<html>

<head>
    <title>
        Doc Editor
    </title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <h1>Doc Editor</h1>
        <nav>
            <a href="#">TIMER</a>
            <a href="#">SEARCH</a>
            <a href="#">SRATEGY</a>
            <a href="#">REFLECTION</a>
            <a href="#">WORD PROCESSING</a>
        </nav>
    </header>


    <textarea name="editor"></textarea>

    <script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>





</body>


</html>