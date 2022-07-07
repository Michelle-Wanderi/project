<?php
require_once('logics/dbconnection.php');

$queryUser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");


while($fetchUser = mysqli_fetch_array($queryUser))
{
    $fullName = $fetchUser['fullname'];
	$email = $fetchUser['email'];
	$phoneNumber = $fetchUser['phonenumber'];
    $course = $fetchUser['course'];
    $gender = $fetchUser['gender'];

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
	<div class="card-body">
	<div class="container">
    <div class="row">
            <form action="enroll.php" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="Full Name" class="form-label">Full Name:</label>
                        <input type="text" name="fullname" class="form-control" value="<?php echo $fullName ?>" placeholder="Enter your full name">
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
                        <label for="gender"  class="form-label">What's your gender?</label>
                        <select name="gender" class="form-control">
                            <option>--Select your gender-- </option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>
                </div>
     
                <div class="row">
                    <div class="col-lg-12">
                        <label for="course"  class="form-label">What's your preferred course?</label>
                        <select class="form-control" name="course" value="<?php echo $course ?>" >
                            <option>--Select your course-- </option>
                            <option value="web design">Web design</option>
                            <option value="cybersecurity">Cybersecurity</option>
                            <option value="data science">Data science</option>
                            <option value="software development">Software development</option>
                        </select>
                    </div>
                </div>
                <br>
				<button class="btn btn-primary btn-sm">Update records</button>
        
            <!-- <form action="enroll.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6 col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Your email address">
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                        <button class="btn btn-primary" name="enrollButton">Subscribe</button>
                    </div>
                </div>
            </form> -->
        </div>
    </div>
    <hr>
<p style="font-size: 7px;">@ Company 2022</p>


							
							</div>
						</div>
					</div>
                    </div>
				</div>



        <?php require_once('includes/scripts.php')?>
</body>
</html>