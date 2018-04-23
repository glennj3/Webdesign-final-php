<?php

// Create and include a configuration file with the database connection
include('config.php');
$_SESSION["inserted"] = "no";

// If form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $_SESSION["inserted"] = "yes";
	$mechid = (rand(50,1000));
	$mechname = $_POST['mechname'];
	$chassis = $_POST['chassis'];
	$weight = $_POST['weight'];
	$weapon = $_POST['weapon'];
	
	
		// Insert book
		$sql = file_get_contents('sql/insertMech.sql');
		$params = array(
			'mechid' => $mechid,
			'mechname' => $mechname,
			'chassis' => $chassis,
			'weight' => $weight,
            'weapon' => $weapon,
            'creatorid' => $_SESSION['userId']
		);
	
		$statement = $database->prepare($sql);
		$statement->execute($params);
		  
	}
	

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Manage Book</title>
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
        <?php if($_SESSION["inserted"] == "yes") : ?>
            <h1>INSERTED SUCCESSFULLY</h1>
            <?php $_SESSION["inserted"] = "no"?>
        <?php endif; ?>
		  <h2>Create a Mech</h2>
		  <form action="" method="POST">
            <div class="form-element">
				<label>Name:</label>
					<input type="text" name="mechname" class="textbox" required />	
			</div>
			<div class="form-element">
				<label>Chassis:</label>
						<input class="radio" type="radio" name="chassis" value="Humanoid" checked /><span class="radio-label" >Humanoid</span><br />
                        <input class="radio" type="radio" name="chassis" value="Wheeled" /><span class="radio-label">Wheeled</span><br />
                        <input class="radio" type="radio" name="chassis" value="Walker" /><span class="radio-label">Walker</span><br />
			</div>
			<div class="form-element">
				<label>Weight</label>
				<input class="radio" type="radio" name="weight" value="Heavy" checked /><span class="radio-label" >Heavy</span><br />
                        <input class="radio" type="radio" name="weight" value="Medium" /><span class="radio-label">Medium</span><br />
                        <input class="radio" type="radio" name="weight" value="Light" /><span class="radio-label">Light</span><br />
			</div>
			<div class="form-element">
				<label>Weapon</label>
				        <input class="radio" type="radio" name="weapon" value="fists" checked /><span class="radio-label">Fists</span><br />
                        <input class="radio" type="radio" name="weapon" value="lasers" /><span class="radio-label">Laser</span><br />
                        <input class="radio" type="radio" name="weapon" value="pile" /><span class="radio-label">Piles</span><br />
			</div>
			<div class="form-element">
				<input type="submit" class="button" />&nbsp;
				<input type="reset" class="button" />
			</div>
		</form>
	</div>
</body>
</html>