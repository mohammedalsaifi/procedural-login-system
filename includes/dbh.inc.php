<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login-system";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die('Connection Failed: ') . mysqli_connect_errno();
}
