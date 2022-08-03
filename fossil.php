<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Main</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/group111.css">
  <link rel="stylesheet" href="css/all.min.css">

</head>
<body>
  
<?php
  include('session.php');
  $userid = $_SESSION['id'];

  ?>
    <?php


?>


<section class="sec1" id="sec1">

<header>
        <div class="logo">
        <h1 class="text-light"><a href="main2.php">I cell</a></h1>
        </div>

<nav id="navbar" class="navbar">
  
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#sec2">support</a></li>
          <li><a class="nav-link scrollto" href="complain.php">complain</a></li>  
          <li><a class="nav-link scrollto" href="index.php" >logout</a></li>
        </ul>
        
      </nav><!-- .navbar -->
    </header>


  
    <div class="srch"><h1>Search here !</h1></div>

  <form method="post">
<!-- search -->
<div class="search-box">
<input class="search-txt" type="text" name="type" placeholder="Type to search" id="searchresult">

<a class="search-btn" href="#">
    <i class="fas fa-search"></i>
</a>
</div>
<div class="bsrch">
  <input calss="" type="submit" value="Search" name="search">
 </div>

</form>
</section>


<section class="sec2">
<div class="text-center  mooo">
<div class="container ">
<div class="row my-5 ">

    <?php
                   $con= new mysqli("localhost","root","","eyecell");
                    if (mysqli_connect_errno())
                    { echo "Failed to connect to MySQL: " . mysqli_connect_error();}
                    $result1 = mysqli_query($con, " SELECT * FROM sectors where group_name='fossil'  ");
                    $result=$result1;
                   if(isset($_POST['search']))
                    {   $type = $_POST['type'];
                        $result2 = mysqli_query($con, " SELECT * FROM sectors where group_name='fossil' AND type='$type' ");
                        if($type !=NULL){
                        $result=$result2;
                    }
                    
                    
                                    
    while ($row = mysqli_fetch_array($result))
{ ?>    

      
        
<div class="card my-4 mx-1" style="width: 19rem;">
  <img class="card-img-top my-2" src="<?php echo 'sectorsimages/'.$row['photo'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title my-3">  <?php echo $row['type'] ?></h5>
    <p class="card-text ">        <?php echo $row['name_arabic'] ?> </p>
    <p class="card-text ">        <?php echo $row['name_latin'] ?> </p>
   <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleeModal">
  borrow
</button>

<!-- Modal -->
<div class="modal fade" id="exampleeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please fill our form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form action="addborrow.php" method="POST">
          

          <div class="form-group">
            <label for="message-text" class="col-form-label">Numers of Slides</label>
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
} }
    mysqli_close($con);
    ?>




</div>
</div>

</div>
<?php
include 'includes/footer.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script type="text/javascript" >
            $(document).ready(function(){
                $("Eyecell").keyup(function(){ 
                        var input = $(this).val();
                        if(input != ""){
                            $.ajax({
                                   url:"Eyecell.php",
                                   method:"Post",
                                   data:{input:input}, 
                                   success:function(data){
                                       $("#searchresult").html(data);
                                       $("#searchresult").css("display","block");
                                   }
                            });
                        } else{
                            $("#searchresult").css("display","none");
                        }
                });
            
            });
        </script>

          </html>