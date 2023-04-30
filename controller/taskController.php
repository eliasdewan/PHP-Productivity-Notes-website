<?php
//session_start();

if (isset($_POST["taskTitleInput"]) && $_POST["taskTitleInput"] !== "") {
    
$newTask = new Task();
$newTask->taskTitle = $_POST["taskTitleInput"];
$newTask->taskDescription = $_POST['taskDescriptionInput'];
$newTask->timeAllocation = $_POST["timeAllocation"];; // 60 minutes
$newTask->priority = $_POST["priority"] ?? 9;
$newTask->dueDate = $_POST["dueDate"]?? 2023-04-19;//"";
$newTask->projectId = 0;
$newTask->progress = $_POST["progress"] ?? 0;
$newTask->userId = $_SESSION['user']->userId ?? 0;
$newTask->isDocument = $_POST["isDocument"];
addTask($newTask);

header("Location: " . $_SERVER['REQUEST_URI']);
exit;
}

$taskAction = $_POST['taskAction'] ?? '';

// for task editing 
switch ($taskAction) {
    case 'edit':
        $title = $_POST['taskTitleEdit'] ?? '';
        $description = $_POST['taskDescriptionEdit'] ?? '';
        $priority=$_POST['priority'] ?? '';
        $progress = $_POST['progress'] ?? '';
        $timeAllocation = $_POST['timeAllocation'] ?? '';
        $dueDate = $_POST['dueDate'];
        $projectId= $_POST['projectId'] ?? 0;
        $isDocument = $_POST['isDocument'] ?? '';
        $id = $_POST['taskId'] ?? '';


        updateTask($title,$description,$priority,$progress,$timeAllocation,$dueDate,$projectId,$isDocument,$id);
        break;
    case 'delete':
        $id = $_POST['taskId'] ?? '';
        // Implement delete here
        echo ">in the task remove=" . $id;
        removeTask($id);
        break;
}


//$tasks = getAllTasks();

$tasks = getTasksByUserId($_SESSION['user']->userId ?? 0); // For now using user id 0

//print_r($_SESSION['user']->userId);
require_once("../view/taskView.php")
?>