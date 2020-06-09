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
      <a class="navbar-brand active" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="programming.php">Programming</a></li>
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
      <p><a href="#">
      <?php echo "mahendra";      
      ?></a></p>
    </div>
    <div class="col-sm-8 text-left" ng-app="">
         <div class="row container-fluid">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <p>
                <form action="sinup_emailVerification.php" method="post" name="Sinup"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Email1">Email address*</label>
                        <input type="email" class="form-control"   id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="" name="EmailId">                
                    </div>
                    <div class="form-group">
                        <label for="Name">Full Name*</label>
                        <input type="text" class="form-control" id="FullName" placeholder="Inter Name" required="" name="AuthorName">
                    </div>
                    <div class="form-group">
                        <label for="Name">Designation*</label>
                        <input type="textt" class="form-control" name="Designation" placeholder="Researcher or Asst. Prof." required="">
                    </div>
                    <div class="form-group">
                        <label for="Name">Highest Qualification</label>
                        <input type="textt" class="form-control" name="Qualification" placeholder="P.hD or M.Tech">
                    </div>
                    <div class="form-group">
                        <label for="Name">Organization Name</label>
                        <input type="text" class="form-control" name="Organization" placeholder="University or College/Company Name">
                    </div> 
                    <div class="form-group">
                        <label for="Name">Select Profile Picture</label>
                        <input type="file" class="form-control" name="ProfilePic" placeholder="University or College/Company Name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-success" type="submit">Submit</button>
                    </div>  
        
                </form>
            </p>
            </div>
            <div class="col-sm-4"></div>
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
