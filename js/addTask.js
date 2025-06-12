// Обработчик клика на кнопку добавления задач
$('#addTaskBtn').on('click', function() {
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
            // Вывод проблем и ошибок
            //Делаем видимым
            const info = document.querySelector('#info');
            info.style.display = "flex";
            info.classList.add('error');
            $('#info').html(`<p>${response}</p>`);
            info.scrollTop = 0;
            $("#info").delay(5000).slideUp(300);
        },
        error: function(error) {
            $('#info').html(`<p>Произошла ошибка: ${error}</p>`); // Удалить
        }
    });
});