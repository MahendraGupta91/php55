<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
   <?php include './php_files/title.php'; ?>
  
  <meta charset="utf-8">
  <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <style>
      .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
     </style>
</head>

<body>
<div class="navbar navbar-inverse">
<header>
    <div class="container-fluid text-center text-md-left">
    <div class="col-sm-3">
        <img  width="100%" src="../images/Differencing_logo.png" align="left">
        
    </div>
    <div class="col-sm-6">
        <h2><b>LearnDifferences.org</b></h2>
    </div>
    <div class="col-sm-3 ">
        <div class="container-fluid">
             <div class="row">
              
            </div>
           
        
        </div>
    </div>
</div>


    
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
        <a class="navbar-brand" href="images/Differencing_logo3.png">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="programming.php">Programming</a></li>
        <li><a href="data_mining.php">Data Mining</a></li>
        <li><a href="basic_scince.php">Basic Sciences</a></li>
</ul>
      <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION["lgnStatus"]))
          {
               // echo '<li> Welcome<br>'.$_SESSION["UserName"].'</li>';
                echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
          }
          else
              {
              
                echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              }
          ?>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <div class="list-group">
    
    <a href="programming.php" class="list-group-item">Programming</a>
    <a href="data_mining.php" class="list-group-item">Data Mining</a>
    <a href="technilogies.php" class="list-group-item">Technologies</a>
    <a href="basic_scince.php" class="list-group-item">Basic Sciences</a>
</div>
    </div>
    <div class="col-sm-7 text-left"> 
      <h1>Welcome to learndifferences.org</h1>
      <p>This website is developed for learning purpose on the basis of differences. For this website we are developing content and 
          which will be in the form of differences of related concepts,technique's,principals, product's etc</p>
      <hr>
     
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        
      </div>
      <div class="well">
        <p></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
    <div class="container-fluid">
    <div class="col-lg-4">
 <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>

    </div>
     <div class="col-lg-4">
         
    </div>
     <div class="col-lg-4">
    </div>
    </div>
    
                           

</footer>


</body>
</html>
