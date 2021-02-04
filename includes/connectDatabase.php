<?php

// connect to database
function connect ($database="test3000"){
	$host = "localhost";
	$user = "root";
	$password = "";
	
	$db = new mysqli($host, $user, $password, $database);
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	 }
	return $db; 
}