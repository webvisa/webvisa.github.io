<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$what=$_POST['what'];
//E-mail получателя
$to="kravchenkovg@gmail.com";
//Тема и сообщение
$subject="Заявка с сайта MyIndivid";
$message=''
Письмо отправлено из моей формы. <br>
Пользователь хочет: ".htmlspecialchars($what)."<br>
Имя: ".htmlspecialchars($name)."<br>
Телефон/Skype: ".htmlspecialchars($phone)."<br>
E-mail: ".htmlspecialchars($email)."<br>
$headers="From: myindivid.com <email@myindivid.com>\r\nContent-type: text/html;
	charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header ('Location: index.html');
ini_set('display_errors','On');
error_reporting('E_ALL');
exit();
?>