<?php


//The submission xmlwriter_start_element_ns#




$scenarioList = getAllScenario(); // For now using default
$scenarioList = getAllScenario($_SESSION['user']->userId ?? 0); // For now using default

?>