 <?php
                     if(isset($_POST['contact']))
                        {
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $bdname="eyecell";
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $subject=$_POST['subject'];
                        $message=$_POST['message'];
                        try{
                            $pdo= new PDO("mysql:host=$servername;dbname=$bdname",$username,$password);
                            $res= $pdo->query("INSERT INTO contact(name,email,subject,message) values('$name','$email','$subject','$message' );");
                            header('Location:main.php');
                        }
                        catch(PDOEexception $e)
                        { echo "error".$e->getMessage();}  }
              ?>