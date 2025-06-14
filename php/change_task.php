<?php
    include_once "config.php";
    // Получаем текст изменённой задачи
    $newTxt = $_POST['newTxt'];
    $id = $_POST['id'];

    $query = "UPDATE tasks SET task = '$newTxt' WHERE id = {$id}";
    $sql = mysqli_query($conn, $query) or die(
        "Ошибка MySQL: " . mysqli_error($conn) . 
        " | Запрос: " . htmlspecialchars($query)
    );
    mysqli_close($conn); 
    echo "Задача изменена!";
?>