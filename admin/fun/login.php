
<?php
session_start();
include("../links.php");



?>


<?php


if ($_SERVER['REQUEST_METHOD']=="POST") {

$username=$_POST["user"];
$password=$_POST['pass'];
$hashedpassword=md5 ($password);

    $sql="SELECT Username , Password FROM users WHERE Username='$username' AND Password='$hashedpassword' ";
    $result= $conn->query($sql);
    $count_row= $result->num_rows;
    if ($count_row > 0) {
    $_SESSION['user']= $username;
    header('Location:../dashboard.php');
    exit();
}else{header('Location:../login.php');}

}

?>