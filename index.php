<?php
require_once "dataAccess.php";
echo "FYP ";

$scenarios = getAllScenario();
print_r($scenarios);

require_once "mainpage.php";

?>