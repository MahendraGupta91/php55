<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "authordatabase";
    $author_connection = new mysqli($servername, $username, $password, $dbname); // connection name is difference
    if($author_connection->connect_error) 
    {
        $_SESSION["ERROR"]="connection Problem".$conn->connect_error;
        header('Location: differencing_error.php');
        
    }
?>