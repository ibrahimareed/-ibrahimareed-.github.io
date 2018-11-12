<?php
include 'connect.php';

$projectid = $_GET['id'];

$getolddata = " SELECT * FROM projects WHERE Project_id = $projectid";

$fetchingdata = $conn->query($getolddata);
$row = $fetchingdata->fetch_assoc();

        $projectname    = $row['Project_name'];
        $engdes         = $row['Project_des_en'];
        $ardes          = $row['Project_des_ar'];
        $projectcat     = $row['Project_categories'];
        $projectarea    = $row['Project_area'];
        $projectpic     = $row['Project_pics'];
        $projectunits   = $row['Project_units'];


?>





<form   method="POST" action="fun/edit_project.php" enctype="multipart/form-data">


<input type="hidden" name="id" value="<?= $projectid?>">
<input class="form-control" type="text" value="<?= $projectname?>" name="project_name" placeholder="new project name" required="" /> <br />

  <textarea name="engdescription"  value="<?=$engdes ?>" class="form-control" rows="5" type="text"><?=$engdes ?></textarea><br/>
  <textarea name="ardescription" value="<?=$ardes ?>" class="form-control" rows="5" ><?=$ardes ?></textarea><br/>
  <input type="number" name="unit" value="<?=$projectunits ?>"><br/>

<div class="form-group">
    <label for="exampleFormControlSelect1">Category select</label>



    <select name="projectcat" class="form-control" id="exampleFormControlSelect1">
      
      <?php 
    $getcatdata= "SELECT * FROM categories";
    $getdataresult=$conn->query($getcatdata);
    while($row = $getdataresult->fetch_assoc()){
      ?>
      
    
      <option value="<?=$row['cat_id']?>" <?php if ($projectcat == $row['cat_id']) {echo "selected";
        
      } ?>><?=$row['cat_name'];?></option>
     <?php
 }
 ?>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Catigory select</label>



    <select name="projectarea" class="form-control" id="exampleFormControlSelect1">
        
      <?php 
    $getcatdata= "SELECT * FROM area";
    $getdataresult=$conn->query($getcatdata);
    while($row = $getdataresult->fetch_assoc()){
      ?>
    
      <option value="<?=$row['Area_id']?>" <?php if ($projectarea == $row['Area_id']) {echo "selected";
        
      } ?> >  <?=$row['Area_name']?></option>
     <?php
 }
 ?>
    </select>
  </div>


<img style="width: 50px; height: 50px;" src="fun/uploads/<?= $projectpic ;?>">
<input type="file" name="image" value="<?= $projectpic ;?>" class="custom-file-input" /><br />
<input type="submit" class="btn btn-outline-secondary" value="confirm" /><br />

</form>

