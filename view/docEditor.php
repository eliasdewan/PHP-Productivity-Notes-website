<!DOCTYPE html>
<html>

<head>
    <title>
        Document Editor
    </title>

</head>

<body>
    <form method="post" action="../controller/mainPageController.php">

        <input hidden type="text"  name="taskTitleInput" value="UNTITLED">
        <input hidden type="text"  name="isDocument" value="">

        <textarea class="editor pageEditor" style="height:200px" name="taskDescriptionInput" required> </textarea>
        <input type="submit" value="Create" name="createTaskButton">
    </form>
    <button onclick="initializeEditor()">Initialize Editor</button>
</body>

</html>