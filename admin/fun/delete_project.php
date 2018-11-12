<?php


include '../connect.php';

$projectid = $_GET['id'];







$del = "DELETE FROM projects WHERE Project_id = '$projectid' ";

$conn->query($del);

header('Location: ../projects.php');

?>