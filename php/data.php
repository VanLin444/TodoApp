<?php
include_once "./php/config.php";
// Получаем данные с БД и сортируем их, чтобы вначале выводились активные задачи, а законченные в конце.
$query = "SELECT task, status FROM `tasks` ORDER BY status";
$sql = mysqli_query($conn, $query) or die();
$id = 1;
while($row = mysqli_fetch_assoc($sql)){
    // Выполненные задачи становятся неактивными
    $sts = $row['status'] == "Completed" ? 'disabled checked' : '';
    // Вывод задач
    $data .= "<div class='task' id=$id>
                    <input type='checkbox' {$sts} class='chkbox' onchange='toggleCheckbox($id)' id='chk{$id}'>
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