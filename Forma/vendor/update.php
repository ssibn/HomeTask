<?php
    require_once '../config/connect.php';

    $id = $_POST['id'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userMessage = $_POST['userMessage'];
    $gender = $_POST['gender'];
    $agree = $_POST['agree'];

    mysqli_query($connect, "UPDATE `forms` SET `userName` = '$userName', `userEmail` = '$userEmail', `userPassword` = '$userPassword', `userMessage` = '$userMessage', `gender` = '$gender', `agree` = '$agree' WHERE `forms` . `id` = '$id' ");

    header('Location: /table/table.php');