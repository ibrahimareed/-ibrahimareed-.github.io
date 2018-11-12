<?php include 'fun/connect.php';

$getdata = "SELECT * FROM site_info";
$fetchdata = $conn->query($getdata);
$site_row= $fetchdata->fetch_assoc();

    $id       = $site_row['site_info_id'];
    $favicon      = $site_row['fav_icon'];
    $sitetitle    = $site_row['site_title'];
    $sitelogo     = $site_row['site_logo']; 
    $logotitle    = $site_row['logo_title'];
    $siteheader   = $site_row['site_header'];
    $facebook     = $site_row['facebook_account'];
    $twitter      = $site_row['twitter_account'];
    $linkedin     = $site_row['linkedin_account'];
    $insta        = $site_row['insta_account'];
    $email        = $site_row['email'];
    $telephone      = $site_row['telephone'];
    $address      = $site_row['address'];

?>


<!doctype html>
<html lang="en">
    <head>
      <title><?= $sitetitle ;?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="icon" type="image/png" href="admin/fun/uploads/<?= $favicon ;?>" />

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">

      <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

      <!-- Theme Style -->
      <link rel="stylesheet" href="css/stylertl.css">
    </head>