<?php
session_start();
if(!(isset($_SESSION['EmailId']) && isset($_SESSION["PSD_Flag"])&& ($_SESSION["PSD_Flag"]===TRUE)))       
{
    header('Location: newaccount.php');    
}
elseif ((isset($_SESSION['EmailId']) && isset($_SESSION["PSD_Flag"])&& ($_SESSION["PSD_Flag"]===TRUE))&& isset($_POST['psd1'])&&isset($_POST['psd2'])) 
{
    $password1=$_POST['psd1'];
    $EID=$_SESSION['EmailId'];
    //require_once './.php';
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
    //$UpdateQuerry="UPDATE authordatabase.authortable SET PSD_Flag=1, password=$password WHERE EmailId=$EID";
    $flag=1;
    $d1="UPDATE authordatabase.authortable SET PSD_Flag=1, password='$password1 ' WHERE EmailId='$EID'";
    
            if($author_connection->query($d1)===FALSE)
            {
                   $_SESSION["ERROR"]=$author_connection->error."PSD Setting Error".$EID."____".$password1;
                   header('Location: differencing_error.php');
            }
            
    
            header('Location: login.php');
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
        <link rel="stylesheet" href="css/TableStyle.css">
       <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
       <script type="text/javascript">
           
    function PSD_Validate()
    {
        var psd1=document.forms["psd"]["psd1"].value;
        var psd2=document.forms["psd"]["psd2"].value;
        //document.getElementById("matched").innerHTML =psd1;
        //document.getElementById("demo1").innerHTML =psd2; 
       //document.getElementById("demo2").innerHTML =psd1!==psd2;
        //var n = psd1.localeCompare(psd2);
        if(psd1!==psd2)
        {
            //document.getElementById("notmatched").innerHTML ="Password are not matching.";
            //document.getElementById("notmatched").innerHTML = "Password are not matching.";
            document.getElementById("Notmatched").innerHTML ="Not Matching..";
            document.getElementById("matched").innerHTML ="";
            return false;
            
        }
        else
        {
          //document.getElementById("matched").innerHTML ="Password are matching.";
            //document.getElementById("matched").innerHTML = "Password are matching.";
            document.getElementById("matched").innerHTML ="Matching...";
            document.getElementById("Notmatched").innerHTML ="";
            return true;  
        }
        
    }
    
    function a()
    {
       
	document.getElementById("matched").innerHTML ="hello1";
    }
    function b()
    {
      document.getElementById("demo1").innerHTML ="hello2";  
    }
    
  </script>
</head>

<body>
    
<div class="navbar navbar-inverse">
<header>
    <img src="images/dd.png" height="100" width="200" align="left">
   <h1 style="color:green">Differencing.org</h1>
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
      <a class="navbar-brand active" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class=""><a href="programming.php">Programming</a></li>
        <li><a href="data_mining.php">Data Mining</a></li>
        <li><a href="basic_scince.php">Basic Sciences</a></li>
</ul>
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
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="PSD_Setter.php" onsubmit="return PSD_Validate();" method="post" name="psd"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="Email1">Email address:<?php echo $_SESSION["EmailId"]; ?> </label>    
        </div>
        <div class="form-group">
            <label for="Email1" style="font: medium">Name:<?php echo $_SESSION['AuthorName']; ?> </label>
            
            </div>
        <div class="form-group text-left">
            <label for="Name">Enter Your Password*</label>
            <input type="password" class="form-control" id="psd1" placeholder=" Password" required="" name="psd1" pattern="(?=.)(?=.)(?=.).{8,}">
            <span class="help-block text-right"><h6>Not less than 8 character.</h6></span>
        </div>
             <div class="form-group text-left">
                 <label for="Name"  class="">Re-Enter Password*</label>
                 <input type="password" class="form-control" id="psd2" onchange="PSD_Validate()" placeholder=" Password" required="" name="psd2" pattern="(?=.)(?=.)(?=.).{8,}" >
                <span class="help-block text-right">
                    <h6 style="color:green" id="matched"></h6>
                    <h6 style="color:red" id="Notmatched" ></h6>
                </span> 
             </div>
        

        <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit" >Submit</button>
        </div>  
        
    </form>
        </div>
       
    <div class="col-sm-3"></div>
        
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
