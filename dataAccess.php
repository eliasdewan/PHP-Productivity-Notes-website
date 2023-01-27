<?php

//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "fyp";



$pdo = new PDO(
    "mysql:host=".$servername.";dbname=".$db,
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
function getAllTasks()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM task");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}










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
