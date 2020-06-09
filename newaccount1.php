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
        <script type="text/javascript"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<meta name="google-signin-client_id" content="566239647150-lt2gj6sv7qmtg8k6t2jliehcc5sg5gh4.apps.googleusercontent.com">
        <script type="text/javascript">
        
    function validateForm()
    {
    
        var ImageExtensions=["jpg","jpeg","png","tiff","tif","gif","bmp"];
        var ImageName1,ImageName2, TextName1,TextName2,Imageextension1,ImageExtension2;
    
        ImageName1=document.forms["myForm"]["image1"].value;
        ImageName2=document.forms["myForm"]["image2"].value;
        TextName1 =document.forms["myForm"]["PointFirst"].value;
        TextName2 =document.forms["myForm"]["PointSecond"].value;
        ImageExtension1= ImageName1.replace(/^.*\./, '');
        ImageExtension2= ImageName2.replace(/^.*\./, '');
        console.log((!TextName1==="")&&(TextName2==="") || (TextName1==="")&&!(TextName2===""));
        console.log(ImageExtensions.indexOf(ImageExtension1));
        var x = document.forms["myForm"]["PointFirst"].value;
        var y = document.forms["myForm"]["image1"].value;
    
        if ((ImageExtension1!=="")&&(ImageExtensions.indexOf(ImageExtension1)<0)) 
        {
            alert("."+ImageExtension1+" file extension not allowed."+ImageName1);
            return false;
        }else if((ImageExtension2!=="")&&(ImageExtensions.indexOf(ImageExtension2)<0))                                                       
        {
            alert("."+ImageExtension1+" file extension not allowed."+TextName2);
            return false;
       
        }else if((!(TextName1==="") && (TextName2==="")) || ((TextName1==="") && !(TextName2==="") ))
        {
            alert("Either both shold be filled or blank"+flag);
            return false;  
        
        }else if((!(ImageName1==="") && (ImageName2==="")) || ((ImageName1==="") && !(ImageName2==="") ))
        {
             alert("Either both shold be filled or blank");
             return false;  
        }else if(((ImageName1==="") && (ImageName2===""))&&((TextName1==="") && (TextName2==="")))
        {  console.log(flag);   
            if(flag===2)
            {
                //var t=confirm("All are empty \n Do you want to save and publish");
                //if(t===true)
               // {    
                 //   return true;
                //}else
                //{
                //    return false;  
                //}
                alert("ALL are empty. \n If you want to publish press save and Pulnish button.");
                return false;
            }else if(flag===1)
            {
                var t=confirm("Do you want to save and publish");
                if(t===true)
                {    
                    return true;
                }else
                {
                    return false;
                }
                
            }
        }
        }
        </script>
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
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
            
                    <form action="sinup_emailVerification.php" method="post" name="Sinup" action="Mediator5.php" enctype="multipart/form-data">
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
