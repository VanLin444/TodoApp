<?php
    include_once "config.php";
    $compl = $_POST['complete'];
    $query = "UPDATE tasks SET status = 'Completed' WHERE `id` = $compl";
    $sql = mysqli_query($conn, $query) or die();
?>