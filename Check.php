<?php
session_start();
?>
<html>
    <body>
<?php
if(isset($_POST["Save"]))
{
    echo '<h1> Save button is pressed. </h1>';
}
if (isset($_POST["Publish"]))
{
    echo '<h1> Publish button is pressed. </h1>';
}
if(isset($_POST["data"]))
{
    echo '<br><br><h1>Your Name is '.$_POST["data"].'</h1>';
}
?>
    </body>
</html>

