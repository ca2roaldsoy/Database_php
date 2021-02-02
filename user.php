<?php

function user($userId, $userName, $userMail, $password)
{
    echo "CREDENTIALS: <br /><br />";
    echo "id: $userId <br />";
    echo "name: $userName <br />";
    echo "mail: $userMail <br />";
    echo "password: $password <br />";

    echo '<form action="../index.php" method="POST">
    <button type="submit" name="logout-submit">Logout</button>
    </form>';
}