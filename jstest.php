<html>
  
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        
    </head>
    <div class="navbar navbar-inverse">
        <header>
            <img src="images/dd.png" height="100" width="200" align="left">
            <h1 color="green">Differencing.org</h1>
    </header>
</div>
    
    <body>
        <nav class="navbar navbar-inverse">
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
  
        
        
 <div class="container-fluid text-center">
     
     
 <div class="row">
     <div class="col-sm-2 sidenav"> 
     </div>
     
        
<div class="col-sm-8" ng-app="">
    <div class="container-fluid">    
        <div class="col-sm-5 text-center">
            <div class="row"><label class="container-fluid row text-center">First Topic</div>
            <div class="row"><input class="form-control"></div>
        </div>
          <div class="col-sm-2"></div>
        <div class="col-sm-5 text-center">
             <div class="row"><label class="container-fluid row text-center">Second Topic</div>
             <div class="row"><input type="text" class="form-control"></div>
        </div>
     </div>
    <form>
     <div class="col-sm-12"><hr></div>
     <div class="container-fluid" ng-app="">
               
                <div class="col-sm-6">
                    <div class="row container-fluid">
                        <textarea class="form-control" id="comment" ng-model="topic1"></textarea>
                    </div>
                    <div class="row container-fluid text-justify">
                        <p>{{topic1}}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row container-fluid">
                    <textarea class="form-control" id="comment" ng-model="topic2"></textarea>
                    </div>
                    <div class="row container-fluid text-justify">
                        <p>{{topic2}}</p>
                    </div>
                </div>
                
            </div>
 

</div>
     </form>
  
     <div class="col-sm-2 sidenav"> 
     </div>
     
 </div>
 </div>
    </body> 
    
    
    
</html>