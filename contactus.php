<?php
$fetchStudentRecords = "";
//database connection
require_once('logics/dbconnection.php');
if($conn)
// {
//     echo "Connection successful";
// }
// else
// {
//     echo "Connection failed";
// }

$sqlQuery= mysqli_query($conn,"SELECT * FROM contactus");


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Bootstrap Admin</title>
    </head>

<body>
<?php  require_once('includes/navbar.php')?>
	<div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
	</div>
    <div class="main-content">
    <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Messages</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style: 12px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                        
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fetchStudentRecords=mysqli_fetch_array($sqlQuery)) { ?>
                                <tr>
                                    <td><?php echo $fetchStudentRecords['no']?></td>
                                    <td><?php echo $fetchStudentRecords['firstname']?></td>
                                    <td><?php echo $fetchStudentRecords['lastname']?></td>
                                    <td><?php echo $fetchStudentRecords['phonenumber']?></td>
                                    <td><?php echo $fetchStudentRecords['email']?></td>
                                    <td><?php echo $fetchStudentRecords['message']?></td>
                                    <td>
                                        <a href="edit-contactus.php?id=<?php echo $fetchStudentRecords['firstname'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="view-contactus.php?id=<?php echo $fetchStudentRecords['firstname'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="delete-contactus.php?id=<?php echo $fetchStudentRecords['firstname'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>

                                    <tr>
                                    <?php } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
			
	