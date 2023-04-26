<!DOCTYPE html>
<html>

<head>
    <title>
        This is the title
    </title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
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
            <div class="createTaskInput">
                <form action="../controller/mainpageController.php" method="post">
                    <input name="taskTitleInput" type="text" placeholder="Title" class="createTaskTitle" required />
                    <textarea name="taskDescriptiomInput" placeholder="Details" class="createTaskDetails"></textarea>

                    <input type="Submit" value="Create" class="createButton" name="createTaskButton" />
                </form>
            </div>
            <?php
            foreach ($tasks as $task) : ?>
                <div class="titleKN"> <?= $task->tasktitle ?></div>
                <div><?= nl2br($task->taskdescription) ?></div><!-- for now using title but is $task->taskDescription ?> -->
            <?php endforeach; ?>
        </div>
        <div class="information-section">
            <form action="../controller/mainpageController.php" method="post">
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

                <?php
                if ($knowledge->knowledgeCategory == "web") : ?>
                <span>WEB ELEMENT</span>
                <a href="<?= $knowledge->knowledgeDescription ?>" target="_blank">Link title</a>
                
                <?php
                else : ?>
                <div class="card">
                    <div class="titleKN"> <?= $knowledge->knowledgeTitle ?></div><!-- for now using title but is $task->taskDescription ?> -->
                    <div class="DescriptionKN"> <?= nl2br($knowledge->knowledgeDescription) ?></div>
                    <div class="DescriptionKN"> <?= $knowledge->knowledgeCategory ?></div>
                </div>
                <?php endif; ?>
                <div class="buttons">
                <form action="../controller/mainpageController.php" method="POST">
                    <input type="hidden" name="knowledgeId" value="<?= $knowledge->knowledgeId ?>">
                    <button type="submit" name="knowledgeAction" value="edit">Edit</button>
                    <button type="submit" name="knowledgeAction" value="delete">Delete</button>
                </form>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>