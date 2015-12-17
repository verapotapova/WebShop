
<html>
     
          <?php 
               require_once 'PHPMailer-master/PHPMailerAutoload.php';
                 if (isset ($_POST ["send"])) {
                        $mail = new PHPMailer;
                      
                        $message = $_POST ["message"];
                        // $mail->SMTPDebug = 2;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.mail.ru';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'vera_potapova_95@mail.com';
                        $mail->Password = 'potapovavera1995';
                        $mail->SMTPSecure = 'SSL';
                        $mail->Port = '465';
                        // $mail->SMTPSecure = 'tls';
                        // $mail->Port = 587;
                        $mail->CharSet = 'UTF-8';
                        $mail->setFrom('vera_potapova_95@mail.com', 'Mailer');
                        $mail->addAddress('verapotapova95gmail.com');
                        $mail->Subject = 'Here is the subject';
                        $mail->Body = $_POST["message"];
                        $mail->isHTML(true);
                                      if ( $mail->send()) {
                                         echo 'Письмо отправлено';

}else{
  echo 'Письмо не может отправлено.';
  echo 'Ошибка: ' . $mail->ErrorInfo;
      }
    }
?> 
 