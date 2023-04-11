<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./smile.png">
    <link rel="stylesheet" href="./style.css">
    <title>Form</title>
</head>

<body>

    <div class="form">
        
        <h2>Заказ</h2>
        <?php
            if(!isset($_POST['send'])) {
            ?>
            <form method="POST" action="./backpage.php" enctype="multipart/form-data">
                <div class="form-input">
                    <div class="inputBox form-input-row">
                        <input type="text" name="service">
                        <span>Услуга</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="numberService">
                        <span>Номер услуги</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="personalAccount">
                        <span>Лицевой счет</span>
                        <i></i>
                    </div>
                </div>
                
                <div class="form-input">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Пожелания к заказу"></textarea>
                </div>
                
                <div class="form-input">
                    <div class="inputBox form-input-row">
                        <input type="text" name="family">
                        <span>Фамилия</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="name">
                        <span>Имя</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="surname">
                        <span>Отчество</span>
                        <i></i>
                    </div>
                </div>
                
                <div class="form-input">
                    <div class="inputBox form-input-row">
                        <input type="text" name="phone">
                        <span>Контактный телефон</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="email">
                        <span>Электронная почта</span>
                        <i></i>
                    </div>
                </div>
                
                <div class="form-input">
                    <div class="inputBox form-input-row" style="width: 300px">
                        <input type="text" name="sDRegion">
                        <span>Регион оказания услуги</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="locality">
                        <span>Населенный пункт</span>
                        <i></i>
                    </div>
                </div>
                
                <div class="form-input">
                    <div class="inputBox form-input-row">
                        <input type="text" name="street">
                        <span>Улица</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="house">
                        <span>№ дома</span>
                        <i></i>
                    </div>
                    <div class="inputBox form-input-row">
                        <input type="text" name="apartament">
                        <span>Квартира</span>
                        <i></i>
                    </div>
                </div>
                
                <div class="form-input">
                    <div class="form-input-row">
                        <p>Согласие на обработку персональных данных: 
                            <input type="checkbox" name="checkbox"/>
                        </p>
                        <p>Загрузите ваше фото (1000kb): 
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                            <input type="file" name="yourFile" accept="image/*"></p>
                        </div>
                        
                    </div>
                    
                    <div class="form-btn">
                        <div class="form-input-row">
                            <input type="reset" value="Очистить">
                        </div>
                        <div class="form-input-row">
                            
                    </div>
                    <div class="form-input-row">
                        <input type="submit" name="send" value="Отправить заказ">
                    </div>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
        
    </body>
    </html>