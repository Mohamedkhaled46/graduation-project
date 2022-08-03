<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href=css/contactus.css>
</head>
<body>
    


<section class="sec5 ">

<section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact  </h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>



        <div class="row ">
          <div class="col-lg-5  a">
            
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Ain shams university, Egypt, NY 535022</p>
            </div>
         

          <div class="col-lg-3 col-md-6  b">
           
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>mookhaled46@gmail.com</p>
           
          </div>

          <div class="col-lg-3 col-md-6 c">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><a href="tel:01013616909">01013616909</a></p>
         
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""></iframe>
          </div>

          <div class="col-lg-6">
            <form  method="post"  >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="your university" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="content" rows="5" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">write what do you need</div>
              </div>
              <div class="text-center btnn"><button type="submit" class="bb" name="contact">Send Message</button></div>
            </form>
            <?php
              if(isset($_POST['contact'])){
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $bdname="eyecell";
                    $name = $_POST['name'];
                    $email= $_POST['email'];
                    $content= $_POST['content'];
                    $subject= $_POST['subject'];
                    try{
                    $pdo= new PDO("mysql:host=$servername;dbname=$bdname",$username,$password);
                    $res= $pdo->query("INSERT INTO contact(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$content')");
                    header('Location:index.php'); 
     }
    catch(PDOEexception $e)
    { echo "error".$e->getMessage();}  }
                  
                  
?>

              
          </div>

        </div>

      </div>
    </section>
   


<a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
<section class="sec6"></section>
</body>
</html>