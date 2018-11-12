<?php include 'connect.php';

$getdata = "SELECT * FROM site_info";
$fetchdata = $conn->query($getdata);
$site_row= $fetchdata->fetch_assoc();

		$id  	 		= $site_row['site_info_id'];
		$favicon  	 	= $site_row['fav_icon'];
		$sitetitle  	= $site_row['site_title']; 
		$sitelogo  	 	= $site_row['site_logo'];
		$logotitle  	= $site_row['logo_title'];
		$siteheader  	= $site_row['site_header'];
		$facebook  	 	= $site_row['facebook_account'];
		$twitter	  	= $site_row['twitter_account'];
		$linkedin	  	= $site_row['linkedin_account'];
		$insta	  	 	= $site_row['insta_account'];
		$email	  	 	= $site_row['email'];
		$telephone	  	= $site_row['telephone'];
		$address	  	= $site_row['address'];

?>
	<form   method="POST" action="fun/edit_site_info.php" enctype="multipart/form-data">


<input type="hidden" name="id" value="<?= $id?>">

<label>site fav icon</label>
<img style="width: 20px; height: 20px;" src="fun/uploads/<?= $favicon ;?>"><br />
<input type="file" name="favicon" value="<?= $favicon ;?>" class="custom-file-input" /><br />

<label>site logo</label>
<img style="width: 50px; height: 50px;" src="fun/uploads/<?= $sitelogo ;?>"><br />
<input type="file" name="sitelogo" value="<?= $sitelogo ;?>" class="custom-file-input" /><br />


<label>logo title</label>
<input class="form-control" type="text" value="<?= $logotitle?>" name="logo_title"  required="" /> <br />

<label>site title</label>
<input class="form-control" type="text" value="<?= $sitetitle?>" name="site_title"  required="" /> <br />

<label>site header</label>
<input class="form-control" type="text" value="<?= $siteheader?>" name="site_header"  required="" /> <br />

<label>facebook account</label>
<input class="form-control" type="text" value="<?= $facebook?>" name="facebook_account"  required="" /> <br />

<label>twitter account</label>
<input class="form-control" type="text" value="<?= $twitter?>" name="twitter_account"  required="" /> <br />

<label>linkedin account</label>
<input class="form-control" type="text" value="<?= $linkedin?>" name="linkedin_account"  required="" /> <br />

<label>instagram account</label>
<input class="form-control" type="text" value="<?= $insta?>" name="insta_account"  required="" /> <br />

<label>Email</label>
<input class="form-control" type="text" value="<?= $email?>" name="email" required="" /> <br />

<label>Phone No.</label>
<input class="form-control" type="text" value="<?= $telephone?>" name="telephone"  required="" /> <br />

<label>Address</label>
<input class="form-control" type="text" value="<?= $address?>" name="address"  required="" /> <br />




  

<input type="submit" class="btn btn-outline-secondary" value="confirm" /><br />

</form>





		