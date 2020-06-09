<?php
session_start();
if(!(isset($_POST["userEmail"]) && isset($_POST["userPassword"])))       
{
    header('Location: index.php');    
}
else 
{
    $_SESSION['EmailId']= \filter_input(INPUT_POST,"userEmail",\FILTER_SANITIZE_STRING);
    $userPSD=\filter_input(INPUT_POST,"userPassword",\FILTER_SANITIZE_STRING);
    $EmailID=$_SESSION["EmailId"];
    require_once './db_connection_maker.php';
     $GetMailId="SELECT EmailId FROM authortable WHERE EmailId= '$EmailID' AND password='$userPSD' ";
        $result=$author_connection->query($GetMailId);
        if ($result->num_rows >0) 
        {
            $row=$result->fetch_assoc();
            $_SESSION["ERROR"]=$row["EmailId"] ." Password is correct";
            header('Location: differencing_error.php');
            //echo $row["EmailId"] ." already exists";
        }  else {
            $_SESSION["ERROR"]=$row["EmailId"] ." Password is not correct";
            header('Location: differencing_error.php');
        }
   
            
    
           // header('Location: programming.php');
}
    
?>