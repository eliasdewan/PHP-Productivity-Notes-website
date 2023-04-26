<!DOCTYPE html>
<html>

<head>
    <title>
        Document Editor
    </title>
    
    <script src="https://cdn.tiny.cloud/1/jzc5hw3saurqozgvn95t59pw7dywf4j01ck37hmxovsxbcpw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
</head>

<body>

    <form method="post" onsubmit="saveContent()">
        <textarea class="editor">
     <!-- EDITOR AREA -->
  </textarea>
  <input type="submit" value="Save">
    </form>
    <button onclick="initializeEditor()">Initialize Editor</button>
</body>

</html>