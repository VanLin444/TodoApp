function infoOutput(response){
    // Вывод проблем и ошибок
    info = document.querySelector('#info');
    //Делаем вывод видимым
    info.style.display = "flex";
    $('#info').html(`<p>${response}</p>`);
    info.scrollTop = 0;
    $("#info").delay(5000).slideUp(300);
}