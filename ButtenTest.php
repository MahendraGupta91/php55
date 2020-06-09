<?php
session_start();
?>
<html>
    <body>
        <h1> Submit Button Test</h1>
        <form name="myForm" action="Check.php" method="post">
            <input type="text" name="data"><br><br>
            <input type="submit" name="Save" value="Save" >
            <br>
            <br>
            
            <input type="submit" name="Publish" value="Publish">
        </form>
        
    </body>
</html>
