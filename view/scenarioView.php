<h1> SCENARIO PAGE</h1>

<?php
foreach ($answerList as $answer) : ?>
    <div>
        <div class="question"><?= $answer->question ?></div>
        <div class="answer"><?= nl2br($answer->answer) ?></div>
    </div>
<?php endforeach; ?>

<div>
  <form action="../controller/scenarioPageController.php" method="POST">
    <div class="form-container-scenario">
      <label for="selectedScenario">Choose a Question:</label>
      <select id="scenarioSelection" name="selectedScenario" autofocus>
      <option value="">SELECT A QUESTION</option>
        <?php foreach ($scenarioList as $scenario) : ?>
          <option value="<?= $scenario->question ?>"><?= $scenario->question ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-container">
      <label for="answerToQuestion">Insert Answer:</label>
      <textarea class="auto-height-scenario" name="answerToQuestion" placeholder="Insert Answer" required></textarea>
    </div>
    <input type="Submit" value="SEND" class="createButton" name="createAnswerButton" />
  </form>
</div>
    
</form>