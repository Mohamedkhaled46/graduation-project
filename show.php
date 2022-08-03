<?php 

include 'includes/header.php';
include 'connection.php';

?>

<style>
body{

  background-color: rgba(197, 196, 196, 0.967);

}

</style>
<?php
    //include('session.php');
    ?>
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-2">
  <div class="container-fluid mx-4">
    <a class="navbar-brand II" href="#">I Cell</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  mb-lg-0 ">
      <li class="nav-item mx-3">
          <a class="nav-link active" href="main1.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link " aria-current="page" href="show.php">My Data</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="complain.php">Complain</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="index.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5" href="dd/public/index.php?status='yes'">
            <i class="fa fa-bell"></i>
<?php 

$que = "SELECT COUNT(id) as counts FROM `notification` WHERE status = 'no';";
$notif = $conn->query($que);
foreach($notif as $n){?>
<sup class="notify">0</sup>

<?php } ?>

          </a>
        </li>
     
        
      </ul>
      
    </div>
  </div>
</nav>



<div class="container">
 <table class="table my-5 text-center">
     <thead class="table-dark">
    <th>ID</th>
    <th>type</th>
    <th>name_arabic</th>
    <th>name_latin</th>
    <th>Group Name</th>
    <th>Description</th>
    <th>Photo</th>
    <th>box_no</th>
    <th>number</th>
    <th>Actions</th>
     </thead>
     
     <?php 
    include("connection.php");

    $query = "SELECT * FROM sectors";
    $res = mysqli_query($cnct , $query);
    while($fetch = mysqli_fetch_array($res)){
        echo"
        
<tbody>
        <tr>  
        <td>" . $fetch['id'] . "</td>  
          <td> ". $fetch['type'] . " </td> 
          <td>  ". $fetch['name_arabic'] ."   </td>
          <td> ".$fetch['name_latin'] ." </td>
          <td>  ". $fetch['group_name'] ." </td>
          <td> ". $fetch['description'] ." </td>
          <td> ". $fetch['photo'] ."  </td>
          <td> ". $fetch['box_no'] ."  </td>
          <td> ". $fetch['number'] ."  </td>
         
    
      <td>
          
            <a href='edit.php' class='btn btn-success' title='edit' ><i class='fa fa-edit'></i></a>
            <a href='delete.php?id=$fetch[id]' class='btn btn-danger' title='trash' ><i class='fa fa-trash'></i></a> 
      </td>
    </tr>";
     } ?>
  
</tbody>

 </table>

</div>


<?php 



?>

<script src="js/all.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>