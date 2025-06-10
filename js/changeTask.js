function changeTask(id){
    // Получаем текст задачи
    var taskTxt = $(`#txt` + id)[0].innerText;
    changeTxt = prompt("Введите новый текст задачи :", taskTxt);
    if ((changeTxt != null) && (taskTxt != changeTxt)){
        // Отправляем данные через AJAX
        $.ajax({
            url: 'php/change_task.php', // Указываем URL обработчика
            type: 'POST', // Метод отправки данных
            data: {
                id: id,
                newTxt: changeTxt
            },
            success: function(response) {
                currentTab = document.querySelector(".active").value; // Определяем текущую активную кнопку
                dataUpdate(currentTab); // Обновляем данные во вкладке которую нажали, и подгружаем нужные данные
            },
            error: function(xhr, status, error) {
                $('#response').html('Произошла ошибка: ' + error); // Удалить
            }
        });
    }
}