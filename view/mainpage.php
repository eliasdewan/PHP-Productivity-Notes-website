<!DOCTYPE html>
<html>
<!-- part of the head loaded from header filer -->

<head>
    <title>
        Work Environment
    </title>
</head>

<body>
<input class = "bigSearch" type="text" id="knowledgeSearchInput" placeholder="Search All text">
    <!-- WORKING FROM HERE -->

    <div class="container">
        <div class="working-container">
            <?php include '../controller/taskController.php'; ?>
        </div>

        <!-- INFORMATION SECTION -->
        <div class="information-container ">
        <?php include '../controller/knowlegeController.php'; ?>
        </div>
    </div>




</body>

</html>