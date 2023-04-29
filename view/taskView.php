<div class="createInput">
    <form class="create" action="../controller/mainPageController.php" method="post">
        <input name="taskTitleInput" type="text" placeholder="Title" class="createTaskTitle" required />
        <input type="hidden" name="isDocument" value="0">
        <button type="button" onclick="addClassEditorButton.call(this); changeIsDocumentValue(this)">Toggle Editor</button>
        <textarea name="taskDescriptiomInput" placeholder="Details" class="createTaskDetails auto-height "></textarea>
        

        <input type="Submit" value="Create" class="createButton" name="createTaskButton" />
    </form>
</div>
<?php
foreach ($tasks as $task) : ?>
    <div class="card spyInput">

        <form action="../controller/mainPageController.php" method="POST">
            <input class="titleKN spyInput" type="text" name="taskTitleEdit" value="<?= $task->taskTitle ?>">
            <div class="titleKN"> <?= $task->taskId ?></div>
            <textarea class="auto-height " type="text" name="taskDescriptionEdit"><?= $task->taskDescription ?></textarea>
            <input type="hidden" name="isDocument" value="<?= $task->isDocument ?>">

            <!-- BUTTONS FOR TASKS -->
            <div class="buttons">


                <input type="hidden" name="taskId" value="<?= $task->taskId ?>">
                <button type="submit" name="taskAction" value="edit">Edit</button>
                <button type="submit" name="taskAction" value="delete">Delete</button>

            </div>
        </form>

    </div>
<?php endforeach; ?>