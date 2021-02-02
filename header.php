<?php
    session_start();
    require "./includes/createDatabase.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">
              <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body class="container">

<header>
    <h1>Log in</h1>
    <?php

        if(isset($_GET["error"])) {
        
            if($_GET["error"] == "emptyinputs") {
                echo "<p class='error'> Fill in all fields</p>";
            }
            else if($_GET["error"] == "invalidpassword") {
                echo "<p class='error'>Wrong password</p>";
            }
            else if($_GET["error"] == "nouserfound") {
                echo "<p class='error'>Sorry, no user found</p>";
            }

        }
            echo '<form action="includes/login.inc.php" method="post" class="login">
                    <input type="text" name="mailuid" placeholder="Email...">        
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>';
    ?>
</header>