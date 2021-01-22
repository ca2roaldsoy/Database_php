<?php

$db = new mysqli("localhost", "root", "");
$db->query("CREATE DATABASE test2000;");

require "createTable.php";

?>