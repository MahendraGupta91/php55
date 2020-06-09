<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $maxsize = 2* 1024 * 1024;
    //echo 'Hello Mahendra<br>';
    $difference = new mysqli($servername, $username, $password, $dbname); // connection name is difference
    //echo 'Hello Mahendra2<br>';
    if($difference->connect_error) 
    {
        die("Connection Problem" . $conn->connect_error);
    }
    //echo 'Hello Mahendra3'.isset($_SESSION["ArticleFlag"]).'<br>';
if (isset($_SESSION["ArticleFlag"])&&($_SESSION["ArticleFlag"]===FALSE)&& isset($_POST["Save"])) 
{
    
    // Create connection
 //echo 'Hello Mahendra4<br>';
        
        /*$Articlename=$_POST["topic1"]."_".$_POST["topic2"];*/   
        $AuthorId=$_SESSION["AuthorId"];
        $_SESSION["PointCount"]=1;
        $TodayDate= date("Y/m/d");
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $TopicName1= \filter_input(INPUT_POST,"topic1",\FILTER_SANITIZE_STRING);
        $TopicName2= \filter_input(INPUT_POST,"topic2",\FILTER_SANITIZE_STRING);
        
        $PointFirst= \filter_input(INPUT_POST,"PointFirst",\FILTER_SANITIZE_STRING);
        $PointSecond= \filter_input(INPUT_POST,"PointSecond",\FILTER_SANITIZE_STRING);
        $ReferenceName=  \filter_input(INPUT_POST,"ReferenceName",\FILTER_SANITIZE_STRING);
        $ReferenceUrl=  \filter_input(INPUT_POST,"ReferenceUrl",\FILTER_SANITIZE_STRING);
    
        $ArticleName=$TopicName1."_".$TopicName2."_".$_SESSION["AuthorId"]; /*Defining Article Name*/
        
        $_SESSION["TopicName1"]=$TopicName1;
        $_SESSION["TopicName2"]=$TopicName2;
        $_SESSION["ArticleName"]=$ArticleName;
        
        /*SQL Querry for Inserting Article Details */
         
        
       //echo "<br> RegerenceName ".$ReferenceName."<br> ReferenceUrl ".$ReferenceUrl;
        //echo "<br>Topic1".$TopicName1;
        //echo "<br>Topic2:".$TopicName2."<br>"; 
     
       
       
        /*
        $_SESSION["ArticleName"]=$ArticleName;
        $sql="SELECT AID FROM article where Article_Name='$ArticleName'";
        if ($difference->query($sql) === TRUE) 
        {
            echo "New accessed";
        } 
        else 
        {
            echo "Error:ddddd"."<br>" . $difference->error."eeeeeeeeeeee";
        }*/
        
        
       //$result = $difference->query($sql);
        /* @var $result type */
       // $row = $result->fetch_assoc();
       // $_SESSION["AID"]=$row["AID"];
       //echo " AID=".$row["AID"]."ddddd".$ArticleName;
           
            
     //$sql2="CREATE TABLE '$Articlename'(sn int primary key AUTO_INCREMENT,topic1 varchar, topic2 varchar))";      
        
        
         /*echo "....<br>Image Name ".$_FILES["image1"]["name"]."<br>";
        if($_FILES["image1"]["name"]==="")
        {
            echo "No file selected<br>";
        }
        echo "<br>Image1Error ".$_FILES["image1"]["error"]."<br>";
        //echo '222222222222222222222222222 .........2.....';*/
        
        
        if(isset($_FILES["image1"]) && ($_FILES["image1"]["error"]=== 0)&& isset($_FILES["image2"]) && ($_FILES["image2"]["error"]=== 0))
        {
            
            $filename1 = $_FILES["image1"]["name"];
            $filetype1 = $_FILES["image1"]["type"];
            $filename2 = $_FILES["image2"]["name"];
            $filetype2 = $_FILES["image2"]["type"];
            $filesize1 = $_FILES["image1"]["size"];
            $filesize2 = $_FILES["image2"]["size"];
            
            //echo "<br>File Type: ".$filetype1."<br>";
            //echo '3..................................................................';
            // Verify file extension
            $ext1 = pathinfo($filename1,PATHINFO_EXTENSION);  
            $ext2 = pathinfo($filename2,PATHINFO_EXTENSION);
            
            $filename1=$_SESSION["TopicName1"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext1;
            $filename2=$_SESSION["TopicName2"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext2;
            
            //echo "<br>".$filename1."......".$filename2."....".!array_key_exists($ext1, $allowed)."<br>";
           
            echo array_key_exists($ext1, $allowed);
            if (!array_key_exists($ext1, $allowed) || !array_key_exists($ext2, $allowed) ) 
            {
                    die("Error: Selected File type is not Allowed");
            }
            else if (($filesize1 > $maxsize) ||($filesize2 > $maxsize)) 
            {
                die("Error: Grater than 2MB file are not allowed".$filesize1." and ".$filesize2);
            }
            else if(file_exists("upload/".$filename1)|| file_exists("upload/".$filename2)) 
            {
                die("Error: File Already Exists."); 
            }
            else
            {
               move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/".$filename1);
               move_uploaded_file($_FILES["image2"]["tmp_name"], "upload/".$filename2);
               //echo 'File Saved Succesfully';
            }
          
        }    
        else
        {
         $filename1="";
         $filename2="";
         $ext1="";
         $ext2="";   
            
        }
     $ArticleQuerry = "INSERT INTO article (Article_Name, AuthorId, LastEdited, topic1, topic2)
                VALUES ('$ArticleName', $AuthorId, $TodayDate,'$TopicName1','$TopicName2')"; 
      if ($difference->query($ArticleQuerry) === FALSE) 
        {
          die("Error In Article Data Insertion".$difference->error);
        } 
        
        $ArticleTable= "CREATE TABLE $ArticleName (sn INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, topic1 TEXT, topic2 TEXT, imgname1 VARCHAR(30), "
                . "imgname2 VARCHAR(30),imgtype1 VARCHAR(5), imgtype2 VARCHAR(5), referencename TEXT, referenceurl TEXT)";           
        if ($difference->query($ArticleTable) === FALSE) 
        {
              die("Error In Article Table Creation".$difference->error);
        } 
        $PointInsertion="INSERT INTO $ArticleName (topic1, topic2, imgname1, imgname2, imgtype1, imgtype2, referencename, referenceurl)"
                . "VALUES('$PointFirst','$PointSecond','$filename1', '$filename2', '$ext1', '$ext2', '$ReferenceName', '$ReferenceUrl')";
        if ($difference->query($PointInsertion) === FALSE) 
        {
              die("Error In Article Point Insertion".$difference->error);
        }
        $_SESSION["ArticleFlag"]=TRUE;
        $_SESSION["PointCount"]=$_SESSION["PointCount"]+1;
        //echo 'hello';
        
        //header('Location: https://www.google.com');
        header('Location: ./input6.php');
        
     
        
}
else if(isset($_SESSION["ArticleFlag"])&& ($_SESSION["ArticleFlag"]===TRUE)&& isset($_POST["Save"]))
{
        //echo 'Hello Mahendra5<br>';
        $AuthorId=$_SESSION["AuthorId"];
        //$TodayDate= date("Y/m/d");
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //$TopicName1= \filter_input(INPUT_POST,"topic1",\FILTER_SANITIZE_STRING);
        //$TopicName2= \filter_input(INPUT_POST,"topic2",\FILTER_SANITIZE_STRING);
        
        $PointFirst= \filter_input(INPUT_POST,"PointFirst",\FILTER_SANITIZE_STRING);
        $PointSecond= \filter_input(INPUT_POST,"PointSecond",\FILTER_SANITIZE_STRING);
        $ReferenceName=  \filter_input(INPUT_POST,"ReferenceName",\FILTER_SANITIZE_STRING);
        $ReferenceUrl=  \filter_input(INPUT_POST,"ReferenceUrl",\FILTER_SANITIZE_STRING);
    
        $ArticleName=$_SESSION["ArticleName"];
        
        //$_SESSION["TopicName1"]=$TopicName1;
        //$_SESSION["TopicName2"]=$TopicName2;
        //$_SESSION["ArticleName"]=$ArticleName;
        
        /*SQL Querry for Inserting Article Details */
         
        
        //echo "<br> RegerenceName ".$ReferenceName."<br> ReferenceUrl ".$ReferenceUrl;
        //echo "<br>Topic1".$TopicName1;
        //echo "<br>Topic2:".$TopicName2."<br>"; 
     
       
       
        
        //$_SESSION["ArticleName"]=$ArticleName;
        //$sql="SELECT AID FROM article where Article_Name='$ArticleName'";
        /*if ($conn->query($sql) === TRUE) 
        {
            echo "New accessed";
        } 
        else 
        {
            echo "Error:ddddd"."<br>" . $conn->error."eeeeeeeeeeee";
        }*/
        
        
       //$result = $difference->query($sql);
        /* @var $result type */
        //$row = $result->fetch_assoc();
        //$_SESSION["AID"]=$row["AID"];
       // echo " AID=".$row["AID"]."ddddd".$ArticleName;
           
            
     //$sql2="CREATE TABLE '$Articlename'(sn int primary key AUTO_INCREMENT,topic1 varchar, topic2 varchar))";      
        
        
         /*echo "....<br>Image Name ".$_FILES["image1"]["name"]."<br>";
        if($_FILES["image1"]["name"]==="")
        {
            echo "No file selected<br>";
        }
        echo "<br>Image1Error ".$_FILES["image1"]["error"]."<br>";
        //echo '222222222222222222222222222 .........2.....';*/
        
        
        if(isset($_FILES["image1"]) && ($_FILES["image1"]["error"]=== 0)&& isset($_FILES["image2"]) && ($_FILES["image2"]["error"]=== 0))
        {
            
            $filename1 = $_FILES["image1"]["name"];
            $filetype1 = $_FILES["image1"]["type"];
            $filename2 = $_FILES["image2"]["name"];
            $filetype2 = $_FILES["image2"]["type"];
            $filesize1 = $_FILES["image1"]["size"];
            $filesize2 = $_FILES["image2"]["size"];
            
            //echo "<br>File Type: ".$filetype1."<br>";
            //echo '3..................................................................';
            // Verify file extension
            $ext1 = pathinfo($filename1,PATHINFO_EXTENSION);  
            $ext2 = pathinfo($filename2,PATHINFO_EXTENSION);
            
            $filename1=$_SESSION["TopicName1"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext1;
            $filename2=$_SESSION["TopicName2"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext2;
            
            echo "<br>".$filename1."......".$filename2."....".!array_key_exists($ext1, $allowed)."<br>";
           
           // echo array_key_exists($ext1, $allowed);
            if (!array_key_exists($ext1, $allowed) || !array_key_exists($ext2, $allowed) ) 
            {
                    die("Error: Selected File type is not Allowed");
            }
            else if (($filesize1 > $maxsize) ||($filesize2 > $maxsize)) 
            {
                die("Error: Grater than 2MB file are not allowed".$filesize1." and ".$filesize2);
            }
            else if(file_exists("upload/".$filename1)|| file_exists("upload/".$filename2)) 
            {
                die("Error: File Already Exists."); 
            }
            else
            {
               move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/".$filename1);
               move_uploaded_file($_FILES["image2"]["tmp_name"], "upload/".$filename2);
               //echo 'File Saved Succesfully';
            }
          
        }    
        else
        {
            $filename1="";
            $filename2="";
            $ext1="";
            $ext2="";   
            
        }
        /*$ArticleQuerry = "INSERT INTO article (Article_Name, AuthorId, LastEdited, topic1, topic2)
              //  VALUES ('$ArticleName', $AuthorId, $TodayDate,'$TopicName1','$TopicName2')"; 
      if ($difference->query($ArticleQuerry) === FALSE) 
        {
          die("Error In Article Data Insertion".$difference->error);
        } 
        
        $ArticleTable= "CREATE TABLE $ArticleName (sn INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, topic1 TEXT, topic2 TEXT, imgname1 VARCHAR(30), "
                . "imgname2 VARCHAR(30),imgtype1 VARCHAR(5), imgtype2 VARCHAR(5), referencename TEXT, referenceurl TEXT)";           
        if ($difference->query($ArticleTable) === FALSE) 
        {
              die("Error In Article Table Creation".$difference->error);
        } */
        $PointInsertion="INSERT INTO $ArticleName (topic1, topic2, imgname1, imgname2, imgtype1, imgtype2, referencename, referenceurl)"
                . "VALUES('$PointFirst','$PointSecond','$filename1', '$filename2', '$ext1', '$ext2', '$ReferenceName', '$ReferenceUrl')";
        if ($difference->query($PointInsertion) === FALSE) 
        {
              die("Error In Article Point Insertion".$difference->error);
        }
  
        $_SESSION["PointCount"]=$_SESSION["PointCount"]+1;
   
        header('Location: ./input6.php');
        
        
     
        
    
}
elseif (isset($_SESSION["ArticleFlag"])&& ($_SESSION["ArticleFlag"]===TRUE)&& isset($_POST["Publish"])) 
{

        $AuthorId=$_SESSION["AuthorId"];
        //$TodayDate= date("Y/m/d");
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //$TopicName1= \filter_input(INPUT_POST,"topic1",\FILTER_SANITIZE_STRING);
        //$TopicName2= \filter_input(INPUT_POST,"topic2",\FILTER_SANITIZE_STRING);
        
        $PointFirst= \filter_input(INPUT_POST,"PointFirst",\FILTER_SANITIZE_STRING);
        $PointSecond= \filter_input(INPUT_POST,"PointSecond",\FILTER_SANITIZE_STRING);
        $ReferenceName=  \filter_input(INPUT_POST,"ReferenceName",\FILTER_SANITIZE_STRING);
        $ReferenceUrl=  \filter_input(INPUT_POST,"ReferenceUrl",\FILTER_SANITIZE_STRING);
    
        $ArticleName=$_SESSION["ArticleName"];
        
        //$_SESSION["TopicName1"]=$TopicName1;
        //$_SESSION["TopicName2"]=$TopicName2;
        //$_SESSION["ArticleName"]=$ArticleName;
        
        /*SQL Querry for Inserting Article Details */
         
        
        //echo "<br> RegerenceName ".$ReferenceName."<br> ReferenceUrl ".$ReferenceUrl;
        //echo "<br>Topic1".$TopicName1;
        //echo "<br>Topic2:".$TopicName2."<br>"; 
     
       
       
        
        //$_SESSION["ArticleName"]=$ArticleName;
        //$sql="SELECT AID FROM article where Article_Name='$ArticleName'";
        /*if ($conn->query($sql) === TRUE) 
        {
            echo "New accessed";
        } 
        else 
        {
            echo "Error:ddddd"."<br>" . $conn->error."eeeeeeeeeeee";
        }*/
        
        
       //$result = $difference->query($sql);
        /* @var $result type */
        //$row = $result->fetch_assoc();
        //$_SESSION["AID"]=$row["AID"];
       // echo " AID=".$row["AID"]."ddddd".$ArticleName;
           
            
     //$sql2="CREATE TABLE '$Articlename'(sn int primary key AUTO_INCREMENT,topic1 varchar, topic2 varchar))";      
        
        
         /*echo "....<br>Image Name ".$_FILES["image1"]["name"]."<br>";
        if($_FILES["image1"]["name"]==="")
        {
            echo "No file selected<br>";
        }
        echo "<br>Image1Error ".$_FILES["image1"]["error"]."<br>";
        //echo '222222222222222222222222222 .........2.....';*/
        
        
        if(isset($_FILES["image1"]) && ($_FILES["image1"]["error"]=== 0)&& isset($_FILES["image2"]) && ($_FILES["image2"]["error"]=== 0))
        {
            
            $filename1 = $_FILES["image1"]["name"];
            $filetype1 = $_FILES["image1"]["type"];
            $filename2 = $_FILES["image2"]["name"];
            $filetype2 = $_FILES["image2"]["type"];
            $filesize1 = $_FILES["image1"]["size"];
            $filesize2 = $_FILES["image2"]["size"];
            
            //echo "<br>File Type: ".$filetype1."<br>";
            //echo '3..................................................................';
            // Verify file extension
            $ext1 = pathinfo($filename1,PATHINFO_EXTENSION);  
            $ext2 = pathinfo($filename2,PATHINFO_EXTENSION);
            
            $filename1=$_SESSION["TopicName1"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext1;
            $filename2=$_SESSION["TopicName2"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext2;
            
            echo "<br>".$filename1."......".$filename2."....".!array_key_exists($ext1, $allowed)."<br>";
           
           // echo array_key_exists($ext1, $allowed);
            if (!array_key_exists($ext1, $allowed) || !array_key_exists($ext2, $allowed) ) 
            {
                    die("Error: Selected File type is not Allowed");
            }
            else if (($filesize1 > $maxsize) ||($filesize2 > $maxsize)) 
            {
                die("Error: Grater than 2MB file are not allowed".$filesize1." and ".$filesize2);
            }
            else if(file_exists("upload/".$filename1)|| file_exists("upload/".$filename2)) 
            {
                die("Error: File Already Exists."); 
            }
            else
            {
               move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/".$filename1);
               move_uploaded_file($_FILES["image2"]["tmp_name"], "upload/".$filename2);
               //echo 'File Saved Succesfully';
            }
          
        }    
        else
        {
            $filename1="";
            $filename2="";
            $ext1="";
            $ext2="";   
            
        }
        /*$ArticleQuerry = "INSERT INTO article (Article_Name, AuthorId, LastEdited, topic1, topic2)
              //  VALUES ('$ArticleName', $AuthorId, $TodayDate,'$TopicName1','$TopicName2')"; 
      if ($difference->query($ArticleQuerry) === FALSE) 
        {
          die("Error In Article Data Insertion".$difference->error);
        } 
        
        $ArticleTable= "CREATE TABLE $ArticleName (sn INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, topic1 TEXT, topic2 TEXT, imgname1 VARCHAR(30), "
                . "imgname2 VARCHAR(30),imgtype1 VARCHAR(5), imgtype2 VARCHAR(5), referencename TEXT, referenceurl TEXT)";           
        if ($difference->query($ArticleTable) === FALSE) 
        {
              die("Error In Article Table Creation".$difference->error);
        } */
        if(!($PointFirst===""&&$PointSecond===""&&$filename1===""&&$filename2===""))
        {    
            $PointInsertion="INSERT INTO $ArticleName (topic1, topic2, imgname1, imgname2, imgtype1, imgtype2, referencename, referenceurl)"
                . "VALUES('$PointFirst','$PointSecond','$filename1', '$filename2', '$ext1', '$ext2', '$ReferenceName', '$ReferenceUrl')";
            if ($difference->query($PointInsertion) === FALSE) 
            {
                  die("Error In Article Point Insertion".$difference->error);
            }
        }
  
        //$_SESSION["PointCount"]=$_SESSION["PointCount"]+1;
        $_SESSION["ArticleFlag"]=FALSE;
        //unset($_SESSION["ArticleName"]);
        //unset($_SESSION["PointCount"]);
        //unset($_SESSION["TopicName1"]);
        //unset($_SESSION["TopicName2"]);
        $_SESSION["FileCreatorFlag"]=TRUE;
   
        header('Location: ./FileCreator2.php');
}

//echo 'Hello Mahendra7<br>';
