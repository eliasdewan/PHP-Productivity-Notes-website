<?php
// import scenario
 require_once "../model/scenario.php";
 require_once "../model/answer.php";
 require_once "../model/user.php";
require_once "dataAccess.php";
session_start();
ob_start();

if(!isset($_SESSION['user'])){
    header("Location: loginController.php");
        exit();

}




//$scenarioList=;

require_once "../view/header.php";
require_once "../view/scenarioPage.php";

?>