<!DOCTYPE html>
<html lang="en">
<head>
  <title>How to make header file in C?</title>
  <meta charset="utf-8">
  <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="../images/LearnDifferences_black_logo.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="">
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
    font-size:14px;
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
    <a href="Difference-Between-Structure-Union-in-C.php" class="list-group-item">Structure and Union </a>
<a href="#" class="list-group-item">malloc() and calloc()</a>
<a href="#" class="list-group-item">local and global var </a>
<a href="Difference-between-actual-formal-parameters-c.php" class="list-group-item">Formal and Actual Parameters</a>
<a href="#" class="list-group-item">getch()and getche()</a>
</div>
    </div>
      <div class="col-sm-7 text-left" style="background-color: #fff"> 
      <div class=" row container-fluid text-center">
                                                <h3>How to make our own header file in C?</h3>

                                                <p align="justify">
                                                    <b>Header Files</b> in C are collection of functions and macros. Functions are program code which are written to perform a particular task.
                                                       Function are reusable piece of code, write once and use many times.
                                                       By dividing our program into functions we can reduce length of program as well as effort required to write the code.
                                                       There are many common usable inbuilt header files in C language which can be directly included in our programs.
                                                       <br>
                                                       <b>Macros</b> are piece of code which are given a name. Macros can be included into program as and when it required.
                                                       <br>We can also make our own header file and can use like other header file.
                                                    
                                                </p>
                                                <h3>Step by step guide to make header file in C.</h3>
                                                
                                                <p align="justify">
                                                    <b>Step-1.</b><br> Open notepad or notepad++ and define all your function and macros and save using .h extension, it is used for header file.<br>
                                                    
                                                    For example: I have written following functions and saved as <i>myheader.h .</i>

</p>
<table width="100% " border="0">
    <tr><td style="text-align:left">
<pre>
// Function to calculate sum of digits of a number.
int DigiSum(int n)
{
    int sum=0,temp;
    while(n>0)
    {
        temp=n%10;
        sum=sum+temp;
	n=n-temp;
        n=n/10;
    }
    return(sum);
}

//function to add two numbers.
int Sum2Num(int num1, int num2)
{
    return(num1+num2);	
}

//  function to multiply two numbers.
int Mul2Num(int num1, int num2)
{
	return(num1*num2);
}
</pre>
            
            <p>To download <i>myheader.h</i><a href="Downloads/C_Programs_Downloads/MYHEADER.H" download> click here.</a>           
</tr></td>
    </table>
                                                <p align="justify"><b>Step-2.</b><br>
                                                   Copy and paste myheader.h into include directory of TurboC. You can find it C drive->Programs File->TurboC3->INCLUDE. For my computer path is "C:\TURBOC3\INCLUDE\".
                                                </p> 
                                                 <p align="justify"><b>Step-3.</b><br>
                                                   Open new page in TurboC and include all header files that is required for your program. Include myheader.h along with other header files and call functions of your header
                                                   file as and when required like other inbuilt function of C.<br>
                                                   In following program myheader.h is included and their functions are called. 
                                                </p>
                                                <table width="100% " border="0">
    <tr><td style="text-align:left">
<pre>
#include"<"myheader.h">"
#include"<"conio.h">"
#include"<"myheader.h">" /*Including myheader.h*/
void main()
{
	int n=24, A=25,B=20;
	clrscr();	
	/*  Function Calling*/
	printf("\n Sum of digits of n= %d", DigiSum(n));
	printf("\n A+B=%d ",Sum2Num(A,B));
	printf("\n A*B=%d ",Mul2Num(A,B));
	getch();

}
</pre>
            
            <p>To download <i>headertest.c</i><a href="Downloads/C_Programs_Downloads/headertest.c" download> click here.</a> 
                
</tr></td>
    </table>
            <p align="justify"><b>Step-4.</b><br>
                    Compile and run the program and you will get the desired result. Outpot of header.test are as follow:
                </p> 
<table width="100% " border="0">
<tr><td style="text-align:left">
<pre>
Output:

Sum of digits of n=6
A+B=45
A*B=500

</pre>
  <p align="justify">
                    Thank you for visiting this page.
  </p>  
  
 
</tr></td>
    </table>
      </div>
          <br><br>
<a href="learndifferences.org"><h4>Back to home page.</h4></a>
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
