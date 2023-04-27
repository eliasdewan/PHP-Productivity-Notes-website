<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <h1>Work environment</h1>
        <nav>
            <a href="mainPageController.php" >HOME</a>
            <a href="#" id="popup-trigger">TIMER</a>
            <a href="#">SEARCH</a>
            <a href="#">SRATEGY</a>
            <a href="#">REFLECTION</a>
            <a href="docEditorController.php" onclick="redirect(event)">WORD PROCESSING</a>
        </nav>
    </header>


    <div id="popup">
        <div class="popup-content">
            <button class="close-btn">X</button>
            <h2>Popup Content</h2>
            <p>Set timer length (in minutes): <input type="number" id="timer-length" value="15"></p>
            <p>Set Break length (in minutes): <input type="number" id="break-length" value="5"></p>
            <button id="start-btn">Start</button>
            <button id="stop-btn">Stop</button>
            <div id="timer">Time remaining: 00:00:00<br>End time: 00:00:00</div>
        </div>
    </div>





</body>

</html>