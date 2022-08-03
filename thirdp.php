     <?php
 if(isset($_POST['adddata']))
    {
    $servername="localhost";
    $username="root";
    $password="";
    $bdname="eyecell";
    $id=$_POST['Id'];
    $type=$_POST['type'];
    $arabicname=$_POST['name_arabic'];
    $latinname=$_POST['name_latin'];
    $groupname=$_POST['group_name'];
    $desc=$_POST['description'];
    $photoname=$_FILES['Photo']['name'];
    $phototmpname=$_FILES['Photo']['tmp_name'];
    $folder='sectorsimages/';
    $Boxno=$_POST['Box_no'];
    $Number=$_POST['Number'];
   
     try{
         move_uploaded_file($phototmpname , $folder.$photoname);
        $pdo= new PDO("mysql:host=$servername;dbname=$bdname",$username,$password);
        $res= $pdo->query("INSERT INTO sectors(id,type,name_arabic,name_latin,group_name,description,photo,box_no,number) values('$id','$type','$arabicname','$latinname','$groupname','$desc', '$photoname' ,'$Boxno','$Number' );");
        header('Location:main1.php'); 
     }
    catch(PDOEexception $e)
    { echo "error".$e->getMessage();}  }
    ?>
