<?php 

include '../connect.php'; 
$new_project_name 		= $_POST['project_name'];
$new_project_engdes 	= $_POST['engdescription'];
$new_project_ardes 		= $_POST['ardescription'];
$new_project_cat 		= $_POST['projectcat'];
$new_project_area 		= $_POST['projectarea'];
$new_project_img 		= $_FILES['image']['name'];
$new_project_imgpath 	= $_FILES['image']['tmp_name'];
$projectid 				= $_POST['id'];
$new_project_units 		= $_POST['unit'];







move_uploaded_file($new_project_imgpath, "uploads/$new_project_img");






if (empty($new_project_img)) {

	$update = "UPDATE projects SET Project_name = '$new_project_name' , Project_des_en = '$new_project_engdes' , Project_des_ar = '$new_project_ardes' , Project_categories = '$new_project_cat'  , Project_units = '$new_project_units' , Project_area = '$new_project_area' WHERE Project_id = $projectid ";


$conn->query($update);
}

if (!empty($new_project_img)) {
	


$update = "UPDATE projects SET  Project_pics = '$new_project_img' , Project_name = '$new_project_name' , Project_des_en = '$new_project_engdes' , Project_des_ar = '$new_project_ardes' , Project_categories = '$new_project_cat'  , Project_units = '$new_project_units' , Project_area = '$new_project_area'WHERE Project_id = $projectid ";


$conn->query($update);
}



header('Location: ../projects.php');