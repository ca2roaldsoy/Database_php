<main>
    <?php
     
        if(!isset($_SESSION["userId"])) {
            echo "<p>You are logged out!</p>";
        }
        else {
            echo "<p>You are logged inn!</p>";
        }

    ?>
    
</main>