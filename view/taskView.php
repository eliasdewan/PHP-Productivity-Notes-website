<button hidden name="disableEditors" id="disableEditorsButton">Close All Editors</button>
<button hidden name="openEditors" id="openEditorsButton">Open Allowed Editors</button>
<div class="createInput">
    <form class="create createTask" action="../controller/mainPageController.php" method="post">
        <input name="taskTitleInput" type="text" placeholder="Title" class="createTaskTitle" required />
        <input type="hidden" name="isDocument" value="0">

        <textarea name="taskDescriptiomInput" type="text" placeholder="Details" class="createTaskDetails auto-height "></textarea>

        <button type="button" onclick="addClassEditorButton.call(this); changeIsDocumentValue(this)">Toggle Editor</button>
        <label for="priority">Priority:</label>
        <select class="priority" name="priority">
            <option value="low">Low</option>
            <option value="normal" selected>Normal</option>
            <option value="high">High</option>
        </select>
        <label for="progress">Progress:</label>
        <input type="range" class="progress" name="progress" min="0" max="100" value="1" step="20">
        <label for="myDateTime">Select a Deadline:</label>
        <input type="datetime-local" class="myDateTime forEdit" name="dueDate" value="<?= date('Y-m-d\TH:i', strtotime('+1 day')) ?>">
        <label for="time-input">How Long should it take:</label>
        <input type="time" class="time-input" name="timeAllocation" value="00:05">





        <input type="Submit" value="Create" class="createButton" name="createTaskButton" />
    </form>
</div>
<?php
foreach ($tasks as $task) : ?>
    <div class="card spyInput">

        <form action="../controller/mainPageController.php" method="POST">
            <input class="titleKN spyInput" type="text" name="taskTitleEdit" value="<?= $task->taskTitle ?>">
            <?php if ($task->isDocument == 1) : ?>
                <span>This is a Document, use editor</span>
            <?php endif; ?>
            <div class="titleKN"> <?= $task->taskId ?></div>
            <div class="html" hidden> <?= $task->taskDescription ?></div>
            <textarea class="auto-height " type="text" name="taskDescriptionEdit"><?= $task->taskDescription ?></textarea>
            <button type="button forEdit" onclick="addClassEditorButton.call(this); changeIsDocumentValue(this)">Toggle Editor</button>

            <label for="priority">Priority:</label>
            <select class="priority forEdit" name="priority">
                <option value="low" <?= ($task->priority == 'low') ? 'selected' : '' ?>>Low</option>
                <option value="normal" <?= ($task->priority == 'normal') ? 'selected' : '' ?>>Normal</option>
                <option value="high" <?= ($task->priority == 'high') ? 'selected' : '' ?>>High</option>
            </select>

            <label for="progress">Progress:</label>
            <input type="range" class="progress forEdit" name="progress" min="0" max="100" value="<?= $task->progress?>" step="20">
            <label for="myDateTime">Deadline:</label>
            <input type="datetime-local" class="myDateTime forEdit" name="dueDate" value="<?= $task->dueDate?>">
            <label for="time-input">Time Allocation:</label>
            <input type="time" class="time-input forEdit" name="timeAllocation" value="<?= $task->timeAllocation?>">






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