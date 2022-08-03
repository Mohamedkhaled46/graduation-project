<?php


include 'includes/Conn.php';

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$deparment=$_POST["dep"];
$rank=$_POST['rank'];
$major=$_POST['major'];

echo $fname;

 $q=" INSERT INTO emp(firstname,lastname,email,password,department,rank,major,date) VALUES ('$fname','$lname','$email','$password','$deparment','$rank','$major',Now()) ";
 $r=$coon->query($q) ;

 header(Location: 'index.html');

 ?>