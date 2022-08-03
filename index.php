<?php

include("connection.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleindex1221.css">
</head>
<body>
     <?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
?>
    
<section  >

<div class="A">
    <div class="B">

     <h1><i class="fa-regular fa-eye"></i>Cell </h1>

     <p>We are your friends in the Department of Computer Science. We developed this site so that you can borrow whatever you want .</p>

         <h2>Login with Your Social Media</h2>
         <div class="social">
        <div class="so_f"> <a href="https://www.facebook.com"><button><i class="fab fa-facebook"></i></button></a></div>
        <div class="so_t"><a href="https://www.twitter.com"><button><i class="fab fa-twitter"></i></button></a></div>
</div>
    </div>

    <div class="C">
    <h1>Login</h1>
    <p>Don't have an account? <a href="formReg.php"> Creat Your Account </a> It takes less than a minute</p>
    <form method="POST" >  
   
    <div class="inputs">
         <input type="text"     placeholder="ID" required name="id"> <br>
        <input type="password" placeholder="Password" required name="password" >

    </div>
         <div class="allast">
             <div class="last">
                 <input type="checkbox" id="1"><label for="1" >Remember me</label>
    
            </div>
            <div class="last">    
               <a href="">Forget password</a>
            </div>
            <input type="submit" value="login" name="login" class="log">
             
             <div class="contact"> <p> If you have any problem to sign up please <a href="contactus.php">Contact us</a></p></div>
         
    </div>
           
        </form>
             <?php
                   $con= new mysqli("localhost","root","","eyecell");
                    if(isset($_POST['login']))
                    {   $id = $_POST['id'];
                        $pass = md5($_POST['password']);
                    if (mysqli_connect_errno())
                    { echo "Failed to connect to MySQL: " . mysqli_connect_error();}
                    $result = mysqli_query($con, " SELECT * FROM signup  WHERE id='$id' AND password='$pass'  ");
                     $count=mysqli_num_rows($result);
                     $row = mysqli_fetch_array($result);
                    
                     if($count>0){
                         $_SESSION['id']=$id;
                         $_SESSION['name']=$row['name'];
                         }
                    else{
                        echo"<h1 class='ah1'> Password or Id is Incorrect !!!</h1> ";
                    } 
                     if(isset($_SESSION['id'])){
                       
                         if($row['rank']=="admin")
                         { 
                            // print_r ($row);
                              header('Location:main1.php');
                            
                         }
                         else{

                             header('Location:main1Doc.php');
                         }
                        //  if($row['rank']=='student')
                        //  { 
                        //  header('Location:main1.php');
                        //  } 
                     }
                    }
                    //  if(isset($_SESSION['id'])){
                       
                    //  }
                     
                    
                    
                    mysqli_close($con);
             ?>
</div>
</div>
</section>

      <script src="js/all.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
</body>
</html>