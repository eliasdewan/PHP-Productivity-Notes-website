<?php
require_once "dataAccess.php";
echo "FYP ";
$users = getAllUsers();
$scenarios = getAllScenario();
$projects = getAllProjects();
$sections = getAllSections();
$tasks = getAllSections();
//print_r($users);
echo '<br/>';

//print_r($scenarios);
//echo '<br/>';
print_r($projects);
echo '<br/>';
echo '<br/>';
print_r($sections);
echo '<br/>';
echo '<br/>';
//print_r($tasks);
//echo '<br/>';


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
print_r($users);

require_once "mainpage.php";
