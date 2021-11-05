<?php
    $SERVER_NAME = "localhost";
    $USER_NAME = "root";
    $PASSWORD = "";
    $DATABASE = "instagram_db";

    $connection_string = mysqli_connect($SERVER_NAME, $USER_NAME, $PASSWORD, $DATABASE) or die("MySQL bağlantısı sağlanamadı! Hata: ".mysqli_error($connection_string));

    mysqli_query($connection_string, "SET NAMES UTF8");

    session_start();
    ob_start();
?>