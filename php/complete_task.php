<?php
    include_once "config.php";
    // Получаем id выполненной задачи
    $compl = $_POST['complete'];
    
    $query = "UPDATE tasks SET status = 'Completed' WHERE id = {$compl}";
    $sql = mysqli_query($conn, $query) or die(
        "Ошибка MySQL: " . mysqli_error($conn) . 
        " | Запрос: " . htmlspecialchars($query)
    );
    mysqli_close($conn); 
?>