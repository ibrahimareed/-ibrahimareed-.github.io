<?php
include 'connect.php';
$userid = $_GET['id'];
$getolddata = "SELECT * FROM users WHERE UserID = $userid ";

$fetchingdata = $conn->query($getolddata);

$row = $fetchingdata->fetch_assoc();

		$username =$row['UserName'];
		$password =$row['Password'];
		$email    =$row['Email'];
		$phoneno  =$row['phone_number'];

			
		?>






<form   method="POST" action="fun/admin_edit.php" enctype="multipart/form-data">


<input type="hidden" name="id" value="<?= $userid; ?>">
<input class="form-control" type="text" name="admin_name" placeholder="new admin name" value="<?=$username; ?>" required="" /> <br />
<input class="form-control" type="password" name="password" placeholder="Password" value="<?=$password; ?>" required="" /><br />
<input class="form-control" type="email" name="email" placeholder="E-mail" required="" value="<?=$email ;?>" autocomplete="email" /> <br />
<input class="form-control" type="text" name="phone_number" value="<?=$phoneno ;?>" placeholder="Phone Number" /><br />
<br />
<input type="submit" class="btn btn-outline-secondary" value="confirm" /><br />

</form>

