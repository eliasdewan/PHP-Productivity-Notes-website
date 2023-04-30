<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="../script.js"></script>
    <script type="text/javascript" src="../ajax.js"></script>


    <script src="https://cdn.tiny.cloud/1/jzc5hw3saurqozgvn95t59pw7dywf4j01ck37hmxovsxbcpw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <h1>Work environment</h1>
        <nav>
            <a href="mainPageController.php">HOME</a>
            <a href="#" id="popup-trigger">TIMER</a>
            <a href="#">SEARCH</a>
            <a href="#">PROJECT</a>
            <a href="scenarioPageController.php">SCENARIO</a>
            <a href="docEditorController.php" onclick="redirect(event)">WORD PROCESSING</a>
                <a href="loginController.php?logout"><?= $_SESSION['user']->userName ?? 'Guest' ?><br>Logout</a>
        </nav>
    </header>


    <div id="popup">

        <div class="popup-content">
            <button class="close-btn">X</button>
            <h2>Pomodoro Timer</h2>
            <p>Set timer length (in minutes): <input type="number" id="timer-length" value="15"></p>
            <p>Set Break length (in minutes): <input type="number" id="break-length" value="5"></p>
            <button id="start-btn">Start</button>
            <button id="stop-btn">Stop</button>
            <div id="timer"><span id="mainTimer"> 00:00 </span><br>End time: 00:00</div>
        </div>
    </div>





</body>

</html>