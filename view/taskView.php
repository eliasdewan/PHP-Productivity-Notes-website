<div class="createInput">
    <form action="../controller/mainPageController.php" method="post">
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
            <form action="../controller/mainPageController.php" method="POST">
                <input type="hidden" name="taskId" value="<?= $task->taskId ?>">
                <button type="submit" name="taskAction" value="edit">Edit</button>
                <button type="submit" name="taskAction" value="delete">Delete</button>
            </form>
        </div>

    </div>
<?php endforeach; ?>