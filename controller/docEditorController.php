<?php
// Model where to store required
require_once "dataAccess.php";
if (isset($_POST["content"]) && $_POST["content"] !== ""){

    $content = $_POST['content'];
    insertDatabase($content);
}

require_once "../view/docEditor.php";