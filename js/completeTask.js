function toggleCheckbox(element){
    console.log("Нажат чекбокс " + element);
    // Чекбокс можно активировать только один раз, после этого он становится неактивным
    $('#chk' + element).attr('disabled',!this.checked);
    $.ajax({
        url: 'php/complete_task.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            complete: element
        },
        success: function(response) {
            $('#response').html(response); // Выводим ответ от сервера
        },
        error: function(xhr, status, error) {
            $('#response').html('Произошла ошибка: ' + error);
        }
    });
}