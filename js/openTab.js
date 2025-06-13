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

    dataUpdate(currentTab); // Обновляем данные во вкладке которую нажали, и подгружаем нужные данные
}

// Устанавливаем вкладку по умолчанию
document.getElementById("defaultOpen").click();