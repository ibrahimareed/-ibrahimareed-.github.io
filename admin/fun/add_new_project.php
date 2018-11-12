<?php

include '../connect.php';

$newprojectname = $_POST['project_name'];
$engdescription = $_POST['engdescription'];
$ardescription = $_POST['ardescription'];
$newprojectcat = $_POST['projectcat'];
$newprojectarea = $_POST['projectarea'];
$newprojectunits = $_POST['unit'];

$new_project_img 		= $_FILES['image']['name'];
$new_project_imgpath 	= $_FILES['image']['tmp_name'];

move_uploaded_file($new_project_imgpath, "uploads/" . $new_project_img);


$dbproquery = "INSERT INTO projects(Project_name, Project_des_en, Project_des_ar, Project_categories, Project_pics,  Project_area , Project_units) VALUES ('$newprojectname' , '$engdescription', '$ardescription', '$newprojectcat', '$new_project_img' , '$newprojectarea' , '$newprojectunits' )";

				

$conn->query($dbproquery);
header('Location: ../projects.php');

?>