<?php
    include_once "config.php";
    $compl = $_POST['complete'];
    $query = "UPDATE tasks1 SET status = 'Completed' WHERE id = {$compl}";
    $sql = mysqli_query($conn, $query) or die(
        "Ошибка MySQL: " . mysqli_error($conn) . 
        " | Запрос: " . htmlspecialchars($query)
    );
?>