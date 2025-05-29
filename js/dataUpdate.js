function dataUpdate(){
    $.ajax({
        url: './php/data.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            
        },
        success: function(response) {
            $('#response').html(response); // Выводим ответ от сервера
        },
        error: function(xhr, status, error) {
            $('#response').html('Произошла ошибка: ' + error);
        }
    });
}