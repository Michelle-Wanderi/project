<?php
session_start();

//database connection

require_once('connection.php');
//setting
if(isset($_POST['login']))
{
    //fetch form data
    $username= $_POST['username'];
    $password= $_POST['password'];
    $newPass= md5($password);


    //perform the sql query
    $sql = mysqli_query($conn,"SELECT * FROM account WHERE username='$username' and password='$newPass'");
    $fetch= mysqli_fetch_array($sql);

    if($fetch > 0 )
    {
        $_SESSION['login']= $username;
        header('location: index.php');
    }
    else{
        echo "error";
        
    }

}
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
         Zalego Admin| Register
     </div>
     <br>
     <br>
 
 <div class="main">
     <img src="zalego.jpg" alt="zalego"  class="rounded-circle">
 </div>
 <div class="container">
    <div class="card">
        <div class="row">
            <div class="col-lg-12 p-4">
                <label for="Username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="col-lg-12 p-4">
                <label for="Password" class="form-label">Password:</label>
                <input type="text" name="password" class="form-control">
            </div>    
    </div>
    <div class="row">
        <div class="col-lg-4 p-4">
            <button class="btn btn-primary p-2">Submit</button>
        </div>
    </div>
    <p>Have no account?Sign up <a href="">here</a></p>
</div>
    </div>
</body>
</html>