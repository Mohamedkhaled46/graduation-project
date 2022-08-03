<?php 

include 'includes/header.php';
include("connection.php");


    $id = $_GET['id'];
    $query = "DELETE  FROM sectors WHERE id = '$id'";
    $res = mysqli_query($cnct , $query);



/* if($res){
    echo"Successful";
}
else{
    echo"Fail";
} */

include("show.php");

?>