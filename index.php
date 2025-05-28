<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href = "styles.css">
    <title>ToDoApp</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img/logo.png" alt="">
            <div>
                <h1>ToDoApp</h1>
                <h4>"Today we do this!"</h4>
            </div>
        </div>
        <div class="field-input">
            <input type="text" id="taskTxt" placeholder="Add task...">
            <button id="addTaskBtn" class="addTaskBtn"><img src="img/add.png" alt="Добавить задачу"></button>
        </div>
        <div class="field-tab">
            <div class="tab-links">
                <button class="tablinks" onclick="openTab(event, 'All')" id="defaultOpen">All</button>
                <button class="tablinks" onclick="openTab(event, 'Active')">Active</button>
                <button class="tablinks" onclick="openTab(event, 'Completed')">Completed</button>
            </div>
            <div class="tab-content">
                <div id="All" class="tabcontent">
                    <div class="content">
                        <?php echo $_SESSION['data'];?>
                    </div>  
                </div>

                <div id="Active" class="tabcontent">
                    <div class="content">
                        <?php echo $_SESSION['data'];?>
                    </div>  
                </div>

                <div id="Completed" class="tabcontent">
                    <?php echo $_SESSION['data'];?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/openTab.js"></script>
<script src="./js/addTask.js"></script>
<script src="./js/completeTask.js"></script>
<footer>
    <a href="https://github.com/VanLin444">My Github</a>
</footer>
</html>