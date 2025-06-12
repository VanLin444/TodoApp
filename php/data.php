<?php
include_once "config.php";
// Получаем данные с БД и сортируем их, чтобы вначале выводились активные задачи, а законченные в конце.
$data = '';
if ($_POST['curtab'] == 'All'){
    $tab = "ORDER BY status";
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
while($row = mysqli_fetch_assoc($sql)){
    // Выполненные задачи становятся неактивными
    $sts = $row['status'] == "Completed" ? 'disabled checked' : '';
    // Преобразовывает специальные символы в HTML-сущности и защищает от некорректного ввода
    $task = htmlspecialchars($row['task']);
    // Вывод задач
    $data .= "<div class='task'>
                    <input type='checkbox' {$sts} class='chkbox' onchange='toggleCheckbox({$row['id']})' id='chk{$row['id']}'>
                    <p id='txt{$row['id']}'>$task</p>
                    <div class='taskbtn'>
                        <button class='changebtn'>
                            <img src='img/change.png' onclick='changeTask({$row['id']})' alt='Изменить задачу'>
                        </button>
                        <button class='deletebtn' onclick='deleteTask({$row['id']})'>
                            <img src='img/delete.png' alt='Удалить задачу'>
                        </button>
                    </div>
                </div>";
}
echo $data;
?>