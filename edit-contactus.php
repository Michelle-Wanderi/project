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
                                <h4>Messages:</h4> 
                                <span><?php echo $message ?></span>
							</div>
	<div class="card-body">
	<div class="container">
    <div class="row">
       
            <form action="edit-enrollment.php?id=<?php echo $firstName ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="First Name" class="form-label">First Name:</label>
                        <input type="text" name="firstname" class="form-control" value="<?php echo $firstName ?>" placeholder="Enter your full name">
                    </div>
                    <div class="col-lg-12">
                        <label for="Last Name" class="form-label">Last Name:</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $lastName ?>" placeholder="Enter your full name">
                    </div>
                    <div class="col-lg-12">
                        <label for="Phone Number" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" name="phonenumber" value="<?php echo $phoneNumber ?>" placeholder="+2547....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="Email address" class="form-label">Email Address:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Please enter your email">
                    </div>
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Message:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Please enter your email">
                    </div>
</div>
</form>