<?php 

include "./includes/consoleLog.php";
include "jqscript.js";

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];

    print_r($action);
}