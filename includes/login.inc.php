<?php

if (isset($_POST["login-submit"])) {

    $mailuid = $_POST["mailuid"];
    $password = $_POST["pwd"];

    require_once "connectDatabase.php";
    require_once "consoleLog.php";

    $db = connect();

    if (empty($mailuid) || empty($password)) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }
    
    $stmt = $db->prepare("SELECT id, emailUsers, pwdUsers FROM allusers WHERE emailUsers=?;");
    $stmt->bind_param("s", $mailuid);

    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($userId, $userMail, $userPwd);

    if($stmt->num_rows() == 1) {
        $stmt->fetch();
        if(password_verify($password, $userPwd)) {
            session_start();
            header("Location: ../user.php?login=success");
            $_SESSION["userId"] = $userMail;
            $_SESSION["pass"] = $userPwd;
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

    header("Location: ../signup.php");
    exit();
}