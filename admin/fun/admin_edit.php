<?php

include '../connect.php';

$new_admin_name 	= $_POST['admin_name'];
$new_admin_password = $_POST['password'];
$new_admin_email 	= $_POST['email'];
$new_admin_phoneno 	= $_POST['phone_number'];
$userid 			= $_POST['id'];



if (empty($new_admin_phoneno)) {
	$update= " UPDATE users SET UserName = '$new_admin_name' , Password = '$new_admin_password' , Email = '$new_admin_email'  WHERE UserID = $userid ";
$conn->query($update);
}





if (empty($new_admin_email)) {
	$update= " UPDATE users SET UserName = '$new_admin_name' , Password = '$new_admin_password'  , phone_number = '$new_admin_phoneno' WHERE UserID = $userid ";
$conn->query($update);
}





if (empty($new_admin_password)) {
	$update= " UPDATE users SET UserName = '$new_admin_name'  , Email = '$new_admin_email' , phone_number = '$new_admin_phoneno' WHERE UserID = $userid ";
$conn->query($update);
}



if (empty($new_admin_name)) {
	$update= " UPDATE users SET  Password = '$new_admin_password' , Email = '$new_admin_email' , phone_number = '$new_admin_phoneno' WHERE UserID = $userid ";
$conn->query($update);
     
}



if (!empty($new_admin_name ) && !empty($new_admin_password)) {
	


$update= " UPDATE users SET UserName = '$new_admin_name' , Password = '$new_admin_password' , Email = '$new_admin_email' , phone_number = '$new_admin_phoneno' WHERE UserID = $userid ";
$conn->query($update);
}




header('Location: ../admin.php');
