<?php
session_start();
//Include GP config file
//include_once 'gpConfig.php';

//Unset token and user data from session
//unset($_SESSION['token']);
//unset($_SESSION['lgnStatus']);

//Reset OAuth access token
//$gClient->revokeToken();
//echo isset($_SESSION["lgnStatus"]);
//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location: index.php");
?>