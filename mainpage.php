<!DOCTYPE html>
<html>

<head>
    <title>
        This is the title
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #ffffff;
            background-repeat: no-repeat;
            background-position: top left;
            background-attachment: fixed;
        }

        h1 {
            font-family: Arial, sans-serif;
            color: #000000;
            background-color: #ffffff;
        }

        p {
            font-family: Georgia, serif;
            font-size: 14px;
            font-style: normal;
            font-weight: normal;
            color: #000000;
            background-color: #ffffff;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Header Here</h1>
    <p>paragraph Here</p>
    <form method="post" action="">
        <input name="Answer" />
        <input type="submit" value="submit!" />
    </form>
    <?php foreach ($scenarios as $scenario) : ?>
        <p><?= $scenario->scenarionumber, " ", $scenario->Question ?> </p>
    <?php endforeach ?>

    <?php foreach ($projects as $project) : ?>
        <p><?= $project->projectid, " ", $project->priority ?> </p>
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


</body>

</html>