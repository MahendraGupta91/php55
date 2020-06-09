<?php
session_start();
if (!isset($ArticleFlag)) 
{
    $_SESSION['ArticleFlag']='TRUE';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
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
        $TopicName1= \filter_input(INPUT_POST,"topic1",\FILTER_SANITIZE_STRING);
        $TopicName2= \filter_input(INPUT_POST,"topic2",\FILTER_SANITIZE_STRING);
        echo "<br>Topic1".$TopicName1;
        echo "<br>Topic2:".$TopicName2."<br>";
        
    /* @var $_toString type */
        $ArticleName=$TopicName1."_".$TopicName2.$_SESSION["AuthorId"];
        
        $sql = "INSERT INTO article (Article_Name, AuthorId, LastEdited, topic1, topic2)
                VALUES ('$ArticleName', $AuthorId, $TodayDate,'$TopicName1','$TopicName2')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "New Article Name Insrted successfully <br>";
        } 
        else 
        {
            echo "Article Name Error: " . $sql . "<br>mmmmmmmmmmmmmmmmmmmmmmmmmm" . $conn->error."...mmmmmmmmmmmmm";
        }
        
        $_SESSION["ArticleName"]=$ArticleName;
        $sql="SELECT AID FROM article where Article_Name='$ArticleName'";
        if ($conn->query($sql) === TRUE) 
        {
            echo "New accessed";
        } 
        else 
        {
            echo "Error:ddddd"."<br>" . $conn->error."eeeeeeeeeeee";
        }
        
        
        $result = $conn->query($sql);
        /* @var $result type */
        $row = $result->fetch_assoc();
        $_SESSION["AID"]=$row["AID"];
        echo " AID=".$row["AID"];
           /* while ($row=$result->fetch_assoc())
            {
             echo "\n  ".$row["AID"];   
                
            }*/
            
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
        echo "....Image Name ".$_FILES["image1"]["name"];
        echo "...Image1:".($_FILES["image1"]&& $_FILES["image1"]["error"].".......");
        //echo '222222222222222222222222222 .........2.....';
        if(isset($_FILES["image1"]) && ($_FILES["image1"]["error"]=== 0))
        {
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename1 = $_FILES["image1"]["name"];
            $filetype1 = $_FILES["image1"]["type"];
            $filename2 = $_FILES["image2"]["name"];
            $filetype2 = $_FILES["image2"]["type"];
            $filesize1 = $_FILES["image1"]["size"];
            $filesize2 = $_FILES["image2"]["size"];
            echo "000000".$filetype1;
            echo '3..................................................................';
            // Verify file extension
            $ext = pathinfo($filename1,PATHINFO_EXTENSION);  
            echo " 9       ".$ext."     9";
            echo "3...................................................................3";
            echo "4.................................4";
            echo array_key_exists($ext, $allowed);
            if (!array_key_exists($ext, $allowed)) 
            {
                    die("Error: Please select a valid file format.");
            }
        
            echo "4.................................4";

        // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize1 > $maxsize) 
            {
                die("Error: File size is larger than the allowed limit.");
            }
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
            // Check whether file exists before uploading it
            echo '5.................................5';
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
