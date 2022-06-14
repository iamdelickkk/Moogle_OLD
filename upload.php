<?php
include 'db/connection.php';
if(isset($_GET['upload'])){
    if(!empty($_GET['name']) or !empty($_GET['link']) or !empty($_GET['keywords']) or !empty($_GET['bio'])){
        $name = $_GET['name'];
        $keywords = $_GET['keywords'];
        $link = $_GET['link'];
        $bio = $_GET['bio'];
        $query = mysqli_query($conn, "SELECT * FROM websites WHERE link='".$link."'");
        if(mysqli_num_rows($query) > 0){

            $error = 'Данный сайт уже есть в Moogle!';
        
        }else{
            $query = "INSERT INTO websites (`id`, `name`, `link`, `keywords`, `description`) VALUES ('', '$name', '$link','$keywords', '$bio')";
            $conn->query($query);
            $msg = 'Ваш сайт был успешно выложен';
        }
    }
    else{
        $error = 'Введите все данные!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moogle - Найдется всё!</title>
    <link rel="stylesheet" href="styles/index.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <style>
        .textbox{
            margin-bottom: 10px;
        }
    </style>
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
    <div style="margin-top: 20px;">
        <center>
            <img src="img/logotype.png" class="logo"/><br>
            <h1>Выложить вебсайт</h1>
            <form method="get">
                <?php if(isset($error)){ echo '<div class="warning">'.$error.'</div><br>'; } ?>
                <?php if(isset($msg)){ echo '<div class="msg">'.$msg.'</div><br>'; } ?>
                <input type="text" class="textbox" name="name" id="textbox" placeholder="Название сайта" value=""/><br>
                <input type="text" class="textbox" name="link" id="textbox" placeholder="Ссылка" value=""/><br>
                <input type="text" class="textbox" name="keywords" id="textbox" placeholder="Ключевые слова чтобы найти данный сайт (через запятую!!!!)" value=""/><br>
                <textarea type="text" class="textbox" name="bio" id="textbox" placeholder="Описание сайта"></textarea><br>
                <input type="submit" name="upload" class="button" value="Выложить"/>
            </form>
        </center>
    </div>
    <div></div>
    <script src="js/index.js"></script>
</body>
</html>