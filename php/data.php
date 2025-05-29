<?php
session_start();
include_once "config.php";
// Получаем данные с БД и сортируем их, чтобы вначале выводились активные задачи, а законченные в конце.
//$query = "SELECT task, status FROM `tasks` ORDER BY status";
$data = '';
if ($_POST['curtab'] == 'All'){
    $tab = "";
} elseif($_POST['curtab'] == 'Active'){
    $tab = "WHERE status = 'Active'";
} elseif ($_POST['curtab'] == 'Completed'){
    $tab = "WHERE status = 'Completed'";
}
$query = "SELECT id, task, status FROM `tasks` {$tab}";

$sql = mysqli_query($conn, $query) or die(
    "Ошибка MySQL: " . mysqli_error($conn) . 
    " | Запрос: " . htmlspecialchars($query)
);
$id = 1;
while($row = mysqli_fetch_assoc($sql)){
    // Выполненные задачи становятся неактивными
    $sts = $row['status'] == "Completed" ? 'disabled checked' : '';
    // Вывод задач
    $data .= "<div class='task'>
                    <input type='checkbox' {$sts} class='chkbox' onchange='toggleCheckbox({$row['id']})' id='chk{$id}'>
                    <p>{$row['task']}</p>
                    <div class='taskbtn'>
                        <button class='changebtn'>
                            <img src='img/change.png' alt='Изменить задачу'>
                        </button>
                        <button class='deletebtn'>
                            <img src='img/delete.png' alt='Удалить задачу'>
                        </button>
                    </div>
                </div>";
    $id++;
}
$_SESSION['data' . $_POST['curtab']] = $data;
?>