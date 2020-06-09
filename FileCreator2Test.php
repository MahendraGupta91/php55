<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mysql";
        $maxsize = 2* 1024 * 1024;
        $ArticleName='Me1_She1_1805';
        $difference = new mysqli($servername, $username, $password, $dbname); // connection name is difference
        if($difference->connect_error) 
        {
            die("Connection Problem" . $conn->connect_error);
        }
        $TopicName1='olap';
        $TopicName2='oltp';
              $ExtractQuerry="select *from ".$ArticleName." ";
              $result = $difference->query($ExtractQuerry);
              
              if ($result->num_rows > 0) 
              {
                 
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        if(($row['topic1']!=='' && $row['topic2']!=='')&& ($row['imgname1']!=='' && $row['imgname2']!==''))
                        {
                            echo '<table><tr>';
                            echo '<td>'.$row['sn'].'22222222</td>';
                                echo '<td><p>'.$row['topic1'].'</p><img src="upload/'.$row['imgname1'].'" alt="Differencing.org" class="img-responsive img-rounded"></td>';
                                echo '<td><p>'.$row['topic2'].'</p><img src="upload/'.$row['imgname2'].'" alt="Differencing.org" class="img-responsive img-rounded"></td>';
                            echo '</tr>';     
                        }
                        else if(($row['topic1']!=='' && $row['topic2']!==''))  
                        {
                           echo '<tr><td>'.$row['sn'].'</td>';
                             echo   '<td><p>'.$row['topic1'].'</p></td>';
                              echo  '<td><p>'.$row['topic2'].'</p></td></tr>';
                        }                       
                    }    
              } 
              else 
              {
                    echo "0 results";
              }
              $difference->close();
            echo '</table>';
             
                             
             echo '</HTML>';//Table Content Ends.
?>              