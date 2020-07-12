<?php
session_start();
if(isset($_POST["EmailId"]) && isset($_POST["AuthorName"]))
{
        require_once './MailSender.php';
        
        $maxsize = 2* 1024 * 1024;
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $_SESSION['EmailId']= \filter_input(INPUT_POST,"EmailId",\FILTER_SANITIZE_STRING);
        $_SESSION['AuthorName']= \filter_input(INPUT_POST,"AuthorName",\FILTER_SANITIZE_STRING);
        $_SESSION['Qualification']= \filter_input(INPUT_POST,"Qualification",\FILTER_SANITIZE_STRING);
        $_SESSION['Organization']= \filter_input(INPUT_POST,"Organization",\FILTER_SANITIZE_STRING);
        $_SESSION['Designation']=  \filter_input(INPUT_POST,"Designation",\FILTER_SANITIZE_STRING);
        $_SESSION['PicName']= $_FILES["ProfilePic"]["name"];
        $_SESSION['FileExtension']=pathinfo($_SESSION['PicName'],PATHINFO_EXTENSION);
        $filesize1 = $_FILES["ProfilePic"]["size"];
        #echo $_SESSION['PicName'];
        #echo $_SESSION['FileExtension'];
        #echo $_SESSION['Qualification'];
        if (!array_key_exists($_SESSION['FileExtension'],$allowed) ) 
        {
            die("Error: Selected File type is not Allowed");
        }
        else if ($filesize1 > $maxsize) 
        {
            die("Error: Grater than 2MB file are not allowed".$filesize1." and ".$filesize2);
        }
        $otp=str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        $_SESSION['OTP_original']=$otp;
        $mail->addReplyTo('differencing18@gmail.com', 'Do Not Reply.');
        $mail->addAddress($_SESSION['EmailId'],$_SESSION['AuthorName']);   // Add a recipient
        
        //$mail->addCC('mahendragupta2211@gmail.com');
        //$mail->addBCC('saakegupta17@gmail.com');
        $mail->isHTML(true);  // Set email format to HTML
        $bodyContent = '<H3>Dear '.$_SESSION['AuthorName'].'</h3>';
        $bodyContent .= '<p>Welcome to differencing.org<br> Your one OTP is <b>'.$otp.'</b> which is valid for 10 minutes. Enter to verify your email account</p>';
        $bodyContent.='<p>Regards<br>Differencing.org Team</p>';
        $mail->Subject = 'Differencing.org(OTP)';
        $mail->Body  = $bodyContent;
        
        if(!$mail->send()) 
        {
                die('OTP could not be sent.');
                die('Please Check Email' . $mail->ErrorInfo);
        } else 
        {
            header('Location: form_otp.php'); 
        }
}
else 
{
  header('Location: login.php');  
}
?>