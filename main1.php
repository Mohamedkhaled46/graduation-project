<?php

include("includes/connection.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 Groups</title>
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mainfirstt.css">
</head>
<body>
  
<?php
  include('session.php');
  ?>
    
   
        <!-- <div class="logo">
        <h1 class="text-light"><a href="main1.php">I cell</a></h1>
        </div> -->
<!-- 
<nav id="navbar" class="navbar">
  
        <ul>
       

          <li><a class="nav-link scrollto" href="show.php">My Data</a></li>
          <li><a class="nav-link scrollto" href="complain.php">Complain</a></li>  
          <li><a class="nav-link scrollto" class="btn btn-primary" href="index.php" >Logout </a></li>
          <li><a class="nav-link scrollto" class="btn btn-primary " class="noti" href="dd/public/index.html" ><i class="fab fa-user"></i></a></li>
                  
</ul>

      </nav>.navbar -->
   <?php
    //include('session.php');
    ?>
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-2">
  <div class="container-fluid mx-4">
    <a class="navbar-brand II" href="#"><i class="fa-regular fa-eye"></i> Cell</a>
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
<sup class="notify"><?= $n['counts'] ?></sup>

<?php } ?>

          </a>
        </li>
     
        
      </ul>
      
    </div>
  </div>
</nav>

    <div class="contain">
     <div class="col1">
     <h1 id="anim"><i class="fa-regular fa-eye"></i> Cell</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatem vitae officiis! Nobis dignissimos pariatur atque numquam 
           perspiciatis dolorum illo saepe, provident labore sapiente earum eius mollitia. Mollitia, vitae porro!</p>
           <a href="gallery.php"> <button class="bt">  our gallery</button> </a>


           
           <div class="iconn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> 
               <i class="fa-solid fa-circle-plus"></i>
          </div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header addd">
    <h5 id="offcanvasRightLabel">Our Form</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> 
    
  </div>
  <div class="offcanvas-body add">
    <div class="container ">

      <form action="thirdp.php" method="POST" enctype="multipart/form-data">
      
        <div class="form-group">
          <label class="labl"   for="">Type of sector</label>
          <input  name='type' type="text" class="form-control" id="" placeholder="Enter your type">
          <small   id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
        </div>
      
            <div class="form-group">
          <label class="labl"  for="">Id</label>
          <input  name='Id' type="text" class="form-control" id="" placeholder="Id">
        </div>
      
          
        <div class="form-group">
          <label class="labl" for="">Name_arabic</label>
          <input  name='name_arabic' type="text" class="form-control" id="" placeholder="name in arabic">
        </div>
      
        <div class="form-group">
          <label class="labl" for="">Name_latin</label>
          <input  name='name_latin' type="text" class="form-control" id="" placeholder="name in latin">
        </div>
      
        <div class="form-group">
          <label class="labl" for="">Group_name</label>
          <input  name='group_name' type="text" class="form-control" id="" placeholder="group name">
        </div>
      
        <div class="form-group">
          <label class="labl" for="">Description</label>
          <input  name='description' type="text" class="form-control" id="" placeholder="description">
        </div>
      
        <div class="form-group">
          <label class="labl" for="">Photo</label>
          <input name='Photo' type="file" class="form-control" id="age" placeholder="photo">
        </div>
      
      
        <div class="form-group">
          <label class="labl" for="">Box_no</label>
          <input name='Box_no'  type="number" class="form-control" id="" placeholder="box_no" >
        </div>
      
        <div class="form-group">
          <label class="labl" for="">Number</label>
          <input name='Number' type="text" class="form-control"    id="" placeholder="number">
        </div>
      
       
         
       
        
        <button type="submit" class="btn btn-danger btnl2" name="adddata" >Add Data</button>
        
      </form>
      
      </div>
  </div>
</div>
           
<!-- <div class="iconn"> <i class="fa-solid fa-circle-plus"></i>
</div> -->

       </div>
       

<div class="cole"> 

<a href="phyco.php">
<div class="carde card1">
<h1> Phycology</h1>
</div>
</a>

<a href="arche.php">
<div class="carde card2">
<h1> Archegoniate </h1>
</div>
</a>

<a href="gymno.php">
<div class="carde card3">
<h1> Gymnosperm </h1>
</div>
</a>

<a href="monoc.php">
<div class="carde card4">
<h1> Monocotyledon </h1>
</div>
</a>

<a href="dicot.php">
<div class="carde card5">
<h1> Dicotyledon </h1>
</div>
</a>
<a href="fossil.php">
<div class="carde card6">
<h1> Fossil </h1>
</div>
</a>
<a href="special.php">   
<div class="carde card7">
<h1> Special Gr</h1>
</div>
</a>

</div>
    </div>





<script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/all.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/java.js"></script>
           
      

</body>
</html>


<!-- damage 
     delay
     textarea
-->
