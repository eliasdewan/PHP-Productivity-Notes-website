<?php
require_once "../model/knowledge.php";
require_once "../model/task.php";
require_once "../model/user.php";
require_once "dataAccess.php";
session_start();

if(!isset($_SESSION['user'])){
    header("Location: loginController.php");
        exit();

}

//echo "HELLO THIS IS TESTING";
//echo $knowledgeAction."knowledge";
//echo $taskAction." task";


//echo "FYP ";

$users = getAllUsers();
$scenarios = getAllScenario();
$projects = getAllProjects();
$sections = getAllSections();

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
