<?php 

include 'includes/header.php';
include ("connection.php");

?>

<div class="container addData">

<form action="" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="">type</label>
    <input  name="type" type="text" class="form-control" id="" placeholder="Enter your type">
    <!-- <small   id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small> !-->
  </div>
  
  <div class="form-group">
    <label for="">name_arabic</label>
    <input  name="name_arabic" type="text" class="form-control" id="" placeholder="name in arabic">
  </div>

  <div class="form-group">
    <label for="">name_latin</label>
    <input  name="name_latin" type="text" class="form-control" id="" placeholder="name in latin">
  </div>

  <div class="form-group">
    <label for="">group_name</label>
    <input  name="group_name" type="text" class="form-control" id="" placeholder="group name">
  </div>

  <div class="form-group">
    <label for="">description</label>
    <input  name="description" type="text" class="form-control" id="" placeholder="description">
  </div>

   

  <div class="form-group">
    <label for="">photo</label>
    <input name="photo" type="file" class="form-control" id="age" placeholder="photo">
</div>


  <div class="form-group">
    <label for="">box_no</label>
    <input name="box_no"  type="" class="form-control" id="" placeholder="box_no" >
  </div>

  <div class="form-group">
    <label for="">number</label>
    <input name="number" type="numbert" class="form-control"    id="" placeholder="number">
  </div>

  <div class="form-group">
    <label for="">boxes_id</label>
    <input name="boxes_id" type="" class="form-control" id="" placeholder="boxes_id">
  </div>

  <div class="form-group">
    <label for="">boxes_table_id</label>
    <input name="boxes_table_id" type="" class="form-control" id="" placeholder="boxes_table_id">
  </div>
 
  
  <button type="submit" name="Edit" class="btn btn-primary" >Edit</button>

</form>

</div>


<?php 

include 'includes/footer.php';

if (isset($_POST['submit']))
    {
        $type = ($_POST['type']);
        $arabic = ($_POST['name_arabic']);
        $latin = ($_POST['name_latin']);
        $group = ($_POST['group_name']);
        $description = ($_POST['description']);
        $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $box_no = ($_POST['box_no']);
        $no = ($_POST['number']);
        $boxes_id = ($_POST['boxes_id']);
        $boxes_table_id = ($_POST['boxes_table_id']);

        if ($type!="" && $arabic!="" && $latin!="" && $group!="" && $description!="" &&$photo!="" && $box_no!="" && $no!="" && $boxes_id!="" && $boxes_table_id!="" ){
            $id = $_GET['id'];
            $query = "UPDATE sectors SET (type='$type' , nameinarabic='$arabic' , nameinlatin='$latin' , groupname='$group' , desc='$description' , photo='$photo' , boxno='$box_no' , no='$no' , boxid='$boxes_id' , boxtableid='$boxes_table_id' WHERE id=$id)";
            $q = "SELECT * from sectors WHERE id=$id";
            $res = mysqli_query($cnct, $q);

            
        }
    
    }

?>

