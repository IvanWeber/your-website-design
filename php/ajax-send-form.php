<?php 

if(mail('ivanbdn@yandex.ru','Письмо от ' . $_POST['name'],$_POST['message'] . ' Почта: ' . $_POST['email'],'Content-type: text/html; charset=utf-8')){
    echo 'Сообщение отправлено!';
}
else{
    echo 'Ошибка отправки сообщения.';
}

?>