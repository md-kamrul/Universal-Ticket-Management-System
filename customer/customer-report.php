<!DOCTYPE html>
<html>

<head>
    <title>Report - UTMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="text-white h-screen">
    <div class="w-full h-full bg-[#18191a] pb-10">
        <!-- navbar -->
        <div class="navbar bg-[#242526] shadow-2xl">
            <div class="flex-1">
                <a href="./customer-home.php" class="btn btn-ghost text-xl">UTMS</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal pl-1 pr-2 flex flex-row items-center">
                    <li><a href="./customer-home.php">Home</a></li>
                    <li><a href="./customer-buy-ticket.php">Buy Ticket</a></li>
                    <li><a href="./customer-discount-ticket.php" class="indicator border border-[#1bd1a4]">
                            <span class="indicator-item badge bg-[#1bd1a4] text-white">new</span>
                            Discount Ticket
                        </a></li>
                    <li><a href="./cutomer-ticket-history.php">Ticket History</a></li>
                    <li><a href="./customer-report.php" class="text-[#1bd1a4]">Report</a></li>
                    <li><a href="./customer-history.php">Customer History</a></li>
                    <li><a href="../login.php" class="text-[#FF0000] font-bold">LogOut</a> </li>
                    <li class="w-10 rounded-full">
                        <a href="./customer-profile.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person-circle w-6 h-6"
                                viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" fill="white" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                                    fill="white" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- body -->
        <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20 h-full">

            <h1 class="font-bold text-3xl mb-10">Report Your Complain</h1>

            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form class="card-body" action='customer-report.php' method='post'>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Report Id</span>
                        </label>
                        <input name='report_id' type="text" placeholder="Report ID" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Rating</span>
                        </label>
                        <input name='rating' type="text" placeholder="Rating" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Text</span>
                        </label>
                        <input name='text' type="text" placeholder="Text" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Date</span>
                        </label>
                        <input name='date' type="text" placeholder="Date" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Customer Id</span>
                        </label>
                        <input name='customer_id' type="text" placeholder="Customer Id" class="input input-bordered" required />
                    </div>
                    <div class="form-control mt-6">
                        <input type="submit" name="create" value="Report" class="btn w-[80%] mx-auto bg-[#1bd1a4] text-white">
                    </div>
                </form>
            </div>
            <?php
            include('../admin/connect.php');
            if (isset($_POST["create"])) {
                $report_id = mysqli_real_escape_string($conn, $_POST["report_id"]);
                $rating = mysqli_real_escape_string($conn, $_POST["rating"]);
                $text = mysqli_real_escape_string($conn, $_POST["text"]);
                $date = mysqli_real_escape_string($conn, $_POST["date"]);
                $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

                $sqlInsert = "INSERT INTO report(report_id,rating,text,date,customer_id) VALUES ($report_id,$rating,'$text', '$date',$customer_id)";
                echo $sqlInsert;
                if (mysqli_query($conn, $sqlInsert)) {
                    //  die("Ok amar vul chilo na");
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
            ?>

        </div>
</body>

</html>