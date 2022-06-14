<?php
include 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moogle - Найдется всё!</title>
    <link rel="stylesheet" href="styles/index.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <div style="display: flex; background-color: #2d2d2d;">
        <div class="menu">
            <div class="active" style="height: 29px; width: fit-content;">
                <a class="menuelements" style="color: white;" href="index.php">Moogle</a>
            </div>
            <div style="height: 29px; width: fit-content;">
                <a class="menuelements" style="line-height: 33px;" href="https://landograd.ru/landosoft">Landosoft</a>
            </div>
        </div>
    </div>
    <div class="main">
        <center>
            <img src="img/logotype.png" class="logo"/><br>
            <form method="get" action="search.php">
                <input type="text" class="textbox" name="search" id="textbox" value=""/><br>
                <input type="submit" name="results" class="button" value="Поиск в Moogle"/>
                <input type="button" class="button" onclick="document.getElementById('textbox').value = 'Я рад за тебя.';" value="Я чувствую себя счастливым"/><br>
            </form>
        </center>
    </div>
    <div></div>
    <script src="js/index.js"></script>
</body>
</html>