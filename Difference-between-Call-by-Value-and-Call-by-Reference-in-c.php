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
      <div class="col-sm-7 text-left" style="background-color:#fff"> 
      <div class=" row container-fluid text-left">
            <div class=" row container-fluid text-center bg-info">
                <h2>Difference b/w Call by Value and Call by Reference.</h2>
            </div>
          <p align="justify"><br>Call by Value and Call by Reference are methods to pass parameters from caller function to called function. These are classified on the basis of how the variables passed as parameter are managed between caller function and called function.</p>
            
   
          <h3>Call by Value</h3>
            <p align="justify">
                In Call by Value, value of a variable is passed as parameter to the called function by caller function. The function which is called, 
                stores those actual parameters value into local variable. Its like copy of variable which are defined inside caller function.
                Any changed made to the variable(copy variable) which are inside called function does not affect the original variable value 
                which are inside caller function. Its like making changes in copy of a file and does not affect original file.
                C programming language by default support call by value method, we need not put extra effort to implement call by value.
                </p>
                <img src="upload/Call_by_Value_final.jpg" style="width: 100%;">
                <p align="justify">As given in the above diagram, main() function is caller and swapab() function is called function. 
                    Inside main() two variable <i>a</i> and <i>b</i> are defined. <i>a</i> and <i>b</i> are passe as parameter into called <i>swapab()</i> function.
                    Swapping is done inside swapab() on the copy variable <i>a,b</i> which sre inside <i>swapab()</i> does not reflect changes on 
                    variable <i>a,b</i> which are inside main(). Result are shown as output.</p>
            <h3>Call by Reference</h3>
            <p align="justify">
                In Call by Reference, insted of passing variable value, reference/address of variable is passed to the called function.
              Address or reference passed by caller function are stored inside called function. Whenever updation is required on the variable value inside called function,
              it does with the help of those address or reference. Any updation made inside called function also reflected inside caller function.
              Its like sharing a link of a file and whenever someone updates the file with the help of link always gets reflected in original file.
              And whenever someone reads or writes, always done from original file. In C programming language inbuilt call by reference is not present.
              Call by reference method can be implementation using pointers and programmers need to manage their own. 
            </p>  
            <img src="upload/Call_By_ReferenceFinal.jpg" style="width: 100%;">
              <p></p>
              <p align="justify"> In the above program, Call by Reference is implemented with the help of pointers. 
                  <i>Main()</i> 
                  is caller and <i>swapab()</i> is called function. 
                  When sawpab() is called address of variables <i>a,b </i>are passed.
                  Addresses are stored inside local variable <i>a,b</i> which are pointer type inside <i>swapab()</i> function. 
                  Swapping done on the value of the variables are reflected in the original variable which are inside main(). 
                  When it requires to read values of variable alway red from original variable which are inside main(). 
                  Result are shown as output, both the places inside main and inside swapab() 
                  same variable values are printed which are inside main().  
                  
                  
              </p>
                  
            </p>  
        </div>
          <div class=" row container-fluid">
                                               
                                            
          </div>
        
          <div class="row container-fluid text-center bg-info">
              <h4><b>Difference b/w Call by Value and Call By Reference in tabulated form.</b></h4>
          </div>
          
           <div class=" row container-fluid">
           <table><tr>
                   <th>S.N.</th>
                   <th>Call by Value</th>
                   <th>Call by Reference</th>
               </tr>
               <tr>
                   <td>1</td>
                   <td>
                       <p>
                           In Call by value, variable value is passed to the called function as parameter.
                       </p>
                   </td>
                   <td>
                       <p>
                           In this, address/reference of the variable is passed to the called function.
                       </p>
                   </td>
               </tr>
               <tr>
                   <td>2</td>
                   <td>
                       <p>
                           Inside called function, value passed as parameter by caller are stored in local variables.</p></td><td><p>Inside called function, address passed as parameter by caller are stored in local variables.
                       </p>
                   </td>
               </tr>
               <tr>
                   <td>3</td>
                   <td>
                       <p>
                           Any change made inside called function does not reflect change inside caller function.
Any updation of variables a and b which are inside swapab() function, does not affect the variable a and b inside main function. 
                       </p>
                   </td>
                   <td>
                       <p>
                           Any change made inside called function reflects the change inside caller function.
Any updation of variables a and b inside swapab() function, updates the variable inside main function.
                       </p>
                   </td>
               </tr><tr><td>4</td><td><p>Call by value, by default supported by C programming language.</p></td><td><p>Call by Reference is not directly supported by C programming language.
Call by Reference can be implemented with the help of pointers.</p></td></tr>
               <tr>
                   <td>5</td>
                   <td>
                       <p>
                           Its like updation in the copy of a file and does not affect original file.
                       </p>
                   </td>
                   <td>
                       <p>Its like sending link of a file and any updation made through link gets reflected in the original file.
                       </p>
                   </td>
               </tr>
               <tr>
                   <td>6</td>
<td>
    <p>
Example for call by Value.
<pre>
//Call by value implementation
#include'<'stdio.h'>'
// function prototype
void swapab(int a, int b);
void main()
{
int a=10, b=20;
// calling swapab()
swapab(a, b);
printf("Inside main: a=%d, b=%d\n",a,b);
}
// function definition
void swapab(int a, int b)
{
int temp;
temp=a;
a=b;
b=temp;
printf("Inside swapab: a=%d, b=%d",a,b);
}
</pre>
<b>output:</b>
<pre>
inside main: a=10, b=20
inside swapab: a=20, b=10   
</pre>
Value swapped inside swapab() but not inside main().
</p>
</td>
<td>
<p>
 Example for call by Reference.
<pre>
//Call by Reference implementation
#include'<'stdio.h'>'
// function prototype
void swapab(int* a, int* b);
void main()
{
int a=10, b=20;
// calling swapab()
swapab(&a, &b);
printf("Inside main: a=%d, b=%d\n",a,b);
}
// function definition
void swapab(int* a, int* b)
{
int temp;
temp=*a;
*a=*b;
*b=temp;
printf("Inside swapab: a=%d, b=%d",*a,*b);
}
</pre>
<b>output:</b>
<pre>
inside main: a=20, b=10
inside swapab: a=20, b=10   
</pre>
Value swapped inside main also. While printing, reading same variable values at both the places.
</p>
</td>
              </tr>
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
