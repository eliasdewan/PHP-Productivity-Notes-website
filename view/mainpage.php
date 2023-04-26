<!DOCTYPE html>
<html>

<head>
    <title>
        Work Environment
    </title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../script.js"></script>
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <h1>Work environment</h1>
    </header>


    <!-- WORKING FROM HERE -->

    <div class="container">
        <div class="working-container">
            <div class="createInput">
                <form action="../controller/mainpageController.php" method="post">
                    <input name="taskTitleInput" type="text" placeholder="Title" class="createTaskTitle" required />
                    <textarea name="taskDescriptiomInput" placeholder="Details" class="createTaskDetails"></textarea>

                    <input type="Submit" value="Create" class="createButton" name="createTaskButton" />
                </form>
            </div>
            <?php
            foreach ($tasks as $task) : ?>
                <div class="card">
                    <div class="titleKN"> <?= $task->taskTitle ?></div>
                    <div class="titleKN"> <?= $task->taskId ?></div>
                    <div><?= nl2br($task->taskDescription) ?></div><!-- for now using title but is $task->taskDescription ?> -->

                    <!-- BUTTONS FOR TASKS -->
                    <div class="buttons">
                        <form action="../controller/mainpageController.php" method="POST">
                            <input type="hidden" name="taskId" value="<?= $task->taskId ?>">
                            <button type="submit" name="taskAction" value="edit">Edit</button>
                            <button type="submit" name="taskAction" value="delete">Delete</button>
                        </form>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <!-- INFORMATION SECTION -->
        <div class="information-section ">
            <form class="createInput" action="../controller/mainpageController.php" method="post">
                <input name="informationTitleAdd" type="text" placeholder="Title" required />

                <label for="addCategorySelector">Choose a category:</label>
                <select id="addCategorySelector" name="infromationCategorySelector">
                    <option value="user">Custom text</option>
                    <option value="book">Book quotes</option>
                    <option value="web">Weblink</option>
                </select>
                <textarea name="informationDescriptiomInput" placeholder="Data" class="createInformationDetails"></textarea>
                <input type="Submit" value="Create" class="createButton" name="createInformationButton" />

            </form>

            <?php
            foreach ($knowledgeList as $knowledge) : ?>
                <div class="card">
                    <?php
                    if ($knowledge->knowledgeCategory == "web") : ?>
                        <span>WEB ELEMENT</span>
                        <a href="<?= $knowledge->knowledgeDescription ?>" target="_blank">Link title</a>

                    <?php
                    else : ?>

                        <div class="titleKN"> <?= $knowledge->knowledgeTitle ?></div><!-- for now using title but is $task->taskDescription ?> -->
                        <div class="DescriptionKN"> <?= nl2br($knowledge->knowledgeDescription) ?></div>
                        <div class="DescriptionKN"> <?= $knowledge->knowledgeCategory ?></div>

                    <?php endif; ?>
                    <!-- INFORMATION BUTTONS HERE -->
                    <div class="buttons">
                        <form action="../controller/mainpageController.php" method="POST">
                            <input type="hidden" name="knowledgeId" value="<?= $knowledge->knowledgeId ?>">
                            <button type="submit" name="knowledgeAction" value="edit">Edit</button>
                            <button type="submit" name="knowledgeAction" value="delete">Delete</button>
                        </form>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>