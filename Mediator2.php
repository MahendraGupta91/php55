<?php
session_start();
if (1) 
{
    $_SESSION["ArticleFlag"]='TRUE';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $maxsize = 2* 1024 * 1024;
    // Create connection
    echo gettype('abc')."<br>";
    $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        /*$Articlename=$_POST["topic1"]."_".$_POST["topic2"];*/   
        $AuthorId=$_SESSION["AuthorId"];
        $_SESSION["PointCount"]=1;
        $TodayDate= date("Y/m/d");
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $TopicName1= \filter_input(INPUT_POST,"topic1",\FILTER_SANITIZE_STRING);
        $TopicName2= \filter_input(INPUT_POST,"topic2",\FILTER_SANITIZE_STRING);
        $ReferenceName=  \filter_input(INPUT_POST,"ReferenceName",\FILTER_SANITIZE_STRING);
        $ReferenceUrl=  \filter_input(INPUT_POST,"ReferenceUrl",\FILTER_SANITIZE_STRING);
    
        $ArticleName=$TopicName1."_".$TopicName2."_".$_SESSION["AuthorId"]; /*Defining Article Name*/
        
        $_SESSION["TopicName1"]=$TopicName1;
        $_SESSION["TopicName2"]=$TopicName2;
        $_SESSION["ArticleName"]=$ArticleName;
        
        /*SQL Querry for Inserting Article Details */
         $ArticleQuerry = "INSERT INTO article (Article_Name, AuthorId, LastEdited, topic1, topic2)
                VALUES ('$ArticleName', $AuthorId, $TodayDate,'$TopicName1','$TopicName2')";
        
        echo "<br> RegerenceName ".$ReferenceName."<br> ReferenceUrl ".$ReferenceUrl;
        echo "<br>Topic1".$TopicName1;
        echo "<br>Topic2:".$TopicName2."<br>"; 
     
       
        if ($conn->query($ArticleQuerry) === TRUE) 
        {
            echo "New Article Name Insrted successfully <br>";
        } 
        else 
        {
            echo "Article Name Error: " . $sql . "<br>mmmmmmmmmmmmmmmmmmmmmmmmmm" . $conn->error."...mmmmmmmmmmmmm";
        }
        
        $_SESSION["ArticleName"]=$ArticleName;
        $sql="SELECT AID FROM article where Article_Name='$ArticleName'";
        /*if ($conn->query($sql) === TRUE) 
        {
            echo "New accessed";
        } 
        else 
        {
            echo "Error:ddddd"."<br>" . $conn->error."eeeeeeeeeeee";
        }*/
        
        
        $result = $conn->query($sql);
        /* @var $result type */
        $row = $result->fetch_assoc();
        $_SESSION["AID"]=$row["AID"];
        echo " AID=".$row["AID"];
           
            
     //$sql2="CREATE TABLE '$Articlename'(sn int primary key AUTO_INCREMENT,topic1 varchar, topic2 varchar))";      
        $sql = "CREATE TABLE $ArticleName (sn INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, topic1 TEXT, topic2 TEXT, imgname1 VARCHAR(15), imgname2 VARCHAR(15),imgtype1 VARCHAR(5), imgtype2 VARCHAR(5), referencename TEXT, referenceurl TEXT)";           
        if ($conn->query($sql) === TRUE) 
        {
                echo "mahendra ";
        } 
        else 
        {
            echo "aaaaaaaaaaaaaaaaaaaaaa...................".$conn->error;
        }
        echo "....<br>Image Name ".$_FILES["image1"]["name"]."<br>";
        if($_FILES["image1"]["name"]==="")
        {
            echo "No file selected<br>";
        }
        echo "<br>Image1Error ".$_FILES["image1"]["error"]."<br>";
        //echo '222222222222222222222222222 .........2.....';
        if(isset($_FILES["image1"]) && ($_FILES["image1"]["error"]=== 0)&& isset($_FILES["image2"]) && ($_FILES["image2"]["error"]=== 0))
        {
            
            $filename1 = $_FILES["image1"]["name"];
            $filetype1 = $_FILES["image1"]["type"];
            $filename2 = $_FILES["image2"]["name"];
            $filetype2 = $_FILES["image2"]["type"];
            $filesize1 = $_FILES["image1"]["size"];
            $filesize2 = $_FILES["image2"]["size"];
            
            echo "<br>File Type: ".$filetype1."<br>";
            echo '3..................................................................';
            // Verify file extension
            $ext1 = pathinfo($filename1,PATHINFO_EXTENSION);  
            $ext2 = pathinfo($filename2,PATHINFO_EXTENSION);
            
            $filename1=$_SESSION["TopicName1"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext1;
            $filename2=$_SESSION["TopicName2"]."_".$_SESSION["AuthorId"]."_".$_SESSION["PointCount"].".".$ext1;
            
            echo "<br>".$filename1."......".$filename2."....<br>";
           
           // echo array_key_exists($ext1, $allowed);
            if (!array_key_exists($ext1, $allowed) || !array_key_exists($ext1, $allowed) ) 
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
               echo 'File Saved Succesfully';
            }
        
            echo "4.................................4";

        // Verify file size - 5MB maximum
           
            
            echo "4.................................4";
            $rn1='upload/dd.png';
            $rn2='upload/ddd.png';
            if(rename("upload/dd.png","upload/pictures.png"))
            {
                echo 'Name Changed';
            }
            else 
            {
                echo 'not changed';
            }
    
        // Verify MYME type of the file
            echo '5.................................5';
            if(in_array($filetype1, $allowed))             
            {
                if(file_exists("upload/" . $_FILES["image1"]["name"]))    
                {
                    echo $_FILES["image1"]["name"] . " is already exists.";
                } 
                else
                {
                    move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/" . $_FILES["image1"]["name"]);
                    echo "Your file was uploaded successfully.";
                } 
            }
            else
            {
                    echo "Error: There was a problem uploading your file. Please try again."; 
            }
        }    
        else
        {
            echo "Error:3333333333333333333333   3 " . $_FILES["image1"]["error"];
            
        }
}
