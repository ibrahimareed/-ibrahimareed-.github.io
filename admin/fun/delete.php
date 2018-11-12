<?php


include '../connect.php';

$userid = $_GET['id'];




$del = "DELETE FROM users WHERE UserID = $userid ";

$conn->query($del);

header('Location: ../admin.php');

?>