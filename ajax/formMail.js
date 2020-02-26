// $("#sendMail").on("click",function() ---  перевырка чи не нажата кнопка
$("#sendMail").on("click",function(){
    // берем значення  задаэм йому перемену
var email = $("#email").val();
var name = $("#name").val();
var phone = $("#phone").val();
var mass = $("#mass").val();
// перевырка на ввод текста
if(email == ""){
    $("#errormess").text("введите email");
    return false;
}else if (name == ""){
    $("#errormess").text("введите имя");
    return false;
}else if (phone == ""){
    $("#errormess").text("введите телефон");
    return false;
}else if (mass.lenght < 5){
    $("#errormess").text("введите собщение");
    return false;
}
// если не ма ошибки вивод пустоти
$("#errormess").text("");

// функція для передаяі даних в php файл 
$.ajax({
    // куда передаэм
    url: 'mail.php',
    // якам методом
    type: 'POST',
    // кешировання
    cache: false,
    // передача даних обэкта в файйл php
    data: { 'email': email, 'name': name, 'phone': phone, 'mass' : mass},
    // передаэм як
    dataType: 'html',
    // визиваэ фунцию яка зробить дотого як ми получимо выдповыдь выд сервера
    beforeSend: function() {
        $("#sendMail").prop("disabled", true);  
    },
    // success для возврата даних на сторинку з формою
    success: function(data) {
        // як шо э ошибка то
        if(data == "")
            alert("били ошыбки сообщение не отправлено");
            // як шо нема то
        else
        //  $("#mailForm").trigger("reset"); ---- очищаэ форму
            $("#mailForm").trigger("reset");
        
        $("#sendMail").prop("disabled", false);
    }
    
});

});