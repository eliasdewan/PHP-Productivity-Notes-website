<?php


if (isset($_POST["createAnswerButton"]) && $_POST["answerToQuestion"] !== ""&& $_POST["questionScenario"] !== "") {
    $newAnswer = new Answer();

    $newAnswer->answer = $_POST["answerToQuestion"];
    $newAnswer->question = $_POST["questionScenario"] ?? "NOT WORKING";
    $newAnswer->category = $_POST["infromationCategorySelector"] ?? "UNSET";
    $newAnswer->taskId = $_POST["taskId"]?? 0;
    $newAnswer->userId = $_SESSION['user']->userId ?? 0; 

    unset($_POST['createInformationButton']);
    addAnswer($newAnswer);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;

    //print_r($newInfromation);
}




$scenarioList = getAllScenario(); // For now using default

$answerList = getAnswersByuserId($_SESSION['user']->userId ?? 0); // For now using default


require_once "../view/scenarioView.php"
?>