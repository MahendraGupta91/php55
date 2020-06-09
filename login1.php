<?php

require_once('./php_files/googleAuthenticationSecKeyMapping.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
   <?php 
   
   include './php_files/title.php';
   
   ?>
  
  <meta charset="utf-8">
  <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <style>
      p{
          margin-top:30px; 
      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
     </style>
</head>

<body>
<div class="navbar navbar-inverse">
<header>
    <?php include './php_files/header.php'; ?>
</header>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php include './php_files/menubar_list.php'; ?>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">
      <?php echo "mahendra";      
      ?></a></p>
    </div>
    <div class="col-sm-8 text-left" ng-app="">
            <div class="row container-fluid">
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <p>
                    <form>
                        <div class="form-group">
                            <label for="Email1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="Password1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-success" type="submit">Sign in</button>
                        </div>
                       
                            <div class="form-group">		
                           <a class='btn btn-block btn-danger' href="<?= 'https://accounts.google.com/o/oauth2/auth?scope='.urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri='.urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Sign in with Google</a>
                            </div>
                        
                        <div class="form-group">
                            <a class='btn btn-primary btn-block' href='newaccount.php'>Create Account.</a>
                        </div>         
                    </form>
                    </p>
                    </div>
                <div class="col-sm-2"></div>
        </div>
    </div> 
        
        <div class="col-sm-2 sidenav">
                <div class="well">
                        <p>ADS</p>
                </div>
                <div class="well">
                        <p>ADS</p>
                </div>
        </div>
  </div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
