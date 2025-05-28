function openTab(evt, currentTab) {
    // Объявление переменных
    var i, tabcontent, tablinks;

    // Получение всех элементов с class="tabcontent" и их сокрытие
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Получение всех элементов с class="tablinks" и удаление класса "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Показать текущую вкладку и добавить класс "active" к кнопке, которая открыла вкладку
    document.getElementById(currentTab).style.display = "block";
    evt.currentTarget.className += " active";

    $.ajax({
        url: './php/data.php', // Указываем URL обработчика
        type: 'POST', // Метод отправки данных
        data: {
            curtab: currentTab
        },
        success: function(response) {
            $('#response').html(response); // Выводим ответ от сервера
        },
        error: function(xhr, status, error) {
            $('#response').html('Произошла ошибка: ' + error);
        }
    });
}

// Получаем элемент с id="defaultOpen" и нажимаем на него
document.getElementById("defaultOpen").click();