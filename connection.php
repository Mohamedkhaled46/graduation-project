<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="eyecell";

$cnct = mysqli_connect($servername , $username , $pass , $dbname); 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "success";
  } 
  
  catch(PDOException $e) {
    echo "not connected: " . $e->getMessage();
  }
                       
?>