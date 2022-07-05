<?php
$msg='';
require_once('processRegister.php')


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <div class="header">
        Zalego Admin Register
    </div>
    <br>
    <br>

<div class="main">
    <img src="zalego.jpg" alt="zalego"  class="rounded-circle">
    <span><?php echo $msg ?></span>
</div>
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-lg-12 p-4">
                <label for="Username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="col-lg-12 p-4" >
                <label for="Email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="col-lg-12 p-4">
                <label for="Password" class="form-label">Password:</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="col-lg-12 p-4">
                <label for="Confirm Password" class="form-label">Confirm Password:</label>
                <input type="text" name="confirm password" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 p-4">
                <button class="btn btn-primary p-2" name="signUp">Submit</button>
            </div>
        </div>
        <p>Have an account? Sign in <a href="">here</a></p>
    </div>
</div>



<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>