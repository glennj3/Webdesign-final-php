<?php

// Create and include a configuration file with the database connection
include('config.php');

// Get a list of books from the database with the isbn passed in the URL
$sql = file_get_contents('sql/getMechs.sql');
$statement = $database->prepare($sql);
$statement->execute();
$mechlist = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $mechname = $_POST["mechname"];
    $sql = file_get_contents('sql/getMechByName.sql');
    $params = array(
	   'mechname' => $mechname
    );
    $statement = $database->prepare($sql);
    $statement->execute($params);
    $mechlist = $statement->fetchAll(PDO::FETCH_ASSOC);
}


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Book</title>
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
		<h1>THE LIST: </h1>
		
		<ul>
			<?php foreach($mechlist as $roboto) : ?>
                <li>Creator: <?php echo $roboto['username'] ?> ---  Mechname: <?php echo $roboto['mechname'] ?></li>
			<?php endforeach; ?>
		</ul>
        
        <form method="post">
			<input type="text" name="mechname" placeholder="Search mechname" />
			<input type="submit" />
		</form>
        
        <a href="index.php">Homepage</a><br/>
		
	</div>
</body>
</html>