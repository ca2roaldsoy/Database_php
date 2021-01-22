<?php 
    require "header.php";
?>

    <main>
      <h1>Sign Up</h1>
      
            <?php
                // error messages
                if(isset($_GET["error"])) {

                    if($_GET["error"] == "emptyfields") {
                        echo "<p> Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "invalidmailuid") {
                        echo "<p>invalid username and e-mail</p>";
                    }
                    else if($_GET["error"] == "invalidemail") {
                        echo "<p>invalid email</p>";
                    }
                    else if($_GET["error"] == "passwordcheck") {
                        echo "<p>password do not match</p>";
                    }
                    else if($_GET["error"] == "usertaken") {
                        echo "<p>username already taken</p>";
                    }
                }
            ?>

        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="text" name="mail" placeholder="mail">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwd-repeat" placeholder="repeat password">
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
    </main>

<?php 
    require "footer.php";
?>