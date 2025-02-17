<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>TodoApp</title>
</head>
<body>
    <div class="wrapper">
        <div class="field-input">
            <input id="taskTxt" type="text" size=auto placeholder="Add task...">
            <button id="addTaskBtn"><i class="bi bi-plus-lg" style="font-size: 20px;"></i></button>
        </div>

        <div id="response"></div>
        
        <div class="field-tab">
            <!-- Ссылки вкладки -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Лондон</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Париж</button>
            </div>

            <!-- Содержимое вкладки -->
            <div id="London" class="tabcontent">
                <h3>Лондон</h3>
                <p>Лондон является столицей Англии.</p>
            </div>

            <div id="Paris" class="tabcontent">
                <h3>Париж</h3>
                <p>Париж является столицей Франции.</p>
            </div>
        </div>
    </div>

    <script src="./js/tab.js"></script>
    <script src="./js/addtask.js"></script>
</body>
</html>

<!DOCTYPE html>
