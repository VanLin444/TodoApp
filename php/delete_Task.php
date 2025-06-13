<?php
    include_once "config.php";
    $del = $_POST['deleteTask'];
    $query = "DELETE FROM tasks WHERE id={$del}";
    $sql = mysqli_query($conn, $query) or die(
        "Ошибка MySQL: " . mysqli_error($conn) . 
        " | Запрос: " . htmlspecialchars($query)
    );
    echo "Задача удалена";
?>