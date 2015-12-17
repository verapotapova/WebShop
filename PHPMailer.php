
<html>
     
          <?php 
               require_once 'PHPMailer-master/PHPMailerAutoload.php';
                 if (isset ($_POST ["send"])) {
                        $mail = new PHPMailer;
                      
                        $message = $_POST ["message"];
                        // $mail->SMTPDebug = 2;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.ru';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'verapotapova95@gmail.com';
                        $mail->Password = 'verapotapova1995';
                        $mail->SMTPSecure = 'SSL';
                        $mail->Port = '465';
                        // $mail->SMTPSecure = 'tls';
                        // $mail->Port = 587;
                        $mail->CharSet = 'UTF-8';
                        $mail->setFrom('verapotapova95@gmail.com', 'Mailer');
                        $mail->addAddress('vera_potapova_95@mail.ru');
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
 
