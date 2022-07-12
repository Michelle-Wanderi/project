<?php
$message ="";
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
//update user records
if( isset($_POST['updateRecords']))
{
    //fetch form  data
    $formName = $_POST['fullname'];
    $formNumber = $_POST['phonenumber'];
    $emailAddress = $_POST['email'];
    $formGender = $_POST['gender'];
    $formCourse = $_POST['course'];

//update user records
$updateQuery = mysqli_query($conn,
"UPDATE enrollment SET fullname = '$name', phonenumber='$phoneNumber', email='$emailAddress', gender='$formGender', course='$formCourse',
WHERE no='".$GET['id']."' ");

if($updateQuery)
{
    $message= "Data updated";
}
else{
    $message= "Records not updated"; 
}

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
                                <span><?php echo $message ?></span>
							</div>
	<div class="card-body">
	<div class="container">
    <div class="row">
       
            <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
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
                            <option value="<?php echo $gender ?> "><?php echo $gender ?> </option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                </div>
     
                <div class="row">
                    <div class="col-lg-12">
                        <label for="course"  class="form-label">What's your preferred course?</label>
                        <select class="form-control" name="course" >
                            <option value="<?php echo $course ?> "><?php echo $course ?> </option>
                            <option value="Web design">Web design</option>
                            <option value="Cybersecurity">Cybersecurity</option>
                            <option value="Data science">Data science</option>
                            <option value="Software development">Software development</option>
                        </select>
                    </div>
                </div>
                <br>
				<button class="btn btn-primary btn-sm" type="submit" name="updateRecords">Update records</button>
                </form>	
            </div>
						</div>
					</div>
                    </div>
				</div>
       


        <?php require_once('includes/scripts.php')?>
</body>
</html>