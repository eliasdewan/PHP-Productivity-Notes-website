<?php

//session_start();

$servername = "localhost";
$username = "k2056101";
$password = "testpass";
$db = "db_k2056101";


// PDO connection to use later
$pdo = new PDO(
    "mysql:host=" . $servername . ";dbname=" . $db,
    $username,
    $password,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);


function getAllUsers()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM user");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
function getAllProjects()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM project");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
function getAllSections()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM section");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
function getAllScenario()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM scenario");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

/// FIXED CALSSES


## TASK FUNCTIONS
function getAllTasks()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM task ORDER BY taskid DESC");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Task");
    //$results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function getTasksByUserId($id)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM task WHERE userId = ? ORDER BY taskid DESC");
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Task");
    //$results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}


function addTask($newTask)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO task (taskTitle,taskDescription,timeAllocation,priority,dueDate,strategyId,isDocument ) VALUES (?,?,?,?,?,?,?)");
    $statement->execute([$newTask->taskTitle,$newTask->taskDescription,$newTask->timeAllocation,$newTask->priority,$newTask->dueDate,$newTask->strategyId,$newTask->isDocument]); // execute will go into the previous line ? point
}
function removeTask($taskId)
{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM task WHERE taskId = ?");
    $statement->execute([$taskId]); // execute will go into the previous line ? point
}
function updateTask($title,$description,$isDocument,$id) // UPDATE TASK STRING VALUES QUOTED
{
    global $pdo;
    $statement = $pdo->prepare("UPDATE task SET taskTitle = ?, taskDescription = ?, isDocument=? WHERE  taskId = ?");
    $statement->execute([$title,$description,$isDocument,$id]); // execute will go into the previous line ? point
}

// KNOWLEGE FUNCTIONS
function getAllKnowledge()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM knowledge ORDER BY knowledgeId DESC");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Knowledge");
    return $results;
}

function getKnowledgeByUserId($id)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM knowledge WHERE userId = ? OR fixed = 1 ORDER BY knowledgeId DESC");
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Knowledge");
    return $results;
}

function addKnowledge($newKnowledge)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO knowledge (knowledgeTitle,knowledgeDescription,knowledgeCategory ) VALUES (?,?,?)");
    $statement->execute([$newKnowledge->knowledgeTitle,$newKnowledge->knowledgeDescription,$newKnowledge->knowledgeCategory]); // execute will go into the previous line ? point

}

function removeKnowledge($knowledgeId)
{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM knowledge WHERE knowledgeId = ?");
    $statement->execute([$knowledgeId]); // execute will go into the previous line ? point
}

function updateKnowledge($title,$description,$isDocument,$id) // UPDATE TASK STRING VALUES QUOTED
{
    print_r($title." ".$description." ".$isDocument." ".$id);
    global $pdo;
    $statement = $pdo->prepare("UPDATE knowledge SET knowledgeTitle = ?, knowledgeDescription = ?, isDocument = ? WHERE  knowledgeId = ?");
    $statement->execute([$title,$description,$isDocument,$id]); // execute will go into the previous line ? point
}



function insertDatabase($content){
    // function to implement or maybe to not implement ++++++++++++++++
}






