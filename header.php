<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
<?php
    if(isset($_SESSION["userId"])) {
       echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
    }
    else {
        echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Email...">        
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Sign Up</a>';
    }
?>
</header>