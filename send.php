<?php

if(isset($_POST['submit'])){
	$to = "leskhan001@gmail.com";
    $from = "no-reply@lilsun.kz";

	$first_name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
    $subject = "Заявка с сайта Lilsun.kz";

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}

$mail_to_myemail = "Здравствуйте!
Было отправлено сообщение с сайта!
Имя отправителя: $first_name
Номер телефона: $phone
Адрес: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";

$headers = "From: $from \r\n";

    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Заявка отправлена. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='https://lilsun.kz'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="http://lilsun.kz");}
    window.setTimeout("changeurl();",2000);
</script>
