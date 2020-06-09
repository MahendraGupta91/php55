<!DOCTYPE html>
<html lang="en">
<head>
  <title>Evolution of Programming Languages</title>
  <meta charset="utf-8">
  <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="images/LearnDifferences_black_logo.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <style>
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
p.definition
{
    font-family:Arial,garamond,sans-serif;
    font-size:14px;
    font-style:normal; 
    color: #2c4762;
}

table {
  border-spacing: 20px;
   font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    
 
}
td,th {
  background: #F00;
  padding: 10px;
  background: #EEEE70;
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
<a href="#" class="list-group-item">Formal and Actual Parameters</a>
<a href="#" class="list-group-item">getch()and getche()</a>
</div>
    </div>
      <div class="col-sm-7 text-left" style="background-color: #fff"> 
      <h2>What is program?</h2>
      <p  style="font-family:Arial,garamond,sans-serif;font-size:14px;;font-style:normal; color: #2c4762;" align="justify">
          Sequence of computer instructions to perform a particular task, is called program. 
          Programming is all about giving the instructions to the computer/machines.
     </p> 
     <p class="definition" align="justify">
         We can take simple example giving instruction to a machine as electrical devices to understand programming. 
         All the electrical devices are connected to one switch board. 
         To turn <span style="color:green">ON</span> or <span style="color:red">OFF</span> a particular device, 
         first we select the switch corresponding to that device and then we turn the switch <span style="color:green">ON</span> or
         <span style="color:red">OFF</span>. After getting ON instruction that fan or   LED bulb start function and after 
         getting OFF instruction that fan or   LED stops functioning. In this, there are only two instructions (ON/OFF) which can be 
        understood by these devices. There can be other devices which can understand meanings of multiple instructions.
       <p class="definition" align="justify"> 
           Giving instruction to a machine can be very simple as well as complex process. Simplicity of giving instruction to machine depends on 
           language understood by the machine. If we don’t know the language understood by the machine, can’t communicate.
       </p>
        <p class="definition" align="justify">
            For example consider two people C and E, C only knows Chinese and E only know English. 
            C and E only can communicate in written and they can’t understand facial expression of each other. 
            Will they be able to pass instructions to each other?  Ans. is simple NO. 
            <br> Suppose a kid is excited to give the instruction to his computer and he opens his Turbo C.
            Kid gives the following instruction to his PC:<br> <i style="color:blue">“Give me the result of 13 multiply by 7.”</i></p>
        <p class="definition" align="justify">
            Kid will not be able to get result because instruction given is in English language and 
            C compiler can't understand English language directly. C compiler understands its own language which is named as C Language.</p> 
        
            <h3>Programming Language</h3>
            <p class="definition" align="justify"> 
                A language that is use to give instructions to the computers is known as programming language.
                A programming language is a set of rules. Set of rules are similar to grammar rules of natural/human languages.
                Every programming language has its own character set, set of keywords (dictionary) and set of rules. 
                Every keyword corresponds to certain action. Programming languages also known as formal Languages.<br>
                Programming languages and human/natural language are very similar in nature.</p>
           
            <table border="1px"  width="90%">
                <th>
                    
                </th>
                <th>
                    Programming Languages.
                </th>
                <th>
                    Human/Natural Languages.
                </th>
                <tr>
                    <td>Name Of Languages</td>
                    <td><p class="definition" align="justify" padding="5px"> 
                        C, C++, JAVA, Swift
                        JavaScript, Python, SCALA,C#, RRuby, Go, Swift, JavaScript, etc.
                        </p>
                    </td>
                    <td>
                        <p class="definition" align="justify"> 
                            Hindi, English, French, Chinese, Japanese, Rasian, etc.
                        </p>
                    </td>
                </tr>
                
              <tr>
                    <td>Example</td>
                    <td>
                        <p class="definition" align="left">
                            For example take C Language
                        </p>
                    </td>
                    <td>
                        <p class="definition" align="left">
                        For example take English Language.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>Characters Set</td>
                    <td>
                        <p class="definition" align="left">
                           It has character set like a-z, A-Z,0-9, etc.
                           Special Characters @,#,$,%,&, etc.

                        </p>
                    </td>
                    <td>
                        <p class="definition" align="left">
                                It has Character set a-z,A-Z, 0-9
                                Special Character !,.,’, etc. 

                        </p>
                    </td>
                </tr>
                 <tr>
                    <td>Grammars/
                        Set of Rules
                    </td>
                    <td>
                        <p class="definition" align="left">
                           Example:<br>
                           <i>Left and Right parenthesis should be balanced.</i>


                        </p>
                    </td>
                    <td>
                        <p class="definition" align="left">
                              Example:<br> 
                              Rule of <i>Subject+Verb+Object.</i>


                        </p>
                    </td>
                </tr>
                 <tr>
                    <td>Sentence.
                    </td>
                    <td>
                        <p class="definition" align="left">
                            
<pre>
printf(“Sham is eating mango.”);
  // right.
print ”Sham is eating mango”();
 <samp style="color:red">//wrong.</samp>
</pre>
                            



                        </p>
                    </td>
                    <td>
                        <p class="definition" align="left">
<pre>
Sham is eating mango.
        // right.
eating Sham is mango.  
<samp style="color:red">//wrong.</samp>
</pre>



                        </p>
                    </td>
                </tr>
                
                
            </table>
               
                
                 <h3>Evolution/development in programming languages.</h3>
                


                 <p class="definition" align="justify">
                     Computer only understands ‘0’ and ‘1’. So, firstly there was only machine language and in machine language input to the computer is given only in the form of 0’s and 1’s.  
                     <br>For Example if we want to add two numbers. <i>“Add 5 and 7 ”.</i>  <br>
                     In mathematical term we can write it as  <i> “5+7”.</i> But we cannot give input to the computer as it is. We can give input only after converting it into machine language.       
                    <br><br>Let suppose there are only four operators are in simple computer.
                 </p>
                
<table border="1" width="90%">
                
<tr>
<td></td>
<td>
<pre width="100px">
Addition        ‘+’  --->  00
Subtraction     ‘-‘  --->  01
Multiplication  ‘x’  --->  10
Division        ’/’  --->  11
</pre>
</td>
<td>
<pre width="100px">
5 --->    101
7 --->    111
</pre>
</td>
                    
</tr>
                
<tr>
<td>1. Machine Language</td>
<td colspan="2">
<p class="definition" align="justify">
<pre width="100px">
In-fix(operand1, operator, operand2): 5 + 7
Pre-fix(operator,operand1,operand2) : +,5,7
Replace all symbol with their 
binary representation               : 00,101,111            
     
‘00101111’ is instruction in machine language to add 5 and 7.
</pre>

You can see this much work is required to add two numbers. Programming in machine language was not an easy task.

                        </p>
</td>
                    
                    
                </tr>
                <tr>
                    <td>2. Assembly Language</td>
                    <td colspan="2">
                        
                        <p class="definition" align="justify">
                          
Further enhancement was made to reduce the human effort required for programming. 
And assembly language was developed.  
In assembly language we need not enter in the form of binary. 
Acronyms were made for operation which was easy to remember and decimal value can be entered directly.
<pre width="100px">
Addition         ‘+’  --->  ADD
Subtraction      ‘-‘  --->  SUB
Multiplication   ‘x’  --->  MUL
Division         ’/’  --->  DIV
Pre-fix(operator,operand1,operand2):     + , 5,7
Replace all symbol with their acronyms:  ADD,5,7            

ADD,5,7  is instruction in Assembly language to add 5 and 7.
</pre>
Its easier than machine language but still not easy to write lengthy code in Assembly Language.  
                        </p>
                    </td>

                </tr>
                 <tr>
                     <td>3. High Level Language</td>
                     <td colspan="2">
                        <p class="definition" align="justify">
                            Further development was made and many High level Languages were developed. 
                            In high level language we can write instruction almost similar to human language. 
                            When we work on math, we will simply write a=5+7  to add 5 and 7.<br><br>

And in  C Programming language which is a high level language this can be written as:
<pre width="100px">
a=5+7;
</pre>
                        <br>

<p class="definition">Programming languages have reached such a high level that it can directly 
    process natural languages and can give you result by using natural language processing.<br>
    For example:  If you say to Google Assistant <span style="color: blue; font: italic">“Multiply 10 and 25”.</span> Which is in human language.</p>
Google Assistant will give  result:<span style="color: blue; font: italic"> 250.</span>
                        </p>
                     </td>
                </tr>
                
                
                
            </table>
                         
                 

</p>
     
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
