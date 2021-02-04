<?php

$db = new mysqli("localhost", "root", "", "test3000");
mysqli_select_db($db,"test3000");

// Create Table
$sql  = "CREATE TABLE IF NOT EXISTS allusers (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uidUsers varchar(100) NOT NULL,
    emailUsers varchar(100) NOT NULL,
    pwdUsers varchar(100) NOT NULL
    )";
