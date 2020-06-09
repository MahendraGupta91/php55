<?php
session_start();
if(isset($_SESSION["ERROR"]))
{
    echo ' '.$_SESSION["ERROR"];
    unset($_SESSION["ERROR"]);
}
 else {
   header('Location: index.php');  
}
?>
