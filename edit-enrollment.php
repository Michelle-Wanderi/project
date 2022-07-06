<?php
require_once('logics/dbconnection.php');

$queryUser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");


while($fetchUser = mysqli_fetch_array($queryUser))
{
    $fullName = $fetchUser['fullname'];

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->

	<div class="header">
	<img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
	
	<a href="#" class="navbar-trigger"><span></span></a>

	<!-- logout starts here  -->
	<span class="pull-right" style="padding:10px 30px; text-decoration:none">
	<a href="#"><i class="fa fa-sign-out fa-2x"></i></a>
	</span>
	<!-- logout ends here -->

	

	</div>
	<div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
                            <div class="card">
							<div class="card-header bg-dark text-white text-center">
                                <h4>Edit Student: <?php echo $fullName ?></h4> 
								
							</div>
						</div>
					</div>
                    </div>
				</div>



        <?php require_once('includes/scripts.php')?>
</body>
</html>