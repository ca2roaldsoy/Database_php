<?php

if(isset($_POST["signup-submit"])) {

    include "connectDatabase.php";

    $db = connect();

    $username = $_POST["uid"];
    $email = $_POST["mail"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    // validation
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if (!preg_match( "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
        header("Location: ../signup.php?error=invalidpassword&uid=".$username."&mail=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {

        $sql = "SELECT uidUsers FROM allusers WHERE uidUsers=?";

        $statement = $db->prepare($sql);
        $statement->bind_param("s", $username);
        $statement->execute();
     
            $statement->store_result();
            $statement->bind_result($username);
            
             //check if email already exists
            $resultCheck = $statement->num_rows();
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }

            else {

                // insert to database
                $sql = "INSERT INTO allusers(id, uidUsers, emailUsers, pwdUsers) VALUES(?, ?, ?, ?)";
        
                $statement = $db->prepare($sql);
        
                if (!$db->prepare($sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $statement->fetch();

                    // make password "unreadble"
                    $hashPwd = password_hash($password, PASSWORD_DEFAULT);

                    $statement = $db->prepare($sql);
                    $statement->bind_param("isss", $id, $username, $email, $hashPwd);
                    $statement->execute();
                    echo "<p><b>New user added</b></p>";
                    echo "<b>Sql:</b><pre>$sql</pre>";
                }
            }
    }
}

else {
    header("Location: ../signup.php");
    exit();
}