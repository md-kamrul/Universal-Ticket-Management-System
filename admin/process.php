<?php
include('connect.php');
if (isset($_POST["create"])) {
    $ticket_id = mysqli_real_escape_string($conn, $_POST["ticket_id"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $priority = mysqli_real_escape_string($conn, $_POST["priority"]);
    $total_amount_of_ticket = mysqli_real_escape_string($conn, $_POST['total_amount_of_ticket']);
    $ticket_price = mysqli_real_escape_string($conn, $_POST['ticket_price']);
    $ticket_type = mysqli_real_escape_string($conn, $_POST["ticket_type"]);
    $sqlInsert = "INSERT INTO tickets(ticket_id, description,status,priority,total_amount_of_ticket,ticket_price,ticket_type) VALUES ($ticket_id,'$description','$status', '$priority',$total_amount_of_ticket,$ticket_price,'$ticket_type')";
    if (mysqli_query($conn, $sqlInsert)) {
        die("Ok amar vul chilo na");
    } else {
        die("Something went wrong");
    }
}
