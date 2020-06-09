   <?php
/* the message
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <mahendragupta2211@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("mahendra.shau@gmail.com",$msg,$headers);*/
//echo phpinfo();
/*ini_set('SMTP', "smtp.gmail.com");
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "mahendragupta2211@gmail.com");


$to = "mahendra.shau@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: mahendragupta2211@gmail.com";

if(mail($to,$subject,$txt,$headers))
{
    echo 'Mail Send';
}
 else {
    echo 'mail sending Failed';
}
echo "hello";*/

            $to = "mahendra.shau@gmail.com";
            $subject = "Subject of your email";
            $email_body = "The text for the mail...";

            mail($to, $subject, $email_body);
 
            
        ?>
        

