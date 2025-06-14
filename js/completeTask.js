function toggleCheckbox(element){
    // Чекбокс можно активировать только один раз, после этого он становится неактивным
    $('#chk' + element).attr('disabled',!this.checked);
    $.ajax({
        url: './php/complete_task.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            complete: element
        },
        success: function(response) {
            currentTab = document.querySelector(".active").value; // Определяем текущую активную кнопку
            dataUpdate(currentTab); // Обновляем данные во вкладке которую нажали, и подгружаем нужные данные
        },
        error: function(error) {
            $('#info').html('Произошла ошибка: ' + error);
        }
    });
}