<?php
    require_once '../config/connect.php';

    $id = $_GET['id'];
    
    mysqli_query($connect, "DELETE FROM `forms` WHERE `forms` . `id` = '$id' ");
    header('Location: /table/table.php');
