<?php

// Connecting to the MySQL database
$username = "glennj3";
$password = "juzUC8Ev";

$database = new PDO("mysql:host=localhost; dbname=db_spring18_glennj3", $username, $password);

function my_autoloader($class){
    include "classes/class.".$class.".php";
}

spl_autoload_register("my_autoloader");
// Start the session
session_start();

include("functions.php");

$current_url = basename($_SERVER['REQUEST_URI']);

// if userID is not set in the session and current URL not login.php redirect to login page

if($current_url != "register.php"){
    if (!isset($_SESSION["userId"]) && $current_url !='login.php') {
        header("Location: login.php");
    }



    // Else if session key userID is set get $userMain from the database
    elseif (isset($_SESSION["userId"])) {
	   $sql = file_get_contents('sql/getUser.sql');
	   $params = array(
		  'userId' => $_SESSION["userId"]
	   );
	   $statement = $database->prepare($sql);
	   $statement->execute($params);
	   $userData = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	   $userMain = $userData[0];
    
        $sql = file_get_contents('sql/getFaction.sql');
	   $params = array(
		  'userId' => $_SESSION["userId"]
	   );
	   $statement = $database->prepare($sql);
	   $statement->execute($params);
       $userFaction = $statement->fetchAll(PDO::FETCH_ASSOC);
        $userF = $userFaction[0];
    
        $_SESSION["faction"] = $userF["factionName"];
    }

}
