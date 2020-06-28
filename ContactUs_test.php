<!DOCTYPE html>
<html lang="en">
<head>
  <title>Difference between Call by Value and Call by Reference in C.</title>
  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <meta name="keywords" content="Call,Value,Reference,Caller, called, Function,Actual, Formal,Parameters, pointers, Variable, Scopping, Scope, Region, Program, C Language, Programming.">
     <meta name="author" content="Mahendra Gupta">
     <meta property="og:title" content="Differenc between Call by Value and Call by Reference in C.">
     <meta property="og:description" content="Call by Value and Call by Reference are parameter passing methods. These two methods are classified on the basis of where and where not changes gets reflected after changing variavle value on one place.">
     <meta property="og:url" content="https://www.learndifferences.org/Difference-between-Call-by-Value-and-Call-by-Reference-in-c">
     <meta property="og:image" content="https://www.learndifferences.org/upload/Call_by_Value_final.jpg">
     <meta property="og:image:type" content="image/jpg">
     <meta property="fb:app_id" content="2959023354224729">
     <meta name="twitter:title" content="Differenc between Call by Value and Call by Reference in C."
     <meta name="twitter:description" content="Call by Value and Call by Reference are parameter passing methods. These two methods are classified on the basis of where and where not changes gets reflected after changing variavle value on one place.">
     <meta name="twitter:image" content="https://www.learndifferences.org/upload/Call_by_Value_final.jpg">
     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:site" content="@learndifferencs">
         
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="images/LearnDifferences_black_logo.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="css/TableStyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
        border-width: 2px;
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
    font-size:16px;
    font-style:normal; 
    color: #2c4762;
}


     </style>
</head>

<body bgcolor="#E6E6FA">
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
        <a class="navbar-brand" href="#"><img  width="30px" src="images/LearnDifference_white_logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#">Home</a></li>
        <li class=""><a href="programming.php">Programming</a></li>
        <li class="active"><a href="data_mining.php">Data Mining</a></li>
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
<a href="Difference-Between-Structure-Union-in-C.php" class="list-group-item">Structure and Union </a>
<a href="Difference-between-actual-formal-parameters-c.php" class="list-group-item">malloc() and calloc()</a>
<a href="Difference-between-global-and-local-variable-in-c.php" class="list-group-item">Global and Local Variables </a>
<a href="Difference-between-actual-formal-parameters-c.php" class="list-group-item">Formal and Actual Parameters</a>
<a href="Difference-between-getch-and-getche-in-C.php" class="list-group-item">getch() and getche()</a>
<a href="Difference-between-getch-and-getche-in-C.php" class="list-group-item active">Call by Value and Call by Reference</a>
</div>
    </div>
      <div class="col-sm-7 text-left" style="background-color: #fff">
          <!--Section: Contact v.2-->


            <h3>Contact Us.</h3>
            <p align="left" style="font-size: 18px">
            <i class="fa fa-map-marker" style="font-size: 18px" ></i><b>LearnDifferences</b>,<br> Section-1, First Floor, Behind Tehshil,<br> Anil Shivhare Bulding, Bihari Colony, Anuppur M.P. 484224
            <br><b>Email:</b>ld@learndifferences.org<br>
            <i class="fa fa-globe" style="font-size: 20px"></i><strong>Website:</strong><a href="www.learndifferences.org">www.learndifferences.org</a>
            </p>  

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                           
                            <label for="email" class="">Your email</label>
                             <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mb-3">

                        <div class="md-form">
                            
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
               
                
                <div class="text-center text-md-left mt-lg-4">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                
            </form>
            <div class="container mt-3">
  <h3>Input Groups</h3>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front (.input-group-prepend) or behind (.input-group-append) the input field as a "help text".</p>
  <p>Use the .input-group-text class to style the specified help text.</p>
  
  <form action="/action_page.php">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">@</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" id="usr" name="username">
    </div>

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Your Email" id="mail" name="email">
      <div class="input-group-append">
        <span class="input-group-text">@example.com</span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>


<!--Section: Contact v.2-->
      </div>
      
<div class="col-sm-2 sidenav">
    <div class="well">    
        
    </div>
    <div class="well">
        
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
      <div class="col-md-3 mt-md-0 mt-3 text-left">

        <!-- Content -->
        <br>
        <h4 class="text-uppercase">Address</h5>
        <p>Ward No. 9, Behind Tehshil, Bihari Colony<br> Anuppur, M.P-484224</p>
        <h4 class="text-uppercase">Contacts;</h5>
        <p>Email: differencing18@gmail.com<br>Mobile: +919582429861<br>Contact Person: Mahendra Gupta</p>

      </div>
        <div class="col-md-2 mt-md-0 mt-3 text-left">
            <br>
            <h4 class="text-uppercase">Organization</h4>
            <p><a href="about-us.php">About Us</a></p>
            <p><a href="contact-us.php">Contact Us.</p>
            <p><a href="privacy-policy.php">Privacy Policy.</p>
          
            
            
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
