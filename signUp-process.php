<?php

include('connect.php');

if (isset($_POST["create"])) {
    $fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $sqlInsert = "INSERT INTO Admin (adminPassword , adminName , adminProfilePic, adminRole, adminEmail) VALUES ($password,$fullName, 'pic', 'admin', $email)";
    if(mysqli_query($conn,$sqlInsert)){
        die("good");
    }else{
        die("Something went wrong");
        // echo "Error: " . mysqli_error($conn);
    }
}
?>