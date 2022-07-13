<?php
//database connection
require_once('logics/dbconnection.php');

$sqlFetchStudent = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
{
$fullName = $fetchStudentRecords['fullname'];
$email = $fetchStudentRecords['email'];
$phoneNumber = $fetchStudentRecords['phonenumber'];
$gender =  $fetchStudentRecords['gender'];
$course =  $fetchStudentRecords['course'];


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
                            <div class="col-lg-6">
                                <div class="card">
                               <div class="card-header bg-dark text-white text-center">
                                        <h4 class="card-title">Personal info</h4>
                                        </div>
                                        <div class="card-body">
                                        <li class="list-group-item">Full Name:<span class="float-right badge badge-primary"><?php echo $fullName ?></span></li>
                                        <li class="list-group-item">Email:<span class="float-right badge badge-secondary"><?php echo $email ?> </span></li>
                                        <li class="list-group-item">Phone Number:<span class="float-right badge badge-secondary"><?php echo $phoneNumber ?></span></li>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                               <div class="card-header bg-dark text-white text-center">
                                        <h4 class="card-title">Other information</h4>
                                        </div>
                                        <div class="card-body">
                                        <li class="list-group-item">Gender:<span class="float-right badge badge-primary"><?php echo $gender ?></span></li>
                                        <li class="list-group-item">Course:<span class="float-right badge badge-secondary"><?php echo $course ?> </span></li>
                                        
                                    </div>
                                </div>
                        </div>

                        
					</div>
	
</body>
</html>