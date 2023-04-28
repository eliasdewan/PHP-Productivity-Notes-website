<?php
require_once "../model/knowledge.php";
require_once "../model/task.php";
require_once "dataAccess.php";




// Checking the submit was pressed
if (isset($_POST["taskTitleInput"]) && $_POST["taskTitleInput"] !== "") {

    $newTask = new stdClass();
    $newTask->taskTitle = $_POST["taskTitleInput"];
    $newTask->taskDescription = $_POST["taskDescriptiomInput"];
    $newTask->timeAllocation = 60; // 60 minutes
    $newTask->priority = 1;
    $newTask->dueDate = "2023-04-19";
    $newTask->strategyId = 1;

    addTask($newTask);
    unset($_POST['taskTitleInput']);
}

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

$taskAction = $_POST['taskAction'] ?? '';

//echo "HELLO THIS IS TESTING";
//echo $knowledgeAction."knowledge";
//echo $taskAction." task";

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
        updateKnowledge($title,$description,$id);
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

// for task editing 
switch ($taskAction) {
    case 'edit':
        $id = $_POST['taskId'] ?? '';
        $title = $_POST['taskTitleEdit'] ?? '';
        $description = $_POST['taskDescriptionEdit'] ?? '';
        updateTask($title,$description,$id);
        break;
    case 'delete':
        $id = $_POST['taskId'] ?? '';
        // Implement delete here
        echo ">in the task remove=" . $id;
        removeTask($id);
        break;
}
//echo "FYP ";

$users = getAllUsers();
$scenarios = getAllScenario();
$projects = getAllProjects();
$sections = getAllSections();

$tasks = getAllTasks();
$knowledgeList = getAllKnowledge();
//print_r($tasks[0]);
//print_r($knowledgeList[0]);
//print_r($users);
//echo '<br/>';



//print_r($scenarios);
//echo '<br/>';
//echo '<p>PROJECTS</p>';
//print_r($projects);

/* TEST FOR DATABASE
echo '<br/>';
echo '<br/>';
echo '<p>SECTIONS</p>';
print_r($sections);
echo '<br/>';
echo '<br/>';
*/

//print_r($tasks);
//echo '<br/>';

// user -> projects[project] -> sections[section] -> tasks[task] 

/*
foreach ($users as $user) {
    //$userProjects = [];
    $user->projects = [];
    foreach ($projects as $project) {
        $project->sections = [];
        foreach ($sections as $section) {
            $section->tasks = [];
            foreach ($tasks as $task) {
                if ($task->sectionid == $section->sectionid) {
                    array_push($section->tasks, $task);
                }
            }
            if ($section->projectid == $project->projectid) {
                array_push($project->sections, $section);
            }
        }
        if ($project->userid == $user->userid) {
            // array_push($userProjects, $project);
            array_push($user->projects, $project);
        }
    }
    //  $user->projects = $userProjects;
}*/

/* TEST FOR ADDING THINGS FROM DATABASE
echo '<br/>';
echo '<br/>';
echo '<p>ADDED all things</p>';
print_r($users);

*/


require_once "../view/header.php";
require_once "../view/mainpage.php";
