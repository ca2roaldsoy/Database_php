<?php

if (isset($_POST["login-submit"])) {

    $mailuid = $_POST["mailuid"];
    $password = $_POST["pwd"];

    require_once "connectDatabase.php";
    require_once "consoleLog.php";
    include "../user.php";

    $db = connect();

    if (empty($mailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyinputs");
        exit();
    }
    
    $stmt = $db->prepare("SELECT id, uidUsers, emailUsers, pwdUsers FROM allusers WHERE emailUsers=?;");
    $stmt->bind_param("s", $mailuid);

    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($userId, $userName, $userMail, $userPwd);

    if($stmt->num_rows() == 1) {
        $stmt->fetch();
        if(password_verify($password, $userPwd)) {
            
            $_SESSION["userId"] = $userMail;
            $_SESSION["pass"] = $userPwd;

            user($userId, $userName, $userMail, $password);
            exit();
        }
        else {
            $_SESSION = [];
            session_destroy();
            header("Location: ../signup.php?error=invalidpassword");
            exit();
        }
    }
    else {
        $_SESSION = [];
        session_destroy();
        header("Location: ../signup.php?error=nouserfound");
        exit();
    }
    header("Location: ../signup.php?error=loginfailed");
    exit();
    echo "login failed";
}
else {

    header("Location: ../index.php");
    exit();
}