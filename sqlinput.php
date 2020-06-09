<?php
session_start();
?>
<html>
    <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
echo 'Hello    ';
echo 'jgjgajs'.$_SESSION["name"].'   ';
//isset($name);
//isset($email);

$var2=$_SESSION["email"];
echo $var1;
echo $var2;
echo 'Hiiiii    ';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="insert into testdb (uname, email) values ('mahendra', 'mahi@gmail.com')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql="SELECT *FROM testdb";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
      ?>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: 
    
    <?php echo $_POST["email"]; 
?>
 </body>
</html>
   
