<?php

include 'C:\xampp\php\PEAR';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('mahendra.shau@gmail.com', 'Mahendra');
$mail->addAddress('mahendragupta2211@gmail.com', 'Mahendra Gupta');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}