<?php
require_once "config.php";

// Получаем данные из POST-запроса обработав их
$task = htmlspecialchars($_POST['taskTxt']);

// Проверяем, что данные не пустые
if (!empty($task)) {
    $status = "Active";
    // Добавляем задачу в БД
    $query = "INSERT INTO tasks (task, status) VALUES ('$task', '$status')";
    $sql = mysqli_query($conn, $query) or die(
        "Ошибка MySQL: " . mysqli_error($conn) . 
        " | Запрос: " . htmlspecialchars($query)
    );
    echo "Задача добавлена!";
} else {
    echo "Добавьте задачу!";
}