

<form   method="POST" action="../firstway2/fun/add_new_project.php" enctype="multipart/form-data">



<input class="form-control" type="text" name="project_name" placeholder="new project name" required="" /> <br />

  <textarea name="engdescription" class="form-control" rows="5" ></textarea> <br />
  <textarea name="ardescription" class="form-control" rows="5" ></textarea> <br />

  <input type="number" name="unit">


<div class="form-group">
    <label for="exampleFormControlSelect1">Catigory select</label>



    <select name="projectcat" class="form-control" id="exampleFormControlSelect1">
        <option value="" disabled="" selected="">Choose The Category</option>
    	<?php 
    $getcatdata= "SELECT * FROM categories";
    $getdataresult=$conn->query($getcatdata);
    while($row = $getdataresult->fetch_assoc()){
    	?>
    
      <option value="<?=$row['cat_id']?>"><?=$row['cat_name']?></option>
     <?php
 }
 ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Catigory select</label>



    <select name="projectarea" class="form-control" id="exampleFormControlSelect1">
        <option value="" disabled="" selected="">Choose The Area</option>
      <?php 
    $getcatdata= "SELECT * FROM area";
    $getdataresult=$conn->query($getcatdata);
    while($row = $getdataresult->fetch_assoc()){
      ?>
    
      <option value="<?=$row['Area_id']?>"><?=$row['Area_name']?></option>
     <?php
 }
 ?>
    </select>
  </div>



<input type="file" name="image" class="custom-file-input" /><br />
<input type="submit" class="btn btn-outline-secondary" value="confirm" /><br />

</form>

