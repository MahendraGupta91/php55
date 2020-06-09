<?php
session_start();
?>
<!DOCTYPE html><html lang="en"><head><title>Differencing.org</title><meta charset="utf-8"><meta name="description" content="">
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
                                        padding: 0;
                                        
                                     
                                 }
                                 img {
                                     width: 100%;
                                     height: auto;
                                     
                                 }
                            </style></head><body><div class="navbar navbar-inverse">
                                    <header>
                                    <img src="images/dd.png" height="100" width="200" align="left">
                                    <h1 color="green">Differencing.org</h1>
                                    </header>
                               </div><nav class="navbar navbar-inverse">
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
                                        <div class="col-sm-2 sidenav">
                                            <p><a href="#">Link</a></p>
                                            <p><a href="#">Link</a></p>
                                            <p><a href="#">Link</a></p>
                                            <p><a href="#">
                                        </a></p>
                                        </div> 
                                        <div class="col-sm-8 text-left"> 
                                            <div class=" row container-fluid text-center" >
                                                <h2>Difference between ertertq and etqetqe.</h2>
                                            </div>
                                            <div class=" row container-fluid">
                                                <table>
                                                   <tr><th>S.N.</th><th>Structure</th><th>Union</th></tr>
                                                    <tr><td>1</td><td>Structure is a user defined data structure which can store different types of data  into a single name.</td>
                                                        <td>Union is also a user defined data type which stores different types of data but one at a time.</td></tr><tr>
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
                                                            <img src="upload/s2.png" alt="Differencing.org" class="img-responsive img-rounded"></td>
                                 <td>
                                     <img src="upload/u2.png" alt="Differencing.org" class="img-responsive img-rounded">
                                 </td></tr>
                                                </table>
                                            </div>
                                                <div class=" row container-fluid text-right color1" ><h5><a href=""><i>By:</i> Mahendra Gupta (M.Tech,JNU New Delhi) </a></h5>
                                                </div><div class=" row container-fluid text-left"><h4><i>References:</i></h4></div><div class=" row container-fluid"><ol></div></div><div class="col-sm-2 sidenav">
                                    <div class="well">
                                            <p>ADS</p>
                                    </div>
                                    <div class="well">
                                        <p>ADS</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <footer class="container-fluid text-center">
                            <p>Footer Text</p>
                        </footer>

                        </body>
                        </html>
                    