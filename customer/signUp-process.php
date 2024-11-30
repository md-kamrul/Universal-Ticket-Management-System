<?php
include('../admin/connect.php');

if(isset($_POST["create"])){
$fullName=$_POST['fullName'];
$email=$_POST['email'];
$password=$_POST['password'];
$insert_query=  "INSERT INTO Admin (adminPassword , adminName , adminProfilePic, adminRole, adminEmail) VALUES ('$password','$fullName', 'pic', 'admin', '$email')";
$result= mysqli_query($conn, $insert_query);
if($result){
echo "Admin has been inserted successfully";
}
else{
echo "Failed!";
}
}
?> 