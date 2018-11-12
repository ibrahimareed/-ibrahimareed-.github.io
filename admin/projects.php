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
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> PROJECTS</a></div>
  </div>
<!--End-breadcrumbs-->




<div class="container-fluid">
<?php 
		if (!isset($_GET['do'])) {
			include 'includes/project_view.php';
			
		}?>

		<?php 
				if (isset($_GET['do']) and $_GET['do']=='add') {



					include'includes/add_new_project.php';
				}


		?>
		<?php 
				if (isset($_GET['do']) and $_GET['do']=='delete') {



					include'fun/delete_project.php';
				}


		?>
		<?php 
				if (isset($_GET['do']) and $_GET['do']=='edit') {



					include'includes/edit_project.php';
				}


		?>
	</div>



</div>
<!--end-main-container-part-->






	<?php include'includes_des/footer.php';



}else{
	header('Location:login.php');

exit();


}