 <?php
 session_start();
    //$current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //echo $current_url;

    header("Location: controller/mainPageController.php");
    exit();
    ?>
