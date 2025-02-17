$(document).ready(function() {
    $(document).ready(function() {
        // Обработчик клика на кнопку
        $('#addTaskBtn').on('click', function() {
            // Собираем данные из полей ввода
            var taskTxt = $('#taskTxt').val();
            // Отправляем данные через AJAX
            $.ajax({
                url: 'php/insert-task.php', // Указываем URL обработчика
                type: 'POST', // Метод отправки данных
                data: {
                    taskTxt: taskTxt
                },
                success: function(response) {
                    $('#response').html(response); // Выводим ответ от сервера
                },
                error: function(xhr, status, error) {
                    $('#response').html('Произошла ошибка: ' + error);
                }
            });
        });
    });
});