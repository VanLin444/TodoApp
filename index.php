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
            <h1>ToDoApp</h1>
            <h4>"Today we do this!"</h4>
        </div>
        <div class="field-input">
            <input type="text" id="taskTxt" placeholder="Add task...">
            <button id="addTaskBtn">+</button>
        </div>
        <div class="field-tab">
            <div class="tab-links">
                <button class="tablinks" onclick="openTab(event, 'All')" id="defaultOpen">All</button>
                <button class="tablinks" onclick="openTab(event, 'Active')">Active</button>
                <button class="tablinks" onclick="openTab(event, 'Completed')">Completed</button>
            </div>
            <div class="tab-content">
                <div id="All" class="tabcontent">
                    <?php include_once "./php/data.php";?>
                    <?php for ($i = 0; $i < 40; $i++): ?>
                    <div class="content">
                        <?php echo $data . '<br>';?>
                    </div>
                    <?php endfor;?>
                </div>

                <div id="Active" class="tabcontent">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                </div>

                <div id="Completed" class="tabcontent">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of Japan.ssssss ssssss ssss sss ssssss sssss ssss sssssss sssssssssss sssssssssss sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/openTab.js"></script>
<script src="./js/addTask.js"></script>
<footer>
    <a href="https://github.com/VanLin444">My Github</a>
</footer>
</html>