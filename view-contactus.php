<?php
//database connection
require_once('logics/dbconnection.php');
if($conn)
{
    echo "Connection successful";
}
else
{
    echo "Connection failed";
}

$sqlQuery = mysqli_query($conn, "SELECT * FROM contactus");
while($fetchStudentRecords = mysqli_fetch_array($sqlQuery))
{
    $no = $fetchStudentRecords['no'];
    $firstName = $fetchStudentRecords['firstname'];
    $lastName = $fetchStudentRecords['lastname'];
    $phoneNumber = $fetchStudentRecords['phonenumber'];
     $email= $fetchStudentRecords['email'];
     $message= $fetchStudentRecords['message'];

}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
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
                                        <h4 class="card-title">Your information</h4>
                                        </div>
                                        <div class="card-body">
                                        <li class="list-group-item">No:<span class="float-right badge badge-primary"><?php echo $no ?></span></li> 
                                        <li class="list-group-item">First Name:<span class="float-right badge badge-primary"><?php echo $firstName ?></span></li>
                                        <li class="list-group-item">Last Name:<span class="float-right badge badge-secondary"><?php echo $lastName ?> </span></li>
                                        <li class="list-group-item">Phone Number:<span class="float-right badge badge-secondary"><?php echo $phoneNumber ?></span></li>
                                        <li class="list-group-item">Email:<span class="float-right badge badge-secondary"><?php echo $email ?></span></li>
                                        <li class="list-group-item">Message:<span class="float-right badge badge-secondary"><?php echo $message ?></span></li>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
	
</body>
</html>