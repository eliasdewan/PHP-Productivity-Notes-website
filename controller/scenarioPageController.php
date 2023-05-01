<?php
// import scenario
 
require_once "dataAccess.php";
session_start();
ob_start();

if(!isset($_SESSION['user'])){
    header("Location: loginController.php");
        exit();

}




$scenarioList=[];

require_once "../view/header.php";
require_once "../view/scenarioPage.php";

?>