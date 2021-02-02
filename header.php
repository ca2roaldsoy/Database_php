<?php
    session_start();
    require "./includes/createDatabase.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
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