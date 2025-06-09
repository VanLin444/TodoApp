function dataUpdate(currentTab){
    $.ajax({
        url: './php/data.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            curtab: currentTab
        },
        success: function(data) {
            //console.log(data); // Удалить
            document.getElementById('content' + currentTab).innerHTML = data;
        },
        error: function(xhr, status, error) {
            $('#response').html('Произошла ошибка: ' + error); // Удалить
        }
    });
}