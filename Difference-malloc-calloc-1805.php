<?phpsession_start();?><!DOCTYPE html><html lang="en"><head><title>Differencing.org</title><meta charset="utf-8"><meta name="description" content="">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <link rel="apple-touch-icon" href="apple-touch-icon.png">
                                    <link rel="stylesheet" href="css/bootstrap.min.css">
                                    <link rel="stylesheet" href="css/mystyle.css">
                                    <link rel="stylesheet" href="css/TableStyle.css">
                                    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
                                    <link rel="stylesheet" href="css/main.css">
                                    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
                             <style>
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
                                        </div> <div class="col-sm-8 text-left"> <div class=" row container-fluid text-center" ><h2>Difference between malloc and calloc.</h2></div>
                                            <div class=" row container-fluid"><table><tr><th>S.N.</th><th>malloc</th><th>calloc</th></tr><tr><td>1</td><td><p>malloc() does not initializes the allocated memory.</p></td><td><p>calloc() initializes all bytes of allocated memory.</p></td></tr><tr><td>2</td><td><p>Default value of allocated memory is garbage value.</p></td><td><p>Default value of allocated memory is 0.</p></td></tr><tr><td>3</td><td><p>malloc() takes only one argument/input to allocate memory which is number of bytes memory to be allocated. </p></td><td><p>calloc () takes two arguments/inputs.
First one is number of memory to be allocated and second one is the size of each memory.</p></td></tr><tr><td>4</td><td><p>Function prototype:
void *malloc(size_t n);
Example:
int  *ptr;
ptr=(int*)  malloc(5*sizeof(int));
// it will allocate memory of 5 time of size of int data type.</p></td><td><p>Function prototype:
void *calloc(size_t  n, size_t  size);
Example:
int *ptr;
ptr=(int *) calloc(10, size(int));
// it will allocate memory to store array of 10 int values.</p></td></tr></table></div>
                                            <div class=" row container-fluid text-right color1" ><h5><a href=""><i>By:</i> Mahendra Gupta (M.Tech,JNU New Delhi) </a></h5></div>
                                            <div class=" row container-fluid text-left"><h4><i>References:</i></h4></div>
                                            <div class=" row container-fluid"><ol><li><a href="https://en.wikipedia.org/wiki/C_dynamic_memory_allocation" target="_blank">https://en.wikipedia.org/wiki/C_dynamic_memory_allocation.</li><li><a href="https://www.dipmat.univpm.it/~demeio/public/the_c_programming_language_2.pdf" target="_blank">https://www.dipmat.univpm.it/~demeio/public/the_c_programming_language_2.pdf.</li><li><a href="http://cs-fundamentals.com/tech-interview/c/difference-between-malloc-and-calloc.php" target="_blank">http://cs-fundamentals.com/tech-interview/c/difference-between-malloc-and-calloc.php.</li></div></div>
                                        <div class="col-sm-2 sidenav">
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
                    