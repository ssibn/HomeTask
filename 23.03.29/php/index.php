<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../smile.png">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<?php
//    Что я тут только не пробовал
//    $i = 0;
//    $can[] = $_POST["can[]"];
//    $can1 = $_POST["can[1]"];
//    $can2 = $_POST["can[2]"];
//    $can3 = $_POST["can[3]"];
//    $can4 = $_POST["can[4]"];
//    console($can);
//    echo $can[1];
//    for ($i = 0; i <= $can[$i]; $i++){
//        if ($_POST["can[2]"]){
//            echo "Ты прав ", $_POST["can[]"] ;
//            echo "<br>Ты прав ", $_POST["can[$i]"] ;
//            echo "<br><a href='../index.html'>Назад</a>";
//
//        } else {
//            echo "Ты не прав ", $_POST["can"];
//            echo "<br>Ты не прав ", $_POST["can[]"];
//            echo "<br><a href='../index.html'>Назад</a>";
//        }
//    }

//  $can[] = array($_POST["can[]"]);
//  for($i=0; $i<count($can); $i++){
//    echo $can[$i] . "<br / >";
//  }

    if (($_POST["Outlook"] && $_POST["Hotmail"]) && ($_POST["YahooMail"] || $_POST["Gmail"] || $_POST["iCloudMail"])){
        echo "Ты как бы молодец, но не все твои ответы верны<br>";
        echo "<a href='../index.php'>Назад</a><br><br>";
    } elseif (($_POST["Outlook"] || $_POST["Hotmail"]) && ($_POST["YahooMail"] || $_POST["Gmail"] || $_POST["iCloudMail"])){
        echo "Ты прав на половину)) и у тебя также выбраны не верные ответы<br>";
        echo "<a href='../index.php'>Назад</a><br><br>";
    } elseif ($_POST["YahooMail"] ||$_POST["Gmail"] || $_POST["iCloudMail"]){
        echo "Не правильный выбор))<br>";
        echo "<a href='../index.php'>Назад</a><br><br>";
    } elseif ($_POST["Outlook"] && $_POST["Hotmail"]){
        echo "Ты молодец))<br>";
        echo "<a href='../index.php'>Назад</a><br><br>";
    }elseif ($_POST["Outlook"] || $_POST["Hotmail"]){
        echo "Ты просто прав на половину))<br>";
        echo "<a href='../index.php'>Назад</a><br><br>";
    } else {
        echo "Для начала что-нибудь выбери<br>";
        echo "<a href='../index.php'>Назад</a><br><br>";
    }
    if($_GET["name"] || $_GET["email"] || $_GET["number"]){
        echo "Приветствую ", $_GET["name"];
        echo "<br>Ваша почта: ", $_GET["email"];
        echo "<br>Ваш телефон: ", $_GET["number"];
        echo "<a href='../index.php'>Назад</a>";
    }
    $edinorog = "Единорог";
    if($_POST["mydata"] == $edinorog){
        echo "Ты правильно ответил!";
        echo "<br><a href='../index.php'>Назад</a>";
    } else {
        echo "Это не: ", $_POST["mydata"];
        echo "<br><a href='../index.php'>Назад</a>";
    }
?>

</body>
</html>