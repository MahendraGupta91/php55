<?php
$homepage = file_get_contents('http://localhost:8000/ButtenTest.php/');
//$myFile='Dyn.html';
//$file = fopen($myFile,"w");
//fwrite($file,$homepage);
//fclose($file);
echo $homepage;

?>
