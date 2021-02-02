<?php

// connect to database
function connect ($database="test3000"){
	$host = "localhost";
	$user = "root";
	$password = "";
	
	$db = new mysqli($host, $user, $password, $database);
	// errors?
	return $db; 
}