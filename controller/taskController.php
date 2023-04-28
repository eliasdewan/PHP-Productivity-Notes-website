<?php
if (isset($_POST["taskTitleInput"]) && $_POST["taskTitleInput"] !== "") {

$newTask = new Task();
$newTask->taskTitle = $_POST["taskTitleInput"];
$newTask->taskDescription = $_POST["taskDescriptiomInput"];
$newTask->timeAllocation = 60; // 60 minutes
$newTask->priority = 1;
$newTask->dueDate = "2023-04-19";
$newTask->strategyId = 1;

addTask($newTask);
unset($_POST['taskTitleInput']);
}

$taskAction = $_POST['taskAction'] ?? '';

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

$tasks = getAllTasks();

require_once("../view/taskView.php")
?>
