<?php
    require_once '../config/connect.php';
    $formValue_id = $_GET['id'];
    $formValue = mysqli_query($connect, "SELECT * FROM `forms` WHERE `id` = '$formValue_id'");  
    $formValue = mysqli_fetch_assoc($formValue);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <div class="formUpdate">
        <div class="form-wrap box-shadow">
            <div class="openForm">
                <form action="./update.php" method="POST">
                    <h3>Update formValue</h3>
                    <input type="hidden" name="id" value="<?= $formValue['id'] ?>">
                    userName: <br>
                    <input type="text" name="userName" value="<?= $formValue['userName'] ?>"><br>
                    userEmail: <br>
                    <input type="text" name="userEmail" value="<?= $formValue['userEmail'] ?>"><br>
                    userPassword: <br>
                    <input type="text" name="userPassword" value="<?= $formValue['userPassword'] ?>"><br>
                    userMessage: <br>
                    <input type="text" name="userMessage" value="<?= $formValue['userMessage'] ?>"><br>
                    gender: <br>
                    <input type="text" name="gender" value="<?= $formValue['gender'] ?>"><br>
                    agree: <br>
                    <input type="text" name="agree" value="<?= $formValue['agree'] ?>"><br>
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>