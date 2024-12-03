<?php
include('./admin/connect.php');

$sqlSelect = "SELECT * FROM customer";
$result = mysqli_query($conn, $sqlSelect);
while ($data = mysqli_fetch_array($result)) {
    $Customer_ID = $data['Customer_ID'];
}
$Customer_ID = $Customer_ID + 1;
$Last_login_time = 3.00;

if (isset($_POST["create"])) {
    $Customer_name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $sqlInsert = "INSERT INTO customer(Customer_ID, Customer_name , Email, Password, Last_login_time) VALUES ($Customer_ID,'$Customer_name',  '$Email', '$Password', $Last_login_time)";
    if (mysqli_query($conn, $sqlInsert)) {
        echo "Admin has been inserted successfully";
    } else {
        echo "Failed!";
    }
}
