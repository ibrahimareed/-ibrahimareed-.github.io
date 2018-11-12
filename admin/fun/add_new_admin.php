<?php

include '../connect.php';

$newadminname = $_POST['admin_name'];
$newadminpassword = $_POST['password'];
$newadminemail = $_POST['email'];
$newadminphoneno = $_POST['phone_number'];



$dbinsertquery = "INSERT INTO users(UserName, Password, Email, phone_number) VALUES ('$newadminname' , '$newadminpassword', '$newadminemail', '$newadminphoneno' )";
$conn->query($dbinsertquery);
header('Location: ../admin.php');

?>