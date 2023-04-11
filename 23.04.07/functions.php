<?php
    if (($_POST["service"] || $_POST["numberService"] || $_POST["personalAccount"] || $_POST["message"] || $_POST["family"] || $_POST["family"] || $_POST["name"] || $_POST["surname"] || $_POST["phone"] || $_POST["email"] || $_POST["sDRegion"] || $_POST["locality"] || $_POST["street"] || $_POST["house"] || $_POST["apartament"]) != null || $_POST["checkbox"] == true || $_FILES['yourFile']['error'] >= 0){
        echo "<table><h2>Заказ клиента</h2>";

        if ($_POST["service"] != null){
            echo "<tr><th>Услуга: " . $_POST["service"] . "</th></tr>";
        }
        if ($_POST["numberService"] != null){
            echo "<tr><th>Номер услуги: " . $_POST["numberService"] . "</th></tr>";
        }
        if ($_POST["personalAccount"] != null){
            echo "<tr><th>Лицевой счет: " . $_POST["personalAccount"] . "</th></tr>";
        }
        if ($_POST["message"] != null){
            echo "<tr><th>Сообщение: " . $_POST["message"] . "</th></tr>";
        }
        if ($_POST["family"] != null){
            echo "<tr><th>Фамилия: " . $_POST["family"] . "</th></tr>";
        }
        if ($_POST["name"] != null){
            echo "<tr><th>Имя: " . $_POST["name"] . "</th></tr>";
        }
        if ($_POST["surname"] != null){
            echo "<tr><th>Отчество: " . $_POST["surname"] . "</th></tr>";
        }
        if ($_POST["phone"] != null){
            echo "<tr><th>Контактный телефон: " . $_POST["phone"] . "</th></tr>";
        }
        if ($_POST["email"] != null){
            echo "<tr><th>Электронная почта: " . $_POST["email"] . "</th></tr>";
        }
        if ($_POST["sDRegion"] != null){
            echo "<tr><th>Регион оказания услуги: " . $_POST["sDRegion"] . "</th></tr>";
        }
        if ($_POST["locality"] != null){
            echo "<tr><th>Населенный пункт: " . $_POST["locality"] . "</th></tr>";
        }
        if ($_POST["street"] != null){
            echo "<tr><th>Улица: " . $_POST["street"] . "</th></tr>";
        }
        if ($_POST["house"] != null){
            echo "<tr><th>№ дома: " . $_POST["house"] . "</th></tr>";
        }
        if ($_POST["apartament"] != null){
            echo "<tr><th>Квартира: " . $_POST["apartament"] . "</th></tr>";
        }
        if ($_POST["checkbox"] == true){
            echo "<tr><th>Согласен, на обработку данных</th></tr>";
        } else {
            echo "<tr><th style='color: red';>На обработку данных не согласен</th></tr>";
        }

        if($_FILES['yourFile']['error'] == 0){
            echo "<tr><th style='color:green;'>Файл успешно загружен на сервер, ошибок нет!</th></tr>";
        } elseif($_FILES['yourFile']['error'] == 1){
            echo "<tr><th style='color:green;'>Размер загруженного файла больше, чем предел, установленный
            параметром upload_max_filesize в php.ini</th></tr>";
        } elseif($_FILES['yourFile']['error'] == 2){
            echo "<tr><th style='color:green;'>Размер загруженного файла больше, чем предел, установленный
            параметром MAX_FILE_SIZE в форме</th></tr>";
        } elseif($_FILES['yourFile']['error'] == 3){
            echo "<tr><th style='color:green;'>Файл загружен не полностью</th></tr>";
        } elseif($_FILES['yourFile']['error'] == 4){
            echo "<tr><th style='color:red;'>Файл не был загружен, т.к. указан неверный путь к файлу</th></tr>";
        } else {
            echo "<tr><th style='color:red;'>Что-то пошло не так с этим файлом!</th></tr>";
        }
        
        echo "</table>";
    }
    
    ?>