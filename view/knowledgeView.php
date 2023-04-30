<form class="createInput" action="../controller/mainPageController.php" method="post">
    <input name="informationTitleAdd" type="text" placeholder="Title" required />
    <input type="hidden" name="isDocument" value="0">
    <label for="addCategorySelector">Choose a category:</label>
    <select id="addCategorySelector" name="infromationCategorySelector">
        <option value="book">Book quotes</option>
        <option value="web">Weblink</option>
        <option value="user">Custom text</option>
        <option value="knowledge">Book quotes</option>
        <option value="iframe">iframe</option>
    </select>
    <textarea name="informationDescriptiomInput" placeholder="Data / use a / ifram from youtube or soundcloud" class="createInformationDetails auto-height"></textarea>

    <input type="Submit" value="Create" class="createButton" name="createInformationButton" />

</form>
<div class="checkboxes">
    <label>
        <input type="checkbox" name="book" checked> Book
    </label>
    <label>
        <input type="checkbox" name="user" checked> Custom
    </label>
    <label>
        <input type="checkbox" name="web" checked> Web
    </label>
    <label>
        <input type="checkbox" name="knowledge" checked> Knowledge
    </label>
    <label>
        <input type="checkbox" name="iframe" checked> iframe
    </label>
</div>

<?php
foreach ($knowledgeList as $knowledge) : ?>
    <div class="card spyInput <?= $knowledge->knowledgeCategory ?>">
        <form action="../controller/mainPageController.php" method="POST">
            <?php
            if ($knowledge->knowledgeCategory == "web") :

                $url = $knowledge->knowledgeDescription;
                $html = file_get_contents($url);
                preg_match("/<title>(.+)<\/title>/siU", $html, $matches);
                $title = (count($matches) >= 2) ? $matches[1] : "No title found";

            ?>
                <span>WEB ELEMENT</span>
                <input placeholder="Update Title" name="knowledgeTitleEdit" class="titleKN" type="text" value="<?= $knowledge->knowledgeTitle ?>">
                <a href="<?= $knowledge->knowledgeDescription ?>" target="_blank"><?= $title ?></a>
                <!--   <div class="descriptionKN"> <?= $knowledge->knowledgeDescription ?></div>-->
                <input placeholder="USE a url" name="knowledgeDescriptionEdit" class="descriptionKN" type="text" value="<?= $knowledge->knowledgeDescription ?>">

            <?php
            elseif ($knowledge->knowledgeCategory == "iframe") : ?>
                <span>IFRAME</span>
                <input placeholder="Update Title" name="knowledgeTitleEdit" class="titleKN" type="text" value="<?= $knowledge->knowledgeTitle ?>">
                <!--<?= $knowledge->knowledgeDescription ?>-->
                <!--   <div class="descriptionKN"> <?= $knowledge->knowledgeDescription ?></div>-->

                <button class="load-iframe"> Load iframe</button>
                <input placeholder="USE a iframe link" name="knowledgeDescriptionEdit" class="descriptionKN" type="text" value="<?= htmlspecialchars($knowledge->knowledgeDescription) ?>">



            <?php
            else : ?>

                <input placeholder="Update Title" name="knowledgeTitleEdit" class="titleKN" type="text" value="<?= $knowledge->knowledgeTitle ?>"><!-- for now using title but is $task->taskDescription ?> -->
                <textarea class="auto-height" name="knowledgeDescriptionEdit" type="text" name="taskDescriptionEdit"><?= $knowledge->knowledgeDescription ?></textarea>
                <div class="descriptionKN"> <?= $knowledge->knowledgeCategory ?></div>

            <?php endif; ?>
            <!-- INFORMATION BUTTONS HERE -->
            <div class="buttons">
                <input type="hidden" name="knowledgeId" value="<?= $knowledge->knowledgeId ?>">
                <?php if (!$knowledge->fixed) : ?>
                    <button type="submit" name="knowledgeAction" value="edit">Edit</button>
                    <button type="submit" name="knowledgeAction" value="delete">Delete</button>
                <?php endif; ?>

            </div>
        </form>
    </div>
<?php endforeach; ?>