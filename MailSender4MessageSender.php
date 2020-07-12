<?php
//error_reporting(E_ALL);
require_once "PHPMailer_5.2.0/class.phpmailer.php";
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=2;
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username= 'differencing18@gmail.com'; // SMTP username
$mail->Password = 'Differencing@1805'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->From='differencing18@gmail.com';
$mail->FromName="Differencing.org";
$mail->addReplyTo('differencing.org@gmail.com', 'Do Not Reply.');
#$mail->addAddress('mahendragupta2211@gmail.com',"Mahendra");   // Add a recipient
#$mail->addCC('mahendragupta2211@gmail.com');
//$mail->addBCC('saakegupta17@gmail.com');
$mail->addAddress("mahendra.shau@gmail.com", "Mahendra Gupta");

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<H2>H</h2>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";


#$mail->Subject = 'Email from Localhost by CodexWorld';
#$mail->Body    = $bodyContent;
try {
    if($mail->send())
    {
        echo "Message has been sent successfully";
    }
 else {
       //echo "Mailer Error: " . $mail->ErrorInfo; 
    }
} catch (Exception $e) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
}

?>
