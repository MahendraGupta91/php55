<!DOCTYPE html>
<html lang="en">
<head>
  <title>Difference between Global and Local Variables in C.</title>
  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <meta name="keywords" content="Global, Local, Variable, Scopping, Scope, Region, Program, C Language, Programming.">
     <meta name="author" content="Mahendra Gupta">
          <meta property="og:title" content="Differenc between Global and Local Variable in C.">
          <meta property="og:description" content="Global and Local are scopping of variables. Scopping of a variable defines the region of a program where a given variable is accessible(or valid).">
          <meta property="og:url" content="https://learndifferences.org/Difference-between-Global-and-Local-Variable-in-C.php">
          <meta property="og:image" content="https://learndifferences.org/upload/Global_local_Var_poster.png">
          <meta property="og:image:type" content="image/png">
          <meta property="fb:app_id" content="2959023354224729">
          <meta name="twitter:title" content="Difference between Global and Local variables in C."
          <meta name="twitter:description" content="Global and Local are scopping of variables. Scopping of a variable defines the region of a program where a given variable is accessible(or valid).">
          <meta name="twitter:image" content="https://learndifferences.org/upload/Global_local_Var_poster.png">
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
<a href="Difference-between-global-and-local-variable-in-c.php" class="list-group-item active">Global and Local Variables </a>
<a href="Difference-between-actual-formal-parameters-c.php" class="list-group-item">Formal and Actual Parameters</a>
<a href="Difference-between-getch-and-getche-in-C.php" class="list-group-item">getch() and getche()</a>
</div>
    </div>
      <div class="col-sm-7 text-left" style="background-color: #fff"> 
      <div class=" row container-fluid text-left">
            <div class=" row container-fluid text-center bg-info">
                <h2>Difference Between Global and Local Variables.</h2>
            </div>
            <h3>Global Variable</h3>
            <p align="justify">Global variables are declared outside of functions. These variables are accessible anywhere in the program, 
                it means that global variable's scope are entire program. Global variable lives in the memory till program's main function termination. 
                Mostly Global variables are declared at top of program. At runtime these variables are stored in data segment area. </p>
            <h3>Local Variables</h3>
            <p align="justify">Local Variables are declared inside a function or block. These variable have scope inside that function or block, 
                it means that local variables are accessible only inside those function or block in which these are defined. When a function or block terminates, all of its local variable gets terminated. 
                Life time of a local variable is same as life time of function of block in which it is declared. Local variables are stored on the stacks. 
                In C programming, function calling is supported by Stack data structure. Formal parameters of any function also treated as local variables.
              
            </p>  
              <img src="upload/Global_local_Var_poster.png" style="width: 100%;">
              <p></p>
              <p align="justify"> In the above program, there is a global variable named <i>sum</i> which is declared at top of the program. Local variables <i>x,y</i> 
                  which are defined inside <i>summation</i> function and, <i>num1 and num2</i> are defined inside main function of the program. 
                  Global variable <i>sum</i> can be used anywhere in the program such as it is used inside summation and main function,
                  shown in the program with green line.</p>
                  <p align="justify">Local variable such as x,y can be used inside function where it is defined, 
                      these local variables can not be accessed inside main function, as example it is shown with red line.
                  </p>
            </p>  
        </div>
          <div class=" row container-fluid">
                                               
                                            
          </div>
        
          <div class="row container-fluid text-center bg-info">
              <h4><b>Difference between Global and Local variables in tabulated form.</b></h4>
          </div>
          
           <div class=" row container-fluid">
                                                <table>
                                                    <tr>
                                                        <th>S.N.</th><th>Global var</th><th>Local var</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><p>Global variables are defined outside of functions. Mostly at top of the program.</p></td>
                                                        <td><p>Local variables are defined inside of a function or block.</p></td>
                                                    </tr>
                                                    <tr><td>2</td>
                                                        <td><p>Scope of global variables are entire program. It means that global variables are accessible anywhere in the program.</p>
                                                        </td>
                                                        <td><p>Scope of local variables are inside those function or block in which its defied.</p>

                                                        </td>
                                                    </tr>
                                                    <tr><td>3</td>
                                                        <td><p>It can be accessed anywhere in the program.</p>
                                                      </td>
                                                        <td><p>It is accessible only inside function or block where it is defined.</p>
                                                           
                                                        </td>
                                                    </tr>
                                                    <tr><td>4</td>
                                                        <td>
                                                            <p>
                                                               It is stored in data segment area.
                                                            </p>
                                                        </td>
                                                        <td>
                                                        <p>
                                                            It is stored on Stack.
                                                        </p>
</td></tr>
                                                     <tr><td>5</td>
                                                        <td>
                                                            <p>
                                                               Lifetime of global variables are till entire program termination.
                                                               Global variables terminates from memory when entire program terminates.
                                                            </p>
                                                        </td>
                                                        <td>
                                                        <p>
                                                            Lifetime of a local variable is till termination of that function or block.
                                                            When a function or block terminates its all local variables gets terminated. 
                                                        </p>
                                                        <tr><td>5</td>
                                                        <td>
                                                            <p> Example: Global Variable
<pre>
#include"<"stdio.h">"
/* Global Variables are defined here */
int sum;
char c;
......
......
int function1()
{
// Function body
}
int finction2()
{
//Function Body
}
void main()
{
// Body of main
}
</pre>                                                               
                                                            </p>
                                                        </td>
                                                        <td>
                                                        <p>Example: Local Variable
<pre>
#include"<"stdio.h">"
/* Global Variable if any*/
int function1()
{
/* Local Variables are defined here */
int a;
char c;
//remaining Function body
}
int finction2()
{
/* Local Variables are defined here*/
int a2;
char c2;
//remaining Function body
}
void main()
{
/* Local Variables are defined here */
int m;
char c3;
//remaining main Function body
}
</pre> 
                                                        </p>
</td></tr>
                                                </table>
              
                                            
                                            </div>
           <div class="row container-fluid text-center">
             <br>
             <br>
             Thank you for visiting this page:
             <p align="justify"><a href="https://www.learndifferences.org/">Back to Home page</></p>
          </div>
     
           
           
     
       
     
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
