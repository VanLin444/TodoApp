<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'todoapp';
    $dbPort = '3306';

    mysqli_report(MYSQLI_REPORT_OFF);

    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);
    if (!$conn) die("Ошибка подключения к БД - " . mysqli_connect_error());
?>