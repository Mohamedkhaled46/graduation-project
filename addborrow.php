<?php 
session_start();
$username=$_SESSION['name'];
$userid=$_SESSION['id'];
include("includes/connection.php");

$sectorid = $_POST['sectorid'];
$userid = $_POST['userid'];
$seectornumber = $_POST['seectornumber'];



$q = "INSERT INTO borrow(userid , sectorid , sectornumber , date) VALUES ($userid , $sectorid , $seectornumber , Now())"; 

$result = $conn->query($q);
$lastid = $conn->insert_id;


if($result){

    $qq = "INSERT INTO notification( borrowid, date) VALUES ('$lastid',Now())";
    $notification = $conn->query($qq);

     if($notification){
     
    ?>
    <script>
        alert("Verfying your Request");
    </script>
<?php 
 header ('Location: gallery.php');
    }

    
}
?>

