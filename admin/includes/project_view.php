<?php  

$getdata= "SELECT * FROM projects";
$fetchingdata= $conn->query($getdata);


?>






<a href="?do=add" class="btn btn-primary">add new project</a>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">project name</th>
      <th scope="col">ENGLISH DSECREPTION</th>
      <th scope="col">ARABIC DSECREPTION</th>
      <th scope="col">PROJECT CATEGORY</th>
      <th scope="col">PROJECT AREA</th>
      <th scope="col">Photos</th>
      <th scope="col">Number of Units</th>
    </tr>
  </thead>
  <tbody>


<?php 
    while ($row = $fetchingdata->fetch_assoc()) {


      $projectname    = $row['Project_name'];
      $englishdes     = $row['Project_des_en'];
      $arabicdes      = $row['Project_des_ar'];
      $projectcat     = $row['Project_categories'];
      $projectarea    = $row['Project_area'];
      $Projectpic     = $row['Project_pics'];
      $projectid      = $row['Project_id'];
      $projectunits   = $row['Project_units'];




      
  
?>


<tr>
      <td style="text-align: center;"><?php echo $projectid ;?></td>
    
      
      <td style="text-align: center;"><?php echo $projectname   ;?></td>
      <td style="text-align: center;"><?php echo $englishdes    ;?></td>
      <td style="text-align: center;"><?php echo $arabicdes     ;?></td>

        <?php
          $get_cat_data = "SELECT * FROM categories WHERE cat_id = '$projectcat' ";
          $get_data_result = $conn->query($get_cat_data);
          $cat_row = $get_data_result->fetch_assoc();



        ?>


      <td style="text-align: center;"><?php echo $cat_row['cat_name'];?></td>


        <?php
          $get_area_data = "SELECT * FROM area WHERE Area_id = '$projectarea' ";
          $get_area_result = $conn->query($get_area_data);
          $area_row = $get_area_result->fetch_assoc();

        ?>

      <td style="text-align: center;"><?php echo $area_row['Area_name']   ;?></td>


      
      <td><img style="width: 50px; height: 50px;" src="<?php  echo 'fun/uploads/' . $Projectpic ?>"></td>
      <td style="text-align: center;"><?php echo $projectunits  ;?></td>
      
      <td><a class="btn btn-danger" onclick="return confirm('You will premently remove this project ')" href="fun/delete_project.php?do=delete&id=<?= $projectid?>">REMOVE</a></td>


      
      <td><a class="btn btn-primary" href="?do=edit&id=<?=$projectid ?>" >EDIT</a></td>






    </tr>
    <?php } ?>
  </tbody>
</table>


