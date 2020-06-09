<?php
session_start();
$otp_match=0;
if(!isset($_SESSION['OTP_original']))
{
    header('Location: newaccount.php'); 
}
elseif(isset($_POST["otp"])&& $_SESSION["OTP_original"]===$_POST["otp"]) 
{
     $_SESSION['PF']="TRUE";
     header('Location: ProfileCreator.php');   
}elseif(isset($_POST["otp"])&& $_SESSION["OTP_original"]!==$_POST["otp"])     
{
   $otp_match=1; 
}
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
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script type="text/javascript">
               

 
        </script></head>

<body>
<div class="navbar navbar-inverse">
<header>
    <img src="images/dd.png" height="100" width="200" align="left">
   <h1 color="green">Differencing.org</h1>
</header>
</div>
    <nav class="navbar navbar-inverse" ng-app="">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="home.php"><img src="images/logo2.png" width="35" height="37" alt="LOGO"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
        <li><a href="programming.php">Programming</a></li>
        <li><a href="data_mining.php">Data Mining</a></li>
        <li><a href="basic_scince">Basic Sciences</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
    
    <div class="row content">
        <div class="col-sm-2 sidenav text-center">
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                    <p><?php echo "mahendra";?></p>
        </div>
        <div class="col-sm-8 text-left" ng-app="">
            <div class="col-sm-12 container-fluid" >
                <div class=" col-sm-4"></div>
                <div class=" col-sm-4">
                    <form method="post" name="myForm" action="form_otp.php" enctype="multipart/form-data">       
                        <div class="form-group">
                            <p>Enter OTP that has been sent to you Email Id</p>
                            <input type="text"  maxlength="4" pattern="\d{4}" class="form-control text-center" name="otp" required="" placeholder="_ _ _ _" ng-app="">
                             <?php     if ($otp_match===1)
                                       {
                                            echo '<p><font color="red">OTP does not match</font></p>';
                                        }
                             ?>
                                 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-success" type="submit">Submit</button>
                        </div>  
                </div>
               <div class="col-sm-6"></div>            
            </form> 
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
   