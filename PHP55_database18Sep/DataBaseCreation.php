<?php

   session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $maxsize = 2* 1024 * 1024;
    //echo 'Hello Mahendra<br>';
    echo 'Hello1';
    $difference = new mysqli($servername, $username, $password, $dbname); // connection name is difference
    echo 'hello2';
    //echo 'Hello Mahendra2<br>';
    if($difference->connect_error) 
    {
        die("Connection Problem" . $conn->connect_error);
    }
    $ArticleTable= "CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";           
        if ($difference->query($ArticleTable) === FALSE) 
        {
              die("Error In Article Table Creation".$difference->error);
        } 
 else {
            echo 'TableCreated';
 }
    
?>