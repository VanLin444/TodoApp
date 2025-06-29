function deleteTask(id){
    $.ajax({
        url: 'php/delete_task.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            deleteTask: id
        },
        success: function(response) {
            currentTab = document.querySelector(".active").value; // Определяем текущую активную кнопку
            dataUpdate(currentTab); // Обновляем данные во вкладке которую нажали, и подгружаем нужные данные
            infoOutput(response);
        },
        error: function(error) {
            $('#info').html('Произошла ошибка: ' + error);
        }
    });
}