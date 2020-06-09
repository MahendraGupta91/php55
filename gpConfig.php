<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '566239647150-8ape63g3gnt0p9s6b6rq82j5nf3r94qj.apps.googleusercontent.com';
$clientSecret = 'tjZQeoF3J4aB7DLXKuOl1yCz';
$redirectURL = 'http://localhost/login_with_google_using_php/';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Service($gClient);
?>