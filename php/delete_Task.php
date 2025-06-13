<?php
    include_once "config.php";
    $del = $_POST['deleteTask'];
    $query = "DELETE FROM tasks WHERE id={$del}";
    $sql = mysqli_query($conn, $query) or die();
    echo "Задача удалена";
?>