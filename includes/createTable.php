<?php

require "consoleLog.php";

$db = new mysqli("localhost", "root", "", "test2000");
mysqli_select_db($db,"test2000");

$sql  = "CREATE TABLE IF NOT EXISTS allusers (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uidUsers varchar(100) NOT NULL,
    emailUsers varchar(100) NOT NULL,
    pwdUsers varchar(100) NOT NULL
    )";

if ($db->query($sql)) {
    debug_to_console("table created");
    echo "<p><b>Table created!</b></p>";
    echo "<b>Sql:</b><pre>$sql</pre>";
} else {
    echo "<p>Error: something went wrong</p>";
}
