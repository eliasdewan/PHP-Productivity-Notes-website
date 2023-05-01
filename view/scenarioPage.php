<!DOCTYPE html>
<html>
<!-- part of the head loaded from header filer -->

<head>
    <title>
        Work Environment
    </title>
</head>

<body>
    <!-- WORKING FROM HERE -->
    <h1 > SCENARIO PAGE</h1>

    <div class="container">
        <!-- SCENARIO SECTION -->
        <div class="working-container">
        <?php include '../controller/scenarioController.php'; ?>
        </div>

        <!-- INFORMATION SECTION -->
        <div class="information-container ">
        <?php include '../controller/knowlegeController.php'; ?>
        </div>
    </div>

</body>

</html>