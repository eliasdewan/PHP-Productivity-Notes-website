<form class="createInput" action="../controller/mainPageController.php" method="post">
    <input name="informationTitleAdd" type="text" placeholder="Title" required />

    <label for="addCategorySelector">Choose a category:</label>
    <select id="addCategorySelector" name="infromationCategorySelector">
        <option value="user">Custom text</option>
        <option value="book">Book quotes</option>
        <option value="web">Weblink</option>
    </select>
    <textarea name="informationDescriptiomInput" placeholder="Data / use a url" class="createInformationDetails"></textarea>
    <input type="Submit" value="Create" class="createButton" name="createInformationButton" />

</form>

<div class="checkboxes">
    <label>
        <input type="checkbox" name="book" checked> Book
    </label>
    <label>
        <input type="checkbox" name="custom" checked> Custom
    </label>
    <label>
        <input type="checkbox" name="web" checked> Web
    </label>
    <label>
        <input type="checkbox" name="knowledge" checked> Knowledge
    </label>
</div>

<?php
foreach ($knowledgeList as $knowledge) : ?>
    <div class="card spyInput">
        <form action="../controller/mainPageController.php" method="POST">
            <?php
            if ($knowledge->knowledgeCategory == "web") :
                $url = $knowledge->knowledgeDescription;
                $html = file_get_contents($url);
                preg_match("/<title>(.+)<\/title>/siU", $html, $matches);
                $title = (count($matches) >= 2) ? $matches[1] : "No title found";

            ?>
                <span>WEB ELEMENT</span>
                <link rel="icon" href="<?= $favicon_link ?>" type="image/png">
                <img src="http://www.google.com/s2/favicons?domain=<?= $knowledge->knowledgeDescription ?>" width="100" height="100" />
                <input placeholder="Update Title" name="knowledgeTitleEdit" class="titleKN" type="text" value="<?= $knowledge->knowledgeTitle ?>">
                <a href="<?= $knowledge->knowledgeDescription ?>" target="_blank"><?= $title ?></a>
                <!--   <div class="descriptionKN"> <?= $knowledge->knowledgeDescription ?></div>-->
                <input placeholder="USE a url" name="knowledgeDescriptionEdit" class="descriptionKN" type="text" value="<?= $knowledge->knowledgeDescription ?>">
            <?php
            else : ?>

                <input placeholder="Update Title" name="knowledgeTitleEdit" class="titleKN" type="text" value="<?= $knowledge->knowledgeTitle ?>"><!-- for now using title but is $task->taskDescription ?> -->
                <textarea class="auto-height" name="knowledgeDescriptionEdit" type="text" name="taskDescriptionEdit"><?= $knowledge->knowledgeDescription ?></textarea>
                <div class="descriptionKN"> <?= $knowledge->knowledgeCategory ?></div>

            <?php endif; ?>
            <!-- INFORMATION BUTTONS HERE -->
            <div class="buttons">
                <input type="hidden" name="knowledgeId" value="<?= $knowledge->knowledgeId ?>">
                <button type="submit" name="knowledgeAction" value="edit">Edit</button>
                <button type="submit" name="knowledgeAction" value="delete">Delete</button>

            </div>
        </form>
    </div>
<?php endforeach; ?>