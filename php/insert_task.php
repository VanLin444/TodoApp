<?php
require_once "config.php";
// Проверяем, были ли отправлены данные нужным методом
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из POST-запроса
    $task = htmlspecialchars($_POST['taskTxt']);

    // Проверяем, что данные не пустые
    if (!empty($task)) {
        $status = "Active";
        // Добавляем задачу в БД
        $sql = mysqli_query($conn, "INSERT INTO tasks (task, status) VALUES ('$task', '$status')") or die();
        echo "Задача добавлена!";
    } else {
        echo "Добавьте задачу!";
    }
} else {
    echo "Неверный метод запроса!";
}
