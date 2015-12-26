<?php 
               require 'PHPMailer-master/PHPMailerAutoload.php';
               function sendMail( $mailTo, $message,  $Subject = 'Here is the subject' )
               {
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
                        $mail->addAddress( $mailTo , 'Mailer');
                        $mail->Subject = $Subject;
                        $mail->Body = $message;
                        $mail->isHTML(true);
                        return $mail->send();
              }
?> 
 
