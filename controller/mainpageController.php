<?php
require_once "dataAccess.php";

// Checking the submit was pressed
if (isset($_POST["taskTitleInput"]) && $_POST["taskTitleInput"] !== ""){

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


echo "FYP ";
$users = getAllUsers();
$scenarios = getAllScenario();
$projects = getAllProjects();
$sections = getAllSections();
$tasks = getAllTasks();
//print_r($users);
echo '<br/>';

//print_r($scenarios);
//echo '<br/>';
echo '<p>PROJECTS</p>';
print_r($projects);

echo '<br/>';
echo '<br/>';
echo '<p>SECTIONS</p>';
print_r($sections);
echo '<br/>';
echo '<br/>';
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
echo '<br/>';
echo '<br/>';
echo '<p>ADDED all things</p>';
print_r($users);





require_once "../view/mainpage.php";
