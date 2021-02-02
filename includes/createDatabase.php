<?php

$db = new mysqli("localhost", "root", "");
$db->query("CREATE DATABASE test3000;");

require "createTable.php";

?>