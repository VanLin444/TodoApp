setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/data.php");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            }
        }
    }
    // Отправляем данные формы с помощью AJAX в PHP
    let formData = new FormData(form);
    xhr.send(formData);
},500);