<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./smile.png">
    <link rel="stylesheet" href="./style.css">
    <title>31.03.23</title>
</head>
<body>
<!-- sudo apachectl stop || start || restart -->

<?php
    echo "1 задание";
    echo "<br />";
    $name = "PHP";
    echo "Hello! My name is '$name'<br /><br />";
 
    echo "2 задание";
    echo "<br />";
    $age = 29;
    echo "I’m $age<br /><br />";

    echo "3 задание";
    echo "<br />";
    $a = 1;
    $b = 2;
    $rez = $a + $b;
    echo "$a + $b = $rez<br /><br />";

    echo "4 задание";
    echo "<br />";
    $x = 1;
    $y = 2;
    echo "$y$x<br /><br />";

    echo "5 задание";
    echo "<br />";

    ?>


<P>Какой безалкогольный напиток первым был взят в космос?:
<form method="POST" action="./php/index.php">

    <input href="index.php?can=1" id="pepsi" name="can[]" type="radio" value="Пепси">
    <label for="pepsi">Пепси</label><br>

    <input href="index.php?can=2" id="fanta" name="can[]" type="radio" value="Фанта">
    <label for="fanta">Фанта</label><br>

    <input href="index.php?can=3" id="shveps" name="can[]" type="radio" value="Швэпс">
    <label for="shveps">Швэпс</label><br>

    <input href="index.php?can=4" id="cocaCola" name="can[]" type="radio" value="Кока-Кола">
    <label for="cocaCola">Кока-Кола</label><br>

    <input type="submit" value="Отправить">
    <div>Не работает, нужна помощь</div>
</form>

<P>Какая служба электронной почты принадлежит компании Microsoft?:
<form method="POST" action="./php/index.php">
    <input name="Outlook" type="checkbox" value="Outlook">Outlook
    <br>
    <input name="YahooMail" type="checkbox" value="YahooMail">Yahoo Mail
    <br>
    <input name="Gmail" type="checkbox" value="Gmail">Gmail
    <br>
    <input name="iCloudMail" type="checkbox" value="iCloudMail">iCloud Mail
    <br>
    <input name="Hotmail" type="checkbox" value="Hotmail">Hotmail<br>
    <input type="submit" value="Отправить">
</form>
<br>

<p>Кто является национальным животным Шотландии?:</p>
<form method="POST" action="./php/index.php">
    <textarea name='mydata'>\n
    </textarea><br />
    <input type="submit" value="Отправить"><br /><br />
</form>

<?php
    echo "6 задание";
    echo "<br />";
    $tag = "data-gr-c-s-loaded='true'";
    $background_color = "blue";
    $color = "red";
    $width = "100px";
    $height = "100px";
    echo "background_color = blue<br />";
    echo "color = red<br />";
    echo "width = 100px<br />";
    echo "height = 100px<br /><br />";
    echo "<div style='background-color:$background_color; color:$color; width:$width; height:$height'>Hello</div><br /><br />";

?>





</body>
</html>