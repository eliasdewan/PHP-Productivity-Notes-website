<?php

// Checking the submit was pressed


if (isset($_POST["createInformationButton"]) && $_POST["informationTitleAdd"] !== "") {
    $newInfromation = new Knowledge();
    $newInfromation->knowledgeTitle = $_POST["informationTitleAdd"];
    $newInfromation->knowledgeDescription = $_POST["informationDescriptiomInput"];
    $newInfromation->knowledgeCategory = $_POST["infromationCategorySelector"];
    unset($_POST['createInformationButton']);

    addKnowledge($newInfromation);
}


// FOR EDIT AND DELETE BUTTONS
$knowledgeAction = $_POST['knowledgeAction'] ?? '';



switch ($knowledgeAction) {
    case 'add':
        echo "in the add";
        // code for adding a new item
        break;
    case 'edit':
        $id = $_POST['knowledgeId'] ?? '';
        $title = $_POST['knowledgeTitleEdit'] ?? '';
        $description = $_POST['knowledgeDescriptionEdit'] ?? '';
        //print_r($title."".$description." ".$id);
        updateKnowledge($title, $description, $id);
        // Implement update code for data acess
        echo "in the edit";

        // redirect to the main page after updating
        break;
    case 'delete':
        $id = $_POST['knowledgeId'] ?? '';
        echo "in the delete";
        removeKnowledge($id);

        // code for deleting the item from the database
        // redirect to the main page after deleting
        break;
    default:
}


$knowledgeList = getAllKnowledge();



require_once '../view/knowledgeView.php';
?>