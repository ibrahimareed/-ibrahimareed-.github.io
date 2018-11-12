<?php  

$getdata= "SELECT * FROM users";
$fetchingdata= $conn->query($getdata);


?>






<a href="?do=add" class="btn btn-primary">add new admin</a> 
<table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">Admin Name</th>
      <th scope="col">Admin Password</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Nnumber</th>
    
    </tr>
  </thead>
  <tbody>


<?php 
    while ($row = $fetchingdata->fetch_assoc()) {

      $username = $row['UserName'];
      $password = $row['Password'];
      $email    = $row['Email'];
      $phoneno  = $row['phone_number'];
      $userid   = $row['UserID'];
      
  
?>


<tr>
      <td><?php echo $username;?></td>
      <td><?php echo $password ;?></td>
      <td><?php echo $email ;?></td>
      <td><?php echo $phoneno ;?></td>
      <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="fun/delete.php?do=delete&id=<?=$userid ?>"> REMOVE </a></td>
      <td><a class="btn btn-primary" href="?do=edit&id=<?= $userid ?>"> EDIT</a></td>
 
          
    </tr>
    <?php } ?>
  </tbody>
</table>



