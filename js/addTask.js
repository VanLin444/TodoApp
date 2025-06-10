// Обработчик клика на кнопку
$('#addTaskBtn').on('click', function() {
    // Собираем данные из полей ввода
    var taskTxt = $('#taskTxt').val();
    // Очищение поля ввода
    document.getElementById('taskTxt').value = '';
    // Отправляем данные через AJAX
    $.ajax({
        url: 'php/insert_task.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            taskTxt: taskTxt
        },
        success: function(response) {
            currentTab = document.querySelector(".active").value; // Определяем текущую активную кнопку
            dataUpdate(currentTab); // Обновляем данные во вкладке которую нажали, и подгружаем нужные данные
        },
        error: function(xhr, status, error) {
            $('#response').html('Произошла ошибка: ' + error); // Удалить
        }
    });
});