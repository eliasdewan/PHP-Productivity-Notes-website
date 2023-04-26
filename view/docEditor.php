<!DOCTYPE html>
<html>

<head>
    <title>
        Doc Editor
    </title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../script.js"></script>
    <script src="https://cdn.tiny.cloud/1/jzc5hw3saurqozgvn95t59pw7dywf4j01ck37hmxovsxbcpw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <h1>Doc Editor</h1>
        <nav>
            <a href="http://localhost/fyp/">HOME</a>
            <a href="#">TIMER</a>
            <a href="#">SEARCH</a>
            <a href="">SRATEGY</a>
            <a href="#">REFLECTION</a>
            <a href="http://localhost/fyp/view/docEditor.php">WORD PROCESSING</a>
        </nav>
    </header>

    <form method="post" onsubmit="saveContent()">
        <textarea class="editor">
     <!-- EDITOR AREA -->
  </textarea>
  <input type="submit" value="Save">
    </form>
    <button onclick="initializeEditor()">Initialize Editor</button>
</body>



</html>