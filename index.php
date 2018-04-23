<?php

// Create and include a configuration file with the database connection
include('config.php');

// Get search term from URL using the get function

$usermech = new Mech($_SESSION["userId"], $database);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Books</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
    <?php include("nav.php"); ?>
	<div class="page">
		<h1>Welcome!</h1>
		
		<p>Currently logged in as: <?php echo $userMain['username'] ?></p><br />
        
        <p><?php echo $usermech->getName(); ?>, is ready with a power of <?php echo (rand(1,100)); ?>.</p>
        
        <p>For <?php echo $_SESSION["faction"]; ?>!</p>
		
		<!-- A link to the logout.php file -->
		<p>
			<a href="logout.php">Log Out</a>
		</p>
	</div>
</body>
</html>