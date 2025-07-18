<?php
include_once "config.php";
// Определяем какие данные нужно получить для текущей вкладки
$data = '';
if ($_POST['curtab'] == 'All'){
    $tab = "ORDER BY status";
} elseif($_POST['curtab'] == 'Active'){
    $tab = "WHERE status = 'Active'";
} elseif ($_POST['curtab'] == 'Completed'){
    $tab = "WHERE status = 'Completed'";
}
// Составляем текст запроса
$query = "SELECT id, task, status FROM `tasks` {$tab}";

// Запрос к БД
$sql = mysqli_query($conn, $query) or die( 
    "Ошибка MySQL: " . mysqli_error($conn) . 
    " | Запрос: " . htmlspecialchars($query)
);
mysqli_close($conn); 

// Построчно разбираем ответ от БД
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