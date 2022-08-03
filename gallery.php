<?php

session_start();
$userid = $_SESSION['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>main</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/gallery.css">

</head>

<div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">our gallery</h1>
        <p class="pp">Here we show all the data available at the Faculty of Science, Ain Shams University.
          Here we show all the data available at the Faculty of Science, Ain Shams University.
          Here we show all the data available at the Faculty of Science, Ain Shams University.
        </p>
        <p>
          <a href="#" class="btn btn-success my-2">root</a>
          <a href="#" class="btn btn-success my-2">paper</a>
          <a href="#" class="btn btn-success my-2">leg</a>
        </p>
      </div>


<div class="text-center  mooo">
<div class="container ">
<div class="row my-5 ">

    <?php
$con= new mysqli("localhost","root","","eyecell");
if (mysqli_connect_errno())
 { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$result = mysqli_query($con,"SELECT * FROM sectors");
while ($row = mysqli_fetch_array($result))
{ ?>    

        
<div class="card my-4 mx-1" style="width: 19rem;">
  <img class="card-img-top my-2" src="<?php echo 'sectorsimages/'.$row['photo'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title my-3">  <?php echo $row['type'] ?></h5>
    <p class="card-text ">  <?php echo $row['name_arabic'] ?> </p>
    <p class="card-text ">  <?php echo $row['name_latin'] ?> </p>
    <p class="card-text ">  <?php echo $row['group_name'] ?> </p>
   <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleeModal">
  borrow
</button>

<!-- Modal -->
<div class="modal fade" id="exampleeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please fill That</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form action="addborrow.php" method="POST">
          

          <div class="form-group">
            <label for="message-text" class="col-form-label">Numers Of Slides</label>
            <input name="sectorid" type="hidden" value="<?= $row['id']?>">
            <input name="userid" type="hidden" value="<?= $userid?>">
            <input type="number" name="seectornumber" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Send</button>
          </div>
        </form>

        

      </div>
      
    </div>
  </div>
</div>


  </div>
</div>
       <?php
} 
    mysqli_close($con);
    ?>    





</div>
</div>

</div>

<hr>

<div >i</div>


<?php 

// include 'includes/footer.php';

?>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/gallery.js"></script>
</body>
</html>