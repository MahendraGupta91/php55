<?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php
session_start();
//echo isset($_SESSION['googleUserFlag']);
//echo isset($_SESSION['EmailId']);

 if(isset($_SESSION['googleUserFlag'])&& isset($_SESSION["EmailId"]))
{
        require_once './db_connection_maker.php';
        $EmailId=$_SESSION["EmailId"];
        $GetMailId="SELECT EmailId FROM authortable WHERE EmailId= '$EmailId' ";
        $result=$author_connection->query($GetMailId);
        if ($result->num_rows >0) 
        {
            $row=$result->fetch_assoc();
            $_SESSION["Login_Flag"]=1;
            unset($_SESSION["googleUserFlag"]);
            
            
            //$_SESSION["ERROR"]=$row["EmailId"] ." already exists";
            unset($_SESSION["googleUserFlag"]);
            header('Location: ../differencing_error.php');
            //echo $row["EmailId"] ." already exists";
        }
    
   /* 
    $otp= \filter_input(INPUT_POST,"otp",FILTER_SANITIZE_NUMBER_INT);
    if($otp===$_SESSION['OTP_original'])
    {
        
        $EmailId=$_SESSION['EmailId'];
        $AuthorName=$_SESSION['AuthorName'];
        $Qualification=$_SESSION['Qualification'];
        $Organization=$_SESSION['Organization'];
        $Designation=$_SESSION['Designation'];
        $PicName=$_SESSION['PicName'];
        $FileExtension=$_SESSION['FileExtension'];
    //$filesize1 = $_FILES["ProfilePic"]["size"];

        $GetMailId="SELECT EmailId FROM authortable WHERE EmailId= '$EmailId' ";
        $result=$author_connection->query($GetMailId);
        if ($result->num_rows >0) 
        {
            $row=$result->fetch_assoc();
            $_SESSION["ERROR"]=$row["EmailId"] ." already exists";
            header('Location: differencing_error.php');
            //echo $row["EmailId"] ." already exists";
        }
        else
        {
    
            $InsertQuerry="INSERT INTO authortable ( EmailId, AuthorName, Qualification, OrganizationName, Designation, ProfilePic, FileType ) VALUES ('$EmailId','$AuthorName','$Qualification','$Organization','$Designation','$PicName','$FileExtension')";
    
            if($author_connection->query($InsertQuerry)===FALSE)
            {
                   $_SESSION["ERROR"]=$author_connection->error;
                   header('Location: differencing_error.php');
            }
    

        }
        unset($_SESSION['OTP_original']);
        $_SESSION["PSD_Flag"]=TRUE;
        header('Location: PSD_Setter.php');
    }
    else 
    {
         $_SESSION["ERROR"]='OTP does Not Matched';
         header('Location: differencing_error.php');
    }*/
}
else
{
  //header('Location: index.php'); 
}
?>
