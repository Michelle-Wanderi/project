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
if(isset($_POST['submitButton']))
{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    
$insertData = mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course) VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    if($insertData)
{
    echo "Data submitted successfully";
    header('location:students.php');
}
else{
    echo "Error occurred".mysqli-error($conn);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalego Academy</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/fonts/fontawesome-webfont.svg">
</head>
<body>
    <!-- All our code. write here   -->

	<div class="header">
	<img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
	<a href="#" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
	</div>
    <nav  class="navbar navbar-expand-lg bg-light fixed-top ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav><br><br>
    <main class="p-5 bg-light grey text-black mb-4">
        <h1>Join Us</h1>
    </main>
    <div class="container-fluid">
        <div class="row">
                <form action="add-enrollment.php" method="POST">
                    <div class="col-lg-6">
                        <label for="Full Name" class="form-label">Full Name:</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="col-lg-6">
                        <label for="Phone Number" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" name="phonenumber" placeholder="+2547....">
                    </div>
                    <div class="col-lg-6">
                        <label for="Email address" class="form-label">Email Address:</label>
                        <input type="text" name="email" class="form-control" placeholder="Please enter your email">
                    </div>
                    <div class="col-lg-6">
                            <label for="gender"  class="form-label">What's your gender?</label>
                            <select class="form-select" name="gender" aria-label="Defaul select example">
                            <option selected="--Select your gender--"></option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                            <label for="course"  class="form-label">What's your preferred course?</label>
                            <select class="form-select" aria-label="Defaul select example" name="course">
                            <option selected="--Select your course--"></option>
                            <option value="web design">Web design</option>
                            <option value="cybersecurity">Cybersecurity</option>
                            <option value="data science">Data science</option>
                            <option value="software development">Software development</option>
                        </select>
                    </div>
                 </div>
                 <button class="btn btn-primary" name="submitButton">Submit application</button>
                </form>
               

                <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="font-awesome/fonts/FontAwesome.otf">
                    
</body>