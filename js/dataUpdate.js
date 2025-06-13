function dataUpdate(currentTab){
    $.ajax({
        url: './php/data.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            curtab: currentTab
        },
        success: function(data) {
            // Вывод данных в соответствующем окне
            document.getElementById('content' + currentTab).innerHTML = data;
        },
        error: function(error) {
            $('#info').html('Произошла ошибка: ' + error);
        }
    });
}