<?php 

include 'includes/header.php';

?>

<div class="container addData">

<form action="thirdp.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="">type</label>
    <input  name="type" type="text" class="form-control" id="" placeholder="Enter your type">
    <small   id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
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
    <input name="box_no"  type="number" class="form-control" id="" placeholder="box_no" >
  </div>

  <div class="form-group">
    <label for="">number</label>
    <input name="number" type="text" class="form-control"    id="" placeholder="number">
  </div>

  <div class="form-group">
    <label for="">boxes_id</label>
    <input name="boxes_id" type="number" class="form-control" id="" placeholder="boxes_id">
  </div>

  <div class="form-group">
    <label for="">boxes_table_id</label>
    <input name="boxes_table_id" type="number" class="form-control" id="" placeholder="boxes_table_id">
  </div>
 
  
  <button type="submit" class="btn btn-primary" >Submit</button>

</form>

</div>




<?php 

include 'includes/footer.php';

?>

