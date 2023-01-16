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
    </style>
</head>

<body>
    <h1>Header 1</h1>
    <p>paragraph 1</p>
    <?php foreach ($scenarios as $scenario) :

    ?>

        <p><?= $scenario->scenarionumber, " ", $scenario->Question ?> </p>
        <form method="post" action="">
            <input name="Answer" />
            <input type="submit" value="submit!" />
        </form>
    <?php endforeach ?>
</body>

</html>