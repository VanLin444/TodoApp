<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href = "styles.css">
    <link rel="icon" type="image/png" href="img/site_icon.png">
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
            <input type="text" id="taskTxt" placeholder="Text of the task...">
            <button id="addTaskBtn" class="addTaskBtn" onclick="addTask()"><img src="img/add.png" alt="Добавить задачу"></button>
        </div>
        <div class="info" id="info"></div>
        <div class="field-tab">
            <div class="tab-links">
                <button class="tablinks" onclick="openTab(event, 'All')" id="defaultOpen" value='All'>All</button>
                <button class="tablinks" onclick="openTab(event, 'Active')" value='Active'>Active</button>
                <button class="tablinks" onclick="openTab(event, 'Completed')" value='Completed'>Completed</button>
            </div>
            <div class="tab-content" id=tab-content>
                <div id="All" class="tabcontent">
                    <div class="content" id='contentAll'></div>  
                </div>

                <div id="Active" class="tabcontent">
                    <div class="content" id='contentActive'></div>  
                </div>

                <div id="Completed" class="tabcontent">
                    <div class="content" id='contentCompleted'></div>  
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/dataUpdate.js"></script>
<script src="./js/openTab.js"></script>
<script src="./js/addTask.js"></script>
<script src="./js/completeTask.js"></script>
<script src="./js/deleteTask.js"></script>
<script src="./js/changeTask.js"></script>
<script src="./js/infoOutput.js"></script>
<footer>
    <a href="https://github.com/VanLin444" target="_blank">My Github</a>
</footer>
</html>