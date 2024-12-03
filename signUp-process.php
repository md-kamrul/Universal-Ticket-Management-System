<!DOCTYPE html>
<html>

<head>
    <title>SignUp - UTMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

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
        echo '<div role="alert" class="alert alert-success">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    class="h-6 w-6 shrink-0 stroke-current"
    fill="none"
    viewBox="0 0 24 24">
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  <span>Your account has been successfully created!</span>
</div>

<div>
    <a href="./customer/customer-profile.php">
        <button class="btn mx-auto bg-[#1bd1a4] text-white>Go Profile</button>
    </a>
</div>';
    } else {
        echo '<div role="alert" class="alert alert-error">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    class="h-6 w-6 shrink-0 stroke-current"
    fill="none"
    viewBox="0 0 24 24">
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  <span>Error! Someting went wrong</span>
</div>

<div>
    <a href="./register.php">
        <button class="btn mx-auto bg-[#1bd1a4] text-white>Go Back</button>
    </a>
</div>';
    }
}
?>