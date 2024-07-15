<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyLogin($username, $pwd) !== false) {
        header("Location: ../login.php?error=emptyLogin");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("Location: ../index.php");
    exit();
}
