<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = "differencing18@gmail.com";
$mail->FromName = "LearnDifferences.org";

//To address and name
$mail->addAddress("mahendra.shau@gmail.com", "Mahendra Gupta");
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("mahendragupta2211@gmail.com", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    if($mail->send())
    {
        echo "Message has been sent successfully";
    }
 else {
       echo "Mailer Error: " . $mail->ErrorInfo; 
    }
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}