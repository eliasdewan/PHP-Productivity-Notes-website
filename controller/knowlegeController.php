<?php

// Checking the submit was pressed


if (isset($_POST["createInformationButton"]) && $_POST["informationTitleAdd"] !== "") {
    $newInfromation = new Knowledge();

    $newInfromation->knowledgeTitle = $_POST["informationTitleAdd"];
    $newInfromation->knowledgeDescription = $_POST["informationDescriptiomInput"];
    $newInfromation->knowledgeCategory = $_POST["infromationCategorySelector"];
    $newInfromation->userId = $_SESSION['user']->userId ?? 0; //$_POST["infromationCategorySelector"];
    $newInfromation->isDocument = 0; //$_POST["infromationCategorySelector"];
    $newInfromation->sortOrder = 0; //$_POST["infromationCategorySelector"];


    unset($_POST['createInformationButton']);
    addKnowledge($newInfromation);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;

    //print_r($newInfromation);
}


// FOR EDIT AND DELETE BUTTONS
$knowledgeAction = $_POST['knowledgeAction'] ?? '';

switch ($knowledgeAction) {
    case 'add':
        //echo "in the add";
        // code for adding a new item
        break;
    case 'edit':
        $id = $_POST['knowledgeId'] ?? '';
        $title = $_POST['knowledgeTitleEdit'] ?? '';
        $description = $_POST['knowledgeDescriptionEdit'] ?? '';
        //$isDocument = $_POST['isDocument'] ?? '';
        $isDocument = 0;
        //print_r($title."".$description." ".$id);
        updateKnowledge($title, $description, $isDocument, $id);
        // Implement update code for data acess
        //echo "in the edit";

        // redirect to the main page after updating
        break;
    case 'delete':
        $id = $_POST['knowledgeId'] ?? '';
        //echo "in the delete";
        removeKnowledge($id);

        // code for deleting the item from the database
        // redirect to the main page after deleting
        break;
    default:
}


$knowledgeList = getKnowledgeByUserId($_SESSION['user']->userId ?? 0); // For now using default



require_once '../view/knowledgeView.php';
