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
    

<div class="header-text-white">
    <img src="zalego.jpg" alt="" height="50" width="50" class="rounded-circle">
    <span><?php echo $_SESSION['login'] ?></span>

    <!-- logout starts here -->
    <span class="pull-right" style="padding:10px 30px;text-decoration:none">
    <a href="logout.php"></a>
</span>



</div>
</body>

