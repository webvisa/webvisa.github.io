<?php
/*require_once __DIR__ . '/recaptchalib.php';
// Введите свой секретный ключ
$secret = "6LeGg0IUAAAAACKAglj0C9RzW97bxAcJBOz1SG55";
// пустой ответ каптчи
$response = null;
// Проверка вашего секретного ключа
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['uname']) && (!empty($_POST['uemail']) || !empty($_POST['uphone']))){
  	if (isset($_POST['uname'])) {
  		if (!empty($_POST['uname'])){
	      $uname = strip_tags($_POST['uname']) . "<br>";
	      $unameFieldset = "<b>Имя пославшего:</b>";
	     }
    }
    if (isset($_POST['uphone'])) {
    	if (!empty($_POST['uphone'])){
	      $uphone = strip_tags($_POST['uphone']) . "<br>";
	      $uphoneFieldset = "<b>Телефон:</b>";
	    }
    }
    if (isset($_POST['guests'])) {
      if (!empty($_POST['guests'])){
        $guests = strip_tags($_POST['guests']) . "<br>";
        $guestsFieldset = "<b>Количество гостей:</b>";
      }
    }
     if (isset($_POST['date'])) {
      if (!empty($_POST['date'])){
        $date = strip_tags($_POST['date']) . "<br>";
        $dateFieldset = "<b>Дата:</b>";
      }
    }
    if (isset($_POST['formInfo'])) {
	    if (!empty($_POST['formInfo'])){
	      $formInfo = strip_tags($_POST['formInfo']);
	      $formInfoFieldset = "<b>Тема:</b>";
	    }
    }

    $to = "kravchenkovg@gmail.com, "; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom = "zakaz@sliding.com.ua"; /*Укажите адрес, с которого будет приходить письмо */
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $headers .= "Content-Transfer-Encoding: 8bit \r\n";
    $subject = "$formInfo";
    $message = "$unameFieldset $uname
                $uemailFieldset $uemail
                $uphoneFieldset $uphone
                $guestsFieldset $guests
                $dateFieldset $date
                $formInfoFieldset $formInfo";

    $send = mail ($to, $subject, $message, $headers);
        if ($send == 'true') {
            echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
        } else {
          echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
        }
  } else {
  	echo '<p class="success">Не пройдена каптча! Попробуйте еще раз!</p>';
  }
} else {
  header ("Location: http://sliding.com.ua"); // главная страница вашего лендинга
}
