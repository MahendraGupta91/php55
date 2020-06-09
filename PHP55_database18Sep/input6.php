<?php
session_start();
$_SESSION["Author_Name"]="Mahendra";
$_SESSION["AuthorId"]=1805;
if(!isset($_SESSION["ArticleFlag"]))
{
    $_SESSION["ArticleFlag"]=FALSE;
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
        <link rel="icon" href="../images/LearnDifferences_black_logo.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="css/TableStyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
<style>
      pre
      {
          width: 100%;
      }
       .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      position: relative;
      margin-top:-100px;
      color: white;
      clear: both;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    hr { 
        display: block;
        margin-top: 1.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
    } 
    .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
   border-radius: 5%;
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

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
p
{
    font-family:Arial,garamond,sans-serif;
    font-size:14px;
    font-style:normal; 
    color: #2c4762;
}


     </style>

</head>

<body>
<div class="navbar navbar-inverse">
<header>
      <div class="container-fluid text-center text-md-left">
    <div class="col-sm-3">
        <img  width="18%" src="../images/LearnDifferences_black_logo.png" align="left"> <img  width=" 82%" src="../images/Differencing_logo.png" align="right">
        
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
</div></header>
</div>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#"><img  width="30px" src="images/LearnDifference_white_logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#">Home</a></li>
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
    <div class="col-sm-3 sidenav">
      		
<div class="list-group">
    <a href="Difference-Between-Structure-Union-in-C.php" class="list-group-item active">Structure and Union </a>
<a href="#" class="list-group-item">malloc() and calloc()</a>
<a href="#" class="list-group-item">local and global var </a>
<a href="Difference-between-actual-formal-parameters-c.php" class="list-group-item">Formal and Actual Parameters</a>
<a href="#" class="list-group-item">getch()and getche()</a>
</div>
        </div>
        <div class="col-sm-7 text-left" ng-app="" style="background-color: #fff; height: 100%"> 
            <form onsubmit="return validateForm()" method="post" name="myForm" action="Mediator5.php" enctype="multipart/form-data">       
            <?php
                
                if (($_SESSION["ArticleFlag"]===FALSE))// To check wheather it is initial stage.    
                {
                    echo '<br>';
                echo '<div class="container-fluid">';
                    echo '<div class="col-sm-6"><p class="text-center" >First Topic*</p></div>';
                    echo '<div class="col-sm-6"><p class="text-center">Second Topic*</p></div>';
                echo '</div>';
                echo '<div class="container-fluid">';
                      echo '<div class="col-sm-6"><input type="text" name="topic1" class="form-control" required></div>';
                      echo '<div class="col-sm-6"><input type="text" name="topic2" class="form-control" required></div>';
                echo '</div>';
                echo '<hr>';
                }
                else 
                {
                    echo '<br>';
                    echo '<div class="container-fluid">';
                        echo '<div class="col-sm-6"><p class="text-center" >'.$_SESSION["TopicName1"].'</p></div>';
                        echo '<div class="col-sm-6"><p class="text-center">'.$_SESSION["TopicName2"].'</p></div>';
                    echo '</div>';        
                    /*echo '<div class="container-fluid">';
                        echo '<div class="col-sm-6"><input type="text" name="topic1" class="form-control" required></div>';
                        echo '<div class="col-sm-6"><input type="text" name="topic2" class="form-control" required></div>';
                    echo '</div>';*/  
                }
                
             
            ?>
               
            <div class="col-sm-12"></div>
            <div class="container-fluid">            
                <div class="col-sm-6"><textarea name="PointFirst" class="form-control" id="comment" ng-model=""></textarea></div>
                <div class="col-sm-6"><textarea name="PointSecond" class="form-control" id="comment" ng-model=""></textarea></div>       
            </div>
            <div class="col-sm-12"><br></div>
            <div class="container-fluid">              
                <div class="col-sm-6"><input type="file" name="image1" class="form-control" id="comment" ng-model=""></div>
                <div class="col-sm-6"><input type="file" name="image2" class="form-control" id="comment" ng-model=""></div>
            </div> 
            <div class="col-sm-12"><br></div>
            <div class="container-fluid">
                <div class="col-sm-6"><p class="text-center">Reference Name</p></div>
                <div class="col-sm-6"><p class="text-center">Reference URL</p></div>
            </div>        
            <div class="container-fluid">
                <div class="col-sm-6"><input type="text" class="form-control" name="ReferenceName"></div>
                <div class="col-sm-6"><input type="text" class="form-control" name="ReferenceUrl"></div>
            </div>
             <div class="col-sm-12"><hr></div>
            <div class="container-fluid">  
                <div class="col-sm-6 text-center"><input onclick="switchTo1();" type="submit" name="Publish" value="Save and Publish" ></div>
                <div class="col-sm-6 text-center"><input onclick="switchTo2();" type="submit" name="Save"value="Add New Point"></div>
            </div> 
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

<footer>

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <div class="col-md-1 mb-md-0 mb-3">
            
        </div>
      <div class="col-md-5 mt-md-0 mt-3 text-left">

        <!-- Content -->
        <br>
        <h4 class="text-uppercase">Address</h5>
        <p>Ward No. 9, Behind Tehshil, Bihari Colony<br> Anuppur, M.P-484224</p>
        <h4 class="text-uppercase">Contacts;</h5>
        <p>Email: differencing18@gmail.com<br>Mobile: +919582429861<br>Contact Person: Mahendra Gupta</p>

      </div>
      <!-- Grid column -->

      <hr >

      <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-3">

        <!-- Links -->
        

        <ul class="list-unstyled">
          <li>
           <a href="https://www.google.com" class="fa fa-google"></a>
          </li>
          <li>
           <a href="https://www.youtube.com" class="fa fa-youtube"></a>
          </li>
          
        </ul>

      </div>

      <div class="col-md-2 mb-md-0 mb-3">

        <!-- Links -->
        

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
          </li>
          <li>
            <a href="https://www.twitter.com" class="fa fa-twitter"></a>
          </li>      
          
        </ul>

      </div>
      <div class="col-md-2 mb-md-0 mb-3">
         
          <ul class="list-unstyled">
          <li>
            <a href="https://www.linkdin.com" class="fa fa-linkedin"></a>
          </li>
          <li>
          <a href="https://www.instagram.com" class="fa fa-instagram"></a>
          </li>
                   
          
        </ul>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://learndifferences.org"> LearnDifferences.org</a><br><br>
  </div>
 

</footer>

</body>
</html>
