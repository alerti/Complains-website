<?php    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";


$link = new mysqli($servername, $username, $password, $dbname);
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}


echo "";


?>