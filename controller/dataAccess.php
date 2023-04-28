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

function addTask($newTask)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO task (taskTitle,taskDescription,timeAllocation,priority,dueDate,strategyId ) VALUES (?,?,?,?,?,?)");
    $statement->execute([$newTask->taskTitle,$newTask->taskDescription,$newTask->timeAllocation,$newTask->priority,$newTask->dueDate,$newTask->strategyId]); // execute will go into the previous line ? point
}
function removeTask($taskId)
{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM task WHERE taskId = ?");
    $statement->execute([$taskId]); // execute will go into the previous line ? point
}
function updateTask($title,$description,$id) // UPDATE TASK STRING VALUES QUOTED
{
    global $pdo;
    $statement = $pdo->prepare("UPDATE task SET taskTitle = ?, taskDescription = ? WHERE  taskId = ?");
    $statement->execute([$title,$description,$id]); // execute will go into the previous line ? point
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

function updateKnowledge($title,$description,$id) // UPDATE TASK STRING VALUES QUOTED
{
    global $pdo;
    $statement = $pdo->prepare("UPDATE knowledge SET knowledgeTitle = ?, knowledgeDescription = ? WHERE  knowledgeId = ?");
    $statement->execute([$title,$description,$id]); // execute will go into the previous line ? point
}



function insertDatabase($content){
    // function to implement or maybe to not implement ++++++++++++++++
}







/// Other examples for later use ---------------
function getAllVehicles()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM vehicles");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Vehicle");
    return $results;
}

function getVehiclesByAll($queryString)
{
    global $pdo;
    $statement = $pdo->prepare($queryString); //secial query
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Vehicle");
    // print_r($results);
    return $results;
}

function getVehiclesByType($carType)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM vehicles WHERE vehicleType = ? "); // added=  OR givenName = ?" OR givenName = ?
    $statement->execute([$carType]); // execute will go into the previous line ? point
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Vehicle");
    return $results;
}





//Implement other get by id and other stuff
function getVehiclesById($Id)   // fetch all returns array - fetch returns one thing
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM vehicles WHERE id = ? "); // added=  OR givenName = ?" OR givenName = ?
    $statement->execute([$Id]); // execute will go into the previous line ? point
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
    return $results[0];
}


// Add neqw Vehicles to Database

function addNewVehicle($newVehicle)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO vehicles (id,img,registration, vehicleType, model, make, year ,price , colour, seatCapacity, licenceRequired ) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $statement->execute([$newVehicle->id, $newVehicle->img, $newVehicle->registration, $newVehicle->vehicleType, $newVehicle->model, $newVehicle->make, $newVehicle->year, $newVehicle->price, $newVehicle->colour, $newVehicle->seatCapacity, $newVehicle->licenceRequired]); // execute will go into the previous line ? point

}

// - for all logged user data here

if (isset($_SESSION["user"]) && !$_SESSION["user"]->userId == null) {
    $loggedUser = $_SESSION["user"]->givenName;
} else {
    $loggedUser = "Login";
}

// Create user
function addUser($user)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO user (userId,type,givenName,surname,address,town,county,postcode,email,password) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $statement->execute([$user->userId, $user->type, $user->givenName, $user->surname, $user->address, $user->town, $user->county, $user->postcode, $user->email, $user->password]); // execute will go into the previous line ? point   
}


// Gets user
function getUser($email)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM user WHERE email = ? ");
    $statement->execute([$email]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "user");
    if (empty($results)) {
        return false;
    };
    return $results[0];
}


//SELECT MIN(sal) FROM emp

function getUserLastId()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT MAX(userId) FROM user ");
    $statement->execute();
    $results = $statement->fetch(PDO::FETCH_NUM);
    //if (empty($results)){return false;}; 
    return $results[0];
}




function getAllBookings()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM booking");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Booking");
    return $results;
}

function getBooking($bookingId)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM booking WHERE bookingId = ? "); // added=  OR givenName = ?" OR givenName = ?
    $statement->execute([$bookingId]); // execute will go into the previous line ? point
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Booking");
    return $results[0];
}

function getBookingsByDate($date)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM booking WHERE date = ? ");
    $statement->execute([$date]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Booking");
    return $results;
}



// For database when booking confirmed  - update to 1 day for easyer
function addBooking($booking)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO booking (date,vehicleId,userId) VALUES (?,?,?)");
    $statement->execute([$booking->date, $booking->vehicle->id, $booking->userId]); // execute will go into the previous line ? point

}

function addEventBooking($eventBooking)
{

    global $pdo;
    $statement = $pdo->prepare("INSERT INTO eventBooking (userId,eventId,quantity) VALUES (?,?,?)");
    $statement->execute([$eventBooking->userId, $eventBooking->eventId, $eventBooking->quantity]);
}


function getAllEvents()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM events");
    $statement->execute();
    $events = $statement->fetchAll(PDO::FETCH_CLASS, "Event");
    return $events;
}

function getEventsById($Id)   // fetch all returns array - fetch returns one thing
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM events WHERE eventId = ? "); // added=  OR givenName = ?" OR givenName = ?
    $statement->execute([$Id]); // execute will go into the previous line ? point
    $events = $statement->fetchAll(PDO::FETCH_CLASS, "Event");
    return $events[0];
}
