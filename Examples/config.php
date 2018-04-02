<?php

// Connecting to the MySQL database
$user = 'root';
$password = '';

$database = new PDO('mysql:host=localhost;dbname=books', $user, $password);

function my_autoloader($class) {
    include 'classes/class.' . $class . '.php';
}

spl_autoload_register('my_autoloader');