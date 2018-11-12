<?php 

session_start();
include 'connect.php';

if (isset($_SESSION['user'])) {
	?>
	

<?php include'includes_des/header.php';?>


<body>





	<?php include 'includes_des/navbar.php' ?>






	<?php include 'includes_des/sidebar.php' ?>




<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> site info</a></div>
  </div>
<!--End-breadcrumbs-->
<div class="container-fluid">
<?php 
		if (!isset($_GET['do'])) {
			include 'includes/edit_site_info.php';
			
		}?>

		<?php 
				if (isset($_GET['do']) and $_GET['do']=='add') {



					include'includes/add_new_admin.php';
				}


		?>

		<?php 
				if (isset($_GET['do']) and $_GET['do']=='edit') {



					include'includes/admin_edit.php';
				}


		?>


		<?php 
				if (isset($_GET['do']) and $_GET['do']=='delete') {



					include'fun/delete.php';
				}


		?>
	</div>


</div>











	<?php include'includes_des/footer.php';



}else{
	header('Location:http:login.php');

exit();


}