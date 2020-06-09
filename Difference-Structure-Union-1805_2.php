<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Difference between Structure and Union</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="css/TableStyle.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
              pre {
                                        box-sizing: border-box;
                                        width: 100%;
                                        padding: 5px;
                                        
                                     
                                 }
                                 
                                 footer
                                 {
                                     background-color: #f1f1f1;
                                 }
                                p{
                                    font-family: Arial, Helvetica, sans-serif;
                                }
                                table-logo
                                {
                                    border: 0px;
                                    margin-right: 0;
                                    margin-right: 0;
                                }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse">
                                    <header>
                                    <div class="container-fluid text-center text-md-left">
    <div class="col-sm-3">
        
       
        <img  width="50px"src="images/LearnDifferences_black_logo.png">
                    
                       
                   
        
    </div>
    <div class="col-sm-6">
        <h2><b>LearnDifferences.org</b></h2>
    </div>
    <div class="col-sm-3 ">
        <div class="container-fluid">
             <div class="row">
               <?php 
                                                $googleadsensecode='
                                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                <script>
                                                (adsbygoogle = window.adsbygoogle || []).push({
                                                    google_ad_client: "ca-pub-1881482997365438",
                                                    enable_page_level_ads: true});
                                                    </script>';

                                                echo $googleadsensecode;
                                                ?> 
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
                    <a class="navbar-brand" href="#"><img src="images/LearnDifferences_logo.png" width="40px" height="40px"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Programming</a></li>
                        <li><a href="#">Data Mining</a></li>
                        <li><a href="#">Basic Sciences</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid text-center">    
            <div class="row content">
                 <div class="col-sm-3 sidenav">
      		
<div class="list-group">
<a href="#" class="list-group-item active">Structure and Union </a>
<a href="#" class="list-group-item ">malloc() and calloc()</a>
<a href="#" class="list-group-item">local and global var </a>
<a href="#" class="list-group-item">Formal and Actual Parameters</a>
<a href="#" class="list-group-item">getch()and getche()</a>
</div>
                      </div>
                <div class="col-sm-7 container-fluid"> 
                                            <div class=" row container-fluid text-center" >
                                                <h2>Difference between Structure and Union.</h2>
                                            </div>
                                            <div class="row container-fluid">
                                                <table><tr><th>S.N.</th><th>Structure</th><th>Union</th></tr>
                                                    <tr><td>1</td><td><p>Structure is a user defined data structure which can store different types of data  into a single name.</p></td>
                                                        <td><p>Union is also a user defined data type which stores different types of data but one at a time.</p></td></tr><tr>
                                                        <td>2</td><td><p>All of its members have different memory locations.</p></td><td><p>All of its member share same memory location.</p></td></tr><tr>
                                                        <td>3</td><td><p>Size of memory allocated is equal to the sum of all its members.</p></td><td><p>Size of memory allocated is equal to the size of largest members.</p></td></tr><tr>
                                                        <td>4</td><td><p>All members can be stored at any point of time.</p></td>
                                                        <td><p>Only one member can be stored at any point of time.</p></td></tr><tr>
                                                        <td>5</td><td><p>It uses struct keyword to define a structure variable.</p></td>
                                                        <td><p>It uses union keyword to define a union variable.</p></td></tr><tr>
                                                        <td>6</td><td><p>
                                                                       
<pre>
struct student
{
    char  name[15]; // 15 bytes
    int rollnumber; // 4bytes
    int marks;     // 4 bytes
}
</pre>
<p>Total  15+4+4=23 Bytes memory will be allocated to student variable.And all the members name, rollnumber and marks can be stored.</p>

</p></td>
                                                        <td><p>
                                                                
<pre>
union student
{
    char  name[15];// 15 bytes
    int rollnumber;// 4bytes
    int marks;     // 4 bytes
}
</pre>
<p>Total  max(15+4+4)=15 Bytes memory will be allocated to student variable. Any one of name, rollnumber and markscan be stored at at time.
</p>

</p></td></tr><tr>
                                                        <td>7</td><td>
                                                            <img src="upload/Structure_1805_7.png" alt="Differencing.org" class="img-responsive img-rounded"></td>
                                 <td>
                                     <img src="upload/Union_1805_7.png" alt="Differencing.org" class="img-responsive img-rounded">
                                 </td></tr>
                                                </table>
                                                
                                            </div>
                                            <div class=" row container-fluid text-right color1" >
                                                <h5><a href=""><i>By:</i> Mahendra Gupta (Lecturer) </a></h5>
                                            </div>
                                            <div class=" row container-fluid text-left">
                                                <h4><i>References:</i></h4>
                                            </div>
                                            <div class=" row container-fluid text-left">
                                            <ol>
                                                <li><a href="https://www.geeksforgeeks.org/union-c/" target="_blank">https://www.geeksforgeeks.org/union-c/.</li>
                                                <li><a href="https://en.wikipedia.org/wiki/Union_type#C/C++" target="_blank">https://en.wikipedia.org/wiki/Union_type#C/C++.</li>
                                            </ol>
                                            </div>
                </div>
                <div class="col-sm-2 sidenav">
                                    <div class="well">
                                              <?php 
                                                $googleadsensecode='
                                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                <script>
                                                (adsbygoogle = window.adsbygoogle || []).push({
                                                    google_ad_client: "ca-pub-1881482997365438",
                                                    enable_page_level_ads: true});
                                                    </script>';

                                                echo $googleadsensecode;
                                                ?>
                                    </div>
                                    <div class="well">
                                      
                                    </div>
                </div>
                            </div>
                        </div>

                        <footer class="container-fluid text-center">
                            <p>© <a href="https://www.learndifferences.org">learndifferences.org</a> All Rights Reserved.</p>
                        </footer>

                        </body>
                        </html>
                    