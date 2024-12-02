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
        // die("Ok amar vul chilo na");
        echo '
        
        <!-- success pop up fuction -->
        <section id="successPopUp">
            <section class="success w-full h-screen flex flex-col justify-center items-center gap-8 font_inter px-5">
                <img src="images/success.png" alt="" class="w-24">
                <h1 class="text-[#27AE60] font-bold text-[24px] text-xl">
                    SUCCESS
                </h1>
                <p class="text-center text-[#4A4A4A]">
                    <span class="font-semibold">
                        Thank you for Booking Our Bus Seats.
                        <br>
                        We are working hard to find the best service and deals for you.
                    </span>
                    <br>
                    <br>
                    <span class="font-medium">
                        Shortly you will find a confirmation in your email.
                    </span>
                </p>
                <button id="continue"
                    class="btn w-48 rounded-3xl bg-[#27AE60] hover:bg-[#27AE60] text-white font-extrabold">
                    Continue
                </button>
            </section>
        </section>

        ';
    } else {
        die("Something went wrong");
    }
}
