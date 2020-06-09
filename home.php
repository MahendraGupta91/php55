
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Differencing.org</title>
  <meta charset="utf-8">
  <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
  <style>
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
        <a class="navbar-brand top-left" href="#"><img width="25px" src="images/LearnDifferences_logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
           <li></li>
          
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="programming.php">Programming</a></li>
          <li><a href="data_mining.php">Data Mining</a></li>
          <li><a href="basic_scince.php">Basic Sciences</a></li>
         
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <?php
          //if(isset($_SESSION[]))
          //<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          
           ?>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
     
		
<div class="list-group">
<a href="#" class="list-group-item">These Boots Are Made For Walking</a>
<a href="#" class="list-group-item active">Eleanor, Put Your Boots On</a>
<a href="#" class="list-group-item">Puss 'n' Boots</a>
<a href="#" class="list-group-item">Die With Your Boots On</a>
<a href="#" class="list-group-item">Fairies Wear Boots</a>
</div>


    </div>
    <div class="col-sm-7 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      
      
      <form action="sqlinput.php" method="post">
          Name: <input type="text" name="name" id="n1"><br>
          E-mail: <input type="text" name="email" id="e1"><br>
<input type="submit">
<?php 
      $_SESSION["name"]='mahendra';
      $_SESSION["email"]='Gupta';
 ?>
</form>
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
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
