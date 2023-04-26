<h1>Header Here</h1>
<p>paragraph Here</p>

<?php foreach ($scenarios as $scenario) : ?>
    <p><?= $scenario->scenarionumber, " ", $scenario->Question ?> </p>
<?php endforeach ?>


<?php foreach ($users as $user) :
    $userRowSpan = 0;
    foreach ($user->projects as $project) {
        $userRowSpan += count($project->sections);
    }
?>
    <table>
        <tr>
            <th> user name</th>
            <th> prject title</th>
            <th> section</th>
        </tr>


        <?php
        foreach ($user->projects as $project) :
            $projectRowSpan = 0;
            $projectRowSpan += count($project->sections); // for now while there is no task

            //  foreach ($project->sections as $section) { }

            foreach ($project->sections as $section) : ?>
                <tr>
                    <?php if ($section ==  $project->sections[0] and $project ==  $user->projects[0]) : ?>
                        <td rowspan="<?= $userRowSpan  ?>"><?= $user->username . $userRowSpan  ?></td>
                    <?php endif ?>

                    <?php if ($section ==  $project->sections[0]) : ?>
                        <td rowspan="<?= $projectRowSpan  ?>"><?= $project->title . $projectRowSpan  ?></td>
                    <?php endif ?>

                    <td><?= $section->title ?></td>
                </tr>
        <?php
            endforeach;
        endforeach ?>
    </table>

<?php endforeach ?>