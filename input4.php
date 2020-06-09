<?php
session_start();
$_SESSION["Author_Name"]="Mahendra";
$_SESSION["AuthorId"]=1805;
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
               <!--
            var flag=0;
            function switchTo1()
            {
               flag=1;
               return true;
            }
              
            
            function switchTo2()
            {
               flag=2;
               return true;
            }
         //-->
     
  
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
        }else if(((ImageName1==="") && (ImageName2===""))||((TextName1==="") && (TextName2==="")))
        {  console.log(flag);   
            if(flag===2)
            {
                var t=confirm("All are empty \n Do you want to save and publish");
                if(t===true)
                {    
                    return true;
                }else
                {
                    return false;  
                }
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
            <form onsubmit="return validateForm()" method="post" name="myForm" action="Mediator2.php" enctype="multipart/form-data">       
            <div class="container-fluid">
                <div class="col-sm-6"><p class="text-center" >First Topic</p></div>
                <div class="col-sm-6"><p class="text-center">Second Topic</p></div>
            </div>        
            <div class="container-fluid">
                <div class="col-sm-6"><input type="text" class="form-control" required></div>
                <div class="col-sm-6"><input type="text" class="form-control" required></div>
            </div>    
            <div class="col-sm-12"><hr></div>
            <div class="container-fluid">            
                <div class="col-sm-6"><textarea name="PointFirst" class="form-control" id="comment" ng-model=""></textarea></div>
                <div class="col-sm-6"><textarea name="PointSecond" class="form-control" id="comment" ng-model=""></textarea></div>       
            </div>
            <div class="col-sm-12"><br></div>
            <div class="container-fluid">              
                <div class="col-sm-6"><input type="file" name="image1" class="form-control" id="comment" ng-model=""></div>
                <div class="col-sm-6"><input type="file" name="image2" class="form-control" id="comment" ng-model=""></div>
            </div>  
             <div class="col-sm-12"><hr></div>
            <div class="container-fluid">  
                <div class="col-sm-6 text-center"><input onclick="switchTo1();"type="submit" value="Save and Publish"></div>
                <div class="col-sm-6 text-center"><input onclick="switchTo2();" type="submit" value="Add New Point"></div>
            </div> 
            </form> 
            <?php
            echo '<div class="container-fluid">';
                    echo '<div class="row text-center"><h1>Hello Mahendra</h1></div>';
                    echo '<div class="row text-center"><input onclick="switchTo2();" type="submit" value="Add New Point"></div>';
            echo '</div> ';
        ?>
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
