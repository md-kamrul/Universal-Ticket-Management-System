<?php

$dbName = "universal_ticket_management_system";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong");
}

//mysqli_connect();

?>