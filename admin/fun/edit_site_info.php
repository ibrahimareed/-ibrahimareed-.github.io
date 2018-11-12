<?php



include '../connect.php';

		$id  	 		= $_POST['id'];
		$sitetitle  	= $_POST['site_title'];
		$logotitle  	= $_POST['logo_title'];
		$siteheader  	= $_POST['site_header']; 
		$facebook  	 	= $_POST['facebook_account'];
		$twitter	  	= $_POST['twitter_account'];
		$linkedin	  	= $_POST['linkedin_account'];
		$insta	  	 	= $_POST['insta_account'];
		$email	  	 	= $_POST['email'];
		$telephone	  	= $_POST['telephone'];
		$address	  	= $_POST['address'];


		$fav_icon = $_FILES['favicon']['name'];
		$fav_path = $_FILES['favicon']['tmp_name'];

		move_uploaded_file($fav_path, "uploads/".$fav_path);

		$site_logo = $_FILES['sitelogo']['name'];
		$fav_path = $_FILES['sitelogo']['tmp_name'];

		move_uploaded_file($fav_path, "uploads/".$fav_path);





		$update = "UPDATE site_info SET   site_title = '$sitetitle' , logo_title = '$logotitle' , site_header = '$siteheader' , facebook_account = '$facebook' , twitter_account = '$twitter' ,  linkedin_account = '$linkedin' , insta_account = '$insta' , email = '$email' , telephone = '$telephone' , address = '$address' WHERE site_info_id = $id "; 


if (!empty($fav_icon)) {

	$update = "UPDATE site_info SET fav_icon = '$fav_icon' WHERE site_info_id = $id "; 
}

if (!empty($site_logo)) {
	
	$update = "UPDATE site_info SET site_logo = '$site_logo' WHERE site_info_id = $id "; 
}

$conn->query($update);
header('Location:../site_info.php');