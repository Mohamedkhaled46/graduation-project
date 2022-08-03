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
          <a class="nav-link " href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="index.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5" href="dd/public/index.php?status='yes'">
            My profile</i>
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
     <h1><i class="fa-regular fa-eye"></i> Cell</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatem vitae officiis! Nobis dignissimos pariatur atque numquam 
           perspiciatis dolorum illo saepe, provident labore sapiente earum eius mollitia. Mollitia, vitae porro!</p>
           <a href="gallery.php"> <button class="bt"> Our gallery</button> </a>
   


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





<script src="js/html5shiv.js"></script>
        <script src="js/Respond.js v1.4.2.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/all.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/main1.js"></script>
      <script src="js/html5shiv.js"></script>
        <script src="js/Respond.js v1.4.2.js"></script>
      
      

</body>
</html>


<!-- damage 
     delay
     textarea
-->
