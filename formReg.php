<?php

include("connection.php");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style111.css" type="text/css">
        <title>Form</title>
        </head>
    <body>
  
<div class="container">

    
<?php 

include 'passcode.php';

?>
                <form name="register" action="formReg.php" method="POST">
                    <h1>Registration Form</h1>
                    <input type="text" id="Name" placeholder="Name"  required name='Name'>
            <input type="text" id="Id" placeholder="ID" required name="Id" name='Id'>
            <input type="email" id="Email" placeholder="Email" required name="Email"  name='Email'>
            <input type="password" id="Pass" placeholder="Password" required name='Pass' name='Pass'>
            <input type="text" id="Department" placeholder="Department" required name='Dep'  name='Dep'>
            <input type="text" id="passcode" placeholder="passcode" required name='passcode'  name='passcode'>
            <input type="text" id="Major" placeholder="Major" required name='Major'  name='Major'> 
                    <br>
                    <br><br>
                                 <input type="submit" name="register" value="send" id="button">

                       <?php
 if(isset($_POST['register']))
    {
    $servername="localhost";
    $username="root";
    $password="";
    $bdname="eyecell";
    $id=$_POST['Id'];
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $pass=$_POST['Pass'];
    $encrypted_pwd=md5($pass);
    $dep=$_POST['Dep'];
    $major=$_POST['Major'];
    $passCode = $_POST['passcode'];
     require('../../passcode/passcode.php');
     if($passCode!==$passcodestudent && $passCode!==$passcodeprof ) 
     {
             $rank=NULL;
         echo'please enter the correct Passcode ';
      
       }
       elseif($passCode==$passcodestudent){
             $rank='student';
        } 
        elseif($passCode==$passcodeprof){
             $rank='prof';
        }
         
     if($rank!==NULL)
     {
         $query = "INSERT INTO signup (id,name,department,rank,password,email,major) values('$id','$name','$dep',' $rank','$encrypted_pwd', '$email' ,'$major' )";
         $res = mysqli_query($cnct , $query);
         header ('Location: index.php');
    }

        /* if($res){
            echo "success";
         } */

        }
    ?>
                    
               </form>
    
                          
    </div>

    <script type="text/javascript" src="js/main1.js"></script>
    </body>
</html>
