<?php
include 'db/connection.php';
$search = $_GET['search'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_GET['search']; ?> - Результаты поиска в Moogle</title>
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
    <div>
        <div class="head">
            <div class="headelem">
                <a href="index.php"><img class="logotype" src="img/logotype.png"/></a>
            </div>
            <form method="get" class="headelem">
                <input type="text" class="anothertextbox" value="<?php echo $_GET['search']; ?>" name="search" placeholder="Найдётся всё!"/>
                <input type="submit" class="anotherbutton" value="Поиск"/>
            </form>
        </div>
        <div style="display: flex; border-bottom: 1px solid #dedede;">
            <div class="results">
                <span class="idk">Поиск</span>
            </div>
        </div>
        <div class="display: flex;width:100">
            <div class="weborimage">
                <div class="searchelement sactive"><a href="#" style="color: #dd4b39;text-decoration: none;">Веб</a></div>
            </div>
            <div class="searchresults">
                <?php
                $query = "SELECT * FROM websites WHERE keywords LIKE '%$search%'";
                $data = mysqli_query($conn, $query);
                if(mysqli_num_rows($data) < 1){
                    echo '<div class="warning">Ничего не найдено по вашему запросу <b>'.$search.'</b>.<br>Вы можете выложить свой вебсайт!<a href="upload.php">Вот тут</a></div>';
                }
                else if(empty($search)){
                    echo '<div class="warning">Введите запрос!</div>';
                }
                else{
                    while($row = mysqli_fetch_array($data)){
                        echo '<div style="margin-bottom: 10px;">
                        <a href="'.$row[2].'">'.$row[1].'</a><br>
                        <a style="color: #093; text-decoration: none; font-size:12px;" href="'.$row[2].'">'.$row[2].'</a>
                        <p style="color: #333;font-size:12px;margin: 0px;">'.$row[4].'</p>
                    </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>