// Обработчик клика на кнопку добавления задач
function addTask() {
    // Получения значения из поля ввода
    var taskTxt = $('#taskTxt').val();
    // Очистка поля ввода
    document.getElementById('taskTxt').value = '';
    // Отправляем данные через AJAX
    $.ajax({
        url: 'php/insert_task.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            taskTxt: taskTxt
        }, // Отправляемые данные
        success: function(response) {
            currentTab = $(".active").val(); // Определяем текущую активную вкладку
            dataUpdate(currentTab); // Обновляем данные во вкладке которую нажали, и подгружаем нужные данные
            infoOutput(response);
        },
        error: function(error) {
            $('#info').html(`<p>Произошла ошибка: ${error}</p>`);
        }
    });
}