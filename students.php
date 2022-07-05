<?php
require_once('logics/dbconnection.php');

$sqlQuery= mysqli_query($conn,"SELECT * FROM enrollment");
?>


<!DOCTYPE html>
<html>
    <?php require_once('includes/header.php')?>
<body>
	<!-- All our code. write here   -->

	<div class="header">
	<img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
	<a href="index.php" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
		<nav>
			<ul>
				<li>
					<a href="students.php">
						<span> <i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Enrolled on</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($fetchRecords=mysqli_fetch_array($sqlQuery)) { ?>
                                <tr>
                                    <td><?php echo $fetchRecords['no']?></td>
                                    <td><?php echo $fetchRecords['fullname']?></td>
                                    <td><?php echo $fetchRecords['phonenumber']?></td>
                                    <td><?php echo $fetchRecords['email']?></td>
                                    <td><?php echo $fetchRecords['gender']?></td>
                                    <td><?php echo $fetchRecords['course']?></td>
                                    <td><?php echo $fetchRecords['created_at']?></td>
                                    <td>
                                        <a href="">Edit</a>
                                        <a href="">View</a>
                                        <a href="">Delete</a>
                                    </td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
			
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>