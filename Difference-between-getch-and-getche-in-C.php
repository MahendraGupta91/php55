<!DOCTYPE html>
<html lang="en">
<head>
  <title>Difference Between getch() and getche() in C.</title>
  <meta charset="utf-8">
  <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="getch()||getche()||Difference between getch and getce function in C.">
        <meta name="keywords" content="getch(),getche(),Function,header file,TurboC,conio.h,stdio.h, Example,standard,input,output">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="../images/LearnDifferences_black_logo.png">
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
<a href="#" class="list-group-item active">getch() and getche()</a>
</div>
    </div>
      <div class="col-sm-7 text-left" style="background-color: #fff"> 
     <div class="row container-fluid text-left">
              <h3>Difference between getch() and getche() function.</h3>
              <h4><b>getch():</b></h4>
              <p align="justify">getch() function is non-standard function which is available in conio.h header file. 
                  This function is not part of standard library and it is also not part of ISO C(certified c programming language). 
                  getch() takes single character form CMD(Command prompt). Command prompt are used in Turbo C for input output.
                  One thing on which we need to pay attention is that the <i>entered character does not echos on screen.</i> 
                  <br>Syntax for getch() is as follows:
              </p>
 <pre>
Function prototype:

int getch(void);

</pre>
              <p align="justify">Lets see sample program to use getch() function which is named as getch_test.c</p>
<pre>
#include stdio.h
#include conio.h
void main()
{
	char c;
	printf("Enter character: ");
	c=getch();
	printf("\nYour entered character is: %c",c);
}
</pre>
<p>To download <i>getch_test.c</i><a href="Downloads/C_Programs_Downloads/getch_test.c" download> click here.</a>
<p align="justify">Output:</p>
<img src="upload/getch_output.png" style="width: 100%;"><br><br>
<p align="justify">As you can see no character is visible at tick mark but some character is given as input.</p>
              
     </div>
     <div class="row container-fluid text-left">
              <h4><b>getche():</b></h4>
              <p align="justify">getche() function is also a non-standard function which is available in conio.h header file. 
                  This function is also not part of standard library and ISO C. 
                  getche() alos used to takes single character form CMD(Command prompt).
                  One thing that is different from getch() is that <i> the entered character echos on screen.</i>
                  It means that entered char taken by getche() and displayed on the screen where user type the char.
                  <br>Syntax for getche() is same as getch():
              </p>
 <pre>
Function prototype:

int getche(void);

</pre>
              <p align="justify">Lets see sample program to use getche() function (<i>getch_test.c</i>)</p>
<pre>
#include stdio.h
#include conio.h 
void main()
{
	char c;
	printf("Enter character: ");
	c=getche();
	printf("\nYour entered character is: %c",c);
}
</pre>
    <p>To download <i>getche_test.c</i><a href="Downloads/C_Programs_Downloads/getche_test.c" download> click here.</a>  
    <p align="justify">Output:</p>
    <img src="upload/getche_test.png" style="width: 100%;"><br><br>
    <p align="justify">As you can see character entered by user is echos on the screen indicated by tick mark.</p>
              
</div>
          <div class="row container-fluid text-left">
              <h4><b>Difference between getch() and getche() in tabulated form.</b></h4>
          </div>
                                            <div class=" row container-fluid">
                                                <table>
                                                    <tr>
                                                        <th>S.N.</th><th>getch()</th><th>getche()</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><p>getch() takes single character as input through command prompt and does not echos on screen.</p></td>
                                                        <td><p>getche() also takes single character as input through command prompt and it echos that character on screen.</p></td>
                                                    </tr>
                                                    <tr><td>2</td>
                                                        <td><p>Syntax for getch():</p>
<pre>int getch(void);</pre></td>
                                                        <td><p>Syntax for getche():</p>
<pre>int getche(void);</pre>
                                                        </td>
                                                    </tr>
                                                    <tr><td>3</td>
                                                        <td><p>Sample program for getch(): </p>
<pre>
#include stdio.h
#include conio.h
void main()
{
char c;
printf("Enter character: ");
c=getch();
printf("\nYour entered char is: %c",c);
}
</pre>                                                        </td>
                                                        <td><p>Sample program for getche():</p>
<pre>
#include stdio.h
#include conio.h
void main()
{
char c;
printf("Enter character: ");
c=getche();
printf("\nYour entered char is: %c",c);
}
</pre>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr><td>4</td>
<td>
<p>
Output:
</p>
<img src="upload/getch_output2.png" style="width: 100%">
</td>
<td>
<p>
 Output:
</p>
<img src="upload/getche_output2.png" style="width: 100%"></td></tr>
                                                </table>
                                            
                                            </div>
<div class=" row container-fluid text-right color1" ><h5><a href=""><i>By:</i> Mahendra Gupta</a></h5></div>
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
