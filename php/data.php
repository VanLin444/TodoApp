<?php
    include_once "./php/config.php";
    $task = "Купить 100 новых книг из Либиринта и передать их школьной библиотекке";
    $data = "<div class='task'>
                <input type='checkbox' class='chkbox'>
                <p> $task </p>
                <div class='taskbtn'>
                    <button class='changebtn'>
                        <img src='change.png' alt='Изменить задачу'>
                    </button>
                    <button class='deletebtn'>
                        <img src='delete.png' alt='Удалить задачу'>
                    </button>
                </div>
            </div>";
?>