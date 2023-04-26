<?php
require_once "../model/knowledge.php";
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


$knowledgeAction = $_POST['knowledgeAction'] ?? '';
echo "HELLO THIS IS TESTING";
echo $knowledgeAction;

switch ($knowledgeAction) {
    case 'add':
        echo "in the add";
        // code for adding a new item
        break;
    case 'edit':
        $id = $_POST['knowledgeId'] ?? '';
        echo "in the edit";

        // code for retrieving the item to be edited from the database
        // display the edit form with the item details prefilled
        break;
    case 'update':
        $id = $_POST['knowledgeId'] ?? '';
        echo "in the update";
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
//echo "FYP ";

$users = getAllUsers();
$scenarios = getAllScenario();
$projects = getAllProjects();
$sections = getAllSections();
$tasks = getAllTasks();
//print_r($users);
//echo '<br/>';

$knowledgeList = getAllKnowledge();

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
}

/* TEST FOR ADDING THINGS FROM DATABASE
echo '<br/>';
echo '<br/>';
echo '<p>ADDED all things</p>';
print_r($users);

*/



require_once "../view/mainpage.php";
