
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style1.css" type="text/css">
        <title>Form</title>
        </head>
    <body>
  
<div class="container">

    
<?php 

include 'passcode.php';

?>
                <form name="register" action="formReg.php" method="POST">
                    <h1>Registration Form</h1>
                    <input type="text" id="ssn" placeholder="National ID" required>
                    <input type="text" id="firstName" placeholder="your Name" required>
                    <input type="email" id="email" placeholder="Email" required>
                    <input type="password" id="pass" placeholder="Password" required>
                    <input type="text" id="department" placeholder="Department" required>
                    <input type="text" id="major" placeholder="Major" required>
                    <br>
                    <br>
                  <div class="footer">
                   <p> Regist as : </p> 
                 <div class="first">
                            
                            <label for="prof">Professor</label>
                     
                          <input type= id="passcode" placeholder="PassCode" required name="profpass">
                       <input type="radio" id="passcode" placeholder="PassCode"  name="profpass">
                </div>
                
              
                </div>
                
                <input type="submit" id='register' name="register" value="send">
                         
               </form>
    <?php
    print_r($_POST);
 if(isset($_POST['register']))
    {
     //echo "xxxxxxxxxxxxxxxxxxx";
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
     $passCode = $_POST['profpass'];
     include('../../passcode/passcode.php');
     if(isset($passCode!=$passcodeStudent && $passCode!=$passcodeProf )) return "error";
    
    try{
        $pdo= new PDO("mysql:host=$servername;dbname=$bdname",$username,$password);
        $res= $pdo->query("INSERT INTO signup(id,name,department,rank,password,email,major) values('$id','$name','$dep','$rank','$encrypted_pwd', '$email' ,'$major' );");
        header('Location:main1.php');
        }
    catch(PDOEexception $e)
    { echo "error".$e->getMessage();}  }
    ?>
    </div>

    <script type="text/javascript" src="js/main1.js"></script>
    </body>
</html>
