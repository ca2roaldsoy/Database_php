<?php 
    require "header.php";
?>

    <main>
      <h1>Sign Up</h1>
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