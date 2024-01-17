<?php 
if($_POST){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $to = "bobolin.machon@mail.ru"; //заменить на свой email
 $subject = "Новое сообщение с сайта";
 $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

 $mail_body = "Имя: " . $name . "\n" .
     "Email: " . $email . "\n" .
     "Сообщение: " . $message;

 if(mail($to, $subject, $mail_body, $headers)){
  echo "<p>Сообщение успешно отправлено.</p>";
 }else{
  echo "<p>Ошибка при отправке сообщения.</p>";
 }
}
?>
