<?php
session_start();

require_once "../model/user.php";
require_once "dataAccess.php";


if (isset($_POST['login'])) {
    // Login button was pressed, process login
    $username = $_POST['username'];
    $password = $_POST['password'];

    //dataacess get user


    if (getUser($username, $password)) {
        // Add to session
        $_SESSION["user"] = getUser($username, $password);
       // print_r($_SESSION["user"]);
       // print_r($_SESSION["user"]->userId);
        

        header("Location: mainPageController.php");
        exit();
    } else {
        $error_message = 'Invalid username or password.';
    }
} elseif (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if (!checkUserName($username)) {
        $newUser = new user();
        $newUser->userName = $username;
        $newUser->password = $password;
        addUser($newUser);
    } else {
        $error_message = 'username taken';
    }



    header("Location: loginController.php");
    exit();
}






require_once "../view/header.php";

require_once "../view/loginView.php";
