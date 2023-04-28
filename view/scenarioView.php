<h1> SCENARIO PAGE</h1>
<h2>This is where you answer some questions for self reflection and understandng your goal</h2>
<form class="createInput" action="../controller/scenarioPageController.php" method="post">
    <input name="scenarioTitleAdd" type="text" placeholder="Scenario" required />

    <textarea name="scenarioDescriptiomInput" placeholder="More details" class="createInformationDetails"></textarea>
    <input type="Submit" value="Create" class="createButton" name="createInformationButton" />

</form>


<?php
foreach ($scenarioList as $scenario) : ?>
    <div class="card spyInput">
        <form action="../controller/scenarioPageController.php" method="POST">

            <input placeholder="Update Title" name="knowledgeTitleEdit" class="titleKN" type="text" value="<?= $scenario ?>"><!-- for now using title but is $task->taskDescription ?> -->
            <textarea class="auto-height" name="knowledgeDescriptionEdit" type="text" name="taskDescriptionEdit"><?= $scenario ?></textarea>
            <div class="descriptionKN"> <?= $scenario ?></div>
            <!-- INFORMATION BUTTONS HERE -->
            <div class="buttons">
                <input type="hidden" name="knowledgeId" value="<?= $scenario ?>">
                <button type="submit" name="knowledgeAction" value="edit">Edit</button>
                <button type="submit" name="knowledgeAction" value="delete">Delete</button>

            </div>
        </form>
    </div>
<?php endforeach; ?>