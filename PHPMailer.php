          <meta charset="UTF-8"  >
          <?php 
                /*include('sendmail.php');
                if( sendmail('', '' , '') )
                {

                }
                else
                     {

                     } */

               require 'PHPMailer-master/PHPMailerAutoload.php';
                 if (isset ($_POST["send"])) {
                        $mail = new PHPMailer;
                        // $mail->SMTPDebug = 2;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.yandex.ru';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'verapotapova1995';
                        $mail->Password = 'verapotapova';
                        $mail->SMTPSecure = 'TSL';
                        $mail->Port = '587';
                        // $mail->SMTPSecure = 'tls';
                        // $mail->Port = 587;
                        $mail->CharSet = 'UTF-8';
                        $mail->setFrom('verapotapova1995@yandex.ru', 'Mailer');
                        $mail->addAddress('vera_potapova_95@mail.ru', 'Mailer');
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
 
